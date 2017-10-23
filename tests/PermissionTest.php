<?php

use PHPUnit\Framework\TestCase;
use Railken\Permission\Tests\User;

class PermissionTest extends TestCase
{


    public function testBasic()
    {   

        $user = new User();

        $user->setPermissions((new UserOwner())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.show'));

        $user->setPermissions((new UserOwner())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.fill'));

        $user->setPermissions((new User())->getPermissions());
        $this->assertEquals(1, $user->can('profile.attributes.name.show'));

        $user->setPermissions((new User())->getPermissions());
        $this->assertEquals(0, $user->can('profile.attributes.name.fill'));
   
        $user->setPermissions((new User())->getPermissions());
        $this->assertEquals(1, $user->can('profile.*'));


    }
}


