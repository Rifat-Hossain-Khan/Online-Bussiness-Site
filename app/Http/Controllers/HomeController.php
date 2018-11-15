<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$ad= DB::table('adtable')
    		->get();

    	return view('home.home')
    		->with('add',$ad);
    }

    public function adddetails($id)
    {
    	$details=DB::table('adtable')
    		->where('adid', $id)
    		->first();

    	return view('home.details')
    		->with('detail',$details);	

    }
}
