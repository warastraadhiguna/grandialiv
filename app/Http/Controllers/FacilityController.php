<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'title' => "Manajemen Facility",
            'facilities' => Facility::orderBy('index')->get(),
            'content' => "administrator/facility/index"
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
            'title' => "Tambah Facility",
            'content' => "administrator/facility/add"
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
            'icon' => 'required',
            'note' => 'required',
            'index' => 'required|numeric',
        ]);

        $data['user_id'] = auth()->user()->id;

        Facility::create($data);
        Alert::success('Sukses', 'Data berhasil ditambah.');

        return redirect("/admin/facility");
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
            'title' => "Ubah Facility",
            'facility' => Facility::find($id),
            'content' => "administrator/facility/add"
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
        $facility = Facility::find($id);
        $data = $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'index' => 'required|numeric',
            'note' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;

        $facility->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/facility");
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
            $facility = Facility::find($id);

            $facility->delete();
            Alert::success('Sukses', 'Data berhasil dihapus.');
        } catch(\Throwable $e) {
            Alert::error('Error', $e->getMessage());
        } finally {
            return redirect("/admin/facility");
        }

    }
}
