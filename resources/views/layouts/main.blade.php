<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>event organizer</title>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href ="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/fonts/fontawesome/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/fonts/themify-icons/themify-icons.css') }}">
	<!-- Vendors-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/bootstrap4/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/magnific-popup/magnific-popup.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/owl.carousel/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/_jquery/jquery.min.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/bootstrap4/bootstrap-grid.min.css') }}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('theme/vendors/bootstrap4/bootstrap-grid.min.css') }}"> -->
	<!-- App & fonts-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&amp;amp;subset=latin-ext">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/coba.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap-datetimepicker-masterr/css/bootstrap-datetimepicker.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
        @if (\Session::has('fail'))
        <script>
            alert('{{\Session::get('fail')}}');
        </script>
        @endif

	    <div class="page-wrap">
        <header class="header">
				<div class="container">
					<div class="header__logo"><img src="{{asset('theme/img/website_logo.png')}}" alt=""/></div>
					<div class="header__toogleGroup">
						
						<div class="search-form">
							<div class="search-form__toggle"><i class="ti-search"></i></div>
							<div class="search-form__form">			
                                <div class="form-search">
									<form action="/search" method="GET">
									    <input class="form-control" type="text" name="searchItem" id="searchItem" placeholder="Search..."/>
									</form>
								</div>			
							</div>
						</div>
					</div>
    <script>
        
          $( function() {
            var availableTags = [
              "ActionScript",
              "AppleScript",
              "Asp",
              "BASIC",
              "C",
              "C++",
              "Clojure",
              "COBOL",
              "ColdFusion",
              "Erlang",
              "Fortran",
              "Groovy",
              "Haskell",
              "Java",
              "JavaScript",
              "Lisp",
              "Perl",
              "PHP",
              "Python",
              "Ruby",
              "Scala",
              "Scheme"
            ];
            $( "#SearchItem" ).autocomplete({
              source: availableTags
            });
          } );
     </script>			
					<!-- consult-nav -->
					<nav class="consult-nav">
						
						<!-- consult-menu -->
						<ul class="consult-menu">
                        <li ><a href="{{ URL::to('/')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('birthday.index')}}"><i class="fa fa-birthday-cake"></i> Birthday Party</a>
                                        
                                    </li>
                                    <li><a href="{{route('wedding.index')}}"><i class="fa fa-transgender"></i> Wedding</a>
                                        
                                    </li>
                                    <li><a href="{{route('graduation.index')}}" ><i class="fa fa-graduation-cap"></i> Graduation</a>
                                        
                                    </li>
                                </ul>
                            </li>
                            
                            <li ><a href="{{url('about')}}">ABOUT</a>
                            </li>
                            <li ><a href="/tampil">GALLERY</a>
                            </li>
                            <li class="menu-item-has-children">
                                @guest
                                <li><a href="{{ route('login') }}" data-toggle="modal" data-target="#LoginModal" data-dismiss="modal">{{ __('LOGIN') }}</a></li>
                            </li>
                            
                            <li><a href="{{ route('register') }}" data-toggle="modal" data-target="#RegisterModal" data-dismiss="modal">{{ __('SIGN UP') }}</a></li>
                            </li>

                            @else
                                 <li class="menu-item-has-children"><a href=""><i class="fa fa-user-circle"> &nbsp;&nbsp;  {{ Auth::user()->name }} </a></i>
                                        <ul class="sub-menu">
                                            <li><a href="/OrderList/{{Auth::user()->id}}"><i class="fa fa-calendar"></i> My Order</a></li>
                                            <li><a href="/myaccount/{{Auth::user()->id}}"><i class="fa fa-user"></i> My Account</a></li>
                                            <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                            </li>
                                        </ul>
                                </li>
                                @endguest
						</ul><!-- consult-menu -->
						
						<div class="navbar-toggle"><span></span><span></span><span></span></div>
					</nav><!-- End / consult-nav -->
					
				</div>
			</header><!-- End / header -->

        <main class="py-4" style="background-color:white">
            @yield('content')
        </main>
                    <!-- footer -->
            <footer class="footer">
                <div class="footer__main">
                    <div class="row row-eq-height">
                        <div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
                            <div class="footer__item"><a class="consult_logo" href="#"><img src="{{ asset('theme/img/website_logo.png') }}" alt=""/></a>
                                <p>Hypsteria Event is a project made by Group 14 from Information Technology, Engineering Faculty, Udayana University.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
                            <div class="footer__item">
                                    
                                  
                                    
                                    
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-2 ">
                            <div class="footer__item">
                                    
                                    
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
                            <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span>Back To Top</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">2018 &copy; event_org All rights Reserved.</div>
            </footer>

            <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                            {{ csrf_field()}}
                            <div class="modal-body">
                                @include('auth.login')
                            </div>
                        </form>
                    </div>
                </div>  
            </div>

            <div class="modal fade" id="ForgotModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field()}}
                            <div class="modal-body">
                                @include('auth.passwords.email')
                            </div>
                        </form>
                    </div>
                </div>  
            </div>

            <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field()}}
                            <div class="modal-body">
                                @include('auth.register')
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
            
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>        
        <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>  
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
         <!--script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>!-->
        <!--<script type="text/javascript" src="{{ asset('theme/vendors/jquery/jquery.min.js') }}"></script> !-->
		<script type="text/javascript" src="{{ asset('theme/vendors/imagesloaded/imagesloaded.pkgd.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/isotope-layout/isotope.pkgd.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/jquery.countdown/jquery.countdown.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/jquery.countTo/jquery.countTo.min.js') }}"></script>
		<script type="text/javascript" src="{{  asset('theme/vendors/jquery.countUp/jquery.countup.min.js') }}"></script>
		<script type="text/javascript" src="{{  asset('theme/vendors/jquery.matchHeight/jquery.matchHeight.min.js') }}"></script>
		<script type="text/javascript" src="{{  asset('theme/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{  asset('theme/vendors/masonry-layout/masonry.pkgd.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/owl.carousel/owl.carousel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/jquery.waypoints/jquery.waypoints.min.js') }}"></script>
		<script type="text/javascript" src="{{  asset('theme/vendors/menu/menu.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('theme/vendors/smoothscroll/SmoothScroll.min.js') }}"></script>
        <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
        <!-- App-->
        
		<script type="text/javascript" src="{{ asset('theme/js/main.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 