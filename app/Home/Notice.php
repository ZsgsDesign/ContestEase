<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;
use DB;

class Notice extends Model
{
    protected $table = 'notice';
    protected $primaryKey = 'nid';
    public $timestamps = false;
    protected $fillable = [];

    public function getNotice()
    {
        $notice_item = DB::table("notice") -> orderBy('post_date','desc') -> get();
        foreach($notice_item as $n)
        {
            $n -> post_date_parsed = $this -> formatPostTime($n -> post_date);
            $n -> name = DB::table('users') -> where('uid','=',$n -> uid) -> value('name');
        }
        return $notice_item;
    }

    public function formatPostTime($date)
    {
        $periods=["秒", "分钟", "小时", "天", "周", "月", "年"];
        $lengths=["60", "60", "24", "7", "4.35", "12"];

        $now=time();
        $unix_date=strtotime($date);

        if (empty($unix_date)) {
            return "Bad date";
        }

        if ($now>$unix_date) {
            $difference=$now-$unix_date;
            $tense="前";
        } else {
            $difference=$unix_date-$now;
            $tense="后";
        }

        for ($j=0; $difference>=$lengths[$j] && $j<count($lengths)-1; $j++) {
            $difference/=$lengths[$j];
        }

        $difference=round($difference);

        return "$difference$periods[$j]{$tense}";
    }

}
