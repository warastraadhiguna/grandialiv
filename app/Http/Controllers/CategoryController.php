<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Category",
            'categories' => Category::orderBy('index')->get(),
            'content' => "administrator/category/index"
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
            'title' => "Tambah Category",
            'content' => "administrator/category/add"
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
            'image_url' => 'required|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required|numeric',
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($request->input('title') . Str::random(40), '-');

        if($request->hasFile('image_url')) {
            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] = null;
        }

        Category::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah.');

        return redirect("/admin/category");
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
            'title' => "Ubah Category",
            'category' => Category::find($id),
            'content' => "administrator/category/add"
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
        $category = Category::find($id);
        $data = $request->validate([
            'title' => 'required',
            'image_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required|numeric',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($request->input('title') . Str::random(40), '-');

        if($request->hasFile('image_url')) {
            if($category->image_url != null) {
                Storage::delete($category->image_url);
            }

            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] =  $category->image_url;
        }

        $category->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/category");
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
            $category = Category::find($id);

            if($category->image_url) {
                Storage::delete($category->image_url);
            }

            $category->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/category");
        }

    }
}