<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contest extends Model
{
    protected $table = 'contest';
    public $timestamps = false;
    protected $fillable = [];

    public function remainingTime()
    {
        $end_time = DB::table('contest') -> select("end") -> first() -> end;
        $end_time=strtotime($end_time);
        $cur_time=time();
        return $end_time - $cur_time;
    }
}
