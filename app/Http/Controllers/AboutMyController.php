<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMyController extends Controller
{
    public function index()
    {
        // $user=User::select(

        //     'id',
        //     'name',
        //     'phone',
        //     'address',
        //     'job',
        //     '',

        // )->where('id',1)->first();

         return view('admin.about.index');
    }

    // public function update(Request $request ,User $user)
    // {
    //           //  $validated = $request->validate(['name'=> ['required','min:3']]);
    //   $user = User::first();
    //   $validated = $request->validate([
    //     'name' => 'required|min:3',
    //     'email' => 'required|email',
    //     'phone' => 'required',
    //     'address' => 'required',
    //     'degree' => 'required',
    //     'experience' => 'required',
    //     'birth_day' => 'required|date',
    //     'job' => 'required',
    //     'image' => 'image|mimes:jpeg,png,jpg|max:2048',
    // ]);

    // if($request->hasfile('image')){
    //     if($user->profile_pic != null){
    //         Storage::delete($user->profile_pic);
    //     }
    //     $get_new_file = $request->file('image')->store('images');
    //     $user->profile_pic = $get_new_file;
    // }

    // $user->update($validated);

    // return to_route('admin.aboutme.index')->with('message','Data Updated');
    // }
    }

