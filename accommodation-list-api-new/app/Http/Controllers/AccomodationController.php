<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accomodation;
use App\Http\Resources\AccomodationResource;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AcoomodationResource::collection(Accomodation::with('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accomodation = Accomodation::create([
        'name' => $request->name,
        'rating' => $request->rating,
        'category' => $request->category,
        'image' => $request->image,
        'reputation' => $request->reputation,
        'reputationBadge' => $request->reputationBadge,
        'price' => $request->price,
        'availability' => $request->availability,
      ]);

      return new AccomodationResource($accomodation);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Accomodation $accomodation)
    {
        return new AccomodationResource($accomodation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accomodation $accomodation)
    {
        $accomodation->update($request->only(['name', 'rating', 'category', 'image', 'reputation', 'reputationBadge', 'price', 'availability']));

        return new AccomodationResource($accomodation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodation $accomodation)
    {
        $accomodation->delete();

        return response()->json(null, 204);
    }
}
