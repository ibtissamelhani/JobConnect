<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    //
    // View the offers table

    public function index(){
        $domains=Domain::all();
        return view('admin.domains.index',compact('domains'));
    }

    public function create(){
        return view('admin.domains.create');
    }

    public function store(DomainRequest $request){
        Domain::create($request->all());
        return redirect()->route('admin.domains.index');
    }

    public function update(DomainRequest $request,Domain $domain){
        $domain->update($request->all());
        return redirect()->route('admin.domains.index');
    }

    public function destroy(Domain $domain){
        $domain->delete();
        return redirect()->route('admin.domains.index');
    }

}
