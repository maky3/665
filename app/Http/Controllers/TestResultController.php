<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Test;
use App\Models\TestResult;
use Illuminate\Http\Request;

class TestResultController extends Controller
{
    // Запись результатов тестирования для конкретного студента и теста
    public function store(Request $request, Student $student, Test $test)
    {
        $validatedData = $request->validate([
            'score' => 'required|integer',
        ]);

        $testResult = new TestResult([
            'score' => $validatedData['score'],
        ]);

        $testResult->student()->associate($student);
        $testResult->test()->associate($test);
        $testResult->save();

        return response()->json($testResult, 201);
    }

    // Получение результатов тестирования для определенного студента
    public function showByStudent(Student $student)
    {
        $testResults = $student->testResults;
        return response()->json($testResults);
    }

    // Получение среднего балла по тестам
    public function averageScore()
    {
        $averageScore = TestResult::avg('score');
        return response()->json(['average_score' => $averageScore]);
    }

    // Получение медианы баллов по тестам
    public function medianScore()
    {
        $medianScore = TestResult::median('score');
        return response()->json(['median_score' => $medianScore]);
    }

    // Получение списка пройденных тестов для определённого студента
    public function testsByStudent(Student $student)
    {
        $tests = $student->testResults()->with('test')->get()->pluck('test');
        return response()->json($tests);
    }
}
