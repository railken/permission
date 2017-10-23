<?php

namespace Railken\Permission\Tests\Agents;

class UserOwnerPermissionSchema
{

	/**
	 * List of all permissions that a user can edit
	 */
	protected $permissions = [
		'profile.fill',
		'profile.attributes.name.*',
		'profile.attributes.password.*',
		'profile.attributes.email.*',
	];

	/**
	 * Retrieve all permissions
	 *
	 * @return array
	 */
	public function getPermissions()
	{
		$user = (new UserPermissionSchema());
		return array_merge($user->getPermissions(), $this->permissions);
	}
}