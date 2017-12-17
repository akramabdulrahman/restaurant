<?php

namespace App;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use BelongsToUser;
}
