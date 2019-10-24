<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="theme-color" content="#000000"/>
	<meta name="msapplication-navbutton-color" content="#000000"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

    <title>@yield('page-title')</title>

	<link rel="shortcut icon" href="{{asset('img/icono.ico')}}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/estilosDash.css')}}" rel="stylesheet">
    <script src="{{asset('js/all.js')}}"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">





</head>
<body class="fixed-sn white-skin grey lighten-4">
    @include('components.alerts')
	<!-- HEADER START -->
	<!--Double navigation-->
    <header>
		<!-- Sidebar navigation -->
			<div id="slide-out" class="side-nav fixed z-depth-0 border border-1 overflow">
				<div class="side-header mt-4">
					<div id="centrar">
						<img src="/img/juntos.png" width="135" height="90">
					</div>

					<div class="user-profile text-center black-text">
						<p class="user-name">
							Cuidados Pets Flexible <br>
							<span class="user-type grey-text">{{ Auth::user()->type }}</span>
						</p>
					</div>
				</div>
				
				<div class="list-group " id="lista">
					<a href="{{ url('/user-profile') }}" class="list-item mt-1 @yield('perfil')">
						<i class="far fa-user ml-2 mr-4 fa-fw icono"></i>Mi perfil
						<div class="list-mark"></div>
					</a>


					@if(Auth::user()->type == 'Cliente')
						<a href="{{ url('/user-profile/mascota') }}" class="list-item mt-1 @yield('mascotas')">
							<i class="far fa-calendar-alt ml-2 mr-4 fa-fw icono"></i>Mis mascotas
							<div class="list-mark"></div>
						</a>
					
						<a href="{{url('/user-profile/plan', ['user' => Auth::user()->id ])}}" class="list-item mt-1 @yield('plan')">
							<i class="far fa-file-alt ml-2 mr-4 fa-fw icono"></i>Mis planes 
							<div class="list-mark"></div>
						</a> 
					@elseif(Auth::user()->type == 'Admin')
						<!-- <a href="{{ url('/admin-profile/insumo') }}" class="list-item mt-1 @yield('bodega')">
							<i class="fas fa-dolly ml-2 mr-4 fa-fw icono"></i>Opcion 1
							<div class="list-mark"></div>
						</a>
						<a href="{{ url('/user-profile/control-citas') }}" class="list-item mt-1 @yield('citas')">
							<i class="far fa-calendar-alt ml-2 mr-4 fa-fw icono"></i>Opcion 2
							<div class="list-mark"></div>
						</a>
						<a href="#" class="list-item mt-1 @yield('orden')">
							<i class="fas fa-tasks ml-2 mr-4 fa-fw icono"></i>Opcion 3
							<div class="list-mark"></div> 
						</a>-->
					@elseif(Auth::user()->type == 'Trabajador')
						<!-- <a href="{{ url('/user-profile/tareas') }}" class="list-item mt-1 @yield('tareas')">
							<i class="fas fa-tasks ml-2 mr-4 fa-fw icono"></i>Tareas asignadas
							<div class="list-mark"></div>
						</a> -->
					@endif


					<a href="#" class="list-item mt-1 @yield('datos')">
						<i class="fas fa-edit ml-2 mr-4 fa-fw icono"></i>Actualizar datos
						<div class="list-mark"></div>
					</a>
				</div>
					<div class="sidenav-bg mask-strong"></div>
			</div>
		<!--/. Sidebar navigation -->
		
      	<!-- Navbar -->
      	<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav grey lighten-4 z-depth-0">
			<!-- SideNav slide-out button -->
			<div class="float-right">
				<a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
			</div>
			<!--/. SideNav slide-out button-->

			<!-- Breadcrumb-->
			<!-- <div class="fondo pl-5">
				<div id="centrar">
					<img src="/img/logo 1.PNG" width="170" height="35">
				</div>            
			</div> -->
			<!--/. Breadcrumb-->

			<!-- Dropdown button -->
			<ul class="nav navbar-nav nav-flex-icons ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					Hola, {{Auth::user()->name}}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item grey-text" href="#">
							<i class="fas fa-cog"></i> Configuración
						</a>
						<a class="dropdown-item grey-text" href="#">
							<i class="fas fa-bell"></i> Notificaciones
						</a>

					</div>
				</li>
			</ul>
			<!--/. Dropdown button -->
      	</nav>
      	<!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
	<!-- HEADER END -->
	<!-- Content -->
    <div class="main mt-4">
		<div class="row">
			<div class="col-lg-12">
				@yield('boton-agregar')
				<h1 class="page-title">@yield('title')</h1>
			</div>
      	</div>
		<div class="row mb-0">
			@yield('buscador')
		</div>
		<div class="row mb-0">
			@yield('contenido')
		</div>
    </div>
    <!--/. Content -->

    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

	
	<script language="javascript"  type="text/javascript" src="{{asset('js/dropdown.js')}}" ></script>
	

    <script>
      // SideNav Initialization
      $(".button-collapse").sideNav();	  
    </script>
    <script>
	  	$('#message').modal('show')
	  
      	$("#datepicker").datepicker({
			changeyear: true,
			closeText: 'Cerrar',
			prevText: '< Ant',
			nextText: 'Sig >',
			currentText: 'Hoy',
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
			weekHeader: 'Sm',
			dateFormat: 'dd/mm/yy',
			firstDay: 1,
				maxDate: 0
		});

	

    </script>
</body>
</html>
