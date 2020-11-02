@extends('layouts.app')
@extends('layouts.footer')

@section('content')
<div class="new-wrapper pad-b">
    <h2 class="py-4">マイページ：{{ $user->name }}</h2>   
    <h2 class="pb-4">投稿一覧</h2>
    
    <div class="new-post pb-4">
        @foreach($posts as $post)
          <a href="{{ route('posts.show',$post->id) }}">
              <div class="card new-content" style="width: 18rem;">
                  <img src="data:image/png;base64,<?= $post->image ?>" class="card-img-top" alt="..." style="height: 12rem;">
                  <a href="{{ route('posts.index',['prefecture_id' => $post->prefecture->id]) }}" class="btn-prefecture btn-primary new-prefecture">{{ $post->prefecture->prefecture_name }}</a>
                  <div class="card-body1">
                      <h5 class="card-title"><a href="{{ route('posts.index',['category_id' => $post->category->id]) }}">{{ $post->category->category_name }}:</a>{{ $post->title }}
                      </h5>
                      <h5 class="">{{ $post->user->name }}</h5>
                  </div>
                <div class="card-flex2">
                    <a href="{{ action('UserController@edit',$post->id) }}" class="delete-btn btn btn-primary">編集する</a>
                    <form class="delete-btn" action="{{ action('UserController@destroy',$post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">削除</button>
                    </form>
                </div>

              </div>
          </a>
        @endforeach      
    </div>
    <div class="center">
        <a href="{{ route('posts.index') }}" class="btn btn-primary my-5">戻る</a>
    </div>
</div>
@endsection