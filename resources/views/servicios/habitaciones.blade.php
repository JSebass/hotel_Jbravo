@extends('master')
   @section('content')
        <h1>Habitaciones</h1> 
        <ul class="list-group">
                @foreach($habitaciones as $hab)
                <li class="list-group-item">
                        <h5>{{$hab->tipo}}</h5>
                        <img src="{{ url("/imagenes/$hab->foto") }}" class="d-block w-100" alt="...">
                        <p>
                         Descricion: {{$hab->descripcion}}  
                        </p>
                        <p>
                         Numero de camas: {{$hab->numCamas}}  
                        </p>
                        <p>
                         Precio: {{$hab->precio}}  
                        </p>

                </li>
                @endforeach
        </ul>
@stop