<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;


class LocationController extends Controller
{
	
	public function postLocation(Request $request){
		// dd($request);
		$location = new Location;
		$location->key = $request->key;
		$location->timestamp = Carbon::now(); 
		$location->user_id = $request->user_id; 
		$location->save();

        return response()->json([
        	'msg' => 'success';
        ]);		
	}
}