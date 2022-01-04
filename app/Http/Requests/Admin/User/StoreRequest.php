<?php

namespace App\Http\Requests\Admin\User;

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
            'email'=>'required|string|email|unique:users',
            'name'=>'required|string',
            // 'password'=>'required|string',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Это поле необходимо для заполнения',
            'email.string'=>'Почта должно быть строкой',
            'email.unique'=>'пользователь с таким email уже существует',
            'email.email'=>'Почта должна соответствовать формату mail@some.domain',
            'name.required'=>'Это поле необходимо для заполнения',
            'name.string'=>'Имя должно быть строкой',
            'role' => 'required|integer'
        ];
    }
}
