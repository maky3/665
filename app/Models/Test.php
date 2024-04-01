<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['subject', 'date'];

    public function testResults()
    {
        return $this->hasMany(TestResult::class);
    }
}
