<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class Problem extends Model
{
    protected $table = 'problem';
    protected $primaryKey = 'pid';
    public $timestamps = false;
    protected $fillable = [];

    public function getProblemAll()
    {
        $problem_item = DB::table('problem') -> get();
        return $problem_item;
    }

    public function getProblembyPid($pid)
    {
        $problem_item = DB::table('problem') -> where('pid','=',$pid) -> get();
        return $problem_item;
    }

    public function existPid($pid)
    {
        $temp = DB::table('problem') -> where('pid','=',$pid) -> select("pid") -> first();
        return empty($temp) ? null : $temp -> pid;
    }
}
567
