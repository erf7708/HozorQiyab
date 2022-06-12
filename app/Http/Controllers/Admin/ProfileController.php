<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function get()
    {
        $user=\App\Models\User::query()->first();
       return view('admin.password.index',compact('user'));
    }

    public function postPassword(Request $request)
    {

        $user=\App\Models\User::query()->where('email',$request->get('email'))->first();

        if(\Hash::check($request->get('old_password'),$user->password) && $user->email == $request->get('email')) {
          $user->update([
              'password'=>bcrypt($request->get('new_password'))
           ]);
        }

        return back();
    }

    public function editProfile()
    {
        $user=\App\Models\User::query()->first();
        return view('admin.password.profile',compact('user'));
    }

    public function updateProfile(ProfileUpdateRequest  $request)
    {




//        $users= \App\Models\User::query()->where('email',$request->get('email'))->where('id','!=',auth()->user()->id)->exists();
//
//        if($users){
//            return back()->withErrors('این نام کاربری موجود می باشد ');
//        }

        $path=auth()->user()->image;
      if($request->hasFile('image')){
          $path=$request->file('image')->storeAs('public/image-user',$request->file('image')->getClientOriginalName());
      }

        auth()->user()->update([
           'name'=>$request->get('name'),
           'image'=>$path,
           'phone'=>$request->get('phone')
        ]);

      return back();
    }


}
