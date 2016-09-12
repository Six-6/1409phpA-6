<?php 
namespace App\Http\Middleware;

use Closure;
use Session;

session_start();
class OldMiddleware {

	public function handle($request, Closure $next)
	{

		//echo $_SESSION['username'];die;
		$ast = isset($_SESSION['username'])?$_SESSION['username']:' ';
		if ($ast==' ') {
			//echo "<script>alert('Sorry, please login first.');location.href={{URL('/')}}</script>";
			echo "Sorry, please login first.";die;
		}
		return $next($request);
	}

}
