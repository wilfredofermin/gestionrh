@extends('layouts.template')
{{-- Titulo de la pagina --}}
@section('titulo','Usuarios')
{{-- Desactivar menu no activo --}}
@section('dashboard','')

{{-- OPT 2 --}}
{{-- Menu ACTIVO --}}
@section('menu-opt-4','active')
{{-- url --}}
@section('url-opt-4','permisos')
{{-- Display menu --}}
@section('etiqueta-opt-4','Permisos')
{{-- Icono --}}
@section('icono-opt-4','assignment_turned_in') 


{{-- Incluyendo el area del buscador --}}
@section('search')
{{-- Incluyendo el html del buscador --}}
@include('include.search')
@endsection

{{-- ROLES --}}
@section('menu-opt-3','')
@section('etiqueta-opt-3','Roles')
@section('icono-opt-3','verified_user')
@section('url-opt-3','/rol')

{{-- USUARIOS--}}
@section('menu-opt-2','')
@section('etiqueta-opt-2','Usuarios')
@section('icono-opt-2','face')
@section('url-opt-2','/usuario')


{{-- Incluyendo el area de contenido --}}
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">ASIGNACION DE PERMISOS</h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                        	<tr><th>Permiso</th>
                        	<th>Slug</th>
                            <th>Descripcion</th>
							<th>Accion</th>
                        </tr></thead>
                        @foreach ($permisos as $u)
                        <tbody>
                            <tr>
                            	<td width="20%">{{$u->name}}</td>
                                <td width="25%">{{$u->slug}}</td>
                            	<td width="25%">{{$u->description}}</td>
								<td width="15%">
								<button type="button" class="btn btn-primary btn-xs"><i class="material-icons">@yield('icono-opt-3')</i></button>
								<button type="button" class="btn btn-danger btn-xs">eliminar</button>
								</td>
                            </tr>
                        </tbody>
                         @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection