<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Data Perusahaan",
            'content' => "administrator/company/index"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'email' => 'sometimes',
            'phone' => 'required',
            'note' => 'required',
            'tagline' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['email'] =  $data['email'] ? $data['email'] : "";

        $company->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/company");
    }

    public function socialMedia()
    {
        $data = [
            'title' => "Data Sosial Media",
            'content' => "administrator/company/social-media"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    public function updateSocialMedia(Request $request, $id)
    {
        $company = Company::find($id);
        $data = $request->validate([
            'instagram' => 'nullable',
            'facebook' => 'nullable',
            'youtube' => 'nullable',
            'google_map' => 'nullable',
        ]);
        $data['user_id'] = auth()->user()->id;

        $company->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/social-media");
    }

    public function banner()
    {
        $data = [
            'title' => "Data banner",
            'content' => "administrator/web/banner"
        ];

        return view("administrator.layouts.wrapper", $data);
    }

    public function updateBanner(Request $request, $id)
    {
        $company = Company::find($id);
        $data = $request->validate([
            'banner_url' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1024',
        ]);
        $data['user_id'] = auth()->user()->id;

        if($request->hasFile('banner_url')) {
            if($company->banner_url != null) {
                Storage::delete($company->banner_url);
            }

            $data['banner_url'] = $request->file("banner_url")->store('img');
        } else {
            $data['banner_url'] =  $company->banner_url;
        }

        $company->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate.');

        return redirect("/admin/web/banner");
    }
}
