<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookimg extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "book_id"
    ];


    public function book () {

        return $this->belongsTo(Book::class);
    }
}
