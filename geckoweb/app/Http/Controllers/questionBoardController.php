<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class questionBoardController extends Controller
{
    public function index()
    {
        return view('pages/questionBoard');
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" =>['nullable','required_without:parent', 'string', 'max:255'],
            "body" => ['required', 'string', 'max:1500'],
            "image"=>['nullable'],
            'parent' => [
                function ($attribute, $value, $fail) {
                    if (isset($value)) {
                        $parent = Question::find($value);
                        if (!isset($parent)) {
                            $fail('回答先の質問が存在しません');
                        } elseif (isset($parent->parent)) {
                            $fail('回答には回答できません');
                        }
                    }
                },
            ],
        ]);
        $question = new Question; //Questionモデルのインスタンス作成
        $question->title = $request->title; //タイトル
        $image = $request->file('image'); //画像
        if (isset($image)) { //画像がアップロードされていれば
            $imageSavePath = $image->store('images', 'public'); //publicストレージの
            //imagesフォルダにアップロードされたファイルを保存
            $question->image = $imageSavePath; //画像の保存先パス
        }
        $question->body = $request->body; //本文
        $question->parent = $request->parent; //親ID
        $question->save(); //作成したインスタンスを保存

        return redirect()->route('questionBoard.complete');
        //return view('pages/complete');
    }

    public function complete()
    {
        return view('pages/complete');
    }
    public function show(Question $question)
    {
        if (isset($question->parent)) {
            $parent = Question::find($question->parent);
            return redirect()->route('questionBoard.show', ['question' => $parent]);
        }
        return view('pages/questionView', ['question' => $question]);
    }
}