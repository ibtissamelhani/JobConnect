<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Agent.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        DB::beginTransaction();
        try{
            $company = Company::create($request->all());
            $company->addMediaFromRequest('logo')->toMediaCollection('logos');
            User::updateCompanyId(Auth::user()->id,$company->id);
            DB::commit();
            return redirect()->route('agent.offers.index')->with('success', 'project created successfully.');
            
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Failed to create project: ' . $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $numberOfUsers = $company->users()->count();
        return view('Agent.company.show', compact('company','numberOfUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('Agent.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        if ($request->hasFile('logo')) {
            $company->clearMediaCollection('logos');
            $company->addMediaFromRequest('logo')->toMediaCollection('logos');
        }
        return redirect()->route('agent.company.show',compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
