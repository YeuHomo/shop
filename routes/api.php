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

$api->version('v1', function ($api) {
    // 游客可以访问的接口
    // 需要 token 验证的接口
    $api->group([
      'namespace' => 'App\Http\Controllers\Api',
      'middleware' => ['api.throttle'],
      'limit' => config('api.rate_limits.sign.limit'),
      'expires' => config('api.rate_limits.sign.expires'),
      ], function ($api) {
          $api->get('version', function () {
              return response('this is version v1');
          });

          $api->resource('users', 'UsersController');
      });
    $api->group([
      'namespace' => 'App\Http\Controllers\Common',
      'middleware' => ['api.throttle'],
      'limit' => config('api.rate_limits.sign.limit'),
      'expires' => config('api.rate_limits.sign.expires'),
      ], function ($api) {
          $api->get('test', 'OssController@upload');
      });
});
