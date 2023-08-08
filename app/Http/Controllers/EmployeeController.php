<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function data(){
        $data = Employees::all();
        return view('employees', ['data' => $data]);
    }
}
