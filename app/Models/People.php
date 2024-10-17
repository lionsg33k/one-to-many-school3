<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "role"
    ];
    public function events()
    {

        return $this->hasMany(Event::class);
    }

    public function event()
    {
        return $this->belongsToMany(Event::class, "event_people");
    }
}
