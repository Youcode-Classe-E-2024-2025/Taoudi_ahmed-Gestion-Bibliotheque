<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    //
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pages.show_book', compact('book'));
    }

    public function book($id)
    {
        $book = Book::findOrFail($id);
    
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }
    
        // Check if the user already has a booking for this book
        if (Booking::where('user_id', Auth::id())->where('book_id', $book->id)->exists()) {
            return redirect()->route('book.show', $id)->with('error', 'You have already booked this book.');
        }
    
        // Create a new booking record
        $booking = new Booking();
        $booking->book_id = $book->id;
        $booking->user_id = Auth::id();
        $booking->borrowed_at = Carbon::now();
        $booking->due_at = Carbon::now()->addDays(14); // Set the due date to 14 days from today
        $booking->save();
    
        return redirect()->route('book.show', $id)->with('success', 'Book successfully booked!');
    }
    

}
