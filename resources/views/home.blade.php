@extends('layouts.template')
@section('titulo','Home')

{{-- SISTEMA DE BONOS--}}
@section('menu-opt-2','')
@section('etiqueta-opt-2','Sistema de Bonos')
@section('icono-opt-2','monetization_on')
@section('url-opt-2','/bonos')

{{-- EMPLEADOS --}}
@section('menu-opt-3','')
@section('etiqueta-opt-3','Empleados')
@section('icono-opt-3','assignment_ind')
@section('url-opt-3','/empleados')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
