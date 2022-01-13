<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use Auth;


class AcademicController extends Controller
{
    public function index()
    {
        $academic = Academic::where('user_id',auth::user()->id)->get();
        $academic = $academic->toArray();
        // dd($academic);
        return view('academic',compact('academic'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        foreach($request->equivalent as $key => $value)
        {
            $academic= new Academic;
            $academic::create(['equivalent' => $value,
            'grade' => $request->grade[$key],
            'university' => $request->university[$key],
            'p_year' => $request->p_year[$key],
            'user_id' => auth::user()->id]);


            // $academic::create(['grade' => $request->grade[$key]]);                
            // $academic::create(['university' => $request->university[$key]]);                
            // $academic::create(['p_year' => $request->p_year[$key]]);                

            
        }
        return redirect()->back()->with('success','Academic added successfully');

    }
    public function update(Request $request)
    {
        // dd($request->all());

        if($request->equivalent)
        {
            foreach($request->equivalent as $key=>$value){
                $id = $request->equivalentId[$key];
                if($id == NULL){
                    Academic::create(['equivalent' => $value,
                    'grade' => $request->grade[$key],
                    'university' => $request->university[$key],
                    'p_year' => $request->p_year[$key],
                    'user_id' => auth::user()->id]);
                }
                else{
                    $academic = Academic::find($id);
                    $academic->update(['equivalent' => $value,
                    'grade' => $request->grade[$key],
                    'university' => $request->university[$key],
                    'p_year' => $request->p_year[$key]]);
                }
            }
        }
        return redirect()->back()->with('success','Updated Successfully');
        dd($request->all());
    }
}
