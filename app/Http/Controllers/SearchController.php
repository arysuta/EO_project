<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use DB;
use Auth;

class SearchController extends Controller
{
    public function layout()
    {
    	return view('admin.member_org');
    }
    
    public function dataAjax(Request $request)
    {
        $data = [];
        
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("users")
            		->select("id","name","email")
            		->where('name','LIKE',"%$search%")
                    ->orwhere('email','LIKE',"$search%")
            		->get();
        }

        return response()->json($data);
    }
} 
