<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'role_id',
    ];

	/**
	 * User to role relation.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function role()
	{
		return $this->hasOne('App\Role', 'id', 'role_id');
	}

	/**
	 * Check if user role is in provided array of roles.
	 * If the user is root, it has automatically access
	 * to all routes protected by any other roles.
	 *
	 * @param $roles
	 * @return bool
	 */
	public function hasRole($roles)
	{
		// Check if the user is a root account
		if($this->getUserRole()->name == 'Root') {
			return true;
		}
		if(is_array($roles)){
			foreach($roles as $need_role){
				if($this->checkIfUserHasRole($need_role)) {
					return true;
				}
			}
		} else{
			return $this->checkIfUserHasRole($roles);
		}
		return false;
	}

	/**
	 * Get all user roles.
	 *
	 * @return mixed
	 */
	private function getUserRole()
	{
		return $this->role()->getResults();
	}

	/**
	 * Check if user has given role.
	 *
	 * @param $need_role
	 * @return bool
	 */
	private function checkIfUserHasRole($need_role)
	{
		return (strtolower($need_role)==strtolower($this->getUserRole()->name)) ? true : false;
	}

}
