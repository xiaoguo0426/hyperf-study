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

use Hyperf\HttpServer\Router\Router;

include __DIR__ . '/routes/web.php';

Router::addServer('admin', function () {
    require __DIR__ . '/routes/admin.php';
});

Router::addServer('ws', function () {
    Router::get('/', 'App\Controller\Ws\WebSocketController');
});
