<?php

namespace App\Http\Controllers;
use App\Models\Article ;
use Illuminate\Http\Request;
 use App\Http\Requests\TExtrequest;

class ArticleController extends Controller
{
    //

public function index(Request $request){
 $verify= $request->validate([
    'name' => 'required|min:5',
    'description' =>'required' ,
]);
   if($verify){
    $article =Article::create([
        'name'=>$request->name ,
        'description'=>$request->description,
    ]);
    $article->save() ;
    return redirect()->back()->with('success' ,'l\'article a bel et bien ete enregistrer') ;
   
   }else{

    return redirect->back() ;
   }
       
    
}
public function index1(){
    $articles =Article::all() ;
    return view('accueil',compact('articles'));
}
public function details($id){
   $articles =  Article::find($id) ;
return view('details',compact('articles')) ;
}
public function edit(Article $article){
    return view('edit',compact('article')) ; 
}
public function update( TExtrequest $request ,Article $article){


    $article->name =$request->name ;
    $article->description =$request->description ;
    $article->save() ;

    return redirect('/accueil')->with('success' ,'l\'article a ete mis a jour ') ;
 


}
public function deleter(Article $article){
    $article->delete();
    return redirect('/accueil')->with('success' ,'l\'article a bel et bien ete suprimer') ;
}
}

