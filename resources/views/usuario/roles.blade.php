@extends('layouts.template')
@section('titulo','Roles')
{{-- Desactivar menu no activo --}}
@section('dashboard','')
@section('menu-opt-2','')

{{-- Menu ACTIVO--}}
@section('menu-opt-3','active')
{{-- url --}}
@section('url-opt-3','/rol')
{{-- Display menu --}}
@section('etiqueta-opt-3','Roles')
{{-- Icono --}}
@section('icono-opt-3','verified_user')

{{-- Incluyendo el area del buscador --}}
@section('search')
{{-- Incluyendo el html del buscador --}}
@include('include.search')
@endsection

{{-- USUARIOS --}}
@section('menu-opt-2','')
@section('etiqueta-opt-2','Usuarios')
@section('icono-opt-2','face')
@section('url-opt-2','/usuario')

{{--PERMISOS --}}
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
                    <h4 class="title">ROLES</h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                        	<tr><th>Rol</th>
                        	<th>Slug</th>
                        	<th>Descripcion</th>
							<th>Accion</th>
                        </tr></thead>
                        @foreach ($roles as $r)
                        <tbody>
                            <tr>
                            	<td width="20%">{{$r->name}}</td>
                            	<td width="25%">{{$r->slug}}</td>
                            	<td width="40%">{{$r->description}}</td>
								<td width="15%">
								<button type="button" class="btn btn-primary btn-xs"><i class="material-icons">@yield('icono-opt-4')</i></button>
								<button type="button" class="btn btn-success btn-xs">editar</button>
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