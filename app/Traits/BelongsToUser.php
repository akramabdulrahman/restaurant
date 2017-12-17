<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 12/17/2017
 * Time: 9:28 AM
 */

namespace App\Traits;

;
use App\User;

trait BelongsToUser
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}