<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "family_name" => ['required', 'string', 'max:255'],
            "given_name" => ['required', 'string', 'max:255'],
            "email" => ['required', 'string', 'email', 'max:255'],
            "postcode" => ['required', 'regex:/^[a-zA-Z0-9-_]+$/', 'size:8'],
            'address' => ['required', 'string', 'max:255'],
            "building_name" => ['nullable','string','max:255'],
            "content"=> ['required','string','max:120'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);
    }
    public function messages()
    {
        return [
            'family_name.required' => '名字を入力してください',
            'family_name.string' => '名字を文字列で入力してください',
            'family_name.max' => '名字を255文字以下で入力してください',
            'given_name.required' => '名前を入力してください',
            'given_name.string' => '名前を文字列で入力してください',
            'given_name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.integer' => '郵便番号を数字で入力してください',
            'postcode.size:8' =>'郵便番号をハイフンありの半角で８文字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'building_name.string' =>'建物名を文字列で入力してください' ,
            'content.required' => 'ご意見を入力してください',
            'content.string' => 'ご意見を文字列で入力してください',
            'content.max120' => 'ご意見を１２０文字以内で入力してください',
        ];
    }
}