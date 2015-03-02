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
			
		</div>
	</div>
	<div id="mini_gif">
		<img class="separator" src="{{URL::to('images/nini-banner.gif')}}">
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
	<div id="banda" class="row">
			<div class="cont_palabra col-xs-12">
				<div id="top" class="col-xs-12">
					<div class="col-xs-12" >
						<div class="col-xs-6 medio textLeft">
							<p class="palabra col-xs-6 textoPromedio" id="c">
								Constancia
							</p>
							<p  class="palabra col-xs-6 textoPromedio" id="r">
								Responsabilidad
							</p>
						</div>
						
					</div>
					<div class="col-xs-12" >
						<div class="col-xs-6 medio textMid">
							<p class="palabra col-xs-6 textoPromedio" id="g">
								Gratificación
							</p>
							<p class="palabra col-xs-6 textoPromedio" id="i">
								Innovación
							</p>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 medio textRight">
							<p class="palabra col-xs-6 textoPromedio" id="t">
								Tecnología
							</p>
							<p class="palabra col-xs-6 textoPromedio" id="a">
								Autenticidad
							</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="col-xs-12">
					<div class="medio col-xs-6 textMid">
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
				</div>
				
				<div id="bot" class="col-xs-12">
					<div class="col-xs-12">
						<div class="col-xs-6 medio textRight">
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
						
					</div>
					<div class="col-xs-12">
						<div class="col-xs-6 medio textLeft">
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
		<div class="container">
				<div class="row about">
					<div class="col-xs-6">
						<div class="about1 ab2 textoPromedio">
							<h3><strong>Tecnographic Venezuela</strong></h3>
							<p>Somos una Agencia publicitaria y consultora responsable dedicada a la publicidad digital,  diseño de páginas web, tiendas virtuales, campañas de email, redes sociales y  desarrollo  de sistemas administrativos. </p>
							<p>
							Nos enfocamos en brindar a nuestros clientes  un servicio  de alto grado de funcionalidad,  interactividad, de manera que el sitio web se convierta en una verdadera herramienta para hacer negocios online, y que se adapte a su  necesidad.
							</p>
							<p>En<strong>Tecnography</strong>
							 de Venezuela desarrollamos e integramos soluciones tecnológicas basadas en la sistematización y en las nuevas tecnologías, utilizando las últimas aplicaciones existentes en el mercado. Construimos el futuro, dotando a nuestros clientes de las herramientas para competir en la nueva era.
						</div>
					</div>
					<div class="col-xs-6">
						<div class="about1 textoPromedio">
							<h3>Nuestra Meta</h3>
							<p>Nuestra meta es lograr consolidar la empresa en el mercado de la tecnología web, brindando servicio  a la mayor cantidad de clientes en el menor tiempo posible. Dar soporte técnico y actualización de páginas desarrolladas. Ser reconocidos local, nacional e internacionalmente.</p>
							<h3>Nuestro Equipo</h3>
							<p>Nuestro equipo de profesionales está formado por especialistas en distintas áreas como Diseño Grafico, Ingeniería en sistemas, Programación, Comunicación Social, y Community Manager.</p>
						</div>
					</div>
				</div>
		</div>
		<div id="refran">
			<img src="{{URL::to('images/refran-01.png')}}">
		</div>
</div>
@stop
