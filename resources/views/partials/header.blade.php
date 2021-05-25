<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">

            @guest
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item" ><a title="Register or Login" href="{{ url('login') }}">Login</a></li>
                            <li class="menu-item" ><a title="Register or Login" href="{{ url('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @else
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu right-menu">
                            <ul>
                                <li class="menu-item" >Hello {{ Auth::User()->name }}</li>
                                <li class="menu-item" style="margin-left: 15px">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endguest

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section" style="float: left"></div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section minicart">
                            <a href="{{ url('/cart') }}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    @if(Cart::count() > 0)
                                        <span class="index">{{ Cart::count() }} items</span>
                                    @endif
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            @if(Route::has('login'))
                                @auth
                                    @if(Auth::User()->role === 'admin')
                                        <li class="menu-item">
                                            <a href="{{ route('admin.dashboard') }}" class="link-term mercado-item-title">Dashboard</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
