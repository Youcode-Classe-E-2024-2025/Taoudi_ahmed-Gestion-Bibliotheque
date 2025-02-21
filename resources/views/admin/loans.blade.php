<x-admin-layout>
    <x-slot:title>Admin Dashboard - Books Management</x-slot:title>

    <x-slot:content>
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-900">Bookings Management</h1>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booking ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book Author</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booked At</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($bookings as $booking)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->booking_id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->user_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->user_email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->book_title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $booking->book_author }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($booking->borrowed_at)->format('d M Y') }}</td>

                        {{-- <td class="px-6 py-4 whitespace-nowrap">{{ $booking->borrowed_at }}</td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <form action="{{ route('admin.booking.destroy', $booking->booking_id) }}" method="POST" class="inline-block ml-4">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 mr-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
            
        </div>

    </x-slot:content>
<x-slot:scripts>
</x-slot:scripts>
    
</x-admin-layout>
