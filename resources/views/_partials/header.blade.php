<!-- HEADER -->
<header>
	<!-- NAV TOP -->
	<div class="nav-top">
		<!-- CONTAINER -->
		<div class="container">
			<!-- TOGGLE -->
			<div class="top-toggle-btn">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false">
					<span class="ion-android-remove"></span>
				 </button>
			 </div>
			<!-- COLLAPSE -->
			<div class="collapse navbar-collapse" id="top-menu">
				<?/*<ul class="menu-inline navbar-left">
					<li class="welcom-text">Hi guest! Welcome to {{ config('app.name', 'Laravel') }}.</li>
					<li class="lang">
						<ul class="list-inline">
							<li><a href="#">EN</a></li>
							<li><a href="#">FR</a></li>
							<li><a href="#">ES</a></li>
						</ul>
					</li>
				</ul>*/?>
				<ul class="menu-inline navbar-right">
					<li class="contact-info">Контатный тел.: <a class="text-color" href="tel:{{Voyager::setting('phone')}}">{{Voyager::setting('phone')}}</a></li>
                    @if (Auth::check())
                        <li><a href="{{ url('/lk') }}">Личный кабинет</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Выход
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @endif
				</ul>
			</div>	
		</div><!-- ./ CONTAINER -->
	</div>
	<!-- NAVIGATION -->
	<nav id="sticker" class="navbar navbar-default">
		<!-- CONTAINER -->
		<div class="container">
			<!-- NAVBAR HEADER -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
					<span class="sr-only">Toggle navigation</span> 
					<span class="ion-android-menu"></span>
				</button>
				<!-- LOGO -->
				<a class="navbar-brand" href="/"><img class="img-responsive" alt="logo" src="{{ asset('images/logo.png') }}"></a> 
			</div>
			<!-- NAVBAR COLLAPSE -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="navbar-right">{{menu('main_nav', '_partials.main_nav')}}</div>
			</div>
			<!-- /.COLLAPSE -->
		</div>
		<!-- /.CONTAINER -->
	</nav><!-- /. NAVIGATION MENU -->
</header><!-- /. HEADER -->