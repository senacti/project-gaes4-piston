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
        <label for="" class="form-label">Porcentaje</label>
        <input type="number" min="0" max="100" class="form-control" name="Porcentaje" 
        required oninvalid="this.setCustomValidity
        ('Por favor ingresa un número válido para el porcentaje del mecánico, entre 1% y 100%.')" 
        oninput="this.setCustomValidity('')" 
        value="{{ isset($venta->Porcentaje)?$venta->Porcentaje:old('Porcentaje') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb-3">
        <label for="" class="form-label">Marca del vehiculo</label>
        <input type="text" class="form-control" name="MarcaDelVehiculo" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido para este campo.')" 
        oninput="this.setCustomValidity('')" id="MarcaDelVehiculo" aria-describedby="helpId" placeholder=""
        value="{{ isset($venta->MarcaDelVehiculo)?$venta->MarcaDelVehiculo:old('MarcaDelVehiculo') }}">
        <script>
            const input = document.querySelector('#MarcaDelVehiculo');
            input.addEventListener('input', () => {
                if (!/^[a-zA-Z0-9]*$/.test(input.value)) {
                    input.setCustomValidity('No ingreses caracteres especiales como (!/^*$/@#) por favor, ingresa solo números y letras.');
                } else {
                    input.setCustomValidity('');
                }
            });
        </script>
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Modelo del vehiculo</label>
        <input type="text" class="form-control" name="ModeloVehiculo" pattern="[a-zA-Z0-9]+" 
        maxlength="10" minlength="0" required oninvalid="this.setCustomValidity('Por favor ingresa por favor un modelo válido para este campo.')" 
        oninput="this.setCustomValidity('')" 
        id="ModeloVehiculo" aria-describedby="helpId" placeholder="" value="{{ isset($venta->ModeloVehiculo)?$venta->ModeloVehiculo:old('ModeloVehiculo') }}">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Matricula de vehiculo</label>
        <input type="text" class="form-control" name="Matricula" pattern="[A-Z0-9]+"
        maxlength="6" minlength="0"  required oninvalid="this.setCustomValidity('Por favor ingresa por favor una matricula válida, en mayusculas')"
        oninput="this.setCustomValidity('')" 
         value="{{ isset($venta->Matricula)?$venta->Matricula:old('Matricula') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>

<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Vin del vehiculo</label>
        <input type="text" class="form-control" name="Vin" pattern="[A-Z0-9]+"
        maxlength="17" minlength="0"  required oninvalid="this.setCustomValidity('Por favor ingresa por favor un vin válido, en mayusculas')"
        oninput="this.setCustomValidity('')" 
         value="{{ isset($venta->Vin)?$venta->Vin:old('Vin') }}" id="" aria-describedby="helpId" placeholder="">
    </div>
</div>
<div class="modal-body">
    <div class="mb">
    {{ isset($venta->FechaDeSolicitud)?$venta->FechaDeSolicitud:old('FechaDeSolicitud') }}
        <label for="" class="form-label">Fecha en que hace la venta</label>
        <input type="date" class="form-control" name="FechaDeSolicitud" 
        required oninvalid="this.setCustomValidity('Por favor ingresa por favor una fecha válida')"
        oninput="this.setCustomValidity('')"
        value="FechaDeSolicitud" id="" aria-describedby="helpId" placeholder="" min="2023-01-01">
    </div>
</div>
<br>
<div class="modal-body">
    <div class="mb">
        <label class="form-label">Servicio</label>
        <div>
            <label>
                <input type="checkbox" name="Servicio[]" value="Ninguno" {{ isset($venta->Servicio) && is_array($venta->Servicio) && in_array('', $venta->Servicio) ? 'checked' : (old('Servicio') == '' ? 'checked' : '') }}>
                Ninguno
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Servicio[]" value="Cambio de llantas" {{ isset($venta->Servicio) && is_array($venta->Servicio) && in_array('Cambio de llantas', $venta->Servicio) ? 'checked' : (old('Servicio') == 'Cambio de llantas' ? 'checked' : '') }}>
                Cambio de llantas
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Servicio[]" value="Alineacion" {{ isset($venta->Servicio) && is_array($venta->Servicio) && in_array('Alineacion', $venta->Servicio) ? 'checked' : (old('Servicio') == 'Alineacion' ? 'checked' : '') }}>
                Alineacion
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Servicio[]" value="Cambio de luces" {{ isset($venta->Servicio) && is_array($venta->Servicio) && in_array('Cambio de luces', $venta->Servicio) ? 'checked' : (old('Servicio') == 'Cambio de luces' ? 'checked' : '') }}>
                Cambio de luces
            </label>
        </div>
        <!-- Si deseas agregar más checkboxes, sigue el mismo patrón -->
    </div>
</div>
<br>
<div class="modal-body">
    <div class="mb">
        <label class="form-label">Producto</label>
        <div>
            <label>
                <input type="checkbox" name="Producto[]" value="Ninguno" {{ isset($venta->Productos) && is_array($venta->Productos) && in_array('', $venta->Productos) ? 'checked' : (old('Productos') == '' ? 'checked' : '') }}>
                Ninguno
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Producto[]" value="llantas" {{ isset($venta->Productos) && is_array($venta->Productos) && in_array('llantas', $venta->Productos) ? 'checked' : (old('Productos') == 'llantas' ? 'checked' : '') }}>
                llantas
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Producto[]" value="Aceite" {{ isset($venta->Productos) && is_array($venta->Productos) && in_array('Aceite', $venta->Productos) ? 'checked' : (old('Productos') == 'Aceite' ? 'checked' : '') }}>
                Aceite
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="Producto[]" value="luces" {{ isset($venta->Productos) && is_array($venta->Productos) && in_array('luces', $venta->Productos) ? 'checked' : (old('Productos') == 'luces' ? 'checked' : '') }}>
                luces
            </label>
        </div>
        <!-- Si deseas agregar más checkboxes, sigue el mismo patrón -->
    </div>
</div>
<br>
<div class="modal-body">
    <div class="mb">
        <label for="" class="form-label">Total</label>
        <input type="text" class="form-control" name="Total" pattern="[0-9]+" min="-0" max="99999999"
        required oninvalid="this.setCustomValidity('Por favor ingresa por favor un vin válido, en mayusculas')"
        oninput="this.setCustomValidity('')"
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
