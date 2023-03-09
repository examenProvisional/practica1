<?php $__env->startSection("contenido"); ?>
    <fieldset>
        <legend>Datos del alumno</legend>
        <form action="<?php echo e(route("alumnos.store")); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            Nombre<input type="text" value="<?php echo e($alumno->nombre); ?>" name="nombre" placeholder="Nombre" id="nombreId"/>
            Apellido<input type="text" value="<?php echo e($alumno->apellido); ?>" name="apellido" placeholder="Apellido" id="apellidoId"/>
            Dirección<input type="text" value="<?php echo e($alumno->direccion); ?>" name="direccion" placeholder="Dirección" id="direccionId"/>
            Dni<input type="text" value="<?php echo e($alumno->dni); ?>" name="dni" placeholder="DNI" id="dniId"/>
            <input type="submit" value="Enviar"/>
        </form>
    </fieldset>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/crud/edit.blade.php ENDPATH**/ ?>