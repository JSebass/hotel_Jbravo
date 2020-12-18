 
@extends('master')
   @section('content')
        <h1>Clientes Registrados</h1> 

<div class="container">
        <div class="row">
                @foreach($cli as $c)
                <div class="col -md -4">
                        <div class="card" style="width: 18rem;">
                        <img src="{{url("/imagenes/clientes/$c->Foto")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Nombre: {{$c->Nombres}}</h5>
                        <p class="card-text">id: {{$c->id}}</p>
                        <p class="card-text">DNI: {{$c->DNI}}</p>
                        <p class="card-text">Genero: {{$c->Genero}}</p>
                        <p class="card-text">Domicilio: {{$c->Domicilio}}</p>
                        <p class="card-text">Telefono: {{$c->Telefono}}</p>
                        
                         
                        </div>
                        </div>
                </div>
                @endforeach
        </div>
</diiv>
@stop