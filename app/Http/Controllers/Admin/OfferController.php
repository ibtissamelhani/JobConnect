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

    public function updateStatus(Offer $offer){
        if($offer->status == 1){
            $offer->update(['status' => 2]);
        }
        
        return redirect()->back();
    }

    public function delete(Offer $offer){
        $offer->delete();
        return redirect()->back();
    }
}
