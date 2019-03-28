<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class Submission extends Model
{
    protected $table = 'submission';
    protected $primaryKey = 'sid';
    public $timestamps = false;
    protected $fillable = ['sid','uid','pid','answer','deleted_at'];

    public function getSubmissionbyUid($uid){
        $submission_item = DB::table('submission') -> where('uid','=',$uid) -> get();
        return $submission_item;
    }
}
