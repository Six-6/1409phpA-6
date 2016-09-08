<?php
namespace App;

use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Season extends Model{

	/************************** 人在 旅途 ******************************/
	//评论查询
	public function sleget()
	{
		$count = DB::table('inseason')->get();
		return	$count;
	}
	
}



