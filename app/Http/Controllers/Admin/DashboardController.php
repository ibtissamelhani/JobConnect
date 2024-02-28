<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Domain;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    // View the admin dashboard

    public function index(){

        $userCount = User::count();
        $cityCount = City::count();
        $offerCount = Offer::count();
        $domainCount = Domain::count();

        return view('admin.index',compact('userCount','cityCount','offerCount','domainCount'));
    }


}
