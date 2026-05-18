<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Response;

class SurveyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function survey()
    {
        if (session()->has('survey_completed'))
        {
            return redirect()->route('thanks');
        }

        return view('survey');
    }

    public function submit(Request $request)
    {
        if (session()->has('survey_completed'))
        {
            return redirect()->route('thanks');
        }

        $validatedData = $request->validate([
            'row_1' => 'required|in:1,2',
            'row_2' => 'required|in:1,2',
            'row_3' => 'required|in:1,2',
            'row_4' => 'required|in:1,2',
            'row_5' => 'required|in:1,2',
        ]);

        Response::create([
            'row_1' => $validatedData['row_1'],
            'row_2' => $validatedData['row_2'],
            'row_3' => $validatedData['row_3'],
            'row_4' => $validatedData['row_4'],
            'row_5' => $validatedData['row_5'],
            'session_token' => Str::uuid(),
        ]);

        session(['survey_completed' => true]);

        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
