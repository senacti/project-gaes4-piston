<h1> {{ $modo }} venta </h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert"> 
    
<ul>
        @foreach( $errors->all() as $error )
            <li> {{ $error }} </li>
    @endforeach

    </ul>

    </div>
    

    
@endif

<div class="modal-body">
    <div class="mb-3">
        <label for="" class="form-label">Nombre Mecanico</label>
        <input type="text" class="form-control" name="Mecanico" 
        value="{{  isset($venta->Mecanico)?$venta->Mecanico:old('Mecanico') }}" id="mecanico" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb-3">
        <label for="" class="form-label">Porcenjate</label>
        <input type="text" class="form-control" name="Porcentaje" 
        value="{{ isset($venta->Porcentaje)?$venta->Porcentaje:old('Porcentaje') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb-3">
        <label for="" class="form-label">Marca del vehiculo</label>
        <input type="text" class="form-control" name="MarcaDelVehiculo" 
        value="{{ isset($venta->MarcaDelVehiculo)?$venta->MarcaDelVehiculo:old('MarcaDelVehiculo') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Modelo del vehiculo</label>
        <input type="text" class="form-control" name="ModeloVehiculo" 
        value="{{ isset($venta->ModeloVehiculo)?$venta->ModeloVehiculo:old('ModeloVehiculo') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Matricula de vehiculo</label>
        <input type="text" class="form-control" name="Matricula"
         value="{{ isset($venta->Matricula)?$venta->Matricula:old('Matricula') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Vin del vehiculo</label>
        <input type="text" class="form-control" name="Vin"
         value="{{ isset($venta->Vin)?$venta->Vin:old('Vin') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
    {{ isset($venta->FechaDeSolicitud)?$venta->FechaDeSolicitud:old('') }}
        <label for="" class="form-label">Fecha en que hace la venta</label>
        <input type="date" class="form-control" name="FechaDeSolicitud" value="FechaDeSolicitud" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Servicio</label>
        <input type="text" class="form-control" name="Servicio"
         value="{{ isset($venta->Servicio)?$venta->Servicio:old('Servicio') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Producto</label>
        <input type="text" class="form-control" name="Producto"
         value="{{ isset($venta->Producto)?$venta->Producto:old('Producto') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Total</label>
        <input type="text" class="form-control" name="Total"
         value="{{ isset($venta->Total)?$venta->Total:old('Total') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-footer ">

<div class="col-sm-2 offset-sm-2 mt-2">

    <button type="submit" class="btn btn-primary">
    {{$modo}} venta</button>


    <a href="{{ url('venta') }}"> <button  type="button" class="btn btn-secondary" data-dismiss="modal"> 
    Regresar</button></a>
    
    </div>
