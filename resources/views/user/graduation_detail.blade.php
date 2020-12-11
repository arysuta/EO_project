@extends('layouts.main')

@section('content')

<style>
* {
    box-sizing: border-box;
}

.columns {
    float: right;
    width: 33.3%;
    padding: 30px;
}


@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
			<!-- Content-->
			<div class="md-content">
				<div class="consult-projectDetail">
					
					<!-- carousel__element owl-carousel -->
					<div class="carousel__element owl-carousel consult-projectDetail__slider" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"autoplay":true,"animateOut":"fadeOut","margin":0}'>
						<div><img src="{{asset('theme/img/projects/detail-1.jpg')}}" alt=""></div>
						<div><img src="{{asset('theme/img/projects/detail-2.jpg')}}" alt=""></div>
						<div><img src="{{asset('theme/img/projects/detail-3.jpg')}}" alt=""></div>
					</div><!-- End / carousel__element owl-carousel -->
					
										<div class="container">
						<div class="consult-projectDetail__main">

						<div class="columns">
							<div class="pricing">
									<header>
										<div class="pricing__icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
										<h2 class="pricing__title">Book now with DP :</h2>
									</header>
							<div>
							@auth('web')
							<div class="pricing__price"><span>Rp</span> {{ $promos->harga_book }} K</div>
								<a href='/transaksi/{{$promos->id}}' class="btn btn-primary btn-outline btn-w180">Book Now</a>
							</div>
							@endauth
							@guest
							<div class="pricing__price"><span>Rp</span> {{ $promos->harga_book }} K</div>
								<a class="btn btn-primary btn-outline btn-w180">Login for Book</a>
							</div>
							@endguest
						</div>
							</div>

							<div class="row">
								<div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
									<div class="consult-projectDetail__content">
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
												<h1></h1>
												<h2 class="text">{{ $promos->promo}}</h2>
												<div class="row row-eq-height" style="margin-bottom:30px;">
													<div class="col-lg-6 ">
											
													</div>
	
												</div>
											</div>
										</div>
									
										<div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
   													<label for="date">Event Price</label>
														<div><span>Rp</span> {{ $promos->Harga }} K</span><br><br>
													<label for="nama">Location</label>
														<div><span> {{ $promos->lokasi }} K</span><br><br>
													<label for="date">Description</label>
														<div>
														<p class="text">{{ $promos->deskripsi }}</p>
														</div>
										</div>
									</div>
									<br><br><br>
									<h3>Gallery Collection</h3>
									<form action="/Detgambar/{{$promos->id}}" method="POST">
									{{csrf_field()}}
									{{method_field('PUT')}}
			 					        <div class="row">
								        @foreach($images as $image)
								        	<div class="col-md-10">
											    <div class="form-group">
												    <img src="{{asset('files/'.$image->nama_gambar)}}" width="610" height="350"/>
											    </div>
											</div>
										@endforeach
										</div>
									</form>
	
										<!-- <div class="row">
											<div class="col-xl-11 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
											<label for="location">Location</label>
												<div id="map" style="width:100%;height:300px;"></div>
													<script>
														function myMap() {
															var myCenter = new google.maps.LatLng(51.508742,-0.120850);
															var mapCanvas = document.getElementById("map");
															var mapOptions = {center: myCenter, zoom: 5};
															var map = new google.maps.Map(mapCanvas, mapOptions);
															var marker = new google.maps.Marker({position:myCenter});
															marker.setMap(map);

															}
													</script>
												</div>
											</div> -->


<!-- 	<div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog" aria-labelledby="ConfirmModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="ConfirmLabel">Term of Booking</h4>
	      </div>
	      <form action="{{ route('user.store'),'test'}}" method="post" >
	      	{{csrf_field()}}
          {{ method_field('post') }}
	      	<div class="modal-body">
	        	@include('user.FormOrder')
	      	</div>
	      	<div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Proceed</button>
	      	</div>
	      </form>
	    </div>
	  </div>
	</div> -->
@endsection			