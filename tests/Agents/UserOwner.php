<?php

namespace Railken\Permission\Test\Agents;

class UserOwner
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
		$user = (new UserAgent());
		return array_merge($user->getPermission(), $this->permissions);
	}
}