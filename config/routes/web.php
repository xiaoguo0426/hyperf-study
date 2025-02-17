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

Router::get('/', 'App\Controller\IndexController::index');

Router::post('/user/login', 'App\Controller\Web\UserController::login');
Router::post('/user/register', 'App\Controller\Web\UserController::register');
Router::get('/user/info', 'App\Controller\Web\UserController::userInfo');

Router::post('/sms/send', 'App\Controller\Web\SmsController::send');

Router::get('/captcha/image', 'App\Controller\Web\CaptchaController::image');

Router::get('/article/list', 'App\Controller\Web\ArticleController::list');
Router::post('/article/likes', 'App\Controller\Web\ArticleController::likes');
Router::post('/article/save', 'App\Controller\Web\ArticleController::save');

Router::get('/article/test', 'App\Controller\Web\ArticleController::test');//限流器
Router::get('/article/circuitTest', 'App\Controller\Web\ArticleController::circuitTest');//熔断


