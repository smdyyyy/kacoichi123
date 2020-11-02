@extends('layouts.app')
@extends('layouts.footer')


@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="post-create py-4" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlInput1">タイトル</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">都道府県</label>
        {{ Form::select('prefecture_id', $prefectures, null, ['class' => 'form-control', 'id' => 'prefecture_id']) }}
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">カテゴリ</label>
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'id' => 'category_id']) }}
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">内容</label>
        <textarea class="form-control" id="exampleFormControlTextarea1 content" rows="3" name="content" value="{{ old('content') }}">
            {{ old('content') }}
        </textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">住所</label>
        <textarea class="form-control" id="exampleFormControlTextarea1 content" rows="1" name="adress" value="{{ old('adress') }}">
            {{ old('adress') }}
        </textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">画像を選択してください</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" value="{{ old('image') }}" name="image">
    </div>

    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

    <button type="submit" class="btn btn-primary">投稿する</button>
    <a href="{{ route('posts.index') }}" class="btn btn-primary return-index">戻る</a>
</form>

@endsection