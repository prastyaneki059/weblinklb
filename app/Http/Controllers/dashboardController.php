<?php

namespace App\Http\Controllers;

use App\Models\shift;
use App\Models\closingeod;
use App\Models\masterstore;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $getMt = masterstore::all();
        $getshift = shift::get();
        return view('/index',['getMt'=>$getMt,'getshift'=>$getshift]);
    }
    public function postdata(postRequest $request){
        $validasidata = $request->validated();
        if($request->hasFile('gambar')){
            $name = $request->file('gambar');
            $path = $name->store('datafoto','public');
            $validasidata['gambar'] = $path;
        }
       $formdata = closingeod::create($validasidata);
       return response()->json(['message'=>'data','sukses'=>$validasidata]);
    }
}
