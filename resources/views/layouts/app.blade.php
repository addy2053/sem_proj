<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Book Banquette','Book Banquette') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" ></script>
    <script src="../../../public/js/custom.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('Book Banquette','Book Banquette') }}

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="active"><a href="/"><b>Home</b></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><b>Online Booking</b> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('halls')}}"><b>Marriage Halls</b></a></li>
                                <li><a href="{{route('BirthdayEventBooking')}}"><b>Birthday Events</b></a></li>
                                <li><a href="{{route('OfficeMeetings')}}"><b>Meeting Bookings</b></a></li>

                            </ul>
                        </li>
                        @role(['admin'])
                        <li><a href="{{route('list')}}"><b>Manage List</b></a></li>
                        <li><a href="{{route('all-users')}}"><b>User's</b></a></li>
                        <li><a href="{{route('feedback_show')}}"><b>Feed Back</b></a></li>
                        @endrole

                        @role(['owner'])
                        <li><a href="{{route('owner_list')}}"><b>Hall's List</b></a></li>
                        @endrole

                        @role(['owner'])
                        <li><a href="{{route('booking')}}"><b>Booking</b></a></li>
                        @endrole

                        @role(['user'])
                        <li><a href="{{route('u_booking')}}"><b>Booking</b></a></li>
                        @endrole

                        <li><a href="{{route('cont')}}"><b>Contact Us </b></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-user"></span>&nbsp <b>Login</b></a></li>
                            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp <b>Register</b></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{route('edit_profile',Auth::user()->name)}}">
                                            Edit-profile
                                        </a>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield("slider")
    @yield('section')
    @yield('colums')
    @yield('contactus')
    @yield('content')

    {{--login/registration--}}

    <!--   FOOTER START================== -->
 <div  style="border: solid #2a88bd;overflow: hidden;">
    <footer class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3">
                    <h4 class="title">About us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
                    <ul class="social-icon">
                        <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </ul>
                </div>

                <div class="col-sm-6">


                </div>
                <div class="col-sm-3">
                    <h4 class="title">Payment</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <ul class="payment">
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row text-center"><a href="http://lacodeid.com/" style="color: #fff;">Copyright © Book Banquette 2017</a></div>
        </div>
    </footer>
 </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@yield('script')
</html>
