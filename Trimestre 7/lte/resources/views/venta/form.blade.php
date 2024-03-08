<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_empleado_id') }}
            {{ Form::select('nombre_empleado_id',$mecanicos, $venta->nombre_empleado_id, ['class' => 'form-control' . ($errors->has('nombre_empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empleado Id']) }}
            {!! $errors->first('nombre_empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_empleado_id') }}
            {{ Form::select('apellido_empleado_id',$mecanicos1, $venta->apellido_empleado_id, ['class' => 'form-control' . ($errors->has('apellido_empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Empleado Id']) }}
            {!! $errors->first('apellido_empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('especialidad_id') }}
            {{ Form::select('especialidad_id',$mecanicos2, $venta->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad Id']) }}
            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>




        <div class="form-group">
            {{ Form::label('nombre_cliente_id') }}
            {{ Form::select('nombre_cliente_id',$clientes, $venta->nombre_cliente_id, ['class' => 'form-control' . ($errors->has('nombre_cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente Id']) }}
            {!! $errors->first('nombre_cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_cliente_id') }}
            {{ Form::select('apellido_cliente_id',$clientes1, $venta->apellido_cliente_id, ['class' => 'form-control' . ($errors->has('apellido_cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Cliente Id']) }}
            {!! $errors->first('apellido_cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('vehiculo_marca_id') }}
           {{ Form::select('vehiculo_marca_id',$vehiculos, $venta->vehiculo_marca_id, ['class' => 'form-control' . ($errors->has('vehiculo_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Marca Id']) }}
            {!! $errors->first('vehiculo_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_modelo_id') }}
            {{ Form::select('vehiculo_modelo_id',$vehiculos2, $venta->vehiculo_modelo_id, ['class' => 'form-control' . ($errors->has('vehiculo_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Modelo Id']) }}
            {!! $errors->first('vehiculo_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_matricula_id') }}
            {{ Form::select('vehiculo_matricula_id',$vehiculos1, $venta->vehiculo_matricula_id, ['class' => 'form-control' . ($errors->has('vehiculo_matricula_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Matricula Id']) }}
            {!! $errors->first('vehiculo_matricula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_color_id') }}
            {{ Form::select('vehiculo_color_id',$vehiculos3, $venta->vehiculo_color_id, ['class' => 'form-control' . ($errors->has('vehiculo_color_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Color Id']) }}
            {!! $errors->first('vehiculo_color_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('nombre_servicio_id') }}
            {{ Form::select('nombre_servicio_id',$servicios, $venta->nombre_servicio_id, ['class' => 'form-control' . ($errors->has('nombre_servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Servicio Id']) }}
            {!! $errors->first('nombre_servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_servicio_id') }}
            {{ Form::select('precio_servicio_id',$servicios1, $venta->precio_servicio_id, ['class' => 'form-control' . ($errors->has('precio_servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Precio Servicio Id']) }}
            {!! $errors->first('precio_servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('nombre_producto_id') }}
            {{ Form::select('nombre_producto_id',$productos, $venta->nombre_producto_id, ['class' => 'form-control' . ($errors->has('nombre_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto Id']) }}
            {!! $errors->first('nombre_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_producto_id') }}
            {{ Form::select('cantidad_producto_id',$productos1, $venta->cantidad_producto_id, ['class' => 'form-control' . ($errors->has('cantidad_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto Id']) }}
            {!! $errors->first('cantidad_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_producto_id') }}
            {{ Form::select('precio_producto_id',$productos2, $venta->precio_producto_id, ['class' => 'form-control' . ($errors->has('precio_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Precio Producto Id']) }}
            {!! $errors->first('precio_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('total_comision_id') }}
            {{ Form::select('total_comision_id',$tareas, $venta->total_comision_id, ['class' => 'form-control' . ($errors->has('total_comision_id') ? ' is-invalid' : ''), 'placeholder' => 'Total Comision Id']) }}
            {!! $errors->first('total_comision_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_venta') }}
            {{ Form::date('fecha_venta', $venta->fecha_venta, ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
            {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_venta') }}
            {{ Form::text('total_venta', $venta->total_venta, ['class' => 'form-control' . ($errors->has('total_venta') ? ' is-invalid' : ''), 'placeholder' => 'Total Venta']) }}
            {!! $errors->first('total_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/ventas" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
