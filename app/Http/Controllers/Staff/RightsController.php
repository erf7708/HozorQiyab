<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Persenel;
use Illuminate\Http\Request;

class RightsController extends Controller
{
    public function index()
    {
        return view('karmand.rights.index',[
           'persenels'=>Persenel::all()
        ]);
    }
}
