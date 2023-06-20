<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Management extends Model
{
    use HasFactory;

    protected $table = "contacts";
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

    public function scopeFamily_nameSearch($query, $family_name)
    {
        if (!empty($family_name)) {
            $query->where('family_name', $family_name);
        }
    }

    public function scopeGiven_nameSearch($query, $given_name)
    {
        if (!empty($given_name)) {
            $query->where('given_name', $given_name);
        }
    }

    public function scopeEmailSearch($query, $email)
    {
        if (!empty($email)) {
            $query->where('email', $email);
        }
    }

    public function scopeGenderSearch($query,$gender)
    {
        if(!empty($gender)) {
            $query->where('gender', $gender);
        }
    }
    public function management()
    {
        return $this->belongsTo(User::class);
    }

    public function links()
    {
        
    }
}
