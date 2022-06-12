<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\HelpRequest;
use App\Models\Help;
use App\Models\Persenel;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\get;

class HelpController extends Controller
{
    public function create()
    {
        return view('karmand.help.index',[
           'staffs'=>Persenel::all(),
           'helps'=>Help::all()
        ]);
    }

    public function store(HelpRequest $request)
    {
        Help::query()->create([
           'staff_id'=>$request->get('staff_id'),
           'month'=>$request->get('month'),
           'year'=>$request->get('year'),
           'amount'=>$request->get('amount'),
           'description'=>$request->get('description')
        ]);

        return back();
    }
}
