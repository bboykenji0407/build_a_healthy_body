<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;

    public $disabled = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'age',
        'spouse',
        'hobby',
        'children',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * バリデーションルール
     * Auth\RegisterControllerから移動しています。
     * 追加したユーザーの項目を追記しています。
     *
     * @var array
     */
    public static $rules = [
        'username' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'age' => ['required', 'integer', 'regex:/\d{1,4}/'],
        'spouse' => ['required', 'integer', 'regex:/\d/'],
        'hobby' => ['required', 'string', 'max:50'],
        'children' => ['required', 'integer', 'regex:/\d/']
    ];

    /**
     * バリデーションエラーメッセージ
     * Auth\RegisterControllerから移動しています。
     * 追加したユーザーの項目を追記しています。
     *
     * @var array
     */
    public static $messages = [
        'username.required' => 'お名前を入力してください。',
        'username.max' => 'お名前は50文字以内で入力してください。',
        'email.required' => 'E-mailアドレスを入力してください。',
        'email.email' => '正しいE-mailアドレスを入力してください。',
        'email.max' => 'E-mailアドレスは255文字以内で入力してください。',
        'email.unique' => 'そのメールアドレスは既に登録されています。',
        'password.required' => 'パスワードを入力してください。',
        'password.min' => 'パスワードは8文字以上で入力してください。',
        'password.confirmed' => '入力されたパスワードが一致しません。',
        'age.required' => '年齢を入力してください',
        'age.max' => '年齢の入力は３桁までです',
        'age.regex' => '年齢は半角数字で入力してください',
        'spouse.required' => '選択してください',
        'spouse.regex' => '半角数字で入力してください',
        'hobby.required' => '趣味を入力してください',
        'hobby.max' => '趣味は50文字以内で入力してください',
        'children.required' => '選択してください',
        'children.regex' => '半角数字で入力してください'
    ];

    /**
     * 配偶者のリスト
     * viewで使用するの配偶者のリスト
     *
     * @var array
     */

    public static $spouses = [
        1 => '有',
        2 => '無',
    ];

    public static $children = [
        1 => '無',
        2 => '1人',
        3 => '2人',
        4 => '3人',
        5 => 'それ以上'
    ];

    // 「１対１」→ メソッド名は単数形
    public function body()
    {
        // Bodiesモデルのデータを引っ張てくる
        return $this->hasOne('Body::class');
    }
}
