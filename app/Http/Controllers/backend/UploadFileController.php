<?php
/**
 * 公共文件上传
 * User: 张鑫宇
 * Time: 2015.05.19 下午6:06
 */
namespace App\Http\Controllers\backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use EndaEditor;

class UploadFileController extends Controller
{

    public function postImg()
    {
        $data = EndaEditor::uploadImgFile('uploads');
        return json_encode($data);
    }


}