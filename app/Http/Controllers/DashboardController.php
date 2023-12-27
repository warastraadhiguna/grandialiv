<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            // 'booking' =>  Receipt::where("status", "1")->count(),
            'content' => "administrator/dashboard/index",
        ];

        return view('administrator.layouts.wrapper', $data);
    }
}
