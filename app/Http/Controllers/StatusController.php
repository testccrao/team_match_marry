<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use App
use Auth;

class StatusController extends Controller
{
	public function paget()
	{
		$v_id
		$articles = info::orderBy('created_at', 'desc')->with('')->paginate(5);
		return view('select', ['articles' => $articles]);

	}
	public function proof()
	{
		if(Auth::check())
			{
				return redirect()->intended(route('show');
			}
			else{
				$table="请先登入！";
				return view('login',compact('table'));
			}
	}
	public function 
	
    //
}
