<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded.'); // success message
        }
        return redirect()->back()->with('error', 'Image not Uploaded.'); // error message
    }

    public function index()
    {       
        
        // $user  = User::all();
        // return $user;

        // User::where('id', 3)->delete();

        // User::where('id', 4)->update(['name' => 'bitfumesssssssss']);

        // DB::insert('insert into users (name,email,password) values (?,?,?)', [
        //     'sarthak', 'sarthak@bitfumes.com', 'password',
        // ]);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 2', ['bitfumes']);

        // DB::delete('delete from users where id = 2');

        // $users = DB::select('select * from users');
        // return $users;

        return view('home');
    }
}
