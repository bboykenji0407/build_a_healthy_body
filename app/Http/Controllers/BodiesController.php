<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Body;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BodiesController extends Controller
{
    // ログインしていなかった場合のリダイレクト
    public function __construct(){
        $this->middleware('auth');
      }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $bodies = Body::all();
        //dd($body);
        return view('Body.index', ['user' => $user, 'bodies' => $bodies ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('body.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->imgはformのinputのname='img'の値です
        // ->storeメソッドは別途説明記載します
        $path = $request->img->store('public/images');
        // パスから、最後の「ファイル名.拡張子」の部分だけ取得します 例)sample.jpg
        $body = new Body;
        $body->body_image = basename($path);
        $form = $request->all();
        unset($form['_token']);
        //dd($body);
        $body->fill($form)->save();
        return redirect('Body.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
