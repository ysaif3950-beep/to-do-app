<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 👈 استدعاء الترايت من مكانه الصح
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // 👈 هنا هنستخدمه

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
