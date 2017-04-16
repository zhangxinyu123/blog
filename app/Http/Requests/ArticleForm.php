<?php
/**
 * User: 张鑫宇
 * Time: 2015.03.28 下午10:15
 */
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Response;
class ArticleForm extends BackendForm
{
    public function rules()
    {

        return [
            'cate_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ];

    }
}