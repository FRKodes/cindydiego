@extends('default')

@section('content')
	<div class="main-container">
		<h1 class="manus">Cynthia y Diego</h1>
		
		<h2 class="manus golden">12/Septiembre/2015</h2>

		<div class="recomendaciones manus">Rsvp</div>

		<p class="bold centered phrase">¡Nos encantaría que vinieras a celebrar con nosotros!</p>

		<p class="centered">el siguiente formularioi es solamente para confirmar tu asistencia al evento.</p>

		<p class="centered">Por favor confirma tu asistencia el 12 de Septiembre.</p>
		
		<div class="container">
			
			{!! Form::open() !!}
				<div class="form-group first-line">
					{!! Form::input('text', 'name', null, ['placeholder'=>'*Nombre', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group first-line">
					{!! Form::input('text', 'email', null, ['placeholder'=>'Correo', 'class'=>'form-control']) !!}
				</div>
				<div class="form-group first-line">
					{!! Form::radio('confirm', 'yes', 'checked', []) !!}
					¡Sí, confirmo mi asistencia!
				</div>
				<div class="form-group first-line">
					{!! Form::radio('confirm', 'no', null, []) !!}
					Lo siento, no podré asistir :(
				</div>
				<div class="form-group">
					{!! Form::textarea('message', null, ['placeholder'=>'Mensaje de felicitación o comentario', 'class'=>'form-control'])!!}
				</div>
				<div class="form-group">
					{!! Form::submit('Enviar', ['class'=>'form-control submit-btn']) !!}
				</div>
			{!! Form::close() !!}
		</div>
		
		<div class="lg-timer">@include('partials.timer')</div>

	</div>
@stop