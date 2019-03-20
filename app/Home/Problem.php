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

    public function getProblem($pid)
    {
        $problem_item = DB::table("problem") -> where('pid','=',$pid) -> first();
        return $problem_item;
    }
}
