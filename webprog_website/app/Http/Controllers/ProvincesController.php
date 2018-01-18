<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function showZamdelnorte()
    {
    	return view('zamboanga_delnorte');
    }
     public function showZamdelsur()
    {
    	return view('zamboanga_delsur');
    }
     public function showZamsibugs()
    {
    	return view('zamboanga_sibugay');
    }
}
