<!doctype html>
<html lang="en">
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

{{-- Titulo de la pagina --}}
<title>Bodyshop | @yield('titulo')</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
     {{-- <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet"/> --}}
    <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet"/>
   

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

     <!-- SweetAlert2 |https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.css -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/buttonfloat.css')}}">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: Puedes cambiar el color del sidebar usando: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag 
		    -->

			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					Bodyshop
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="@yield('dashboard','active')">
	                    <a href="{{url('home')}}">
	                        <i class="material-icons">home</i>
	                        <p>Inicio</p>
	                    </a>
	                </li>
	                 <li class="@yield('menu-opt-2')">
	                    <a href="@yield('url-opt-2')">
	                        <i class="material-icons">@yield('icono-opt-2')</i>
	                        <p>@yield('etiqueta-opt-2')</p>
	                    </a>
	                </li>
	                <li class="@yield('menu-opt-3')">
	                    <a href="@yield('url-opt-3')">
	                        <i class="material-icons">@yield('icono-opt-3')</i>
	                        <p>@yield('etiqueta-opt-3')</p>
	                    </a>
	                </li>
	                <li class="@yield('menu-opt-4')">
	                    <a href="@yield('url-opt-4')">
	                        <i class="material-icons">@yield('icono-opt-4')</i>
	                        <p>@yield('etiqueta-opt-4')</p>
	                    </a>
	                </li>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
						
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="material-icons">notifications</i>
										<span class="notification">5</span>
										<p class="hidden-lg hidden-md">Notifications</p>
								  </a>
								  <ul class="dropdown-menu">
									<li><a href="/usuario">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								  </ul>
							</li>
 							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>	
                                <ul class="dropdown-menu">
									<li><a href="/perfil"><i class="material-icons">account_circle</i> Editar perfil</a></li>
									{{-- Linea de divicion --}}
                                	<hr width="70%">
                                	{{-- -------- --}}
                                	@role('admin')
									<li><a href="/usuario"><i class="material-icons">verified_user</i> Control de acceso</a></li>
									<li><a href="/sistema"><i class="material-icons">build</i> Configuracion del sistema</a></li>

									{{-- Linea de divicion --}}
                                	<hr width="70%">
                                	{{-- -------- --}}
                                	@endrole
                                    <li>
                                         <a id='salir' href="javascript:void(0)" class="dropdown-toggle">
                                        <i class="material-icons">power_settings_new</i> Salir del sistema
                                   
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                         </a>
                                    </li> 
                                </ul>
                            </li> 
						</ul>
						{{-- Incluir el buscador --}}
						@yield('search')
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	{{-- ///////////////////////Contenedor general////////////////////////// --}}
						 @yield('content')

	                </div>
	            </div>
	        </div>
			<footer class="footer">
	            <div class="container-fluid">
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://wilfredofermin.github.io">WD Developers </a>, 
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

	@yield('modal')

</body>
{{-- Script  --}}


{{-- Incluyendo la notificacion que confirma la salida --}}
@include('include.notifications.sweet_alert')

		<!--   Core JS Files   -->

	<script src="{{ asset('assets/js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('assets/js/chartist.min.js') }}"></script>


	{{--SweeAlert2 | https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.js --}}
	<script src="{{asset('js/sweetalert2.js')}}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>


	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('assets/js/material-dashboard.js') }}"></script>


	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/js/demo.js') }}"></script>



</html>
