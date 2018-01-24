<?php

namespace App;

use App\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'mobile','last_check_in'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be eager-loaded .
     *
     * @var array
     *
     */
    protected $with = ['role'];


    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function Role()
    {
        return $this->customer()->exists() ? $this->customer() : $this->employee();
    }


    /**
     * magic function to always encrypt password when set.
     *
     * @return  void
     *
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }


}
