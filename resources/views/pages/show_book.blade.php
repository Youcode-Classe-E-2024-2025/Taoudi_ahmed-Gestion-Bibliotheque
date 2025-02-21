
<x-layout>
    
    <x-slot:title>{{ $book->title }}</x-slot:title>

    <x-slot:content>

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-gray-800">{{ $book->title }}</h1>
        <p class="mt-2 text-gray-600">{{ $book->description }}</p>
        <p class="mt-2 text-gray-600"><strong>Author:</strong> {{ $book->author }}</p>
        <p class="mt-2 text-gray-600"><strong>Price:</strong> ${{ $book->price }}</p>
    
        @if ( App\Models\Booking::isBooked($book->id))

            <div class="w-full py-2 px-4 bg-gray-500 text-white text-center font-semibold rounded-lg">
                Already booked
            </div>

        @else
        <form action="{{ route('book.book', $book->id) }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Book Now
            </button>
        </form>
        @endif
    </div>
    </x-slot:content>

</x-layout>
