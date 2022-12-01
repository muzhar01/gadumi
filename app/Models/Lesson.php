<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','title','overview','description','status','image','index','recommended','paid','level'];
    public function progress(){
        return $this->hasOne(UserProgress::class,'lesson_id');
    }
    
}
