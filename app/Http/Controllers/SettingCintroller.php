<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingCintroller extends Controller
{
    public function index()
    {

    // $setting=Setting::first();
    // dd($setting);
        return view('admin.setting.index');
    }
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Setting $setting)
    // {
    //     $validated = $request->validate([
    //         'about_title' => 'required','min:3',
    //         'about_description' => 'required','min:10',
    //         'fb_url' => 'required|url',
    //         'github_url' => 'required|url',
    //         'linkedin_url' => 'required|url',
    //         'freelance_url' => 'required|url',
    //         'cv_url' => 'required|url',
    //         'video_url' => 'required|url',
    //         'contact_mail' => 'required|email',
    //         'about_photo' => 'image|mimes:jpeg,png,jpg|max:2048'
    //     ]);

    //     // $setting = Setting::first();
    //     if($request->hasfile('image')){
    //         if($setting->about_photo != null){
    //             Storage::delete($setting->about_photo);
    //         }
    //         $get_new_file = $request->file('image')->store('images');
    //         $setting->about_photo = $get_new_file;
    //     }
    //     $setting->update($validated);
    //     return to_route('admin.setting.index')->with('message','Data Updated');
    // }
}
