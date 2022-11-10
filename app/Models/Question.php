<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['exercise_id', 'content', 'translation','image','status'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
