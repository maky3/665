<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    protected $fillable = ['student_id', 'test_id', 'score'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
