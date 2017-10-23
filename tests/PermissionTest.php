<?php

use PHPUnit\Framework\TestCase;
use Railken\Permission\Tests\User;
use Railken\Permission\Tests\Agents\UserOwnerPermissionSchema;
use Railken\Permission\Tests\Agents\UserPermissionSchema;

class PermissionTest extends TestCase
{


    public function testBasic()
    {   

        $user = new User();

        $user->setPermissions((new UserOwnerPermissionSchema())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.show'));

        $user->setPermissions((new UserOwnerPermissionSchema())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.fill'));

        $user->setPermissions((new UserPermissionSchema())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.show'));

        $user->setPermissions((new UserPermissionSchema())->getPermissions());
        $this->assertEquals(0, $user->can('profile.attributes.name.fill'));
   
        $user->setPermissions((new UserPermissionSchema())->getPermissions());
        $this->assertEquals(0, $user->can('profile.*'));

        $user->setPermissions((new UserPermissionSchema())->getPermissions());
        $this->assertEquals(0, $user->can('*'));


    }
}


