<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
        public function create(){
     
            return view('posts.create');
        }
     
        public function store(Request $request){
            $article=new Article();
            $article->fill([
                'title'=>request('title'),
                'body'=>request('body')
            ]);
            $article->save();

            return redirect('posts/create');
        }

        public function show(){
            $articles=Article::all();
            return view('posts.view', compact('articles'));
        }
}
