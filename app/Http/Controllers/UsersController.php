<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.index', ['user' => $user ]);
    }

    public function edit(User $user)
    {
        // if (Auth::check()) {
        //     //dd($user);
        //     $user = Auth::user();
            return view('user.edit', ['user' => $user ]);
            // ユーザーはログインしている
        //}
    }

    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->all());

        // パスワードの項目があるとき（つまり、パスワードを変更するとき）
        if (!is_null($request->password)) {
            // パスワードの値をハッシュ化して上書きする。
            $user->password = Hash::make($request->password);
        } else {
            // パスワードの項目に値がないときは、アップデートの対象にしない。
            unset($user->password);
        }
        $user->save();
        return redirect(route('user.index'));
    }

}
