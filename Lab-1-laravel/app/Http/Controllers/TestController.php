<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function indexAction(Request $request)
    {
        $valid = $request->validate([
            'fio' => 'required|min:1',
            'year_student' => 'required',
            'boolean_question' => 'required',
            'equality' => 'required',
            'question_3' => 'required|min:10',
            'email' => 'required|regex:/^.+@.+$/i'
        ]);

        $answers = $this->CheckCorrectAnswers($request);

        return view('test', ['answers' => $answers]);
    }

    public function CheckCorrectAnswers($request)
    {
        $answers = [];

        if($request['boolean_question'] != "operation")
        {
            $answers[] = "Вопрос 1: ответ неверный";
        }
        else $answers[] = "Вопрос 1: ответ верный";

        if($request['equality'] != "condition")
        {
            $answers[] = "Вопрос 2: ответ неверный";
        }
        else $answers[] = "Вопрос 2: ответ верный";

        if($request['question_3'] != "Импликация")
        {
            $answers[] = "Вопрос 3: ответ неверный";
        }
        else $answers[] = "Вопрос 3: ответ верный";

        return collect($answers);
    }
}
