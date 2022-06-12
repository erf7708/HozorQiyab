<?php

namespace App\Models;


use App\Http\Requests\RewardRequest;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function staff()
    {
        return $this->belongsTo(Persenel::class);
    }

    public static function date(RewardRequest $request)
    {
        $date=explode('/',$request->get('date'));
        $year=$date[0];
        $month=$date[1];
        $day=$date[2];
        $time=Verta::getGregorian($year,$month,$day);
        return join('-',$time);
    }
}
