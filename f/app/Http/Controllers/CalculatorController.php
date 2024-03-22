<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $firstNumber = $request->input('first_number');
        $secondNumber = $request->input('second_number');
        $operation = $request->input('operation');

        switch ($operation) {
            case '+':
                $result = $firstNumber + $secondNumber;
                break;
            case '-':
                $result = $firstNumber - $secondNumber;
                break;
            case '*':
                $result = $firstNumber * $secondNumber;
                break;
            case '/':
                $result = $firstNumber / $secondNumber;
                break;
        }

        return view('calculator', compact('result'));
    }
}
