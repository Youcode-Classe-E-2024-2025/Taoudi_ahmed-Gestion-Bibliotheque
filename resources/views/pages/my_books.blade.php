
<x-layout>
    
    <x-slot:title>My Books</x-slot:title>

    <x-slot:content>
        <section id="explore-collection" class="py-16 bg-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-800">My Booked Books</h2>
                
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
            </div>
        </section>
    </x-slot:content>

</x-layout>
