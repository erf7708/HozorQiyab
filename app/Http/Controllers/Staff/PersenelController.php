<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersenelRequest;
use App\Models\Persenel;
use App\Models\Staff;
use Illuminate\Http\Request;


class PersenelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karmand.persenel.index',[
           'staffs'=>Persenel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PersenelRequest  $request
     *
     * @return void
     */
    public function store(PersenelRequest $request)
    {
       Persenel::query()->create([
           'StaffId'=>$request->get('StaffId'),
          'firstName'=>$request->get('firstName'),
          'lastName'=>$request->get('lastName'),
          'fatherName'=>$request->get('fatherName'),
          'code'=>$request->get('code'),
          'numberSh'=>$request->get('numberSh'),
          'countChildren'=>$request->get('countChildren'),
          'phone'=>$request->get('phone'),
          'insurance_number'=>$request->get('insurance_number'),
          'account_number'=>$request->get('account_number'),
          'job'=>$request->get('job'),
          'start_at'=>Persenel::start_at($request),
          'end_at'=>Persenel::end_at($request)
       ]);

       return back();
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
     * @param  \App\Models\Persenel  $persenel
     *
     * @return void
     */
    public function edit(Persenel $persenel)
    {


        return view('karmand.persenel.edit',compact('persenel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PersenelRequest  $request
     * @param  \App\Models\Persenel  $persenel
     *
     * @return void
     */
    public function update(PersenelRequest $request, Persenel $persenel)
    {

        $persenel->update([

            'StaffId'=>$request->get('StaffId'),
            'firstName'=>$request->get('firstName'),
            'lastName'=>$request->get('lastName'),
            'fatherName'=>$request->get('fatherName'),
            'code'=>$request->get('code'),
            'numberSh'=>$request->get('numberSh'),
            'countChildren'=>$request->get('countChildren'),
            'phone'=>$request->get('phone'),
            'insurance_number'=>$request->get('insurance_number'),
            'account_number'=>$request->get('account_number'),
            'job'=>$request->get('job'),
            'start_at'=>Persenel::start_at($request),
            'end_at'=>Persenel::end_at($request)

        ]);

        return redirect(route('persenel.create'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
