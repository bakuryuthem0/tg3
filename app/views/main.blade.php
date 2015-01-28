<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
  <head>
		
		<meta charset="utf-8" />
		<title>{{ $title }}</title>
		<meta keywords="tecnographic,paginas web,creacion de paginas web,diseño de paginas web,creacion de paginas web maracay, diseño de paginas web maracay,paginas web maracay">
		<meta name="description" content="{{$meta}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Tecnographic Venezuela">
		<link rel="icon" type="image/png" href="{{URL::to('images/favicon-01.png')}}" />
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/font-awesome.css') }}
		{{ HTML::style('css/camera.css') }}
		{{ HTML::style('css/slicknav.css') }}
		{{ HTML::style('css/prettyPhoto.css',$attributes = array('media' => 'screen')) }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}
		{{ HTML::style('css/custom.css') }}
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57229555-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//v2.zopim.com/?2dAD65m63ms3iRvakHIbz8R4RU5hDlE4';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->
	</head>
	<body>
		@yield('content')
	</body>
		{{ HTML::script('js/jquery-1.8.3.min.js')}}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/prefixfree.min.js') }}
		{{ HTML::script('js/cambio_tam.js') }}
		{{ HTML::script('js/cambio_let.js') }}
		{{ HTML::script('js/cambio_img.js') }}
		{{ HTML::script('js/custom.js') }}
</html>