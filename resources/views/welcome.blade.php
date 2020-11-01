@extends('layouts.inicio')
@section('sheetstyle')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('suscribirme')
<section class="hero" id="Suscribirme">
	<div class="columns is-desktop pacos-hero-section">
	    <div class="column is-6 pacos-divimage-primersection">
	        <img src="images/1B2C.png" class="pacos-imageb2c-primersection">
	    </div>
		<div class="column is-6 pacos-divtexto-primersection">
			<b class="pacos-texto-primersection">Te conectamos ágil y seguro con sitos para comer cercanos</b>
			<br><br>
			<div class="card">
				<div class="card-content pacos-card-head">
					<p class="title">
					  <b class="pacos-red-text">#PACOS_es</b> la red social de los sitios de comida, donde encontraras detalles y reseñas especificas de los sitios micro, pequeños y medianos y su comida.
					  <b class="pacos-red-text">¡Suscribete y recibe soluciones!</b>
					</p>
				</div>
			    <div class="card-content">
			        <form method="post" action="{{ url('/leads')}}">
			        	{{ csrf_field() }}
				        <div class="field is-horizontal">
				          <div class="field-body">
				            <div class="field">
				              <p class="control is-expanded has-icons-left">
				                <input required class="input" type="text" placeholder="Nombres y apellidos" id="inputnames" name="Nombres" value="">
				                <span class="icon is-small is-left">
				                  <i data-feather="user"></i>
				                </span>
				              </p>
				            </div>
				              <div class="field">
				              <p class="control is-expanded has-icons-left">
				                <input required class="input" type="number" placeholder="WhatsApp" id="inputwhatsapp" name="WhatsApp">
				                <span class="icon is-small is-left">
				                  <i data-feather="phone"></i>
				                </span>
				              </p>
				            </div>                            
				          </div>
				        </div>
				        @if(session('message'))
						<div class="block content" style="width: 100%; text-align: center;">
						  <span class="tag is-success">
							     {{session('message')}}						
						  </span>
						</div>
						@endif
				        <div class="field is-horizontal">
				          <div class="field-body">
				            <div class="field">
				              <div class="control">
				                <input type="submit" class="button is-rounded pacos-enviar-contactosection" value="Suscribirme">
				              </div>
				            </div>
				          </div>
				        </div>
				    </form>
			    </div>                  
			</div>
			<br>
			<a href="#Satisfaccion">
		        <button class="button pacos-button--arrow-down-primersection" title="Ver más">
		          <span class="icon">
		            <i data-feather="arrow-down"></i>
		          </span>
		      </button>
		    </a>
		</div>
	</div>
	<div class="columns is-desktop">
	    <div class="column is-12">
	        <img src="images/sitespacos.png" class="pacos-image-sitespacos-primerasection">
	  	</div>
	</div>
</section>
@endsection
@section('segundasection')
<section class="section" id="Satisfaccion">
	<div class="columns is-desktop">
	<div class="column is-12 pacos-image-b2call-segundasection">
	  <div class="columns is-desktop">
	    <div class="column is-6 pacos-divtexto-izquierda--segundasection">
	        <b class="pacos-texto-izquierda--segundasection">
	            ¿Por donde buscas sitios para comer?
	        </b>
	        <br><br>
	    </div>
	    <div class="column is-6 pacos-divtexto-derecha--segundasection">
	    	<label class="pacos-minitext">A menudo buscas por redes sociales</label>        
	        <b class="pacos-texto-derecha--segundasection">
	        	<br>¿Cuánto tardas en elegir?<br> 
	        </b>
	        <br>
	        <label class="pacos-minitext">La falta de detalles y reseñas te genera inseguridad. Con <b class="pacos-red-text">PACOS</b> te aseguramos más del 80% de <b class="pacos-red-text">Satisfacción</b></label>
	        <br><br>
	        <a href="#SeAcaboLaEspera">
			    <button class="button pacos-button--arrow-down-primersection" title="Ver más">
			      <span class="icon">
			        <i data-feather="arrow-down"></i>
			      </span>
			  </button>
			</a>
	    </div>
	  </div>
	</div>
	</div>
</section>
@endsection
@section('tercerasection')
<section class="section" id="SeAcaboLaEspera">
	<div class="columns">
		<div class="column is-12 pacos-image-3b2call-tercerasection">
			<div class="columns is-desktop">
				<div class="column is-6 pacos-divtexto-izquierda--tercerasection">
					<b class="pacos-texto-izquierda--tercerasection">
						¿Cuánto esperarías en el sitio por la comida?
					</b>
					<br><br>
					<label class="pacos-minitext">Por medio de reservaciones u ordenes a traves de PACOS, desde cualquier sitio y a cualquier hora, <b class="pacos-red-text">evitaras esperar</b> mas de 10 minutos.</label>
					<br><br>
					<a href="#LaMejorExperiencia">
					    <button class="button pacos-button--arrow-down-primersection" title="Ver más">
					      <span class="icon">
					        <i data-feather="arrow-down"></i>
					      </span>
					  </button>
					</a>
				</div>
				<div class="column is-6 pacos-divtexto-derecha--tercerasection">
					<b class="pacos-texto-derecha--tercerasection">
						¿La espera lo vale?
					</b>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('cuartasection')
<section class="section" id="LaMejorExperiencia">
	<div class="columns">
	  <div class="column is-12 pacos-image-4b2call-septimasection">
	    <div class="columns is-desktop">
	      <div class="column is-6 pacos-divtexto-izquierda--septimasection">
			<b class="pacos-texto-izquierda--septimasection">
			  ¿Qué te detiene de ir a un nuevo sitio para comer?
			</b>
			<br><br>
			<label class="pacos-minitext">
				Te ofrecemos <b class="pacos-red-text">la mejor experiencia</b> al buscar, visitar u ordenar comida en los sitios cercanos
				<br>
				Con seguridad te encantaran las soluciones que hemos creado <b class="pacos-red-text">para ti</b>
			</label>
			<br><br>
	        <a href="#Suscribirme">
			    <button class="button is-rounded pacos-sucribirme-btn" title="Volver al inicio">
			    	Suscribirme 
			  </button>
			</a>
	      </div>
	      <div class="column is-6 pacos-divtexto-derecha--sextasection">               
	      </div>
	    </div>
	  </div>
	</div>
</section>
@endsection