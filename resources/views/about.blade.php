@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render() !!}
				<h1 class="page-title bottom-line">О школе</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <p>Наша компания «BvsB Forex» занимается трейдингом на протяжение последних 4 лет, зарабатывая более 500% годовых. У нас за плечами богатый опыт сотрудничества с инвесторами. В компании работают высококвалифицированные <a href="#" class="text-color">специалисты</a>, работающие в различных областях биржевой торговли, в том числе работа на рынке ценных бумаг российских компаний, на товарном и валютном рынках.</p>
                <p>Впервые мы запускаем проект, основной задачей которого является обучение широких масс законам и принципам успешной биржевой торговли. Мы дадим вам представление о рынке Forex, основных понятиях и методах анализа валютного рынка. Наш проект ориентирован как на начинающих – людей, заинтересовавшихся необыкновенным миром трейдинга, так и на трейдеров, имеющих опыт торговли.</p>
                <p>Мы считаем, что каждый человек может реализовать свой потенциал и добиться поставленных целей; всё, что для этого необходимо - это желание изменить свою жизнь к лучшему и упорный труд. Девиз нашей компании: «САМОРАЗВИТИЕ – НАШ КЛЮЧ К УСПЕХУ!!!»</p>
            </div>	
		</div>
        
        <div class="row">
			<div class="col-md-12">
				<h4 class="sub-title">Некоторые факты о нас:</h4>
			</div>
			<div class="col-md-4">
				<div class="pic-shape">
                    <img src="images/project-single/1.jpg" class="img-responsive shadow-block">
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-6">
						<!-- COUNTER WRAPPER -->
						<div class="counter-wrapper clearfix">
							<!-- COUNTER NUMBER -->
							<h3 data-count="500" class="number-counter text-color">500</h3>
							<!-- COUNTER TITLE -->
							<h4 class="counter-title">Прибыль в год</h4>
                            <p>Компания усовершенствовала методы анализа валютного рынка, что приносит в год более <strong class="text-color">500%</strong> прибыли.</p>
						</div>
					</div>
                    <div class="col-sm-6">
						<!-- COUNTER WRAPPER -->
						<div class="counter-wrapper clearfix">
							<!-- COUNTER NUMBER -->
							<h3 data-count="4" class="number-counter text-color">4</h3>
							<!-- COUNTER TITLE -->
							<h4 class="counter-title">Успешный трейдинг</h4>
                            <p>За <strong class="text-color">4</strong> года проб и ошибок нашим специалистам есть чем поделиться с вами!</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	
	</div>
</div>
@endsection