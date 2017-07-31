@extends('layouts.app')

@section('content')
    
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('book', $book) !!}
				<h1 class="page-title bottom-line">{{ $book->title }}</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
		<div class="row">
            <div class="col-md-3">
                <img src="{{ Storage::disk('public')->url($book->image) }}" class="img-responsive">
            </div>
			<div class="col-md-9">
                <p><b class="typo-black">Автор:</b> {!! $book->author !!}<br />
                <b class="typo-black">Год:</b> {!! $book->year !!}<br />
                <b class="typo-black">Язык:</b> {!! $book->language !!}</p>
                <p>
                    <a href="{{$book->url_download}}" class="btn btn-primary" role="button">Скачать</a>
                </p>
                {!! $book->full_text !!}
            </div>	
		</div>		
	</div>
</div>

@endsection