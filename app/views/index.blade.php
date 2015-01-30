@extends('main')
@section('content')
<div class="row contenedorGrande banner">
	<img src="{{ URL::to('images/banner.gif') }}">
</div>
<div id="project" class="row contenedorGrande">
	<div class="container">
		<div class="col-xs-12">
			<div class="col-xs-6 cont_titulo_serv">
				<img src="{{ asset('images/img_serv/nuestros servicios-01.png') }}">
			</div>
			<div class="col-xs-12">
				<div class="col-xs-6 contenedorBot textoServicios">
					<h3>AGENCIA DE DISEÑO GRÁFICO PUBLICITARIO Y SISTEMAS ADMINISTRATIVOS</h3>
					<p class="textoPromedio"><strong>Tecnographic de Venezuela, C.A.</strong>, es su agencia de Diseño Grafico y de Sistemas Administrativos, en Maracay, Venezuela; contamos con personal altamente calificado en el ramo de la publicidad digital, diseño gráfico y diseño de herramientas online como páginas web, tiendas virtuales, campañas de email, redes sociales y sistemas administrativos. Estamos ubicados en la Ciudad de Maracay, además prestamos todos nuestros servicios de diseño gráfico en el resto de Venezuela.</p>
					<p class="textoPromedio">
					 Entre nuestros servicios como agencia publicitaria y consultora podemos citar: Asesoría en estrategias de mercadeo, Diseño de Imagen Corporativa, Diseño Gráfico, Diseño de Logotipos en Maracay, Diseño de Páginas Web  en Maracay, Diseño de Afiches en Maracay, Diseño de Banners, Diseño de Perfiles para redes sociales, Diseño  de Empaques de Productos,  Diseño de Tarjetas de Presentación, Diseño de Señalética, Fotografía de Productos, Fotografía de Modelos, Fotografía de Espacio</p>
				</div>
				<div class="col-xs-4 contSlider">
					<div class="mySlide">
						<div><img src="{{URL::to('images/slides/slider1-01.png')}}"></div>
						<div><img src="{{URL::to('images/slides/slider2-01.png')}}"></div>
						<div><img src="{{URL::to('images/slides/slider3-01.png')}}"></div>
					</div>
				</div>			
			</div>	
			<div id="mini_gif">
				<img class="separator" src="{{URL::to('images/nini-banner.gif')}}">
			</div>
		</div>
	</div>
</div>
<div id="about" class="row contenedorGrande">
	<div class="container">
		<div class="col-xs-12">
			<div class="col-xs-6 cont_titulo_about">
				<img src="{{ asset('images/img_serv/quienes somos-01.png') }}">
			</div>
		</div>
	</div>
	<div id="banda">
			<div class="cont_palabra">
				<div id="top">
					<div class="medio">
						<p class="palabra col-xs-6 textoPromedio" id="c">
							Constancia
						</p>
						<p  class="palabra col-xs-6 textoPromedio" id="r">
							Responsabilidad
						</p>
					</div>
					<div class="medio">
						<p class="palabra col-xs-6 textoPromedio" id="g">
							Gratificación
						</p>
						<p class="palabra col-xs-6 textoPromedio" id="i">
							Innovación
						</p>
					</div>
					<div class="medio">
						<p class="palabra col-xs-6 textoPromedio" id="t">
							Tecnología
						</p>
						<p class="palabra col-xs-6 textoPromedio" id="a">
							Autenticidad
						</p>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div id="mid">
					<h1 class="letra" id="T">T</h1>
					<h1 class="letra" id="E">E</h1>
					<h1 class="letra" id="C">C</h1>
					<h1 class="letra" id="N">N</h1>
					<h1 class="letra" id="O">O</h1>
					<h1 class="letra" id="G">G</h1>
					<h1 class="letra" id="R">R</h1>
					<h1 class="letra" id="A">A</h1>
					<h1 class="letra" id="P">P</h1>
					<h1 class="letra" id="H">H</h1>
					<h1 class="letra" id="I">I</h1>
					<h1 class="letra" id="K">C</h1>
				</div>
				<div id="bot">
					<div class="medio">
						<p class="palabra col-xs-4 textoPromedio" id="e">
							Evolución
						</p>
						<p class="palabra col-xs-4 textoPromedio" id="o">
							Organización
						</p>
						<p class="palabra col-xs-4 textoPromedio" id="k">
							Crecimiento
						</p>
					</div>
					<div class="medio">
						<p class="palabra col-xs-4 textoPromedio" id="n">
							Negociación
						</p>
						<p class="palabra col-xs-4 textoPromedio" id="p">
							Profesionalismo
						</p>
						<p class="palabra col-xs-4 textoPromedio" id="h">
							Humildad
						</p>
					</div>
				</div>
			</div>
			
		</div>
</div>
@stop
