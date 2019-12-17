<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    public $table = 'v_info';
    public function getcandidate()
    {
    	return $this->AnyMany('App\candidate','v_id','title')
    }
    //
}
