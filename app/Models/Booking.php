<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'borrowed_at',
        'due_at',
    ];
    public static function isBooked($id){

        return Booking::where('book_id',$id)->exists();
        
    }
    // Relationship to Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
