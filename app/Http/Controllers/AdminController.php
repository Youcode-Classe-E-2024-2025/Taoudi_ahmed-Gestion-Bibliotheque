<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Show the admin dashboard with stats and list of books
    public function index(Request $request)
    {
        $bookCount = Book::count();
        $query = Book::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->get('search') . '%')
                ->orWhere('author', 'like', '%' . $request->get('search') . '%');
        }
        // live coding ta3i (1h) darto laravel fi star wahad
        $books = $query->latest()->paginate(6);

        // return view('pages.books', compact('books'));
        return view('admin.dashboard', compact('books', 'bookCount'));
    }

    // Show form to create a new book
    public function create()
    {
        return view('admin.create');
    }

    // Store a new book in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'published_date' => 'nullable|date',
        ]);

        Book::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Book created successfully.');
    }

    // Show the form for editing a book
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.edit', compact('book'));
    }

    // Update the book's data
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'published_date' => 'nullable|date',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Book updated successfully.');
    }

    // Delete a book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.index')->with('success', 'Book deleted successfully.');
    }

    public function showBookings()
    {
        $bookings = DB::table('bookings')
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->join('books', 'bookings.book_id', '=', 'books.id')
            ->select(
                'bookings.id as booking_id',
                'bookings.borrowed_at',
                'users.id as user_id',
                'users.name as user_name',
                'users.email as user_email',
                'books.id as book_id',
                'books.title as book_title',
                'books.author as book_author'
            )
            ->get();
        return view('admin.loans', compact('bookings'));
    }

    public function destroyBooking($id){

        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('admin.loans')->with('success', 'Booking deleted successfully.');
    }
}
