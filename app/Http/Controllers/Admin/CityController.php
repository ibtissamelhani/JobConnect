<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    // View the cities table

    public function index(){
        $cities=City::all();
        return view('admin.cities.index',compact('cities'));
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
        return redirect()->route('admin.cities.index');
    }
}
