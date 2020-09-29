<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <meta name="keywords" content="такси,такси осинники,такси в осинниках,заказ такси онлайн, заказ такси, заказать такси, вызвать такси, вызов такси, осинники,грузоперевозки осинники,грузоперевозки в осинники,аренда,авто,работа,водителем,личном автомобиле,разрешение такси">
        <meta name="description" content="Наши контакты.">
        <meta name="format-detection" content="telephone=no">

        @include('layouts.styles')

    </head>

        <body class="contactspage" id="top">


            <div class="wrap-body">

                <div id="wraper_content">

                    <div class="main">

                        <!--==============================header=================================-->

                        <header class="">

                            <div class="menu_block">

                                <div class="container_12">

                                    <div class="grid_12">
                                        <a href="#" class="mob-button"><i class="fa fa-bars" aria-hidden="true"></i></a>

                                        @include('layouts.login-panel')
                                        
                                        <div class="clear"></div>

                                    </div>

                                    <div class="clear"></div>

                                </div>

                            </div>                   
                            <div class="clear"></div>

                        </header>                   

                    <!--==============================Content=================================-->
                    
                     @yield('home-content')
                     @yield('register-content')
                     @yield('login-content')

                    </div>

                    <!--==============================footer=================================-->

                

                    <footer>

                    </footer>
                </div>
                </div>
            </div>

    <a href="#" id="toTop"><span id="toTopHover"></span></a>        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
                                    
                            function initMap() {
                              var map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 53.615, lng: 87.33},
                                zoom: 14
                              });
                              var infoWindow = new google.maps.InfoWindow({map: map});

                              // Try HTML5 geolocation.
                              if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(function(position) {
                                  var pos = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                  };

                                  infoWindow.setPosition(pos);
                                  infoWindow.setContent('Ваше местоположение.');
                                  map.setCenter(pos);
                                }, function() {
                                  handleLocationError(true, infoWindow, map.getCenter());
                                });
                              } else {
                                // Browser doesn't support Geolocation
                                handleLocationError(false, infoWindow, map.getCenter());
                              }
                             
                                    var marker = new google.maps.Marker({
                                                            position: {lat: 53.6050322, lng: 87.33756405},
                                                            map: map,
                                                            title: 'Такси ЕСТ'
                                                    });

                                var markers = [];   
                                var cars = [];

                                /*  $.ajax({
                                        url:'blocks/getCord.php',
                                        type:'GET',
                                        data:{'q':'1'},
                                        dataType: 'json',
                                        success: function(data){
                                            if(data){               
                                                cars = data;
                                                //alert(cars);
                                                for (var i = 0; i < cars.length; i ++) {
                                                    markers[i] = new google.maps.Marker({
                                                        position: {lat: cars[i].lat,lng: cars[i].lon}, // Координаты расположения маркера. В данном случае координаты нашего маркера совпадают с центром карты, но разумеется нам никто не мешает создать отдельную переменную и туда поместить другие координаты.
                                                        map: map,                            // Карта на которую нужно добавить маркер
                                                        title: cars[i].name,
                                                        icon: {
                                                            url: "images/car-" + cars[i].state_kind + ".png",
                                                            scaledSize: new google.maps.Size(18, 18)
                                                            } // (Необязательно) Текст выводимый в момент наведения на маркер

                                                    });
                                                
                                                }
                                                
                                            } else {
                                                alert('Координаиы машин не определены');// действия в случае, если координаты в БД отсутствуют
                                            }
                                        }

                                    });*/
                                        
                                    

                                /*setInterval(function(){
                                    
                                    $.ajax({
                                        url:'blocks/getCord.php',
                                        type:'GET',
                                        data:{'q':'1'},
                                        dataType: 'json',
                                        success: function(data){
                                            if(data){               
                                                cars = data;
                                                //alert(cars);
                                                for (var i = 0; i < cars.length; i++) {
                                                   var state_kind = cars[i].state_kind;
                                                    if(state_kind == 1 || state_kind == 0){
                                                        markers[i].setIcon( new google.maps.Marker({url: "images/car-" + cars[i].state_kind + ".png",
                                                            scaledSize: new google.maps.Size(18, 18)}));
                                                        markers[i].setPosition( new google.maps.LatLng(cars[i].lat,cars[i].lon));   
                                                    }
                                                }
                                                
                                            } else {
                                                alert('Координаиы машин не определены');// действия в случае, если координаты в БД отсутствуют
                                            }
                                        }

                                    })
                                    
                                },3000);*/

                            }

                            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                              infoWindow.setPosition(pos);
                              infoWindow.setContent(browserHasGeolocation ?
                                                    'Ошибка: Местоположение не определено.' :
                                                    'Ошибка: Определение местоположения не включено.');
                            }

                            function mygetLatLng (cars){
                            alert("my");    
                                
                            }
        </script>
        <script src="taxi-region142.ru/js/main.js"></script>    
        
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwzTpgWpLqRWBEk3U9b2Dx8LXJYAAAUyA&amp;signed_in=true&amp;callback=initMap"></script>
                    
</body>

</html>
