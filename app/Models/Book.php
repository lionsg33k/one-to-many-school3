<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [

        "name",
        "cover",
        "pdf",
        "author_id",
        "category_id",
    ];


    public function author()
    {

        return $this->belongsTo(Author::class);
    }


    public function bookimgs()
    {

        return $this->hasMany(Bookimg::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
