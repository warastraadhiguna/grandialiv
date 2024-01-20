<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Blog",
            'blogs' => Blog::get(),
            'content' => "administrator/blog/index"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'title' => "Tambah Blog",
            'content' => "administrator/blog/add"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse/Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'contain' => 'required',
            'image_url' => 'required|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required',
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($request->input('title') . Str::random(40), '-');

        try {

            if($request->hasFile('image_url')) {
                $data['image_url'] = $request->file("image_url")->store('img', 'public');
            } else {
                $data['image_url'] = null;
            }

            Blog::create($data);
            Alert::success('Sukses', 'Data berhasil ditambah.');

            return redirect("/admin/blog");

        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $data = [
            'title' => "Ubah Blog",
            'blog' => Blog::find($id),
            'content' => "administrator/blog/add"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
    * @return \Illuminate\Http\RedirectResponse/Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $data = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'contain' => 'required',
            'image_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($request->input('title') . Str::random(40), '-');

        if($request->hasFile('image_url')) {
            if($blog->image_url != null) {
                Storage::delete($blog->image_url);
            }

            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] =  $blog->image_url;
        }

        $blog->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/blog");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
    * @return \Illuminate\Http\RedirectResponse/Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::find($id);

            if($blog->image_url) {
                Storage::delete($blog->image_url);
            }

            $blog->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/blog");
        }

    }
}