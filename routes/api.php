<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
], function ($api) {
    // 游客可以访问的接口

    // 需要 token 验证的接口
    $api->group(['middleware' => 'api.auth,api.throttle'], function ($api) {
        // 当前登录用户信息
        $api->get('version', function () {
            return response('this is version v1');
        });
    });
});
