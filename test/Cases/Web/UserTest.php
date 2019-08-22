<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class UserTest extends HttpTestCase
{
    public function testWebUserLogin()
    {
        $res = $this->client->json('/user/login', [
            'mobile' => '15904435047',
            'password' => '123456',
        ]);

        $this->assertSame(0, $res['code']);
    }

    public function testWebUserRegister()
    {
        $res = $this->client->post('/user/register',[
            'mobile' => '15904435098',
            'password' => '123456',
        ]);

        $this->assertSame(0,$res['code']);
    }

    public function testWebUserInfo()
    {
        $res = $this->client->get('/user/info',[
           'user_id' => 1
        ]);

        $this->assertSame(0,$res['code']);
    }
}
