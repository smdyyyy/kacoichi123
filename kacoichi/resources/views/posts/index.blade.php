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
                    <div class="card new-content content-size">
                        <img src="{{ $post->image }}" class="card-img-top">
                        <!-- <img src="data:image/png;base64,<?= $post->image ?>" class="card-img-top" alt="..."> -->
                        <!-- <img src="{{ asset('storage/image/'.$post->image) }}" class="card-img-top" alt="...">　-->
                        <a href="{{ route('posts.index',['prefecture_id' => $post->prefecture->id]) }}" class="btn-prefecture btn-primary new-prefecture">{{ $post->prefecture->prefecture_name }}</a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('posts.index',['category_id' => $post->category->id]) }}">{{ $post->category->category_name }}:</a>{{ $post->title }}</h5>
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
            <div class="areas-menus">
                <div class="area-menus">
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 8]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/tokyo.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">東京</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 27]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/osaka.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">大阪</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 40]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/fukuoka.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">福岡</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="area-menus">
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 23]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/aichi.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">愛知</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 45]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/miyazaki.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">宮崎</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="card area-menu">
                    <a href="{{ route('posts.index',['prefecture_id' => 47]) }}">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="asset/image/okinawa.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body card-body-r">
                                    <h5 class="card-title card-prefecture pt-1-r">沖縄</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>

        <div class="prefecture-wrapper py-4">
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>北海道・東北</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 1]) }}">北海道</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 2]) }}">青森</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 4]) }}">秋田</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 5]) }}">山形</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 3]) }}">岩手</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 6]) }}">宮城</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 7]) }}">福島</a>
                </div>
                <div class="prefecture pb-4">
                    <p>関西</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 27]) }}">大阪</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 26]) }}">京都</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 30]) }}">兵庫</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 28]) }}">奈良</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 29]) }}">和歌山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 25]) }}">滋賀</a>
                </div>
            </div>
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>関東</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 8]) }}">東京</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 9]) }}">神奈川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 10]) }}">埼玉</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 11]) }}">千葉</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 12]) }}">栃木</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 13]) }}">茨城</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 14]) }}">群馬</a>
                </div>
                <div class="prefecture pb-4">
                    <p>中国・四国</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 35]) }}">岡山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 36]) }}">広島</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 37]) }}">鳥取</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 38]) }}">島根</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 39]) }}">山口</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 32]) }}">香川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 33]) }}">高知</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 34]) }}">愛媛</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 31]) }}">徳島</a>
                </div>
            </div>
            <div class="prefectures">
                <div class="prefecture pb-4">
                    <p>中部</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 23]) }}">愛知</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 20]) }}">岐阜</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 15]) }}">静岡</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 24]) }}">三重</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 17]) }}">新潟</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 16]) }}">山梨</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 18]) }}">長野</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 21]) }}">石川</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 19]) }}">富山</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 22]) }}">福井</a>
                </div>
                <div class="prefecture">
                    <p>九州・沖縄</p>
                    <a href="{{ route('posts.index',['prefecture_id' => 40]) }}">福岡</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 42]) }}">佐賀</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 43]) }}">長崎</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 41]) }}">大分</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 44]) }}">熊本</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 45]) }}">宮崎</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 46]) }}">鹿児島</a>
                    <a href="{{ route('posts.index',['prefecture_id' => 47]) }}">沖縄</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about-wrapper py-4">
        <p class="py-4">当サイト「<strong>カコイチ</strong>」は、あなたの過去一番を投稿するサイトです。</p>

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