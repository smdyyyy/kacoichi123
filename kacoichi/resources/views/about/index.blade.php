@extends('layouts.app')
@extends('layouts.footer')

@section('content')
<div class="top-image">
    <img src="/asset/image/haikei4.png" alt="トップ画像">
</div>

<div class="about-wrapper2">
    <div class="about-contents">
        <div class="about-kacoichi py-4">
            <img src="/asset/image/aboutkacoichi.png" alt="" class="py-4">

            <div class="about-txt2">
                <img src="/asset/image/about.png" alt="">
                <p>みなさんの過去一番の体験は何ですか？</br>
                    カコイチはそんなみなさんの過去一番が</br>
                    集められたサイトです。</br>
                    それはお気に入りのお店でも</br>
                    地元の絶景スポットでも。</br></br>

                    あなたのカコイチを教えてください。</br>
                    あなたのカコイチが誰かのカコイチに</br>
                    なるかもしれません。
                </p>
            </div>
        </div>
        <div class="how my-4">
            <div class="howto py-4">
                <img src="/asset/image/howtouse.png" alt=""  class="pt-4" class="howtoimg">
                <h5 class="py-4 text-finish">あなたのカコイチを3つのカテゴリに分けて投稿してください。</br>
                    投稿されたカコイチはカテゴリ別、都道府県別に</br>
                    表示する事が出来ます。</h5>

                <div class="howto-imgs about-flex pb-4">
                    <div class="how-img">
                        <img src="/asset/image/about1.png" alt="">
                        <p>景色</p>
                    </div>
                    <div class="how-img">
                        <img src="/asset/image/about2.png" alt="">
                        <p>飲食</p>
                    </div>
                    <div class="how-img">
                        <img src="/asset/image/about3.png" alt="">
                        <p>観光</p>
                    </div>
                </div>

                <div class="line-img py-4">
                </div>
            </div>

            <div class="three-contents">
                <div class="view about-flex2 py-4">
                    <div class="view-img">
                        <img src="/asset/image/ski.jpg" alt=""  class="three-contents-img py-4 ml-6">
                    </div>
                    <div class="view-text">
                        <img src="/asset/image/view.png" alt="" class="pt-45">
                        <p>景色</p>

                        <h5 class="text-height">街が一望出来る丘、</br>
                            山の頂上から見た景色、</br>
                            樹氷が広がる雪景色、
                        </h5>
                    </div>
                </div>
                <div class="rest about-flex2">
                    <div class="rest-text">
                        <img src="/asset/image/Restaurant.png" alt="" class="pt-45">
                        <p>飲食</p>

                        <h5 class="text-height">地元民しか知らない名物定食屋、</br>
                            特別な日に行きたいおしゃれバー、</br>
                            見た目だけじゃないローストビーフ丼、
                        </h5>
                    </div>
                    <div class="rest-img">
                        <img src="/asset/image/jiro.jpg" alt=""  class="three-contents-img py-4 mr-6">
                    </div>
                </div>
                <div class="sight about-flex2">
                    <div class="sight-img">
                        <img src="/asset/image/aichi.jpg" alt=""  class="three-contents-img py-4 ml-6">
                    </div>
                    <div class="sight-text">
                        <img src="/asset/image/Sightseeing.png" alt="" class="pt-45">
                        <p>観光</p>

                        <h5 class="text-height">近所の歴史ある神社、</br>
                            昔からの街並みが残る温泉街、</br>
                            ベタだけどお勧めしたい観光スポット
                        </h5>
                    </div>
                </div>

                <div class="three-text py-4">
                    <h5 class="text-finish pt-4">知名度が無くても</br>
                    周りに理解者がいなくても</br>
                    誰かのカコイチには絶対的な魅力があるはずです。</br></br>

                    みなさんのカコイチを教えてください。</br>
                    毎日をカコイチと言えるように。
                    </h5>
                </div>
                <a href="{{ route('posts.index') }}" type="button" class="btn btn-primary btn-lg my-45 my-45-r">トップへ戻る</a>
            </div>
        </div>
    </div>    
</div>
@endsection