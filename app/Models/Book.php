<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable =['title','price','author','description','published_date','genre'];
   
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
