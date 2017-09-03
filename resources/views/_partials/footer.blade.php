<footer class="black-bg typo-white parallax-bg"  data-background="{{ asset('images/bg/footer-bg.jpg') }}">
	<div class="footer-widget-area">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h4 class="widget-title">О нас</h4>
						<ul class="widget-menu">
							<li><a href="{{route('about')}}">О школе</a></li>
                            <li><a href="{{route('teachers')}}">Преподаватели</a></li>
                            <?/*<li><a href="#">Партнеры</a></li>
							<li><a href="#">Отзывы</a></li>*/?>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h4 class="widget-title">Обучение</h4>
						<ul class="widget-menu">
							<li><a href="#">Стратегии</a></li>
							<li><a href="#">Вебинары</a></li>
							<li><a href="#">Индивидуальное обучение</a></li>
							<li><a href="{{route('books')}}">Книги</a></li>
                            <li><a href="{{route('videos')}}">Видео</a></li>
                            <li><a href="{{route('articles')}}">Статьи</a></li>
                            <li><a href="#">Торговые роботы</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h4 class="widget-title">Информация</h4>
						<ul class="widget-menu">
							<li><a href="#">Новости</a></li>
							<li><a href="#">Помощь</a></li>
							<li><a href="/politika-obrabotki-personal-nyh-dannyh">Политика обработки персональных данных</a></li>
							<li><a href="/preduprezhdenie-o-riskah">Предупреждение о рисках</a></li>
                            <li><a href="#">Договор оферты</a></li>
                            <li><a href="#">Политика конфиденциальности</a></li>
							<li><a href="#">Карта сайта</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
                    <div class="widget widget-subscribe">
						<h4 class="widget-title">Подписка</h4>
						<div class="subscribe-form">
							<p class="subscribe-message"></p>
							<form id="subscribe_form" action="" method="post" name="subscribe_form" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
								<div class="input-group form-group has-feedback">
									<div class="form-inner">
                                        <input type="email" class="form-control" value="" name="subscribe_email" placeholder="Введите email..." data-bv-field="subscribe_email"><i class="form-control-feedback bv-no-label" data-bv-icon-for="subscribe_email" style="display: none;"></i>
									</div>
									<span class="input-group-btn">
										<button class="btn" type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
									</span>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="subscribe_email" data-bv-result="NOT_VALIDATED" style="display: none;">Введите email!</small>
                                    <small class="help-block" data-bv-validator="emailAddress" data-bv-for="subscribe_email" data-bv-result="NOT_VALIDATED" style="display: none;">Введите корректный email!</small>
                                </div>
							</form>
						</div>
                        <br />
                        <h4 class="widget-title">Мы в соц. сетях</h4>
                        <a href="#" target="_blank" class="btn-social btn-facebook btn-sm"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank" class="btn-social btn-twitter btn-sm"><i class="fa fa-twitter"></i></a>
                        <a href="{{Voyager::setting('social_vk')}}" target="_blank" class="btn-social btn-vk btn-sm"><i class="fa fa-vk"></i></a>
                        <a href="{{Voyager::setting('social_youtube')}}" target="_blank" class="btn-social btn-youtube btn-sm"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank" class="btn-social btn-telegram btn-sm"><i class="fa fa-telegram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<hr>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-logo">
					<img alt="footer-logo" src="{{ asset('images/logo-f.png') }}" style="width: 200px">
				</div>
                
                <div class="col-md-4">
                    <p>BvsBForex не является брокерской компанией и не ведет брокерскую деятельность.</p>
                </div>
				<div class="col-md-4 footer-info">
					<p>© 2017 {{ config('app.name', 'Laravel') }}. Все права защищены.<br>Разработано <a href="http://hawkart.ru" class="typo-white">Hawkart</a>.</p>
				</div>
			</div>
		</div>		
	</div>
</footer>