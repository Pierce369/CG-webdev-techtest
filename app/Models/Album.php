<?php

# app/Models/Album.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Album extends Model
{
    protected $fillable = [
        'title',
        'description',
        'img',
        'date',
        'featured',
    ];
}