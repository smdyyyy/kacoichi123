<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use Storage;
use Image;

class UserController extends Controller
{
    /**
     * マイページ表示
     */
    public function show(User $user)
    {
        //ユーザ情報取得
        $user = User::find($user->id);
        //ユーザIDが一致した投稿を表示
        $posts = Post::All()->where('user_id', $user->id);

        return view('users.show', ['user' => $user,'posts' => $posts,]);
    }

    /**
     * 投稿編集ページ
     */
    public function edit($id)
    {
        $user = Auth::user();
        //idから投稿情報を取り出し
        $post = Post::findOrfail($id);
        //DBから都道府県を取り出す
        $prefectures = \App\Prefecture::orderBy('id','asc')->pluck('prefecture_name', 'id');
        //初期値
        $prefectures = $prefectures->prepend('選択する', '');
        
        //DBからカテゴリを取り出す
        $categories = \App\Category::orderBy('id','asc')->pluck('category_name','id');
        //初期値
        $categories = $categories->prepend('選択する','');
        
        return view('users.edit')->with(['prefectures' => $prefectures,'categories' => $categories,'user'=>$user,'post'=>$post]);
    }

    /**
     * 投稿の編集をDBに保存
     */
    public function update(PostRequest $request, $id)
    {
        //投稿IDからインスタンスを取得
        $post = Post::findOrfail($id);
        //ユーザID
        $post->user_id = $request->user_id;
        //タイトル
        $post->title = $request->title;
        //コンテント
        $post->content = $request->content;
        //カテゴリID
        $post->category_id = $request->category_id;
        //都道府県ID
        $post->prefecture_id = $request->prefecture_id;

        //画像
        $image = $request->file('image');
        //拡張子取得
        $ext = $request->file('image')->getClientOriginalExtension();
        //名前取得
        $filename = $request->file('image')->getClientOriginalName();
        
        //リサイズ
        $resize_image = Image::make($image)->resize(640, null, function($constraint){
            $constraint->aspectRatio();
        })->encode($ext);
        //s3のimageに保存
        Storage::disk('s3')->put('/image/'.$filename,$resize_image, 'public');
        //画像URL
        $post->image = Storage::disk('s3')->url('image/'.$filename);

        //画像をbase64にエンコード
        //$post->image = base64_encode(file_get_contents($request->image->getRealPath()));
        //heroku非対応
        //$filename = $request->file('image')->store('public/image');
        //$post->image = basename($filename);
        
        //DBに保存
        $post->save();
        
        //更新するを押すとトップページにリダイレクト
        return redirect('/')->with('status','更新しました');
    }

    /**
     * 投稿を削除
     */
    public function destroy($id)
    {
        //投稿IDからインスタンスを取得して削除
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('status','削除しました');
    }
}
