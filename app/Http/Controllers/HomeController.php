<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $books = Book::latest()->take(3)->get();
        return view('pages.home', ['books' => $books]);
    }

    public function books(Request $request)
    {
        $query = Book::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->get('search') . '%')
                ->orWhere('author', 'like', '%' . $request->get('search') . '%');
        }
        // live coding ta3i (1h) darto laravel fi star wahad
        $books = $query->latest()->paginate(6);

        return view('pages.books', compact('books'));
    }
}
