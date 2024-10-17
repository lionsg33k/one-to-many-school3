<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "place",
        "date",
        "start",
        "end",
        "cover",
        "people_id"

    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function peoples()
    {

        return $this->belongsToMany(People::class, "event_people");
    }
}
