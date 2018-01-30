@extends('layouts.template')
{{-- Titulo de la pagina --}}
@section('titulo','Usuarios')
{{-- Desactivar menu no activo --}}
@section('dashboard','')

{{-- OPT 2 --}}
{{-- Menu ACTIVO --}}
@section('menu-opt-2','active')
{{-- url --}}
@section('url-opt-2','/usuario')
{{-- Display menu --}}
@section('etiqueta-opt-2','Usuarios')
{{-- Icono --}}
@section('icono-opt-2','face') 


{{-- Incluyendo el area del buscador --}}
@section('search')
{{-- Incluyendo el html del buscador --}}
@include('include.search')
@endsection

{{-- OPT 3 --}}
@section('menu-opt-3','')
@section('etiqueta-opt-3','Roles')
@section('icono-opt-3','verified_user')
@section('url-opt-3','/rol')

{{-- OPT 4 --}}
@section('menu-opt-4','')
@section('etiqueta-opt-4','Permisos')
@section('icono-opt-4','assignment_turned_in') 
@section('url-opt-4','permisos')



{{-- Incluyendo el area de contenido --}}
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h5 class="title"><i class="material-icons">face</i> Administrar usuarios</h5>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                        	<th width="30%">Nombre completo</th>
                        	<th width="25%">Email</th>
                        	<th width="25%">Roles</th>
							<th width="20%">Accion</th>
                        </tr></thead>
                        @foreach ($usuarios as $u)
                        <tbody>
                            <tr>
                            	<td>{{$u->name}}</td>
                            	<td>{{$u->email}}</td>
								<td>
                            	@foreach ($u->roles as $element)
                            	<span class="label label-warning">{{$element->name}}</span>
                            	@endforeach
                            	</td>

								<td>
                                 <a href="{{ url('usuario/rol/'.$u->id) }}" type="button" rel="tooltip" title="Roles" class="btn btn-primary btn-xs">
                                <i class="material-icons">@yield('icono-opt-3')</i>
                                </a>
								<button type="button" class="btn btn-danger btn-xs" rel="tooltip" title="Eliminar"><i class="material-icons">delete_forever</i></button>
                               
								</td>
                            </tr>
                        </tbody>
                         @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div align="right">
        @include('usuario.include.buttonFloat')
    </div>
</div>

@section('modal')
        @include('usuario.include.modal_nuevo_usuario')
@endsection

@endsection
