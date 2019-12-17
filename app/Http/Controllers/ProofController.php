<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use App\candidate;


class ProofController extends Controller
{
	public function create_proof_thing(request $request)
	{
		$data=$this->validate($request,[
			'title'=>'requird|max:225']);
		$info= new info();
		$table->title=$request->input('title');
		$table->body=$request->input('body');
		$table->object=1;
		$table->status=$request->input('status');
		$table->save();
		return view('welcome');

	}
    //
}
