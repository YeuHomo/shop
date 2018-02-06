<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Oss;

class OssController extends Controller
{
    /**
     * @todo 资源上传OSS方法
     */
    public function upload(Request $request)
    {
        $file = $request->file('img');

        $key = time() . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();

        $result = Oss::publicUpload('anpengji', $key, request('img'));//上传文件到oss

        if ($result) {
            $imgUrl = Oss::getPublicObjectURL('anpengji', $key);//获取oss文件url
        }

        return $imgUrl;
    }
}
