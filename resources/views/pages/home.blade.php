<x-layout>
    
    <x-slot:title>Home</x-slot:title>

    <x-slot:content>
        <section class="relative bg-gray-800 text-white py-24 sm:py-32 lg:py-40">
            <div class="absolute inset-0 overflow-hidden">
                <img class="w-full h-full object-cover object-center"
                    src="https://www.newtonprepschool.co.uk/userfiles/npsmvc/images/headers/04-beyond/header-library-2023.jpg"
                    alt="Library Background">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>
            <div class="container mx-auto text-center relative z-10 px-6 sm:px-12">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-white">
                    Welcome to the Library
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto">
                    Explore our collection of books, resources, and knowledge to inspire your journey. Start reading
                    today!
                </p>
                <div class="mt-8">
                    <a href="#explore-collection"
                        class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-8 text-lg font-semibold rounded-full shadow-md transition duration-300 ease-in-out">
                        Explore Collection
                    </a>
                </div>
            </div>
        </section>
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
            </div>
        </section>
    </x-slot:content>

</x-layout>
