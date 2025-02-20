<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Readly | {{ $title ?? '' }}</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen  font-sans antialiased bg-gray-50 flex justify-between flex-col ">

@include('partials.nav')

@if(session('error'))
<div class=" relative bg-red-200 text-red-700 w-fit p-4 rounded-md m-auto">
        <button class="absolute top-0 right-0 p-2" onclick="this.parentElement.style.display='none'">
            &times;
        </button>
        {{ session('error') }}
    </div>
@endif
@if(session('success'))
    <div class=" relative bg-green-200 text-green-700 w-fit p-4 rounded-md m-auto">
        <button class="absolute top-0 right-0 p-2" onclick="this.parentElement.style.display='none'">
            &times;
        </button>
        {{ session('success') }}
    </div>
@endif

<main class="flex-grow justify-start">
  {{ $content }}
</main>

{{-- @include('partials.footer') --}}

</body>

</html>