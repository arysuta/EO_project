@extends('layouts.main')

@section('content')

            
            <!-- Content-->
            <div class="md-content">
                
                <!-- slider -->
                <div class="slider">
                    
                    <!-- carousel__element owl-carousel -->
                    <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 3000}'>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1080/1083');"> 
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We are Making an Event</h2>
                                            <p>This Event Organizer will make your events like weddings, birthday parties and graduation to be perfect and unforgettable </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item" style="background-image: url('https://picsum.photos/1920/1080');">
                            <div class="md-tb">
                                <div class="md-tb__cell">
                                    <div class="slider__content">
                                        <div class="container">
                                            <h2>We create the trend</h2>
                                            <p>This Event Organizer will not disappoint you with boring or used things, because KuyWaw Event Organizer will create something new and make your event a trend among the community</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End / carousel__element owl-carousel -->
                    
                </div><!-- End / slider -->
                
                <!-- Service-->
                
                <!-- Section -->
                <section class="md-section" style="background-color:#f7f7f7;padding:0;">
                    <div class="container">
                        <div class="textbox-group">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('birthday.index')}}"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('birthday.index')}}">Birthday Party</a></h2>
                                            <div class="textbox__description">Without us, your birthday would have been just another day in the calendar. Let's celebrate!</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('wedding.index')}}"><img src="{{ asset('theme/img/wedding.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('wedding.index')}}">Wedding Party</a></h2>
                                            <div class="textbox__description">Happy Event Organizer is the best choice for your perfect and exclusive wedding party. Lets Celebrate! </div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    
                                    <!-- textbox -->
                                    <div class="textbox">
                                        <div class="textbox__image"><a href="{{route('graduation.index')}}"><img src="{{ asset('theme/img/grad.jpg') }}" alt=""/></a></div>
                                        <div class="textbox__body">
                                            <h2 class="textbox__title"><a href="{{route('graduation.index')}}">Graduation</a></h2>
                                            <div class="textbox__description">Happy Event Organizer will help you to make an unforgettable graduation party. Lets celebrate!</div>
                                        </div>
                                    </div><!-- End / textbox -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End / Section -->
                
                
                <!-- Section -->

                <section class="md-section consult-background">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
                                
                                <!-- title-01 -->
                                <div class="title-01">
                                    <h2 class="title-01__title">Galleries</h2>
                                </div><!-- End / title-01 -->
                                
                            </div>
                        </div>
                        
                        <!-- carousel__element owl-carousel -->
                        <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3}}}'>
                            @if(count($data) > 0)
                                @foreach($data->all() as $row)
                                <!--  -->
                                <div>
                                    <div class="post-01__media"><a href="#"><img src="{{ asset('files/'.$row->nama_gambar) }}" alt=""/></a>
                                    </div>

                                </div><!-- End /  -->
                                @endforeach
                            @else
                                <h1>Data kossong</h1>
                            @endif
                            <!-- End /  -->
                            
                        </div><!-- End / carousel__element owl-carousel -->
                        
                        
                    </div>
                </section>
                <!-- End / Section -->
                
 <section class="md-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 ">
                                
                                <!-- title-01 -->
                                    <div class="title-01 title-01__style-03 md-text-left">
                                            <h6 class="title-01__subTitle">about</h6>
                                            <h2 class="title-01__title">We Organize Your Event</h2>
                                        <div>We help you to reach your moments dream and make it happen!</div>
                                    </div><!-- End / title-01 -->
                            </div>
                            <div class="col-lg-6 ">
                                <div id="map" style="width:100%;height:500px;"></div>
                                    <script>
                                        function myMap() {
                                            var myCenter = new google.maps.LatLng(51.508742,-0.120850);
                                            var mapCanvas = document.getElementById("map");
                                            var mapOptions = {center: myCenter, zoom: 5};
                                            var map = new google.maps.Map(mapCanvas, mapOptions);
                                            var marker = new google.maps.Marker({position:myCenter});
                                            marker.setMap(map);

                                            // var infowindow = new google.maps.InfoWindow({
                                            //     content: "Hello World!"
                                            // });
                                            // infowindow.open(map,marker);
                                            }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
