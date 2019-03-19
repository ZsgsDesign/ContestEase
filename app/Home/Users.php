<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'uid';
    public $timestamps = false;
    protected $fillable = ['uid','sid','name'];
}
