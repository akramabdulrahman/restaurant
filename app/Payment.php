<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use BelongsToUser;

}
