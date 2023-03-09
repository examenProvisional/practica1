<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')(["resources/css/app.css","resources/js/app.js"]); ?>
</head>
    <body>
    <div id="app">
        <!--<header>-->
            <header class="h-15vh bg-emerald-300 border-4 flex flex-row justify-between content-center">
            <img src="<?php echo e(asset("images/logo.png")); ?>" alt="logo" />
            <h1>Página prueba Laravel 9</h1>
            <?php if(auth()->guard()->guest()): ?>
                <!--<div>-->
                <div class="flex flex-row">
                    <form action="login" method="POST">
                        <?php echo method_field('POST'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="text" name="email" placeholder="Email" id="emailId" />
                        <input type="text" name="password" placeholder="Password" id="passId" />
                    </form>
                    <a href="register">Registrarse</a>
                </div>
            <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                Conectado como <?php echo e(Auth::user()->name); ?>

                <form action="logout" method="POST">
                    <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <input type="submit" value="Logout" />
                </form>
            <?php endif; ?>
        </header>
        <!--<nav>-->
        <nav class="h-10vh bg-emerald-500 border-4 flex flex-row justify-start content-center">
            <!--<a href="<?php echo e(route("alumnos.index")); ?>">Alumnos</a>-->
            <a class="w-1/12 bg-gray-800 text-white" href="<?php echo e(route("alumnos.index")); ?>">Alumnos</a>
        </nav>
        <!--<main>-->
        <main class="h-65vh bg-emerald-300 border-4 flex justify-between content-center">
            <?php echo $__env->yieldContent('contenido'); ?>
        </main>
        <footer class="h-10vh bg-emerald-500 border-4 flex flex-row justify-between content-center">
        </footer>
    </div>

    </body>
</html>
<?php /**PATH /app/resources/views/layout.blade.php ENDPATH**/ ?>