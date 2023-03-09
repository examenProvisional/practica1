<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php echo app('Illuminate\Foundation\Vite')(["resources/css/app.css","resources/js/app.js"]); ?>;
    </head>
    <body>
        <div id="app">
            <cronometro titulo="Cronómetro"></cronometro>
        </div>
    </body>
</html>
<?php /**PATH /app/resources/views/vue.blade.php ENDPATH**/ ?>