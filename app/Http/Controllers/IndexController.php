<?php

namespace App\Http\Controllers;


use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function index()
    {
       $countries = \App\Models\Country::all();
       return view('index' , ["countries"=> $countries] );

    }

    public function show_country($country){
        return view('country' , ["country_slug"=> $country] );
        //dd(__METHOD__);
    }
    public function show_country_part($country, $part){

        return view('countrypart' , ["country_slug"=> $country, "part_slug"=>$part] );
        dd(__METHOD__);
    }


    public function show_country_part_destination($country, $part, $destination){

        return view('countrypartdestination' , ["country_slug"=> $country, "part_slug"=>$part, "destination_slug"=> $destination] );
        dd(__METHOD__);
    }
}
