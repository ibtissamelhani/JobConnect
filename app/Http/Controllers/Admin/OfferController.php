<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Domain;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class OfferController extends Controller
{
     //
    // View the offers table

    public function index(Offer $offers){
        $offers=Offer::all();
        $userCount = User::count();
        $cityCount = City::count();
        $offerCount = Offer::count();
        $domainCount = Domain::count();
        return view('admin.offers.index',compact('offers','userCount','cityCount','offerCount','domainCount'));
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
