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
<div class="min-h-screen flex">
<aside class=" bg-gray-800 text-white w-64 min-h-screen p-4 hidden md:block">

    <nav class="space-y-2">
        <a href="{{ route('admin.index') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg hover:bg-gray-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.create') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg hover:bg-gray-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <span>Add New Book</span>
        </a>
        <a href="{{ route('admin.index') }}" class="flex items-center space-x-2 py-2 px-4 rounded-lg hover:bg-gray-700">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Loans</span>
        </a>
    </nav>
</aside>
<main class="flex-1 p-8">
  {{ $content }}
</main>
</div>
{{-- @include('partials.footer') --}}
{{-- js --}}
{{ $scripts }}
</body>

</html>
