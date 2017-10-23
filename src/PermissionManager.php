<?php

namespace Railken\Permission;

class PermissionManager
{

    /**
     * Is the permission valid ?
     *
     * @param string $permission
     * @param array $permissions
     *
     * @return boolean
     */
    public function can($permission, $permissions)
    {
        $pp = explode(".", $permission);

        foreach ($permissions as $p) {
            if ($permission == $p) {
                return true;
            }

            $p = explode(".", $p);

            foreach ($p as $k => $in) {
                if ($in == '*') {
                    return true;
                }

                if (!isset($pp[$k])) {
                    break;
                }

                if ($pp[$k] != $in) {
                    break;
                }
            }
        }

        return false;
    }
}
