<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lat',
        'lng',
        'origin_image',
        'address',
        'email',
        'phone_number',
        'plus_code',
        'place_type_id',
    ];
}
