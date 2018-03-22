<body>
<div id="app" v-cloak>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MotoFluid</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li><a href="{{route('login')}}" class="btn btn-xs btn-primary"><i class="fa fa-sign-in"
                                                                                       aria-hidden="true"></i> Login</a>
                    </li>
                    @else

                        <li><a href="#" data-delay="200">Welcome {{ Auth::user()->name }}  </a></li>
                        <li><a href="/vehicle" data-delay="200">Vechicles  </a></li>
                        <li><a href="/vehicle/create" >Add New Vehicle</a></li>
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                 Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endguest
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="padding-top: 75px; padding-bottom: 20px">
    <div class="container h-100">