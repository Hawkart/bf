@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('articles') !!}
				<h1 class="page-title bottom-line">Статьи</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
		@if($articles->count())
            <div class="row">
                <div class="col-md-12">
                @foreach($articles as $article)
                    
                    <article class="post post-list media hv-wrapper">
                    
                        <div class="media-left">
							<div class="post-thumbnail overlay-container">
								<a href="{!! route('article', ['slug' => $article->slug]) !!}">
									<div class="dark-overlay"><span class="ion-ios-plus-outline"></span></div>
									<img src="{{ Storage::disk('public')->url($article->image) }}" class="media-object-250" alt="post-img">
								</a>
							</div>
						</div>
                        
                        <div class="media-body">
							<p class="post-date">{{ $article->created_at->diffForHumans() }}</p>
							<h4 class="post-title"><a href="{!! route('article', ['slug' => $article->slug]) !!}">{{$article->title}}</a></h4>
							<p class="post-desc">{{$article->preview_text}}</p>
						</div>
					</article>
                    
                @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $articles->links() }}
                </div>
            </div>
        @else
        
        @endif		
	</div>
</div>
@endsection