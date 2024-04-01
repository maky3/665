<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'grade'];

    public function testResults()
    {
        return $this->hasMany(TestResult::class);
    }
    public function averageScore()
    {
        return $this->testResults()->avg('score');
    }
}
