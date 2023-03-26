<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    //
    function getData()
    {
        return DB::table('employees')->join('company','employees.address','=','company.address')->select('employees.name')
            ->get();
    }
}
