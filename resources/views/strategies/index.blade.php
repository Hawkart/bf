@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('strategies') !!}
				<h1 class="page-title bottom-line">Стратегии</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>

<div class="page-content">
	<div class="container">
		@if($strategies->count())
            <div class="news__list">
                @foreach($strategies as $strategy)
                    
                    <div class="news__item">
                        <h2 class="news__title">
                            <a href="{!! route('strategy', ['slug' => $strategy->slug]) !!}">
                                {{$strategy->title}}
                            </a>
                        </h2>
						<div class="news__announce">
                            {!! $strategy->timeframe !!}.&nbsp;&nbsp;{!! $strategy->symbols !!}<br />
                            {{$strategy->preview_text}}
                        </div>
					</div>
    				
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $strategies->links() }}
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