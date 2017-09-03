@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render() !!}
				<h1 class="page-title bottom-line">Преподаватели</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>

<div class="page-content">
	<div class="container">
        <div class="row">
            <div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ asset('images/teachers/m_k_i.jpg') }}" class="img-responsive">
				</div>
			</div>
            <div class="col-md-8">      
                <h4 class="post-title">Старший преподаватель: Хейгетян Максим Игоревич</h4>
                <p class="post-desc">Финансовый аналитик. Профессиональный трейдер, торгует на рынке forex с 2014 года. <br />Специализируется на торговле валютными парами: EURUSD; CADUSD; GPBUSD; NZDUSD, а также фьючерсами: BRENT, XAGUSD. Основной торговый инструмент – BRENT, на нём совершает более 50% сделок. Использует комплексный анализ рынка. Средняя прибыль более 500% годовых. Предпочитает краткосрочный и среднесрочный виды торговли.</p>
			</div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
				<div class="post-thumbnail">
					<img src="{{ asset('images/teachers/s_m_s.jpg') }}" class="img-responsive">
				</div>
			</div>
            <div class="col-md-8">      
                <h4 class="post-title">Преподаватель: Максименко Сергей Сергеевич</h4>
                <p class="post-desc">Профессиональный трейдер, торгует на рынке forex с 2015 года. <br />Специализируется на торговле валютными парами: EURUSD; GPBUSD, а также фьючерсами: BRENT, XAGUSD. Использует технический анализ рынка. Средняя прибыль более 200% годовых. Предпочитает краткосрочный вид торговли и интрадей.</p>
			</div>
        </div>
        
	</div>
</div>
@endsection