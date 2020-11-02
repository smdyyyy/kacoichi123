@extends('layouts.app')
@extends('layouts.footer')

@section('content')
<div class="new-wrapper py-4 show-wrapper">
            <div class="new-post pb-4">
            <div class="new-content">
                <img src="data:image/png;base64,<?= $post->image ?>" class="card-img-top show-img" alt="..." style= "height: 36rem;">
                <a href="#" class="btn btn-primary show-prefecture">{{ $post->prefecture->prefecture_name }}</a>
                <div class="content-text content-center">
                    <div class="card-flex border-bottom">
                        <h3 class="card-title">{{ $post->category->category_name }}：
                        </h3>
                        <h2 class="card-title">{{ $post->title }}
                        </h5>
                    </div>
                    <div class="new-text">
                        <p class="card-text py-2">{{ $post->created_at }}</br>{{ $post->adress }}</p>
                        <h4 class="card-text ">{{ $post->content }}</h4>
                        <div id="gmap"></div>
                        <div class="bg-user">
                            <h5 class="card-text bg-black">投稿者</h5>
                            <h2 class="card-title bg-user-name">{{ $post->user->name }}</h5>
                        </div>
                        
                    </div>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary my-4">戻る</a>
                </div>
            </div>
        </div>
    </div>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLjl35JvZ5DdYJHp0BvAt6g1TuBUCwCUw&callback=initMap"></script>
    <script type="text/javascript">
        var map;
        var marker;
        var geocoder;
            function initMap() {
                geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                'address': '<?= $post->adress ?>'
                }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                map = new google.maps.Map(document.getElementById('gmap'), {
                    center: results[0].geometry.location,
                    zoom: 17
                });
                marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map
                });
                infoWindow = new google.maps.InfoWindow({
                content: '<h4>ツールチップのタイトル</h4>'
                });
                marker.addListener('click', function() {
                infoWindow.open(map, marker);
                });
                } else {
                alert(status);
                }
            });
            }
    </script>
@endsection