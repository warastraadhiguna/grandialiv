<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Type",
            'types' => Type::orderBy('index')->get(),
            'content' => "administrator/type/index"
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
            'title' => "Tambah Type",
            'content' => "administrator/type/add"
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
            'size' => 'required',
            'building_size' => 'required|numeric',
            'land_size' => 'required|numeric',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'carport' => 'required|numeric',
            'bike' => 'required|numeric',
            'price' => 'required',
            'index' => 'required|numeric',
        ]);

        $data['user_id'] = auth()->user()->id;

        if($request->hasFile('image_url')) {
            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] = null;
        }

        Type::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah.');

        return redirect("/admin/type");
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
            'title' => "Ubah Type",
            'type' => Type::find($id),
            'content' => "administrator/type/add"
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
        $type = Type::find($id);
        $data = $request->validate([
            'title' => 'required',
            'image_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required|numeric',
            'size' => 'required',
            'building_size' => 'required|numeric',
            'land_size' => 'required',
            'bedroom' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'carport' => 'required|numeric',
            'bike' => 'required|numeric',
            'price' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;


        if($request->hasFile('image_url')) {
            if($type->image_url != null) {
                Storage::delete($type->image_url);
            }

            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] =  $type->image_url;
        }

        $type->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/type");
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
            $type = Type::find($id);

            if($type->image_url) {
                Storage::delete($type->image_url);
            }

            $type->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/type");
        }

    }
}
