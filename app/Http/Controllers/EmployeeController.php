<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    const API_URL = [
        'employee' => 'http://localhost:8001/api/v1'
    ];
    public function index()
    {
        // $test = Http::get(self::API_URL['employee'] . '/employee');
        // return $test;
        $data = [
            'title' => 'Employee',
            'employees' => Http::get(self::API_URL['employee'] . '/employee')['data']
        ];

        return view('employee.index', $data);
    }

    public function create()
    {
        $data = [
            'employeeTypes' => Http::get(self::API_URL['employee'] . '/employee-type')['data']
        ];

        return view('employee.form', $data);
    }

    public function store(Request $request)
    {
        $employee = Http::post(self::API_URL['employee'] . '/employee', $request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => $request->nip
        ]);

        return redirect()->route('employees');
    }

    public function edit($id)
    {
        // $test  = Http::get(self::API_URL['employee'] . '/' . $id . '/employee')->json();
        // // return dd($test['data']['id']);
        $data = [
            'employeeTypes' => Http::get(self::API_URL['employee'] . '/employee-type')['data'],
            'employee' => Http::get(self::API_URL['employee'] . '/' . $id . '/employee')->json()['data']
        ];

        return view('employee.form', $data);
    }

    public function update($id, Request $request)
    {
        $employee = Http::post(self::API_URL['employee'] . '/' . $id . '/employee', $request->all());
        // $user = User::where('email')

        return redirect()->route('employees');
    }

    public function destroy($id)
    {
        $employee = Http::delete(self::API_URL['employee'] . '/' . $id . '/employee');

        return redirect()->route('employees');
    }
}