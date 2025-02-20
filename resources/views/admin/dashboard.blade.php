<x-layout>
    <x-slot:title>Admin Dashboard</x-slot:title>

    <x-slot:content>
        <div class="container mx-auto py-16">
            <h1 class="text-3xl font-extrabold text-gray-800">Admin Dashboard</h1>

            <!-- Stats Section -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Total Books</h3>
                    <p class="mt-4 text-gray-600">{{ $bookCount }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Most Expensive Book</h3>
                    <p class="mt-4 text-gray-600">{{ $mostExpensiveBook->title }} - ${{ number_format($mostExpensiveBook->price, 2) }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Cheapest Book</h3>
                    <p class="mt-4 text-gray-600">{{ $cheapestBook->title }} - ${{ number_format($cheapestBook->price, 2) }}</p>
                </div>
            </div>

            <!-- Latest Books -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-gray-800">Latest Books</h2>
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($latestBooks as $book)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $book->title }}</h3>
                            <p class="mt-2 text-gray-600">by {{ $book->author }}</p>
                            <div class="mt-4">
                                <a href="{{ route('admin.edit', $book->id) }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg">Edit</a>
                                <form action="{{ route('admin.destroy', $book->id) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block bg-red-600 text-white py-2 px-4 rounded-lg">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
