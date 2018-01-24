<?php

namespace App\Traits;

use App\Role;
use App\User;
use Illuminate\Support\Collection;

trait HasRoles
{

    /**
     * A user may have multiple roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * get users of a given role.
     *
     * @return Collection
     */
    public static function ofRole($role)
    {
        return User::whereHas('roles', function ($query) use ($role) {
            $query->where('name', $role);
        });
    }

    /**
     * Assign the given role to the user.
     *
     * @param  string $role
     * @return mixed
     */
    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * Determine if the user has the given role.
     *
     * @param  mixed $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if (is_array($role)) {
            return $role->reduce(function ($flag, $rol) {
                return $flag && $this->roles->contains('name', $rol);
            }, true);
        }

        return !!$role->intersect($this->roles)->count();
    }


    /**
     * Determine if the user may perform the given permission.
     *
     * @param  Permission $permission
     * @return boolean
     */
    public function hasPermission(Permission $permission)
    {
        return $this->hasRole($permission->roles);
    }
}