<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'name',
        'email',
        'website',

    ];
    function ues()
    {
        return $this->belongsTo(User::class);
    }
}
