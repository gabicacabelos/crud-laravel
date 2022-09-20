@extends('layouts.app')
@section('content')
<div class="container">
{{-- mensajes de alerta que desaparecen despues de 2 segundos --}}
@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
    @endif
    
        <style>
            div.alert {
               
                top: 15px;
                right: 9%;
                width: 30%;
                transform: translateY(10%) scale(0.3);
              background-image: linear-gradient(to right, #d6e5e3, #acd26c);
              
            }
            /* mover en diagonal el elemento */

            div.alert:hover {
                
                transform: translateY(0) scale(1);
                transition: transform 0.5s;
                animation: color alternate 0.5s infinite;
            }
            /* animacion de color */
            @keyframes color {
                0% {
                   border-color: chartreuse
                   box-shadow: 0 0 10px chartreuse, 0 0 10px chartreuse, 0 0 30px chartreuse, 0 0 50px chartreuse, 0 0 10px chartreuse, 0 0 60px chartreuse;
                   
                }
               
                100% {
                    border-color: #536a69;
                    box-shadow: 0 0 10px #536a69, 0 0 16px #536a69, 0 0 80px #536a69, 0 0 50px #536a69, 0 0 20px #536a69, 0 0 20px #536a69, 0 0 60px #536a69;
                    
                }
              
            }
           
           


        </style>
    

   


    



   
   

</div>

{{-- agregar un padding --}}

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Empleados</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

 <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
<br/>
<br/>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
                <img class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-outline-warning">Editar</a>
                
                
                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" class="btn btn-outline-danger" onclick="return confirm('¿Quieres eliminar?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</div>
</table>


{!! $empleados->links() !!}

@endsection

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>




