
   <h1> {{$modo}} Empleado</h1>
   
    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
     <ul>       
            @foreach( $errors->all() as $error)
           <li> {{ $error }}</li>
        @endforeach
     </ul>    
        </div>

        
    @endif        


    <div class="form-group">

   <label for="nombre"> nombre </label>
    <input type="text" class="form-control" name="nombre"
     value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre') }}" id="nombre">
    

    </div>

    <div class="form-group">

    <label for="ApellidoPaterno"> ApellidoPaterno </label>
    <input type="text" class="form-control"  name="ApellidoPaterno"
     value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    

    </div>

    <div class="form-group">
    <label for="ApellidoMaterno"> ApellidoMaterno </label>
    <input type="text"  class="form-control" name="ApellidoMaterno"
     value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    

    </div>
    <div class="form-group">
    <label for="correo"> correo </label>
    <input type="text" class="form-control" name="correo"
     value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}" id="correo">
    

    </div>

    <div class="form-group">

    <label for="foto">  </label>
    @if(isset($empleado->foto))
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->foto }}" alt="" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="foto" value="" id="foto">
    
    
    </div>
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">

    <a class="btn btn-primary" href="{{url('empleado/') }}">Regresar</a>


    <br>