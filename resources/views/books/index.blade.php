@extends('layouts.app')

@section('content')

<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('books') !!}
				<h1 class="page-title bottom-line">Книги по Форекс</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
		@if($books->count())
            <div class="row">
                @foreach($books as $book)
                
                    <?/*
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
                        <div class="thumbnail">
                            <a href="{!! route('book', ['slug' => $book->slug]) !!}">
								<img src="{{ Storage::disk('public')->url($book->image) }}" class="img-responsive">
							</a>
                            <div class="caption">
                                <h4 class="book-title"><a href="{!! route('book', ['slug' => $book->slug]) !!}">{{$book->title}}</a></h4>
                                <p>
                                    <a href="{{$book->url_download}}" class="btn btn-primary" role="button">Скачать</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    */?>
                
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
                        <article>
							<a href="{!! route('book', ['slug' => $book->slug]) !!}">
								<img src="{{ Storage::disk('public')->url($book->image) }}" class="img-responsive">
							</a>
							<h4 class="book-title"><a href="{!! route('book', ['slug' => $book->slug]) !!}">{{$book->title}}</a></h4>
						</article>
            		</div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    {{ $books->links() }}
                </div>
            </div>
        @else
        
        @endif		
	</div>
</div>
@endsection