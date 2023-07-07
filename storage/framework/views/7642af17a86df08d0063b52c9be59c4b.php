<h1><?php echo e($modo); ?> Producto</h1>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-group">
    <label for="NOMBRE_PRODUCTO">NOMBRE DEL PRODUCTO</label>
    <input type="text" class="form-control" name="NOMBRE_PRODUCTO" value="<?php echo e(isset($productos->NOMBRE_PRODUCTO) ? $productos->NOMBRE_PRODUCTO : old('NOMBRE_PRODUCTO')); ?>">
</div>

<div class="form-group">
    <label for="CANTIDAD_PRODUCTO">CANTIDAD DEL PRODUCTO</label>
    <input type="text" class="form-control" name="CANTIDAD_PRODUCTO" value="<?php echo e(isset($productos->CANTIDAD_PRODUCTO) ? $productos->CANTIDAD_PRODUCTO : old('CANTIDAD_PRODUCTO')); ?>">
</div>

<div class="form-group">
    <label for="DESCRIPCION">DESCRIPCION</label>
    <input type="text" class="form-control" name="DESCRIPCION" value="<?php echo e(isset($productos->DESCRIPCION) ? $productos->DESCRIPCION : old('DESCRIPCION')); ?>">
</div>

<div class="form-group">
    <label for="ID_CATEGORIA_DE_PRODUCTOS">ID CATEGORIA</label>
    <input type="text" class="form-control" name="ID_CATEGORIA_DE_PRODUCTOS" value="<?php echo e(isset($productos->ID_CATEGORIA_DE_PRODUCTOS) ? $productos->ID_CATEGORIA_DE_PRODUCTOS : old('ID_CATEGORIA_DE_PRODUCTOS')); ?>">
</div>

<br>

<a class="btn btn-success" href="<?php echo e(url('productosservicios')); ?>">Regresar</a>

<input class="btn btn-primary" type="submit" value="<?php echo e($modo); ?> datos">
<?php /**PATH C:\xampp\htdocs\Proyecto-Gaes4\resources\views/productosservicios/form.blade.php ENDPATH**/ ?>