<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_servicio_id') }}
            {{ Form::select('nombre_servicio_id',$servicios, $tarea->nombre_servicio_id, ['class' => 'form-control' . ($errors->has('nombre_servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Servicio Id']) }}
            {!! $errors->first('nombre_servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_servicio_id') }}
            {{ Form::select('precio_servicio_id',$servicios1, $tarea->precio_servicio_id, ['class' => 'form-control' . ($errors->has('precio_servicio_id') ? ' is-invalid' : ''), 'placeholder' => 'Precio Servicio Id']) }}
            {!! $errors->first('precio_servicio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>






        <div class="form-group">
            {{ Form::label('nombre_producto_id') }}
            {{ Form::select('nombre_producto_id',$productos, $tarea->nombre_producto_id, ['class' => 'form-control' . ($errors->has('nombre_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto Id']) }}
            {!! $errors->first('nombre_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_producto_id') }}
            {{ Form::select('cantidad_producto_id',$productos1, $tarea->cantidad_producto_id, ['class' => 'form-control' . ($errors->has('cantidad_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto Id']) }}
            {!! $errors->first('cantidad_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_producto_id') }}
            {{ Form::select('precio_producto_id',$productos2, $tarea->precio_producto_id, ['class' => 'form-control' . ($errors->has('precio_producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Precio Producto Id']) }}
            {!! $errors->first('precio_producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>





        <div class="form-group">
            {{ Form::label('nombre_empleado_id') }}
            {{ Form::select('nombre_empleado_id',$mecanicos, $tarea->nombre_empleado_id, ['class' => 'form-control' . ($errors->has('nombre_empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empleado Id']) }}
            {!! $errors->first('nombre_empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_empleado_id') }}
            {{ Form::select('apellido_empleado_id',$mecanicos1, $tarea->apellido_empleado_id, ['class' => 'form-control' . ($errors->has('apellido_empleado_id') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Empleado Id']) }}
            {!! $errors->first('apellido_empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('especialidad_id') }}
            {{ Form::select('especialidad_id',$mecanicos2, $tarea->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad Id']) }}
            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $tarea->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponibilidad') }}
            {{ Form::text('disponibilidad', $tarea->disponibilidad, ['class' => 'form-control' . ($errors->has('disponibilidad') ? ' is-invalid' : ''), 'placeholder' => 'Disponibilidad']) }}
            {!! $errors->first('disponibilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comision') }}
            {{ Form::text('Comision', $tarea->Comision, ['class' => 'form-control' . ($errors->has('Comision') ? ' is-invalid' : ''), 'placeholder' => 'Comision']) }}
            {!! $errors->first('Comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>






        <div class="form-group">
            {{ Form::label('nombre_cliente_id') }}
            {{ Form::select('nombre_cliente_id',$clientes, $tarea->nombre_cliente_id, ['class' => 'form-control' . ($errors->has('nombre_cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente Id']) }}
            {!! $errors->first('nombre_cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_cliente_id') }}
            {{ Form::select('apellido_cliente_id',$clientes1, $tarea->apellido_cliente_id, ['class' => 'form-control' . ($errors->has('apellido_cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Cliente Id']) }}
            {!! $errors->first('apellido_cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>




        <div class="form-group">
            {{ Form::label('vehiculo_marca_id') }}
            {{ Form::select('vehiculo_marca_id',$vehiculos, $tarea->vehiculo_marca_id, ['class' => 'form-control' . ($errors->has('vehiculo_marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Marca Id']) }}
            {!! $errors->first('vehiculo_marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_modelo_id') }}
            {{ Form::select('vehiculo_modelo_id',$vehiculos2, $tarea->vehiculo_modelo_id, ['class' => 'form-control' . ($errors->has('vehiculo_modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Modelo Id']) }}
            {!! $errors->first('vehiculo_modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_matricula_id') }}
            {{ Form::select('vehiculo_matricula_id',$vehiculos1, $tarea->vehiculo_matricula_id, ['class' => 'form-control' . ($errors->has('vehiculo_matricula_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Matricula Id']) }}
            {!! $errors->first('vehiculo_matricula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_color_id') }}
            {{ Form::select('vehiculo_color_id',$vehiculos3, $tarea->vehiculo_color_id, ['class' => 'form-control' . ($errors->has('vehiculo_color_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Color Id']) }}
            {!! $errors->first('vehiculo_color_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>




        <div class="form-group">
            {{ Form::label('total_reparacion') }}
            {{ Form::text('total_reparacion', $tarea->total_reparacion, ['class' => 'form-control' . ($errors->has('total_reparacion') ? ' is-invalid' : ''), 'placeholder' => 'Total Reparacion']) }}
            {!! $errors->first('total_reparacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_comision') }}
            {{ Form::text('total_comision', $tarea->total_comision, ['class' => 'form-control' . ($errors->has('total_comision') ? ' is-invalid' : ''), 'placeholder' => 'Total Comision']) }}
            {!! $errors->first('total_comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $tarea->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/tareas" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
