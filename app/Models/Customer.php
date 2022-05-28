<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',
    ];

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
