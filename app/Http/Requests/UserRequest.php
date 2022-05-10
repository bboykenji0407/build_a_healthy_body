<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use App\User;

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
     * @return array
     */
    public function rules(Request $request)
    {
        // userモデルのバリデーションの使用
        $rules = User::$rules;

        // update()アクションが動くとき
        if ($request->method() == 'PATCH') {
            // passwordのrequiredの条件を外してnullableにする
            $key = array_search('required', $rules['password']);
            unset($rules['password'][$key]);
            array_push($rules['password'], 'nullable');

            // updateの時に、変更前と同じ出会ってもバリデーションエラーにならないようにする。
            $key = array_search('unique:users', $rules['email']);
            unset($rules['email'][$key]);
            array_push($rules['email'], Rule::unique('users')->ignore(Auth::user()));
        }
        return $rules;
    }

    //バリデーションメッセージ
    public function messages()
    {
        return User::$messages;
    }
}
