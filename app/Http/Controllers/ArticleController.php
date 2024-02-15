<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function index()
    // {
    //     $article = Articles::all();
    //     return view('artical.index',[
    //         'article' =>  $article
    //     ]);
    // }

    public function index()
    {
        $articles = Articles::all();
        return view('artical.index',[
            'articles' => $articles
        ]);
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $articles = new Articles();

        return view('artical.create',[
            'articles' => $articles
        ]);
    }

    /**
     * Store a newly created article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|integer',
            'designation' => 'required|string',
            'prix_u' => 'required|numeric',
            'rayon' => 'required|string',
            'ss_rayon' => 'required|integer',
        ]);

        $article = Articles::createArticle($data);

        return redirect()->route('artical.index')->with('success', 'Article created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($_id)
    {
        
        $articles = Articles::findOrFail($_id);

        return view('artical.edit',[
            'articles' => $articles
        ]);
    }

    /**
     * Update the specified article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $_id)
    {
        $data = $request->validate([
            'code' => 'required|integer',
            'designation' => 'string',
            'prix_u' => 'numeric',
            'rayon' => 'string',
            'ss_rayon' => 'integer',
        ]);
        $article = Articles::find($_id);
        $article->updateArticle($data);

        return redirect()->route('artical.index')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified article from the database.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($_id)
    {
        $article = Articles::findOrFail($_id);
        $article->delete();
        

        return redirect()->route('artical.index')->with('success', 'Article deleted successfully');
    }
}
