<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewYearRequest;
use App\Models\NewYear;
use Illuminate\Http\Request;

class NewYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.newYears.index',[
            'newYears'=>NewYear::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newYears.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewYearRequest$request)
    {
            NewYear::query()->create([
                'date'=>NewYear::dates($request),
                'rights'=>$request->get('rights'),
                'right_to_housing'=>$request->get('right_to_housing'),
                'right_to_food'=>$request->get('right_to_food'),
                'child_allowance'=>$request->get('child_allowance'),
                'basis_of_daily'=>$request->get('basis_of_daily'),
                'daily_years'=>$request->get('daily_years'),
                'dailyEid'=>$request->get('dailyEid'),
                'tax_tate'=>$request->get('tax_tate'),
                'leave'=>$request->get('leave'),
                'number_of_days'=>$request->get('number_of_days'),
                'number_year'=>$request->get('number_year'),
                'insurance_percentage'=>$request->get('insurance_percentage'),
                'tax_calculation_limit'=>$request->get('tax_calculation_limit'),
                'extra_hours'=>$request->get('extra_hours'),
                'referral_overtime'=>$request->get('referral_overtime'),
                'right_shift'=>$request->get('right_shift'),
                'shift_work'=>$request->get('shift_work'),
                'route'=>$request->get('route'),
            ]);

            return redirect(route('newYear.index'));
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
     * @param  \App\Models\NewYear  $newYear
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(NewYear $newYear)
    {
        return view('admin.newYears.edit',compact('newYear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\NewYearRequest  $request
     * @param  \App\Models\NewYear  $newYear
     *
     * @return void
     */
    public function update(NewYearRequest $request, NewYear $newYear)
    {
        $newYear->update([
            'date'=>NewYear::dates($request),
            'rights'=>$request->get('rights'),
            'right_to_housing'=>$request->get('right_to_housing'),
            'right_to_food'=>$request->get('right_to_food'),
            'child_allowance'=>$request->get('child_allowance'),
            'basis_of_daily'=>$request->get('basis_of_daily'),
            'daily_years'=>$request->get('daily_years'),
            'dailyEid'=>$request->get('dailyEid'),
            'tax_tate'=>$request->get('tax_tate'),
            'leave'=>$request->get('leave'),
            'number_of_days'=>$request->get('number_of_days'),
            'number_year'=>$request->get('number_year'),
            'insurance_percentage'=>$request->get('insurance_percentage'),
            'tax_calculation_limit'=>$request->get('tax_calculation_limit'),
            'extra_hours'=>$request->get('extra_hours'),
            'referral_overtime'=>$request->get('referral_overtime'),
            'right_shift'=>$request->get('right_shift'),
            'shift_work'=>$request->get('shift_work'),
            'route'=>$request->get('route'),
        ]);
        return redirect(route('newYear.index'));
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
