@extends('layouts.app')
@extends('layouts.footer')

@section('content')
<div class="content">
@if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif
    <div class="top-image">
        <img src="asset/image/haikei4.png" alt="トップ画像">
    </div>

    <div class="new-wrapper py-4">
        <h2 class="py-4">新着投稿</h2>
        <div class="new-post pb-4">
            @foreach($posts as $post)
                <a href="{{ route('posts.show',$post->id) }}">
                    <div class="card new-content" style="width: 18rem;">
                            <img src="data:image/png;base64,<?= $post->image ?>" class="card-img-top" alt="..." style="height: 12rem;">
<!--                         <img src="{{ asset('storage/image/'.$post->image) }}" class="card-img-top" alt="..." style="height: 12rem;">
 -->                        <a href="{{ route('posts.index',['prefecture_id' => $post->prefecture->id]) }}" class="btn-prefecture btn-primary new-prefecture">{{ $post->prefecture->prefecture_name }}</a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('posts.index',['category_id' => $post->category->id]) }}">{{ $post->category->category_name }}:</a>{{ $post->title }}
                                </h5>
                                <h5 class="card-title">{{ $post->user->name }}</h5>
                            </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="new-paginate">{{ $posts->links() }}</div>
    </div>

    <div class="area-wrapper">
        <h2 class="py-4">エリアから探す</h2>

        <div class="area-menus">
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 71]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/tokyo.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">東京</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 261]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/osaka.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">大阪</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 391]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/fukuoka.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">福岡</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
        <div class="area-menus">
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 221]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/aichi.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">愛知</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 441]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/miyazaki.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">宮崎</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="card area-menu" style="max-width: 300px;">
            <a href="{{ route('posts.index',['prefecture_id' => 461]) }}">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="asset/image/okinawa.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title card-prefecture">沖縄</h5>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>

        <div class="prefecture-wrapper py-4">
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>北海道・東北</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 1]) }}">北海道</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 11]) }}">青森</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 31]) }}">秋田</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 41]) }}">山形</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 21]) }}">岩手</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 51]) }}">宮城</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 61]) }}">福島</a>
                </div>
                <div class="prefecture pb-4">
                    <p>関西</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 261]) }}">大阪</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 251]) }}">京都</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 291]) }}">兵庫</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 271]) }}">奈良</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 281]) }}">和歌山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 241]) }}">滋賀</a>
                </div>
            </div>
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>関東</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 71]) }}">東京</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 81]) }}">神奈川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 91]) }}">埼玉</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 101]) }}">千葉</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 111]) }}">栃木</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 121]) }}">茨城</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 131]) }}">群馬</a>
                </div>
                <div class="prefecture">
                    <p>中国・四国</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 341]) }}">岡山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 351]) }}">広島</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 361]) }}">鳥取</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 371]) }}">島根</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 381]) }}">山口</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 311]) }}">香川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 321]) }}">高知</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 331]) }}">愛媛</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 301]) }}">徳島</a>
                </div>
            </div>
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>中部</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 221]) }}">愛知</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 191]) }}">岐阜</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 141]) }}">静岡</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 231]) }}">三重</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 161]) }}">新潟</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 151]) }}">山梨</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 171]) }}">長野</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 201]) }}">石川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 181]) }}">富山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 211]) }}">福井</a>
                </div>
                <div class="prefecture">
                    <p>九州・沖縄</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 391]) }}">福岡</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 411]) }}">佐賀</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 421]) }}">長崎</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 401]) }}">大分</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 431]) }}">熊本</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 441]) }}">宮崎</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 451]) }}">鹿児島</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 461]) }}">沖縄</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about-wrapper py-4">
        <h5 class="py-4">当サイト「<strong>カコイチ</strong>」は、あなたの過去一番を投稿するサイトです。</h5>

        <div class="about-txt">
            <p>
            あなたの過去の経験で一番好きな場所、経験は何ですか？</br></br>
            週末になるとつい立ち寄ってしまうお気に入りのバー</br>
            休日に仲間と登った山から見た景色</br>
            みんなに食べてもらいたいくらい好きなラーメン屋</br></br>
            そんなみなさんのカコイチを共有してください。</br>
            誰かのカコイチは、</br>
            それがどんなにマイナーでも、</br>
            どんなに知名度が無くても、</br>
            皆さんをあっと驚かすような魅力を持っているはずです。
            </p>
        </div>
        <a href="{{ route('about.index') }}" type="button" class="btn btn-primary btn-lg my-4">カコイチとは</a>
    </div>
</div>




@endsection