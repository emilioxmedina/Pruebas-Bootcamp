<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Tailwind -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-white text-black max-w-xl m-auto">
        <article class="pt-12 mb-6">
            <?= $post; ?>
        </article>
        <div class="text-blue-900 hover:-translate-y-0.5 hover:translate-x-px hover:text-violet-700"><a href="/">Go Back</a></div>
    </body>
</html>