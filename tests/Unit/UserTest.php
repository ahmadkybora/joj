<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $user = User::find(1);
        $result = $user->username;
        $this->assertTrue($result);
    }
}
