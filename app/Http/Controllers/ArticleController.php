<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showAllArticles(){
        $articles = Article::all();
        return view('articles', ['articles'=>$articles]);
    }

    public function showArticle($id){
        $article = Article::findOrFail($id);
        return view('article', ['article'=>$article]);
    }

    public function editArticle($id){
        $article = Article::findOrFail($id);
        return view('edit',['article'=>$article]);
    }

    public function editAndSaveArticle(Request $request, $id){
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->save();
        return redirect('articles');
    }

    public function deleteArticle($id){
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('articles');
    }

    public function newArticle(){

        return view('welcome');
    }

}
