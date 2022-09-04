<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function Ramsey\Uuid\v1;

class StudentController extends Controller
{
    const API_URL = [
        'student' => 'http://localhost:8002/api'
    ];

    public function index()
    {
        // $test = Http::get(self::API_URL['student'] . '/mahasiswa')->json();
        // return dd($test['data'][0]);
        $data = [
            'students' => Http::get(self::API_URL['student'] . '/mahasiswa')['data']
        ];

        return view('student.index', $data);
    }
}
