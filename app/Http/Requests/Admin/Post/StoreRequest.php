<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'=>'required|string',
            'content' =>'required|string',
            'preview_image'=>'required|file',
            'main_image' =>'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Обязательно для заполнения',
            'title.string'=>'Данные должны быть строкой',
            'content.required' =>'Обязательно для заполнения',
            'content.string' =>'Данные должны быть строкой',
            'preview_image.required'=>'Обязательно для заполнения',
            'preview_image.file'=>'Необходимо выбрать файл',
            'main_image.required' =>'Обязательно для заполнения',
            'main_image.file' =>'Необходимо выбрать файл',
            'category_id.required' => 'Обязательно для заполнения',
            'category_id.integer' => 'Id должно быть числом',
            'category_id.exists' => 'Id должно быть в базе',
            'tag_ids.array' => 'Необходимо отправить массив',
            
        ];
    }
}
