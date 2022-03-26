@extends('layouts.app')
@section('content')
<div class="container">


 @if(Session::has('mensaje'))
 <div class="alert alert-success alert-dismissible" role="alert">
 {{ Session::get('mensaje') }}
</div>
 @endif
    


 
  
  <a href="{{url('empleado/create') }}" class="btn btn-success">Regisrar nuevo empleado</a>
  <br/>
  <br/>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>

            <td>
               <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto }}" width="100" alt="">
            </td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>   
            
            <form action="{{ url('/empleado/'.$empleado->id )}}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quyiere borrar?')" value="Borrar">

            </form>
        </tr>
        @endforeach
    </tbody>
    
</table>
{!! $empleados->links() !!}
</div>
@endsection