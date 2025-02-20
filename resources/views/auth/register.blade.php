<x-layout>
    
    <x-slot:title>Register</x-slot:title>

    <x-slot:content>
        <section class="my-20" >
            <div class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-lg">
                <form action="/register" method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                        <input required type="text" name="name" id="name" placeholder="Enter your name" class="w-full p-3 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
            
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input required type="email" name="email" id="email" :value="old('email')" placeholder="Enter your email" class="w-full p-3 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
            
                    <div>
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input required type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-3 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
            
        </section>
    </x-slot:content>

</x-layout>
