<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use BelongsToUser;

}
