<?php

namespace Railken\Permission\Tests\Agents;

class UserPermissionSchema
{

    /**
     * List of all permissions that a user can edit
     *
     * @var array
     */
    protected $permissions = [
        'profile.show',
        'profile.attributes.name.show',
        'profile.attributes.password.show',
        'profile.attributes.email.show',
    ];

    /**
     * Retrieve all permissions
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}
