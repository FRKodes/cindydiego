@extends('default')

@section('content')
	
	<div class="main-container">
		<h1 class="manus">Cynthia y Diego</h1>
		<h2 class="manus golden">12/Septiembre/2015</h2>

		<div class="recomendaciones manus">
			Mapas
		</div>
		  
	  <div class="panel-group" id="accordion">
	    
	    @include('partials.mapas.croquis')

	    @include('partials.mapas.templo')

	    @include('partials.mapas.lacetto')

	    @include('partials.mapas.clima')

	  </div>

	  <div class="lg-timer" id="lg-timer"></div>
	  
	</div>
	
@stop