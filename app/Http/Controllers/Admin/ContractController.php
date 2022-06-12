<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractRequest;
use App\Http\Requests\ContractUpdateRequest;
use App\Models\Contract;
use Illuminate\Http\Request;
use function Spatie\LaravelIgnition\Recorders\JobRecorder\record;
use function Symfony\Component\Mime\Header\get;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.Contracts.index',[
            'contracts'=>Contract::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContractRequest  $request
     *
     * @return void
     */
    public function store(ContractRequest $request)
    {

        Contract::query()->create([
           'name'=>$request->get('name'),
           'code'=>$request->get('code'),
           'row'=>$request->get('row'),
           'employer'=>$request->get('employer'),
           'address'=>$request->get('address'),
           'start_at'=>Contract::start_at($request),
           'end_at'=>Contract::end_at($request)
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
     * @param  \App\Models\Contract  $contract
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        return view('admin.Contracts.edit',compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     *
     * @return void
     */
    public function update(ContractRequest $request, Contract $contract)
    {

        $contract->update([
            'name'=>$request->get('name'),
            'code'=>$request->get('code'),
            'row'=>$request->get('row'),
            'employer'=>$request->get('employer'),
            'address'=>$request->get('address'),
            'start_at'=>Contract::start_at($request),
            'end_at'=>Contract::end_at($request)
        ]);

        return redirect(route('contracts.index'));

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
