<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\QuestionnaireResponse;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    // public function submitQuestionnaire(Request $request)
    // {
    //     $data = $request->except('_token', 'name');
    //     $totalQuestions = count($data);
    //     $totalScore = 0;

    //     foreach ($data as $score) {
    //         if ($score >= 7) {
    //             $totalScore += 1;
    //         }
    //     }
    //     $percentageScore = ($totalScore / $totalQuestions) * 100;
    //     QuestionnaireResponse::create([
    //         'name' => $request->input('name'),
    //         'responses' => json_encode($data),
    //         'score' => $percentageScore
    //     ]);

    //     return redirect()->route('home')->with('success', 'Thank You for Booking a consultation with TGR. TGR will get back to you as soon as possible.');
    // }
    // public function submitQuestionnaire(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //     ]);
    //     $existingResponse = QuestionnaireResponse::where('name', $request->input('name'))
    //         ->orWhere('email', $request->input('email'))
    //         ->first();
    //     if ($existingResponse) {
    //         return redirect()->route('home')->with('info', 'TGR will contact you as soon as possible. TGR is processing your application.');
    //     }
    //     $data = $request->except('_token', 'name', 'email');
    //     $totalQuestions = count($data);
    //     $totalScore = 0;

    //     foreach ($data as $score) {
    //         if ($score >= 7) {
    //             $totalScore += 1;
    //         }
    //     }

    //     $percentageScore = ($totalScore / $totalQuestions) * 100;

    //     QuestionnaireResponse::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'responses' => json_encode($data),
    //         'score' => $percentageScore
    //     ]);
    //     return redirect()->route('home')->with('success', 'Thank You for Booking a consultation with TGR. TGR will get back to you as soon as possible.');
    // }

    public function submitQuestionnaire(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $existingResponse = QuestionnaireResponse::where('name', $request->input('name'))
            ->orWhere('email', $request->input('email'))
            ->first();

        if ($existingResponse) {
            return back()->with('info', 'TGR will contact you as soon as possible. TGR is processing your application.');
        }

        $data = $request->except('_token', 'name', 'email');
        $totalQuestions = count($data);
        $totalScore = 0;

        foreach ($data as $score) {
            if ($score >= 7) {
                $totalScore += 1;
            }
        }

        $percentageScore = ($totalScore / $totalQuestions) * 100;
        QuestionnaireResponse::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'responses' => json_encode($data),
            'scores' => $percentageScore,
        ]);

        return back()->with('success', 'Thank You for Booking a consultation with TGR. TGR will get back to you as soon as possible.');
    }
}
