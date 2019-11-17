<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 31 Aug 2019 11:33:28 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RoleUser
 * 
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Role $role
 * @property \App\User $user
 *
 * @package App
 */
class RoleUser extends Eloquent
{
	protected $table = 'role_user';

	protected $casts = [
		'role_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'user_id'
	];

	public function role()
	{
		return $this->belongsTo(\App\Role::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}
}
