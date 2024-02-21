<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    // View the cities table

    public function index(){
        return view('admin.cities.index');
    }
}
