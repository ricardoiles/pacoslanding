@extends('layouts.inicio')
@section('sheetstyle')
<link href="{{ asset('css/pacos.css') }}" rel="stylesheet">
@endsection
@section('suscribirme')
<!--primer section 2dastyles-->
    <section class="section" id="Suscribirme">
        <div class="columns is-desktop pacos-suscribirme">
          <div class="column is-12 pacos-image-b2call-segundasection">
            <div class="columns is-desktop">
              <div class="column is-6 pacos-divtexto-izquierda--segundasection">
                  <label class="pacos-texto-izquierda--segundasection">
                      <b>#PACOS_es</b> La red social de los sitos de comida
                  </label>
              </div>
              <div class="column is-6 pacos-divtexto-derecha--segundasection">
					<label>
					  <b class="pacos-texto-derecha--segundasection">¿Tienes tu sito para comer en internet?</b>
					  <br><br>
					</label>
		            <div class="card">
						<div class="card-content pacos-card-head">
							<p class="title">
							  Si eres dueño o administrador de un sitio de comida con PACOS <b class="pacos-red-text">vendes, creces y atraes nuevos clientes</b>
							  ¡Te aseguramos que <b class="pacos-red-text">esta es la solucion</b>!
							</p>
						</div>
					    <div class="card-content">
					      <form method="post" action="{{ url('/leadsPACOS')}}">
                    {{ csrf_field() }}
						        <div class="field is-horizontal">
						          <div class="field-body">
						            <div class="field">
						              <p class="control is-expanded has-icons-left">
						                <input required class="input" type="text" placeholder="Nombres y apellidos" id="inputnames" name="Nombres">
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
						        <div class="field is-horizontal">
						          <div class="field-body">
						            <div class="field">
						              <p class="control is-expanded has-icons-left">
						                <input required class="input" type="email" placeholder="Correo electronico" id="inputemail" name="Email">
						                <span class="icon is-small is-left">
						                  <i data-feather="mail"></i>
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
                  <br><br>
                  <a href="#AtraeClientes">
                    <button class="button pacos-button--arrow-down-segundasection">
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
@section('segundasection')
<!--cuarta section 7mastyles-->
    <section class="section" id="AtraeClientes">
        <div class="columns">
          <div class="column is-12 pacos-image-4b2call-septimasection">
            <div class="columns is-desktop">
              <div class="column is-6 pacos-divtexto-izquierda--septimasection">
                  <b class="pacos-texto-izquierda--septimasection">
                      ¡Es hora de conocer las opiniones de tus clientes!
                  </b>
                  <br><br>
                  <label class="pacos-minitexto">Vamos <b class="pacos-red-text">atraer nuevos clientes</b> a tu sitio, y podras crecer con cada opinion que ellos te den</label>
                  <br><br>
                  <a href="#OrganizayVende">
                    <button class="button pacos-button--arrow-down-cuartasection">
                        <span class="icon">
                          <i data-feather="arrow-down"></i>
                        </span>
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
@section('tercerasection')
<!--sexta section 6tastyles-->    
    <section class="section" id="OrganizayVende">
        <div class="columns">
          <div class="column is-12 pacos-image-4b2call-sextasection">
            <div class="columns is-desktop">
              <div class="column is-6 pacos-divtexto-izquierda--sextasection">
                  <b class="pacos-texto-izquierda--sextasection">
                      Organiza y vende tu comida
                  </b>
                  <br>
                  <label class="pacos-minitexto">Te brindamos la mejor plataforma para <b class="pacos-red-text"> organizar</b> los detalles de tu sitio y<b class="pacos-red-text"> vender</b> tu comida</label>
                  <br><br>
                  <a href="#ControlayCrece">
                    <button class="button pacos-button--arrow-down-sextasection">
                        <span class="icon">
                          <i data-feather="arrow-down"></i>
                        </span>
                    </button>
                  </a>
              </div>
              <div class="column is-6 pacos-divtexto-derecha--sextasection">
                  <b class="pacos-texto-derecha--sextasection">
                      
                  </b>                  
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection
@section('cuartasection')
    <!--septima section utlimastyles-->    
    <section class="section" id="ControlayCrece">
        <div class="columns">
          <div class="column is-12 pacos-image-4b2call-ultimasection">
            <div class="columns is-desktop">
              <div class="column is-6 pacos-divtexto-izquierda--ultimasection">
                  <b class="pacos-texto-izquierda--sextasection">
                      Pasate a las Herramientas para controlar y optimizar tus procesos
                  </b>
                  <br><br class="last-br">
                  <label class="pacos-texto-izquierda--ultimasection">
                      Con estos servicios tendrás tus <b class="pacos-red-text">registros en orden y respaldados</b>, di adiós a los talonarios o cuadernos de papel <br> 
                      ¡Vas a amar estos servicios!
                  </label>
                  <br><br>
                  	<a href="#Suscribirme">
					    <button class="button is-rounded pacos-sucribirme-btn" title="Volver al inicio">
					    	Suscribirme 
					  </button>
					</a>
              </div>
              <div class="column is-6 pacos-divtexto-derecha--sextasection">
                  <b class="pacos-texto-derecha--sextasection">
                      
                  </b>                  
              </div>
            </div>
          </div>
        </div>
    </section>  
@endsection