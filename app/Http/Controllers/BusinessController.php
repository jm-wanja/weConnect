<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{
    public function createBusiness(Request $request) 
    {
        $business = Business::create($request->all());
        return response()->json($business, 201);
    }

    public function getAllBusinesses() 
    {
        return Business::all();
    }

    public function getBusinessById($businessId) 
    {
        $business = Business::findorFail($businessId);
        return response()->json($business, 200);
        // return $business;
    }

    public function updateBusinessById(Request $request, $businessId) 
    {
        $business = Business::findOrFail($businessId);
        $business->update($request->all());
        return response()->json($business, 200);
    }

    public function deleteBusiness($businessId) 
    {
        Business::find($businessId)->delete();
        return response()->json(null, 204);
    }

}
