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

<main class="flex-grow justify-start">
  {{ $content }}
</main>

@include('partials.footer')

</body>

</html>