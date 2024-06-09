<?php
// Model ReviewAdmin
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User

class ReviewAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'rating', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserName()
    {
        return $this->user->name;
    }
}
