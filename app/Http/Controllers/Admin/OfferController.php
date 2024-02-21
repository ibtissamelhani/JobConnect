<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
     //
    // View the offers table

    public function index(){
        return view('admin.offers.index');
    }
}
