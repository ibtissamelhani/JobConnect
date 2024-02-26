<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\OfferUser;
use Illuminate\Http\Request;

class OfferUserController extends Controller
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
    public function create($offerId)
    {
        $offer = Offer::findOrFail($offerId);
        return view('User.applyOffre',compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offerUser = OfferUser::create($request->all());
        $offerUser->addMediaFromRequest('cv')->toMediaCollection('CVs');
        return redirect()->route('agent.offers.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
