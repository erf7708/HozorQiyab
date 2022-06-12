<?php

namespace App\Http\Controllers\Staff;


use App\Http\Controllers\Controller;
use App\Http\Requests\RewardRequest;
use App\Models\Persenel;
use App\Models\Reward;
use App\Models\Staff;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\get;

class RewardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
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
        return view('karmand.rewards.index',[
           'rewards'=>Reward::all(),
           'staffs'=>Persenel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RewardRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(RewardRequest $request)
    {
        Reward::query()->create([

            'staff_id'=>$request->get('staff_id'),
            'date'=>Reward::date($request),
            'reward'=>$request->get('reward'),
            'amount'=>$request->get('amount'),
            'description'=>$request->get('description')

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rewards  $rewards
     * @return \Illuminate\Http\Response
     */
    public function show(Reward $reward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rewards  $rewards
     * @return \Illuminate\Http\Response
     */
    public function edit(Reward $reward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rewards  $rewards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rewards $rewards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reward  $reward
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reward $reward)
    {
        $reward->delete();
        return back();
    }
}
