<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\Contract;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.users.index',[
            'users'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create',[
            'contracts'=>Contract::all(),
            'roles'=>Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::query()->create([
           'name'=>$request->get('name'),
           'email'=>$request->get('email'),
           'password'=>bcrypt($request->get('password')),
           'role_id'=>$request->get('role_id'),
           'contract_id'=>$request->get('contract_id')
        ]);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     *
     * @return void
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',[
           'contracts'=>Contract::all(),
           'roles'=>Role::all(),
           'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     *
     * @return void
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $users=User::query()->where('email',$request->get('email'))->where('id','!=',$user->id)->exists();

        if($users){
            return back()->withErrors('این نام کاربری موجود است ');
        }

        $user->update([

            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'role_id'=>$request->get('role_id'),
            'contract_id'=>$request->get('contract_id')
        ]);

        return redirect(route('users.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     *
     * @return void
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }


}
