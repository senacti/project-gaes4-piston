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
    <input type="text" class="form-control" name="NOMBRE_PRODUCTO" value="{{ isset($productos->NOMBRE_PRODUCTO) ? $productos->NOMBRE_PRODUCTO : old('NOMBRE_PRODUCTO') }}">
</div>

<div class="form-group">
    <label for="CANTIDAD_PRODUCTO">CANTIDAD DEL PRODUCTO</label>
    <input type="text" class="form-control" name="CANTIDAD_PRODUCTO" value="{{ isset($productos->CANTIDAD_PRODUCTO) ? $productos->CANTIDAD_PRODUCTO : old('CANTIDAD_PRODUCTO') }}">
</div>

<div class="form-group">
    <label for="DESCRIPCION">DESCRIPCION</label>
    <input type="text" class="form-control" name="DESCRIPCION" value="{{ isset($productos->DESCRIPCION) ? $productos->DESCRIPCION : old('DESCRIPCION') }}">
</div>

<div class="form-group">
    <label for="ID_CATEGORIA_DE_PRODUCTOS">ID CATEGORIA</label>
    <input type="text" class="form-control" name="ID_CATEGORIA_DE_PRODUCTOS" value="{{ isset($productos->ID_CATEGORIA_DE_PRODUCTOS) ? $productos->ID_CATEGORIA_DE_PRODUCTOS : old('ID_CATEGORIA_DE_PRODUCTOS') }}">
</div>

<br>

<a class="btn btn-success" href="{{ url('productosservicios') }}">Regresar</a>

<input class="btn btn-primary" type="submit" value="{{ $modo }} datos">
