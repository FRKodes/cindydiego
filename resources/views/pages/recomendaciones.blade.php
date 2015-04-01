@extends('default')

@section('content')
  <div class="main-container">
  	<h1 class="manus">Cynthia y Diego</h1>
  	<h2 class="manus golden">12/Septiembre/2015</h2>

  	<div class="recomendaciones manus">
  		Recomendaciones
  	</div>
  	  
    <div class="panel-group" id="accordion">
      
      @include('partials.hoteles.tj')

      @include('partials.hoteles.ensenada')

      @include('partials.hoteles.gdpe')
      
      @include('partials.salones')
      
      @include('partials.dresscode')

    </div>

    <p class="centered">
    	En <a href="http://www.zonaturistica.com/atractivos-turisticos-en/5/ensenada-baja-california.html" target="_blank" class="link" title="Más recomendaciones">esta página</a> podrás encontrar todos los atractivos de Ensenada y Valle de Guadalupe tanto hospedaje, restaurantes y sitios que visitar.
    </p>
    
    <div class="lg-timer">@include('partials.timer')</div>
    
  </div>


@stop