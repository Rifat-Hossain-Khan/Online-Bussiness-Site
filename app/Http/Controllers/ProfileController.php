<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\adtable;

use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
    	
    	$ad= DB::table('adtable')
    		->where('regid', $request->session()->get('user')->ID)
    		->get();
    		//dd($value);  		
    		
    	return view('profile.Profile')
    		->with('add',$ad)
    		->with('user',$request->session()->get('user'));
    }

    public function delete_view($id)
    {
    	
    	$details=DB::table('adtable')
    		->where('adid', $id)
    		->first();

    	return view('profile.delete')
    		->with('details',$details);	
    }

    public function delete(Request $request)
    {
    	
    	DB::table('adtable')
            ->where('adid', $request->adid)
            ->delete();

        return redirect()->route('profile');	
    }

    public function adpost(Request $request)
    {
        

        $category= DB::table('categorytable')
        ->get();
               
        return view('profile.adpost')
            ->with('category',$category);
            //->with('user',$request->session()->get('user'));
    }

    public function submitad(Request $request)
    {

        $ad = new adtable();
        $ad->regid = $request->session()->get('user')->ID;
        $ad->product_name = $request->pname;
        $ad->product_category = $request->product_category;

        if(Input::hasFile('image')){

           // dd('H');
            $file=Input::file('image');
            $file->move(public_path(). '/assets/images' ,$file->getClientOriginalName());

            $ad->image = 'assets/images/'.$file->getClientOriginalName();
        }

        $ad->quantity = $request->quantity;
        $ad->price_per_unit = $request->price_per_unit;
        $ad->description = $request->product_description;
        $ad->phone = $request->phone;
        $ad->division = $request->product_division;





        $ad->save();

        return redirect()->route('profile');

        
    }

    public function information($id)
    {
    	
    	$info= DB::table('registrationtable')
    		->where('ID',$id)
    		->first();
    		//dd($value);  		
    		
    	return view('profile.myinfo')
    		->with('info',$info);
    }
}
