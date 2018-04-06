<div class="contacts-page">
	<div class="container  pt-md-5 pb-md-7 pt-3 pb-3">
		<div class="row">
			<div class="col-sm-6 col-12 ml-auto mb-lg-7 mb-md-5 mb-3">
				<div class="col-xl-10 col-lg-11 col-12 ml-auto">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="/">Головна</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Котакти</li>
					  </ol>
					</nav>
					<h1 class="content-title">Контакти</h1>
					<p class="content-after-title">Зв’язатися з нами просто</p>
					<div class="contact">
						<div class="row m-0 align-items-center mb-4">
							<div class="d-block mr-5">
								<span class="contact__icon icon-phone"></span>
								<span class="d-inline-block">
									<a href="tel:093123456" class="d-block phone"><span class="main-color">093</span> 123-45-67</a>
									<a href="tel:093123456" class="d-block phone"><span class="main-color">093</span> 123-45-67</a>
								</span>
							</div>			
							<a href="mailto:sniper@gmail.com" class="d-block  email"><span class="main-color icon icon-mail"></span>sniper@gmail.com</a>
							<p>
								<span class="main-color icon icon-location2"></span>пр. Глушкова 1п21, Киев Национальный выставочный Центр
							</p>
						</div>
						<div class="col-lg-6 col-md-8 col-10 pl-0">
							<button class="footer__btn btn__main-full">Замовити гру</button>
						</div>					
						<p class="big-text strong-text">Як добратися до майданчика?</p>
						<p>Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает создание соответствующий условий активизации. С другой стороны реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map" class="contact__map"></div>
</div>

<script>                                                                                
	function initMap() {
		var styles = [
		  {
		    "elementType": "geometry.fill",
		    "stylers": [
		      {
		        "color": "#353535"
		      },
		      {
		        "saturation": -20
		      },
		      {
		        "weight": 2.5
		      }
		    ]
		  },
		  {
		    "elementType": "geometry.stroke",
		    "stylers": [
		      {
		        "color": "#353535"
		      },
		      {
		        "saturation": -75
		      },
		      {
		        "weight": 1
		      }
		    ]
		  },
		  {
		    "elementType": "labels.icon",
		    "stylers": [
		      {
		        "visibility": "off"
		      }
		    ]
		  },
		  {
		    "elementType": "labels.text.fill",
		    "stylers": [
		      {
		        "color": "#696969"
		      },
		      {
		        "saturation": -30
		      },
		      {
		        "lightness": 20
		      }
		    ]
		  },
		  {
		    "elementType": "labels.text.stroke",
		    "stylers": [
		      {
		        "color": "#282828"
		      }
		    ]
		  },
		  {
		    "featureType": "road",
		    "elementType": "geometry.fill",
		    "stylers": [
		      {
		        "color": "#2b2b2b"
		      }
		    ]
		  },
		  {
		    "featureType": "water",
		    "elementType": "geometry.fill",
		    "stylers": [
		      {
		        "color": "#2b2b2b"
		      }
		    ]
		  }
		],
		image = 'img/map-marker.svg',
		map,
		coordinates  = {lat: 50.420018, lng: 30.572663};
	    map = new google.maps.Map(document.getElementById('map'), {
	        center: coordinates,
	        zoom: 14
	    });
	    map.setOptions({styles: styles});
	    var marker = new google.maps.Marker({
          position: coordinates,
          map: map,
          animation: google.maps.Animation.BOUNCE,
          icon: image
        });

	};   
</script>