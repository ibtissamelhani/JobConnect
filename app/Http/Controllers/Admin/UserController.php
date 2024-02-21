<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // View the users table

    public function index(){
        return view('admin.users.index');
    }
}
