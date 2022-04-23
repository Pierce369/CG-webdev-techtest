<?php

# app/Models/Profile.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Profile extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'bio',
        'profile_picture',
    ];

}