<?php
/** 返回验证码消息 */
//'message' => ':message',          // 错误的具体描述
//'errors' => ':errors',            // 参数的具体错误描述，422 等状态提供
//'code' => ':code',                // 自定义的异常码
//'status_code' => ':status_code',  // http状态码
//'debug' => ':debug',              // debug 信息，非生产环境提供
function respond($status, $respond)
{
    return response()->json(['code' => $status, is_string($respond) ? 'message' : 'data' => $respond]);
}

/** 成功返回消息 */
function succeed($respond = '请求成功!')
{
    return respond(200, $respond);
}

/** 失败返回消息 */
function failed($respond = '请求失败!')
{
    return respond(409, $respond);
}

/**@todo 分页 */
function pagesFor($data)
{
    $result['data'] = $data['data'];
    $result['total'] = $data['total'];
    $result['totalPage'] = $data['last_page'];
    $result['currentPage'] = $data['current_page'];
    return $result;
}

function ddd(...$args)
{
    http_response_code(500);
    call_user_func_array('dd', $args);
}
