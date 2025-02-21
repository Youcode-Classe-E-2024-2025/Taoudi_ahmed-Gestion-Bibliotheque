<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public static function myBookedBooks(){
        $user = User::find(Auth::id());
       $books = $user->bookedBooks();
        return view('pages.my_books', compact('books'));
        
    }
}
