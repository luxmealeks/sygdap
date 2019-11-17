<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 31 Aug 2019 11:33:28 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PermissionRole
 * 
 * @property int $id
 * @property int $permission_id
 * @property int $role_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Permission $permission
 * @property \App\Role $role
 *
 * @package App
 */
class PermissionRole extends Eloquent
{
	protected $table = 'permission_role';

	protected $casts = [
		'permission_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'role_id'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Permission::class);
	}

	public function role()
	{
		return $this->belongsTo(\App\Role::class);
	}
}
