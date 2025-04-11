<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        "intitule",
        "apercu",
        "description",
        "localisation",
        "dimensions",
        "image",
        "prix",
    ];

    function user():BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
