<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiQuestionController extends Controller
{
    public function index()
    {
        $questions = [];    //質問と回答を含んだ全ての配列
        $parents = DB::table('questions')
            ->whereNull('parent')
            ->orderBy('id', 'desc')
            ->get();    //質問だけをID降順にソートしつつ取得
        foreach($parents as $parent){   //取得した質問をループさせてそれぞれの回答を取得
            $children = DB::table('questions')
                ->where('parent', $parent->id)
                ->get();//この質問に属する回答を取得

            $questions[] = collect([$parent])->merge($children);//質問と回答をマージしてコレクションにし配列に追加
        }   

        return response()->json($questions);
    }


    public function show(Question $question)
    {
        $questions = collect([$question]);//表示対象の質問をコレクションに
        $answers = Question::where('parent',$question->id)->get();//親IDが表示対象の質問のレコード、つまり表示対象の質問の回答を取得
        $questionsAndAnswers = $questions->merge($answers);//表示対象の質問と回答をマージ
        
        return response()->json($questionsAndAnswers);
    }



}