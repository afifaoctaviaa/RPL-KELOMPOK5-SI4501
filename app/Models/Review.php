<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User

class Review extends Model
{
    protected $fillable = [
        'user_id', 'rating', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}