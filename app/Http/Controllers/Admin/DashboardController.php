<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    // View the admin dashboard

    public function index(){
        return view('admin.index');
    }


}
