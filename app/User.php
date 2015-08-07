<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    //
	protected $fillable = [
		'openid',
		'name',
		'gender',
		'email',
		'mobile',
		'qq',
		'state',
		'free_at',
		'score',
		'total',
		'message',
		'auth',
		'school',
		'student_id',
		'department',
	];
}
