<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use BelongsToUser;
	
	protected $with=['user'];
    //$employee->user->orders();

    public function orders(){
    	return $this->user->orders();
    	//$employee->orders()
    }
}
