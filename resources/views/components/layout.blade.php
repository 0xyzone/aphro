<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <title>Document</title>
</head>

<body class="bg-gray-300 default-scroll w-screen h-screen snap-x snap-mandatory overflow-x-scroll overflow-y-hidden">
    <div class="flex justify-center">
        @include('_partials.nav')
    </div>
    {{ $slot }}
    <x-background />
</body>

</html>
