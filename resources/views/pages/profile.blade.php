<x-layout>
    <x-slot:title>Books Collection</x-slot:title>

    <x-slot:content>
        <!-- Page Introduction Section -->
        <section class="py-12 bg-gray-50">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-800">Browse Our Extensive Collection of Books</h2>
                <p class="mt-4 text-lg text-gray-600">Explore a wide variety of books across different genres, from historical fiction to modern sci-fi, and everything in between!</p>
            </div>
        </section>

        <!-- Search Bar Section -->
        <section class="py-8 bg-white">
            <div class="container mx-auto text-center">
                <form action="{{ route('books') }}" method="GET" class="flex justify-center space-x-4">
                    <input type="text" name="search" class="border border-gray-300 rounded-lg py-2 px-4" placeholder="Search for books..." value="{{ request()->get('search') }}">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition duration-300">
                        Search
                    </button>
                </form>
            </div>
        </section>

        <!-- Latest Books Section -->
        <section id="explore-collection" class="py-16 bg-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-800">Latest Books</h2>
                <p class="mt-4 text-lg text-gray-600">Check out the latest additions to our library collection</p>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($books as $book)
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $book->title }}</h3>
                            <p class="mt-2 text-gray-600">by {{ $book->author }}</p>
                            <p class="mt-4 text-gray-500 text-sm">{{ Str::limit($book->description, 100) }}</p>
                            <div class="mt-4">
                                <span class="text-lg font-bold text-gray-800">${{ number_format($book->price, 2) }}</span>
                            </div>
                            <a href="{{ route('book.show', $book->id) }}" class="mt-4 inline-block bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition duration-300">
                                View Details
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Links -->
                <!-- Pagination Links -->
<div class="mt-8 flex justify-center">
    {{ $books->links('pagination::tailwind') }}
</div>
            </div>
        </section>
    </x-slot:content>

</x-layout>
