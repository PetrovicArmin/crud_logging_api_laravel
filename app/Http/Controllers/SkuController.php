<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchSkuRequest;
use App\Models\Sku;
use App\Http\Requests\StoreSkuRequest;
use App\Http\Requests\UpdateSkuRequest;
use App\Http\Resources\SkuResource;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchSkuRequest $request)
    {
        return SkuResource::collection(Sku::where($request->getSearchRequest())->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkuRequest $request)
    {
        $parameters = $request->validated();

        $sku = Sku::create($parameters);

        return $sku;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sku $sku)
    {
        return SkuResource::make($sku);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkuRequest $request, Sku $sku)
    {
        $parameters = $request->validated();

        $sku->update($parameters);

        return SkuResource::make($sku);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sku $sku)
    {
        $sku->delete();
        return response()->noContent();
    }
}
