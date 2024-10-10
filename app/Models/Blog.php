<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "blog",
        "author_id"
    ];


    public function author()
    {

        return $this->belongsTo(Author::class);
    }

    public function images () {

        return  $this->hasMany(Image::class);
    }
}
