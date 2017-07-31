@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('videos') !!}
				<h1 class="page-title bottom-line">Видео по Форекс</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
      
<section class="grey-bg">
	<div class="container">
		@if($videos->count())
            <div class="row">
            @foreach($videos as $video)
            
                <div class="col-sm-4">
    				<div class="img-grid white-bg text-center hv-wrapper">
                        <div class="overlay-container">
    						<div class="dark-overlay"></div>
                            <img src="{{ Storage::disk('public')->url($video->image) }}" class="img-responsive" alt="grid-img" height="250" width="370">
    						<a href="{{$video->url}}" class="youtube ion-ios-play pretty-play pretty-middle" title=""></a>
    					</div>
    					<div class="grid-details">
    						<h4><a href="{!! route('video', ['slug' => $video->slug]) !!}">{{$video->title}}</a></h4>
    						<p>{{ str_limit($video->description, 100) }}</p>							
                        </div>	
    				</div>
    			</div>

            @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $videos->links() }}
                </div>
            </div>
        @else
        
        @endif		
	</div>
</section>
    
<?/*
<div class="page-content">
	<div class="container">
		@if($videos->count())
            <div class="row">
            @foreach($videos as $video)
                <div class="col-md-6 col-sm-12 col-xs-12 mb-20">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12" data-background="{{ Storage::disk('public')->url($video->image) }}" style="height: 150px">
    						<div class="dark-overlay"></div>
    						<a href="{{$video->url}}" class="youtube ion-ios-play pretty-play pretty-middle" title=""></a>
    					</div>
                        
                        <div class="col-md-8 col-sm-8 col-xs-12">
    						<h4><a href="{!! route('video', ['slug' => $video->slug]) !!}">{{$video->title}}</a></h4>
                            <p>{{ str_limit($video->description, 180) }}</p>
                		</div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $videos->links() }}
                </div>
            </div>
        @else
        
        @endif		
	</div>
</div>*/?>
@endsection



