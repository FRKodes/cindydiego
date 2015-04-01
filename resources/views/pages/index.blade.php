@extends('default')

@section('content')
	<div class="main-container">
		<h1 class="manus">Cynthia y Diego</h1>
		<h2 class="manus golden">12/Septiembre/2015</h2>
		
		<div class="slider">
			<div class="fade-container">
			  <div><img src="images/01.jpg" width="900" height="400" alt="#CindyBouquetBoda 01"></div>
			  <div><img src="images/02.jpg" width="900" height="400" alt="#CindyBouquetBoda 02"></div>
			  <div><img src="images/03.jpg" width="900" height="400" alt="#CindyBouquetBoda 03"></div>
			  <div><img src="images/04.jpg" width="900" height="400" alt="#CindyBouquetBoda 04"></div>
			  <div><img src="images/05.jpg" width="900" height="400" alt="#CindyBouquetBoda 05"></div>
			  <div><img src="images/06.jpg" width="900" height="400" alt="#CindyBouquetBoda 06"></div>
			  <div><img src="images/07.jpg" width="900" height="400" alt="#CindyBouquetBoda 07"></div>
			  <div><img src="images/08.jpg" width="900" height="400" alt="#CindyBouquetBoda 08"></div>
			  <div><img src="images/09.jpg" width="900" height="400" alt="#CindyBouquetBoda 09"></div>
			  <div><img src="images/10.jpg" width="900" height="400" alt="#CindyBouquetBoda 10"></div>
			  <div><img src="images/11.jpg" width="900" height="400" alt="#CindyBouquetBoda 11"></div>
			  <div><img src="images/12.jpg" width="900" height="400" alt="#CindyBouquetBoda 12"></div>
			  <div><img src="images/13.jpg" width="900" height="400" alt="#CindyBouquetBoda 13"></div>
			  <div><img src="images/14.jpg" width="900" height="400" alt="#CindyBouquetBoda 14"></div>
			  <div><img src="images/15.jpg" width="900" height="400" alt="#CindyBouquetBoda 15"></div>
			  <div><img src="images/16.jpg" width="900" height="400" alt="#CindyBouquetBoda 16"></div>
			</div>
		</div>

		<p class="welcome">
			<span class="left icon-04"></span>
			<span class="text manus">Bienvenidos al sitio de nuestra boda</span>
			<span class="right icon-05"></span>
		</p>
		
		<p class="story manus">
			<span>Esta es nuestra historia</span>
		</p>
		
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam velit, quia, beatae atque, blanditiis aliquid tenetur exercitationem architecto laborum dolore voluptates ullam praesentium! Esse aliquam distinctio cupiditate animi alias, neque.
			<br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores explicabo vero modi debitis nihil. Amet in, vitae similique molestias enim magni itaque ipsam fuga iusto, obcaecati, fugit repellendus vel blanditiis.
		</p>

		<div class="social">
			<figure><img src="images/icono-instagram.jpg" alt="Logo Instagram"></figure>
			<div class="tag">
				<span>Etiqueta tus fotos</span><br>
				<span class="hashtag">#CindyBouquetBoda</span>
			</div>
		</div>
		
		<div class="lg-timer">@include('partials.timer')</div>

	</div>


@stop