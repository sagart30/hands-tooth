<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use DB;

class ArticleController extends Controller
{
    //
	function show(){
		//$articles = DB::table('articles')->get();
		$articles = Article::all();
		
		//dd($articles);
		return view('list')->with(compact('articles'));
	}
	
	function addarticle(){
		return view('addarticle');
	}
	
	function savearticle(Request $request){
		//dd($request->all());exit;
		if($request->id){
			$article = article::find($request->id);
		}else{
			$article = new article;
		}

        $article->cLabel = $request->cLabel;
        $article->cRestrictions = $request->cRestrictions;

        $article->save();
		
		$request->session()->flash('msg','Article saved');
		return redirect('article');
	}
	
	function editarticle($id, Request $request){
		$articles = Article::where('id',$id)->first();
		if(!$articles){
			return redirect('article');
		}
		return view('updatearticle')->with(compact('articles'));
	}
	
}
