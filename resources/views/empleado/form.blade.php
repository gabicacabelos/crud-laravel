<h1>{{$Modo}} empleado</h1>
<div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre:'}}</label>
    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<div class="form-group">
    <label for="Apellido Paterno" class="control-label">{{'Apellido Paterno:'}}</label>
    <input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}">
    {!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<div class="form-group">
    <label for="Apellido Materno" class="control-label">{{'Apellido Materno:'}}</label>
    <input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}">
    {!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<div class="form-group">
    <label for="Correo" class="control-label">{{'Correo'}}</label>
    <input type="email" class="form-control {{$errors->has('Correo:')?'is-invalid':''}}" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
    {!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    
    @if(isset($empleado->Foto))
    <br/>
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="120">
    <br/>
    @endif
    <input type="file" class="form-control {{$errors->has('Foto')?'is-invalid':''}}" name="Foto" id="Foto" value="">
    {!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>
<br>
<input type="submit" class="btn btn-outline-success" value="{{$Modo}} Datos">
<a class="btn btn-outline-primary" href="{{ url('empleado') }}">Regresar</a>

{{-- <label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" id="Nombre" class="form-group"  value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
<br>
<br>

<label for="ApellidoMaterno">Apellido Materno:</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-group"  value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
<br>
<br>

<label for="ApellidoPaterno">Apellido Paterno:</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-group"   value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
<br>
<br>

<label for="Correo">Email:</label>
<input type="email" name="Correo" id="correo" class="form-group"   value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
<br>
<br>
<label for="foto">Foto:</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" width="100">
@endif
<label for="Foto">Seleccione una imagen:</label>
<input type="file" name="Foto" id="foto" class="form-group"   value="">
<br>
<br> --}}

{{-- <input type="submit" value=" {{ $Modo }} Datos">
<a href="{{ url('empleado') }}">Regresar</a> --}}