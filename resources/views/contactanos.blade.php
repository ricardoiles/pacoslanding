@extends('layouts.inicio')
@section('sheetstyle')
<link href="{{ asset('css/contactanos.css') }}" rel="stylesheet">
@endsection
@section('suscribirme')
<section class="hero">
	<div class="columns is-desktop pacos-hero-section">
	    <div class="column is-12 pacos-left-contacto">
	    	<div class="pacos-contactanos-left-texto">
	    		<b class=" is-1">Contáctanos</b>
	    	</div>
	    				<div class="card">
				<div class="card-content pacos-card-head">					
					<p class="title">
						Estamos atentos a tus mensajes, comunicate con nosotros y <b class="pacos-red-text">conoce las soluciones</b> que estamos preparando para ti
					</p>
				</div>
			    <div class="card-content">
			      <div class="columns is-desktop pacos-hero-section">
	    			<div class="column is-3 pacos-red-contacto">
	    				<a class="facebook" href="http://bit.ly/pacosfb" target="_blank">
		    				<i data-feather="facebook"></i><br>
		    				Facebook
		    			</a>
	    			</div>	    			
	    			<div class="column is-3 pacos-red-contacto">
	    				<a class="twitter" href="https://twitter.com/paracomersitios" target="_blank">
		    				<i data-feather="twitter"></i><br>
		    				Twitter
		    			</a>
	    			</div>
	    			<div class="column is-3 pacos-red-contacto">
	    				<a class="whatsapp" href="wa.link/8ehje5" target="_blank">
		    				<i data-feather="phone-call"></i><br>
		    				WhatsApp
		    			</a>
	    			</div>
	    			<div class="column is-3 pacos-red-contacto">
	    				<a class="email" href="http://bit.ly/pacosemail" target="_blank">
		    				<i data-feather="mail"></i><br>
		    				Email
		    			</a>
	    			</div>
	    		</div>                 
			</div>
	    </div>
	</div>
</section>
@endsection