<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Prefecture;
use App\Category;
use Storage;
use Image;

class PostController extends Controller
{
    /**
     * トップページ
     */
    public function index()
    {
        $q = \Request::query();
        $user = Auth::user();
        //prefecture_idがあれば降順に並び替えて都道府県別に表示
        if(isset($q['prefecture_id'])){
            $posts = Post::latest()->where('prefecture_id',$q['prefecture_id'])->paginate(12);
            $posts->load('prefecture','user');
            return view('posts.index',['posts'=>$posts,'user'=>$user]);
        }
        //category_idがあれば降順に並び替えてカテゴリ別に表示
        elseif(isset($q['category_id'])){
            $posts = Post::latest()->where('category_id',$q['category_id'])->paginate(12);
            $posts->load('category','user');
            return view('posts.index',['posts'=>$posts,'user'=>$user]);
        }
        //降順に一覧表示
        else{
            $posts = Post::latest()->paginate(12);
            return view('posts.index',['posts'=>$posts,'user'=>$user]);
        }
    }

    /**
     * 投稿作成ページ
     */
    public function create()
    {
        $user = Auth::user();
        //DBから都道府県を昇順に取り出す
        $prefectures = Prefecture::orderBy('id','asc')->pluck('prefecture_name', 'id');
        //初期値
        $prefectures = $prefectures->prepend('選択する', '');

        //DBからカテゴリを昇順に取り出す
        $categories = Category::orderBy('id','asc')->pluck('category_name','id');
        //初期値
        $categories = $categories->prepend('選択する','');

        return view('posts.create')->with(['prefectures' => $prefectures,'categories' => $categories,'user'=>$user]);
    }

    /**
     * 投稿をDBに保存
     */
    public function store(PostRequest $request)
    {
        //ポストモデルのインスタンスを作成
        $post = new Post;
        //ユーザID
        $post->user_id = $request->user_id;
        //タイトル
        $post->title = $request->title;
        //コンテント
        $post->content = $request->content;
        //アドレス
        $post->adress = $request->adress;
        //カテゴリID
        $post->category_id = $request->category_id;
        //都道府県ID
        $post->prefecture_id = $request->prefecture_id;

        
        if ($request['image']) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();

            // 画像を横幅300px・縦幅アスペクト比維持の自動サイズへリサイズ
            $image = Image::make($file)
                ->resize(640, null, function ($constraint) {
                    $constraint->aspectRatio();
            });
        }
        
        Storage::put(config('filesystems.s3.url').$name, (string) $image->encode());

        //S3に画像を保存
        //$path = Storage::disk('s3')->putFile('/', $image, 'public');
        //$post->image = Storage::disk('s3')->url($path);


        //画像をbase64にエンコード
        //$post->image = base64_encode(file_get_contents($request->image->getRealPath()));
        //heroku非対応
        //$filename = $request->file('image')->store('public/image');
        //$post->image = basename($filename);
 
        //DBに保存
        $post->save();
        
        //トップページにリダイレクト
        return redirect('/')->with('status','投稿しました');
    }

    /**
     * 投稿詳細ページ
     */
    public function show(Post $post)
    {
        $user = Auth::user();
        return view('posts.show',['post' => $post,'user'=>$user]);
    }
}
