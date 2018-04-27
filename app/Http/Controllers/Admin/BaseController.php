<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
	/**
	 * BaseController constructor.
	 */
	public function __construct()
	{
		##判断后台用户是否是管理员##
		$this->middleware(function($request , $next) {
			if (!Auth::check() || Auth::user()->is_manage != 1) {
				abort(404);
			}
			return $next($request);
		});

	}
}
