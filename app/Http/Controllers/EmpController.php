<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Request\createEmpRequest;

class EmpController extends Controller
{
    //
    public function createEmp(createEmpRequest $request){
            $request->validated();

    }
}
