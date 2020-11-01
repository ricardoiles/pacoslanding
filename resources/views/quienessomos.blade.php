@extends('layouts.inicio')
@section('sheetstyle')
<link href="{{ asset('css/quienes_somos.css') }}" rel="stylesheet">
@endsection
@section('suscribirme')
<section class="hero" id="Suscribirme">
	<div class="columns is-desktop pacos-hero-section">
	    <div class="column is-8">
	    	<div class="pacos-somos-left-texto">
		    	<b>#PACOS_es</b> La red social de los sitios de comida
		    	<br>
		        <label class="pacos-20px-texto">¡No esperes más, visita lo mejor y obtén economía!</label>
		        <br>
		        Conoce ahora el mundo PACOS
				<br><br>
                  <a href="#TeamPDL">
                    <button class="button pacos-button--arrow-down">
                        <span class="icon">
                          <i data-feather="arrow-down"></i>
                        </span>
                    </button>
                  </a>
		    </div>
	    </div>
		<div class="column is-4 pacos-somos--div-right">
			<img class="pacos-somos--sites-image" src="{{ asset('images/quienessomos1.png') }}">
		</div>
	</div>
</section>
@endsection
@section('segundasection')
<section class="section" id="TeamPDL">
	<div class="columns is-desktop">
		<div class="column is-12 pacos-team-pdl--is-12">
			<b class="title is-2">Somos Plataforma de lanzamiento</b>

		  <div class="columns is-desktop pacos-team-pdl-divteam">
		    <div class="column is-4">
		    	<img class="pacos-team-pdl--ricardo-image" src="{{ asset('images/ricardo.jpg') }}">
		    	<br>
		        <b class="">Ricardo Iles</b>
		        <p>CEO Plataforma de lanzamiento</p>
		        <p>Emprendedor, desarrollador y diseñador web junior</p>
		        <a href="http://bit.ly/riccardoiles" target="_blank"><button class="button is-rounded pacos-team-pdl-go-btn"> Portafolio web</button></a>
		    </div>
		    <div class="column is-4">
		    	<img class="pacos-team-pdl-logoPDL" src="{{ asset('images/logoPDL.png') }}">
		    	<br>
                  
		    </div>
		    <div class="column is-4">
		    	<img class="pacos-team-pdl--ricardo-image" src="{{ asset('images/david.jpg') }}">
		    	<br>
		        <b class="">Hatzxelthg David Delgado</b>
		        <p>CMO Plataforma de lanzamiento</p>
		        <p>Emprendedor, desarrollador de negocios y técnico en ventas</p>
		        <a href="http://bit.ly/hatzxelthg" target="_blank"><button class="button is-rounded pacos-team-pdl-go-btn"> Facebook </button></a>
		    </div>
		  </div>
		</div>
	</div>
	<div class="columns is-desktop">
	  <div class="column is-12 pacos-team-pdl--city-divimage">
	  	<a href="#Solucion">
            <button class="button pacos-button--arrow-down-red-team">
                <span class="icon">
                  <i data-feather="arrow-down"></i>
                </span>
            </button>
        </a>
	  	<img class="pacos-team-pdl--city-image" src="{{ asset('images/sitespacos.png') }}">
	  </div>
	</div>
</section>
@endsection
@section('tercerasection')
<section class="hero" id="Solucion">
	<div class="columns is-desktop pacos-final-section">
	    <div class="column is-6">
	    	<div class="pacos-final-left-texto">
		    	<b>#PACOS_es</b> La red social de los sitios de comida
		    	<br>
		        <label class="pacos-20px-texto"><b>¡Ya no esperes</b> o visites sitios de comida <b>con Temor</b>!
			        <br><br>
			        En <b>PACOS</b> te damos soluciones
					<br>
                  <a href="{{ route('contactanos') }}">
                    <button class="button is-rounded pacos-sucribirme-btn">
                        Contactanos
                    </button>
                  </a>
                </label>
		    </div>
	    </div>
		<div class="column is-6 pacos-final--div-right">
			<img class="pacos-final--sites-image" src="{{ asset('images/final.png') }}">
		</div>
	</div>
</section>
@endsection