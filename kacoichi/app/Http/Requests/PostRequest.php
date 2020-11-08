<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required|numeric',
            'prefecture_id' => 'required|numeric',
            'image' => 'required|file|image',
        ];
    }

    public function messages(){
        return [
            'title.required'=>'タイトルを入力してください',
            'title.max'=>'タイトルは30文字以内で入力してください',
            'content.required'=>'本文を入力してください',
            'content.max'=>'本文は1000文字以内で入力してください',
            'category_id.required'=>'カテゴリを選択してください',
            'category_id.integer'=>'不正な値です',
            'prefecture_id.required'=>'都道府県を選択してください',
            'prefecture_id.integer'=>'不正な値です',
            'image.required' => '画像を選択してください',
            'image.file' => '画像を選択してください',
            'image.image' => '画像を選択してください',
        ];
    }
}
