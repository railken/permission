<?php

namespace Railken\Permission\Traits;

use Railken\Permission\PermissionManager;

trait CanTrait
{

    /**
     * Permissions
     */
    protected $permissions = [];

    /**
     * Set permissions
     *
     * @param array $permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Retrieve permissions
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Can user do this?
     *
     * param string $permission
     *
     * @return boolean
     */
    public function can($permission)
    {
        $pm = new PermissionManager();
        return $pm->can($permission, $this->permissions);
    }
}
