<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    //
    // View the offers table

    public function index(){
        return view('admin.domains.index');
    }
}
