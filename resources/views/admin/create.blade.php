<x-layout>
    <x-slot:title>Create Book</x-slot:title>

    <x-slot:content>
        <div class="container mx-auto py-16">
            <h1 class="text-3xl font-extrabold text-gray-800">Create New Book</h1>

            <form action="{{ route('admin.store') }}" method="POST" class="mt-8">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" class="mt-2 p-4 w-full border rounded" required>
                    </div>

                    <div>
                        <label for="author" class="block text-lg font-medium text-gray-700">Author</label>
                        <input type="text" name="author" id="author" class="mt-2 p-4 w-full border rounded" required>
                    </div>

                    <div>
                        <label for="genre" class="block text-lg font-medium text-gray-700">Genre</label>
                        <input type="text" name="genre" id="genre" class="mt-2 p-4 w-full border rounded" required>
                    </div>

                    <div>
                        <label for="price" class="block text-lg font-medium text-gray-700">Price</label>
                        <input type="number" name="price" id="price" step="0.01" class="mt-2 p-4 w-full border rounded" required>
                    </div>

                    <div>
                        <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" class="mt-2 p-4 w-full border rounded"></textarea>
                    </div>

                    <div>
                        <label for="published_date" class="block text-lg font-medium text-gray-700">Published Date</label>
                        <input type="date" name="published_date" id="published_date" class="mt-2 p-4 w-full border rounded">
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-lg">Create Book</button>
                </div>
            </form>
        </div>
    </x-slot:content>
</x-layout>
