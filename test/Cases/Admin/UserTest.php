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

namespace HyperfTest;

/**
 * @internal
 * @coversNothing
 */
class UserTest extends HttpTestCase
{
    public function testAdminUserLogin()
    {
        $res = $this->get('/');

        $this->assertSame(0, $res['code']);
    }
}
