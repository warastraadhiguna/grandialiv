<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Gallery",
            'galleries' => Gallery::orderBy('index')->get(),
            'content' => "administrator/gallery/index"
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
            'title' => "Tambah Gallery",
            'content' => "administrator/gallery/add"
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

        if($request->hasFile('image_url')) {
            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] = null;
        }

        Gallery::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah.');

        return redirect("/admin/gallery");
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
            'title' => "Ubah Gallery",
            'gallery' => Gallery::find($id),
            'content' => "administrator/gallery/add"
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
        $gallery = Gallery::find($id);
        $data = $request->validate([
            'title' => 'required',
            'image_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required|numeric',
        ]);
        $data['user_id'] = auth()->user()->id;


        if($request->hasFile('image_url')) {
            if($gallery->image_url != null) {
                Storage::delete($gallery->image_url);
            }

            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] =  $gallery->image_url;
        }

        $gallery->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/gallery");
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
            $gallery = Gallery::find($id);

            if($gallery->image_url) {
                Storage::delete($gallery->image_url);
            }

            $gallery->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/gallery");
        }

    }
}