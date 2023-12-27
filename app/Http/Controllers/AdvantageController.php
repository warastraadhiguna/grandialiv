<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Advantage",
            'advantages' => Advantage::orderBy('index')->get(),
            'content' => "administrator/advantage/index"
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
            'title' => "Tambah Advantage",
            'content' => "administrator/advantage/add"
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
            'note' => 'required',
            'index' => 'required|numeric',
        ]);

        $data['user_id'] = auth()->user()->id;

        if($request->hasFile('image_url')) {
            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] = null;
        }

        Advantage::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah.');

        return redirect("/admin/advantage");
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
            'title' => "Ubah Advantage",
            'advantage' => Advantage::find($id),
            'content' => "administrator/advantage/add"
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
        $advantage = Advantage::find($id);
        $data = $request->validate([
            'title' => 'required',
            'image_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
            'index' => 'required|numeric',
            'note' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;


        if($request->hasFile('image_url')) {
            if($advantage->image_url != null) {
                Storage::delete($advantage->image_url);
            }

            $data['image_url'] = $request->file("image_url")->store('img', 'public');
        } else {
            $data['image_url'] =  $advantage->image_url;
        }

        $advantage->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/advantage");
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
            $advantage = Advantage::find($id);

            if($advantage->image_url) {
                Storage::delete($advantage->image_url);
            }

            $advantage->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/advantage");
        }

    }
}
