<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Domain;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // View the users table

    public function index(){
        $users=User::all();
        $userCount = User::count();
        $cityCount = City::count();
        $offerCount = Offer::count();
        $domainCount = Domain::count();
        return view('admin.users.index',compact('users','userCount','cityCount','offerCount','domainCount'));
    }

    public function ban(User$user){

        $user->update(['status'=> 2]);
        return redirect()->back();
    }

    public function unban(User $user){

        if($user->status == 2){
            $user->update(['status'=> 1]);
           
        }
        return redirect()->back();
    }

   
}
