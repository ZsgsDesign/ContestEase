<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submission';
    protected $primaryKey = 'sid';
    public $timestamps = false;
    protected $fillable = [];
}
