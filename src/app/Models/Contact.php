<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_name',
        'given_name',
        'full_name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'content',
        'created_at',
        'updated_at',
    ];
}
