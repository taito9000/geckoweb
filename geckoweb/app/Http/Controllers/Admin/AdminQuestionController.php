<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminQuestionController extends Controller
{
    //質問一覧画面
    public function index()
    {
        return view('admin.index');
    }

    //詳細ページ
    public function edit(Question $question)
    {
        return view('admin.edit', ['question' => $question]);
    }
    public function store(Request $request)
    {
        $request->validate([
            "title" => ['required', 'string', 'max:255'],
            "body" => ['required', 'string', 'max:1500'],
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
        $question = new Question;
        $question->title = $request->title;
        $image = $request->file('image');
        if (isset($image)) {
            $imageSavePath = $image->store('images', 'public');
            $question->image = $imageSavePath;
        }
        $question->body = $request->body;
        $question->parent = $request->parent;
        $question->save();

        return back()->with('success', '回答を投稿しました。');
    }

    
    public function destroy(Question $question){
        $questions = collect([$question]);  //削除対象の質問または回答
        $answers = Question::where('parent',$question->id)->get();  //この質問への回答を取得
        $questionsAndAnswers = $questions->merge($answers); //質問と回答をマージして一つの配列にする

        foreach($questionsAndAnswers as $question){ //質問と回答の配列をループ
            if(isset($question->image) && Storage::disk('public')->exists($question->image)){
                Storage::disk('public')->delete($question->image);//画像があればストレージから画像を削除
            }
            $question->delete();//モデルインスタンスを削除
        }
        return back()->with('success', '投稿を削除しました。');//Flashメッセージをつけて元のURL戻る
    }
}