<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    //質門一覧画面
    public function index()
    {
        return view('admin.index');
    }

  //回答ページ
    public function edit()
    {
        return view('admin.edit');
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
