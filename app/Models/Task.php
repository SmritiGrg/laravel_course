<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'user_id'];

    public function tasks(): void
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
