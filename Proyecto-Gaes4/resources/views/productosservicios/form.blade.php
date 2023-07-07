<h1>{{ $modo }} Producto</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="NOMBRE_PRODUCTO">NOMBRE DEL PRODUCTO</label>
    <input type="text" class="form-control" name="NOMBRE_PRODUCTO" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')" 
        oninput="this.setCustomValidity('')" id="NOMBRE_PRODUCTO" aria-describedby="helpId" placeholder=""
        value="{{ isset($productos->NOMBRE_PRODUCTO)?$productos->NOMBRE_PRODUCTO:old('NOMBRE_PRODUCTO') }}">
        <script>
            const input = document.querySelector('#NOMBRE_PRODUCTO');
            input.addEventListener('input', () => {
                if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                    input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
                } else {
                    input.setCustomValidity('');
                }
            });
        </script>
</div>



<div class="form-group">
    <label for="CANTIDAD_PRODUCTO">CANTIDAD DEL PRODUCTO</label>
    <input type="text" class="form-control" name="CANTIDAD_PRODUCTO" required pattern="[0-9]+"
           oninvalid="this.setCustomValidity('Por favor verifica que el formato contenga solo números y sin espacios ')"
           oninput="this.setCustomValidity('')"
           value="{{ isset($productos->CANTIDAD_PRODUCTO) ? $productos->CANTIDAD_PRODUCTO : old('CANTIDAD_PRODUCTO') }}">
</div>


<div class="form-group">
    <label for="PRECIO_PRODUCTO">PRECIO PRODUCTO</label>
    <input type="text" class="form-control" name="PRECIO_PRODUCTO" required pattern="[0-9]+"
           oninvalid="this.setCustomValidity('Por favor verifica que el formato contenga solo números y sin espacios ')"
           oninput="this.setCustomValidity('')"
           value="{{ isset($productos->PRECIO_PRODUCTO) ? $productos->PRECIO_PRODUCTO : old('PRECIO_PRODUCTO') }}">
</div>


<div class="form-group">
    <label for="DESCRIPCION">DESCRIPCION</label>
    <input type="text" class="form-control" name="DESCRIPCION" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')" 
        oninput="this.setCustomValidity('')" id="DESCRIPCION" aria-describedby="helpId" placeholder=""
        value="{{ isset($productos->DESCRIPCION)?$productos->DESCRIPCION:old('DESCRIPCION') }}">
        <script>
            const input = document.querySelector('#DESCRIPCION');
            input.addEventListener('input', () => {
                if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                    input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
                } else {
                    input.setCustomValidity('');
                }
            });
        </script>
</div>



<div class="form-group">
    <label for="CATEGORIA_PRODUCTOS">CATEGORIA PRODUCTO</label>
    <input type="text" class="form-control" name="CATEGORIA_PRODUCTOS" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')" 
        oninput="this.setCustomValidity('')" id="CATEGORIA_PRODUCTOS" aria-describedby="helpId" placeholder=""
        value="{{ isset($productos->CATEGORIA_PRODUCTOS)?$productos->CATEGORIA_PRODUCTOS:old('CATEGORIA_PRODUCTOS') }}">
        <script>
            const input = document.querySelector('#CATEGORIA_PRODUCTOS');
            input.addEventListener('input', () => {
                if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                    input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
                } else {
                    input.setCustomValidity('');
                }
            });
        </script>
</div>


<br>

<a class="btn btn-success" href="{{ url('productosservicios') }}">Regresar</a>

<input class="btn btn-primary" type="submit" value="{{ $modo }} datos">
