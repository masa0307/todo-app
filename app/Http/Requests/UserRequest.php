<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'     => ['required','email'],
            'name'      => ['required', 'string'],
            'password'  => ['required', 'min:8', 'confirmed']
        ];
    }

    public function messages()
    {
        return [
            'email.required'        => '※emailの入力は必須です',
            'name.required'         => '※ユーザー名の入力は必須です',
            'name.string'           => '※ユーザー名を文字列で入力してください',
            'password.required'     => '※パスワードの入力は必須です',
            'password.confirmed'    => '※パスワードとパスワード（確認用）が一致しません',
            'password.min'          => '※8文字以上で入力してください',
        ];
    }
}
