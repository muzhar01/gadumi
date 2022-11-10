<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $fillable = ['lesson_id', 'title', 'content', 'description','translation','status','image','index'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
