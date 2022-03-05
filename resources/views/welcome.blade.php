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

    {{-- Diseno 1 por bloques --}}
    {{-- <div class="px-4">
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

    {{-- Diseno 3 Como funciona grid en Tailwind --}}
    {{-- <div class="container">
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
            <div class="bg-green-500">10</div>
            <div class="bg-green-600">11</div>
        </div>
    </div> --}}

    {{-- Tipografías en tailwind (Parte 1) --}}
    {{-- <div class="container">

        <h1 class="">Esto es un título de prueba</h1>

        <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, cumque. Numquam temporibus cumque natus impedit eveniet quibusdam architecto laboriosam aliquam, nostrum, animi perspiciatis? Culpa suscipit excepturi ipsam ipsa cum impedit!</p>

        <ul>
            <li class="">Elemento #01</li>
            <li class="">Elemento #02</li>
            <li class="">Elemento #03</li>
        </ul>

    </div> --}}

    {{-- Usar nuestras propias fuentes (Parte 2) --}}
    {{-- <div class="container">

        <p class="font-mont font-thin">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima ut corrupti, dignissimos assumenda qui alias aperiam at, possimus odio pariatur, voluptatibus quod et corporis. Beatae reprehenderit aliquam eaque officia cum.</p>
        <p class="font-mont font-light">Reiciendis, mollitia maiores iusto ullam minima, voluptas odit molestias hic numquam veritatis dolorem perferendis consectetur ratione architecto? Et saepe sequi magni, ipsa earum, distinctio corporis optio architecto veniam aut animi?</p>
        <p class="font-mont font-semibold">Voluptate, libero necessitatibus accusantium quas consequatur aperiam cumque officia perferendis temporibus maiores saepe consequuntur corporis error minima aut minus, reprehenderit enim excepturi iste eum. Vitae voluptas atque ratione ad illum.</p>
        <p class="font-mont font-black">Quibusdam ex reiciendis velit qui totam voluptatem tempore at aliquid possimus corporis, reprehenderit eaque ut quam, dolore illum amet dignissimos. Soluta error modi quaerat dolore, mollitia tempora similique! Laboriosam, dolorem.</p>

    </div> --}}

    {{-- Pruebas con Letter Spacing --}}
    {{-- <div class="container">

        <p class="tracking-widest">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, expedita praesentium, maxime voluptatibus eveniet, ea fugit earum dolore tenetur est repudiandae? Reiciendis dolor, assumenda similique non eos saepe odio temporibus.</p>

    </div> --}}

    {{-- Estilos en Listas --}}
    <div class="container">

        <h1 class="text-xl font-bold text-left md:text-center lg:text-right mb-4">Este es el Título</h1>

        <p class="mb-3 text-red-700 hover:text-opacity-70">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet modi maiores pariatur eius, culpa, sed beatae harum ut sequi, nobis nisi magnam voluptatibus aliquam itaque nostrum suscipit ex a exercitationem.</p>

        <ul class="list-decimal md:list-disc list-inside">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam pariatur architecto unde veniam esse ipsa corporis quod nemo, amet autem expedita accusamus optio vel ad officiis illo id, nesciunt minima?</li>
            <li>Dignissimos atque, minima eos debitis distinctio, delectus quos omnis deserunt optio non at eaque temporibus voluptate, asperiores a. Consequatur sapiente et vitae sed molestias repellendus recusandae ipsum inventore velit. Magni.</li>
            <li>Repellat quam alias rerum maiores sit, accusamus natus aut adipisci ut numquam voluptates illum repudiandae iure asperiores optio ipsam. Quibusdam, ex incidunt. Doloribus deleniti repudiandae sed dolorem id, iusto ad?</li>
            <li>Impedit numquam eius iure iste, neque distinctio voluptatibus dolorem? Aspernatur, numquam. Numquam iure, eum sed dicta labore nobis expedita architecto maxime magni, vero optio assumenda aspernatur eligendi doloremque saepe suscipit.</li>
            <li>Unde dolorem nostrum voluptates rerum nobis inventore velit et cumque iure, sed nisi officiis magni consectetur qui. Fugit aspernatur nobis eaque perspiciatis quo itaque excepturi dolore officia, eius ea quisquam!</li>
        </ul>
        <p class="capitalize">Jose enrique sousa salgado</p>

    </div>
    
</body>
</html>