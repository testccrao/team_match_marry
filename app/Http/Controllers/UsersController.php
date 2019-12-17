<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    //
    public function login_with(Request $request)
    {
    	$student=$this->validate($request,[
    		'uuid' =>'required|max:225',
    		'password'=>'required']);
    	if(Auth::attempt($student))
    	{
    		$this->session(['name' => 'value']);
            $table=take(10)
    	return view('main');

    	}
    	else{
    		
    		$table="登入失败，密码错误或用户不存在！";
    		return view('login',compact('table'));
    	}
    }
    public function 
    public function destroy()
  {
      Auth::logout();
      session()->flash('success', '您已成功退出！');
      return redirect('login');
  }

}
