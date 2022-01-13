<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professional;
use App\Experience;


class ProfessionalController extends Controller
{
    public function index()
    {
        $professional = Professional::with('experiences')->where('user_id',auth::user()->id)->first();
        // dd($professional);
        return view('professional',compact('professional'));
        

        return view('professional');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $profesional = Professional::create($request->all());
        // dd($profesional);
        if($request->count[0]!=NULL)
        {
            foreach($request->count as $count)
            {
                $profesional->experiences()->create(['experience' => $count]);                
                
            }
        }
        return redirect()->back()->with('success','Profession added successfully');
    }
    public function update(Request $request )
    {
        // dd($request->all());
        $professional=Professional::with('experiences')->where('user_id',auth::user()->id)->first();
        $professional->update(['c_profession'=>$request -> c_profession]);

        if($request->experience){
            foreach($request->experience as $key => $value){
                // return $key;
                $id = $request->experienceId[$key];
                // return $id;
                if($id==NULL){
                    // return $value;
                    $professional->experiences()->create(['experience'=>$value]);
                }
                else{
                    $experience = Experience::find($id);
                    $experience->update(['experience'=>$value]);
                }
            }
        }

        // dd($professional);
        return redirect()->back()->with('success','Profession updated successfully');
    }
}
