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
        $savedImagePath = $request ->file('image')->sotre('questions','public');
        $questions = new Questions($request->validated());
        $blog->image = $savedImagePath;
        $blog->save();

        return view('admin.index')->with('success', 'ブログを投稿しよう');
    }
 
}
