@extends('layouts.app')

@section('content')
    
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('article', $article) !!}
				<h1 class="page-title bottom-line">{{ $article->title }}</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
        <div class="row">
			<div class="col-md-12">
                {!! $article->description !!}
            </div>	
		</div>		
	</div>
</div>

@endsection