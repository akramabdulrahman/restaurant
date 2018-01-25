<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use BelongsToUser;
	
	protected $with=[];
    protected $fillable = [
        'check_in','checkout','salary','unit'
    ];
    protected $casts=[
        'check_in'=>'time',
        'checkout'=>'time'
    ];
    public function orders(){
    	return $this->user->orders();
    }


}
