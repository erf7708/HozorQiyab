<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
//        auth()->loginUsingId(1);
        return view('auth.login');
    }

    public function store(Request $request)
    {   $user=\App\Models\User::query()->first();
        if(Hash::check($request->get('password'),$user->password) && $user->email == $request->get('email') && $user->role_id == 1){
            auth()->login($user);
            return redirect(route('admin.panel'));
        }else {
            auth()->login($user);
            
            return redirect(route('staff.index'));
        }

        return back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('login'));
    }
}
