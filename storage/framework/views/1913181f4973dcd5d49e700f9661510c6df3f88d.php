<?php $__env->startSection("contenido"); ?>
<a href="<?php echo e(route("alumnos.create")); ?>">Crear nuevo alumno</a>
<tabla filas_serializado="<?php echo e($alumnos); ?>" campos_serializado="<?php echo e($campos); ?>" nombre="<?php echo e($nombre); ?>" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/crud/alumnos.blade.php ENDPATH**/ ?>