@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('calendar') !!}
				<h1 class="page-title bottom-line">Экономический календарь</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! $calendar !!}
			</div>
		</div>	
	</div>
</div>
@endsection