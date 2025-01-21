<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ChangeRequest extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'user_id']; // Add status field

    // You might also need relationships with other models, such as user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
