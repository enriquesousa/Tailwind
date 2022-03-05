<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>

</head>
<body>

    {{-- Diseno 1 por bloques --}}
    {{-- <div class="container">
       <div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400 col-span-2 row-span-2">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
       </div>
    </div> --}}

    {{-- Diseno 2 por bloques --}}
    {{-- <div class="container">
        <div class="grid grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div> --}}

    {{-- Diseno 3 por bloques --}}
    <div class="container">
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>
    
</body>
</html>