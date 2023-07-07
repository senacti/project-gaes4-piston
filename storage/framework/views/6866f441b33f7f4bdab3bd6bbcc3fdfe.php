<h1>Crear servicio o producto</h1>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('servicesAndProducts.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required>
    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required></textarea>
    <label for="price">Precio:</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <button type="submit">Guardar</button>
</form>
<?php /**PATH C:\Users\Cristian\Documents\GitHub\project-gaes4-piston\Proyecto-Gaes4\resources\views/servicesAndProducts/create.blade.php ENDPATH**/ ?>