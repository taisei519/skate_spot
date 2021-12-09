<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Skate Spots</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>Skate Spots</h1>
        <div id="map" style="height:600px"></div>
    　　<script>
            // currentLocation.jsで使用する定数latに、controllerで定義した$latをいれて、currentLocation.jsに渡す
            const lat = {{ $lat }};

            // currentLocation.jsで使用する定数lngに、controllerで定義した$lngをいれて、currentLocation.jsに渡す
            const lng = {{ $lng }};
        </script>
        {{--    上記の処理をしてから、googleMapを読み込まないとエラーが出てくる--}}

    　　<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="/js/setLocation.js"></script>
        <script src="/js/currentLocation.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDOB9TUcouAY31C_oOTHjuQAmcpddXf_To&callback=initMap" async defer></script>
        </div>
    </body>
</html>
