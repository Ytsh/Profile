<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonalRequest;
use App\Personal;
use Auth;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd(Personal::all());
        $personal = Personal::where('user_id',auth::user()->id)->first();
        return view('personal',compact('personal'));
        return view('personal');
    }
    public function store(PersonalRequest $request)
    {
        // return $request;
        $personal=Personal::create($request->all());
        

        return redirect()->back()->with('success','Profile created successfully');
        
    }
    public function update(PersonalRequest $request)
    {
        $personal = Personal::where('user_id',auth::user()->id)->first();
        $personal->update($request->all());
        return redirect()->back()->with('success','Profile updated successfully');


    }
    
}
