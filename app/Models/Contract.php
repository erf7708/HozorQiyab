<?php

namespace App\Models;

use App\Http\Requests\ContractRequest;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Mime\Header\get;
use function Symfony\Component\Mime\Header\has;

class Contract extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static function start_at(ContractRequest $request)
    {
        $date=explode('/',$request->get('start_at'));
        $year=$date[0];
        $month=$date[1];
        $day=$date[2];
        $time=Verta::getGregorian($year,$month,$day);
        return join('-',$time);
    }

    public static function end_at(ContractRequest $request)
    {
        $date=explode('/',$request->get('end_at'));
        $year=$date[0];
        $month=$date[1];
        $day=$date[2];
        $time=Verta::getGregorian($year,$month,$day);
        return join('-',$time);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function regulation()
    {
        return $this->belongsTo(Regulation::class);
    }
}
