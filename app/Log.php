<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use BelongsToUser;

}
