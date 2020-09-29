<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Карта</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<meta name="keywords" content="такси,такси осинники,такси в осинниках,заказ такси онлайн, заказ такси, заказать такси, вызвать такси, вызов такси, осинники,грузоперевозки осинники,грузоперевозки в осинники,аренда,авто,работа,водителем,личном автомобиле,разрешение такси">
	<meta name="description" content="Наши контакты.">
	<meta name="format-detection" content="telephone=no">

	<link rel="icon" href="images/favicon.ico">
<link rel="stylesheet" href="http://taxi-region142.ru/css/font-awesome.min.css">
<link rel="stylesheet" href="http://taxi-region142.ru/css/form.css">
<link rel="stylesheet" href="http://taxi-region142.ru/css/app.css">
<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 8]>

		<div style=' clear: both; text-align:center; position: relative;'>



			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">



				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg"  height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />



			</a>

		</div>

		<![endif]-->

	<!--[if lt IE 9]>

		<script src="js/html5shiv.js"></script>

		<link rel="stylesheet" media="screen" href="css/ie.css">

	<![endif]-->

	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
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

									    <nav class="horizontal-nav full-width horizontalNav-notprocessed">



											<ul class="sf-menu sf-js-enabled sf-arrows">
	<a href="#" class="mob-button_close"><i class="fa fa-times" aria-hidden="true"></i></a>
	<div class="mob-login_box">

		 
        <p><a href="http://taxi-region142.ru/login">Войти</a></p>
		<p><a href="http://taxi-region142.ru/register">Зарегестрироваться</a></p>

	    
	</div>
	<li class=""><a href="/">Главная</a></li>

	<li class=""><a href="/o-nas">О нас</a></li>

	<li class=""><a href="/drivers">Водителям</a></li>

	<li class=""><a href="/customers">Клиентам</a>
		<!--<div class="drop_down">
			<ul>
				<li><a href="/servise/zakaz-taxi">Заказ такси</a></li>
				<li><a href="#">Грузоперевозки</a></li>
				<li><a href="/servise/drivers">Для водителей</a></li>
				<li><a href="#">Аренда автомобилей</a></li>
			</ul>
		</div>-->
	</li>

	<li class="current"><a href="/contacts">Контакты</a></li>

</ul>
										</nav>

											<div class="login-con">

    <ul class="nav navbar-nav navbar-right">

    <!-- Authentication Links -->

    
        <li><a href="http://taxi-region142.ru/login">Войти</a></li>

        <li><a href="http://taxi-region142.ru/register">Зарегестрироваться</a></li>

    
    </ul>  

</div>
								    	<div class="clear"></div>

									</div>

									<div class="clear"></div>

								</div>

							</div>

							
								<div class="column location">
									<div class="country-drop-down btn-group">
										<button id="w0" class="btn dropdown-toggle" data-toggle="dropdown">Россия <span class="caret"></span>
										</button>
									</div>

									<button id="w2" class="city-select-btn js-modal-open btn" data-id="city-choose" data-toggle="modal" data-target="#w2modal"></button>
								</div>

							
							<div class="container_12">

								<div class="grid_12">

									<div class="box_container_12">

						    			<a href="/">

						    				<img src="/images/logo.png" alt="ЕСТ">

						    			</a>

						    		</div>

								</div>

							</div>

							<div class="clear"></div>

							<div class="auth_user"></div>

							<div class="clear"></div>

						</header>					

					<!--==============================Content=================================-->
						   
	<main class="content">
		<div class="container_12">
			<div class="grid_12">
				<h1>Найдите нас</h1>
				<div class="map">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</main>

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

						/*	$.ajax({
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
			
	<div class="overlay-box"></div>
					
</body>
</html>