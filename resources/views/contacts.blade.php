@extends('layouts.app')

@section('content')
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('contacts') !!}
				<h1 class="page-title bottom-line">Контактные данные</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
<div class="page-content">
	<!-- CONTAINER -->
	<div class="container">	
		<div class="row">
			<div class="col-md-4">
				<div data-animation-delay="300" data-animation="fadeInUp" class="section-title clearfix animated">
                    <table class="table project-details table-responsive">
						<tbody>
							<tr>
								<td>Телефоны:</td>
								<td class="text-color">+7 (900)-135-52-17<br />+7 (928)-754-35-05</td>
							</tr>
							<tr>
								<td>Электронная почта:</td>
								<td class="typo-black">info@bbfx.ru</td>
							</tr>
							<tr>
								<td>Группа Вконтакте:</td>
								<td class="typo-black"><a href="https://vk.com/forexbvsb" target="_blank">forexbvsb</a></td>
							</tr>
							<tr>
								<td>Канал YouTube:</td>
								<td class="typo-black"><a href="https://www.youtube.com/channel/UCtNQxF0gKXHFMYlChZgpmoA" target="_blank">forexbvsb</a></td>
							</tr>
						</tbody>	
					</table>
                </div>
			</div>
			<div class="col-md-8">
				<!-- Form Begins -->
				<div class="contact-form typo-black animated" data-animation="fadeInUp" data-animation-delay="200">
	
                <form name="contactform2" id="contactform2" class="form-horizontal" method="POST" action="{{ route('contact_form') }}">
                    {{ csrf_field() }}
                    <!-- Field 1 -->
					<div class="row">
						<div class="col-md-6">
							<div class="input-text form-group">
								<label>Имя<span class="text-color">*</span></label>
								<input type="text" name="contact_name" class="input-name form-control" placeholder="Введите ваше имя" />
							</div>
						</div>
						<div class="col-md-6">
							<!-- Field 3 -->
							<div class="input-email form-group">
								<label>Email<span class="text-color">*</span></label>
								<input type="email" name="contact_email" class="input-email form-control" placeholder="Введите ваш email"/>
							</div>
						</div>
					</div>		
					<div class="row">
						<div class="col-md-12">
							<!-- Field 4 -->
							<div class="textarea-message form-group">
								<label>Сообщение<span class="text-color">*</span></label>
								<textarea name="contact_message" class="textarea-message form-control" rows="3" placeholder="Введите сообщение" ></textarea>
							</div>
						</div>
					</div>		
					<!-- Button -->
					<div class="row">
						<button class="btn btn-default btn-theme text-uppercase" type="submit">Отправить</button>
                        <div>
                            <p class="form-message"></p>
                        </div>
					</div>
				</form>
				<!-- Form Ends -->
				</div>
			</div>
		</div>	
	</div>	<!-- /.CONTAINER -->
</div><!-- /. PAGE CONTENT -->
@endsection