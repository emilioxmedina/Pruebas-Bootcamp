<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App de Ejemplo</title>
        <!-- Tailwind -->
        @vite('resources/css/app.css')
    </head>
    <body class="max-w-xl m-auto text-black bg-white">
    <?php foreach ($posts as $post) : ?>
    <article class="pt-12">
        <?= $post; ?>
    </article>
    <?php endforeach; ?>
    </body>
</html>
