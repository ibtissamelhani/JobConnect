<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Models\Domain;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    // View the cities table

    public function index(){
        $cities=City::all();
        $userCount = User::count();
        $cityCount = City::count();
        $offerCount = Offer::count();
        $domainCount = Domain::count();
        return view('admin.cities.index',compact('cities','userCount','cityCount','offerCount','domainCount'));
    }

    public function create(){
        return view('admin.cities.create');
    }

    public function store(CityRequest $request){
        City::create($request->all());
        return redirect()->route('admin.cities.index');
    }

    public function update(CityRequest $request,City $city){
        
        $city->update($request->all());
        return redirect()->route('admin.cities.index');

    }

    public function destroy(City $city){
        $city->delete();
        return redirect()->route('admin.cities.index')->with('deleted','city deleted succesfully');
    }
}
