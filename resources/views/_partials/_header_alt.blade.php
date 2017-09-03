<header class="header-type-2">
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
				<ul class="menu-inline navbar-left">
					<li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Способы оплаты</a></li>
                    <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Помощь</a></li>
				</ul>
				<ul class="menu-inline navbar-right">
					<?/*<li class="contact-info">Контатный тел.: <a class="text-color" href="tel:{{Voyager::setting('phone')}}">{{Voyager::setting('phone')}}</a></li>*/?>
                    @if (Auth::check())
                        <li><a href="{{ url('/lk') }}"><i class="fa fa-user" aria-hidden="true"></i> Личный кабинет</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Выход
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @else
                        <li><a href="{{ url('/login') }}"><i class="fa fa-user" aria-hidden="true"></i> Вход</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Регистрация</a></li>
                    @endif
				</ul>
			</div>	
		</div><!-- ./ CONTAINER -->
	</div>
	<!-- LOGO BAR -->
	<div class="logo-bar">
		<!-- CONTAINER -->
		<div class="container">
			<!-- NAVBAR HEADER -->
			<div class="navbar-header">
				<!-- LOGO -->
				<a class="navbar-brand" href="/"><img class="img-responsive" alt="logo" src="{{ asset('images/logo-1.png') }}" style="width: 210px;"></a> 
			</div>
			<!-- NAVBAR COLLAPSE -->
			<div class="logobar-content">
				<ul class="nav navbar-nav menu-inline navbar-right">
					<li>
						<div class="icon-box">
							<div class="icon-wrapper">
								<!-- ICON -->
								<i class="ion-ios-location-outline icon-bordered"></i>
							</div>
							<div class="inner-wrapper">
								<p class="typo-black">344069, г. Ростов-на-Дону</p>
								<p>такой-то физический адрес</p>
							</div>
						</div>	
					</li>
					<li>
						<div class="icon-box">
							<div class="icon-wrapper">
								<!-- ICON -->
								<i class="ion-ios-clock-outline icon-bordered"></i>
							</div>
							<div class="inner-wrapper">
								<p class="typo-black">9.00 - 19.00</p>
								<p>С Пн. по Пт.</p>
							</div>
						</div>	
					</li>
					<li>
						<div class="icon-box">
							<div class="icon-wrapper">
								<!-- ICON -->
								<i class="ion-ios-email-outline icon-bordered"></i>
							</div>
							<div class="inner-wrapper">
								<p class="typo-black">info@bbfx.ru</p>
								<p>{{Voyager::setting('phone')}}</p>
							</div>
						</div>	
					</li>
				</ul>
			</div><!-- /. NAVBAR COLLAPSE -->
		</div>
	</div>	<!-- /. LOGO BAR -->
	<!-- NAVIGATION -->
	<nav id="sticker" class="navbar navbar-default theme-bg">
		<!-- CONTAINER -->
		<div class="container">
			<!-- NAVBAR HEADER -->
			<div class="navbar-header hidden-sm">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
					<span class="sr-only">Toggle navigation</span> 
					<span class="ion-android-menu"></span>
				</button>
			</div>
			<!-- NAVBAR COLLAPSE -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-left">{{menu('main_nav', '_partials.main_nav')}}</div>
				<ul class="nav navbar-nav menu-inline navbar-right">
					<li><a href="#" class="ion-ios-search search-open"></a></li>
				</ul>
			</div>
			<!-- /.COLLAPSE -->
		</div>
		<!-- /.CONTAINER -->
	</nav><!-- /. NAVIGATION MENU -->
	<div class="full-search-wrapper typo-white">
		<a href="#" class="search-close"><i class="ion-ios-close-empty"></i></a>
		<form class="search-form">
            {{ csrf_field() }}
			<div class="input-group">
				<input type="search" placeholder="Найти вебинары, видео, книги..." name="s" value="" class="form-control search-field">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"><span class="ion-ios-search"></span></button>
				</span>
			</div><!-- /input-group -->
		</form>			
	</div>
</header><!-- /. HEADER -->