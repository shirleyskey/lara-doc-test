<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
       
    </head>
    <body>
      <div id="app">
            <index></index>
      </div>


    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/lara-doc-test/resources/views/welcome.blade.php ENDPATH**/ ?>