<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function averageScore(Student $student): \Illuminate\Http\JsonResponse
    {
        $averageScore = $student->averageScore();
        return response()->json(['average_score' => $averageScore]);
    }
}
