<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
     //
    // View the offers table

    public function index(Offer $offers){
        $offers=Offer::all();
        return view('admin.offers.index',compact('offers'));
    }
}
