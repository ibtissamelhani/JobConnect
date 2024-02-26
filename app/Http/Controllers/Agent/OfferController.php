<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfferRequest;
use App\Models\City;
use App\Models\Domain;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        $domains = Domain::all();
        $offers = Offer::where('status', 1)->latest()->get();
        return view('welcome', compact('offers','cities','domains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create',Offer::class);
        $cities = City::all();
        $domains = Domain::all();
        return view('Agent.offer.create',compact('cities','domains'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferRequest $request)
    {
            Offer::create($request->all());
            return redirect()->route('agent.offers.index')->with('success', 'offer created successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        // $STATUS_RADIO = Offer::STATUS;
        $this->authorize('update',$offer);
        $cities = City::all();
        $domains = Domain::all();
        return view('Agent.offer.edit', compact('offer','cities','domains'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());
        return redirect()->route('agent.offers.index')->with('success', 'project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $this->authorize('delete',$offer);
        $offer->delete();
        return redirect()->route('agent.offers.index');
    }

}
