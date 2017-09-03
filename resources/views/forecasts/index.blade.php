@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('forecasts') !!}
				<h1 class="page-title bottom-line">Аналитика форекс</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>

<div class="page-content">
	<div class="container">
		@if($forecasts->count())
            <div class="news__list forecast__list">
                @foreach($forecasts as $forecast)
                    
                    <div class="news__item">
                        <div class="news__date"><span class="news__time">{{ \Carbon\Carbon::parse($forecast->created_at)->format('H:i')}}</span> / {{ \Carbon\Carbon::parse($forecast->created_at)->format('d.m.Y')}}</div>
                        <h2 class="news__title">
                            <a href="{!! route('forecast', ['slug' => $forecast->slug]) !!}">
                                {{$forecast->title}}
                            </a>
                        </h2>
						<div class="news__announce">
                            {{$forecast->preview_text}}
                        </div>
					</div>
    				
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $forecasts->links() }}
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    
                </div>
            </div>
        @endif		
	</div>
</div>
@endsection