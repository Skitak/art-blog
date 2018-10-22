<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditArticleRequest;
use App\Article;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('back/articles/index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        $categories = Category::pluck('name', 'id');
        $formOptions = ['method' => 'post',
                        'url' => route('articles.store', $article),
                        'files' => true];
        return view('back/articles/create', compact('article', 'categories', 'formOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditArticleRequest $request)
    {
        $latestArticle = Article::latest()->first();
        $article = Article::create($request->all());
        $article->previous_id = $latestArticle->id;
        $this->storeFile($article, $request);
        $article->save();
        $latestArticle->next_id = $article->id;
        $latestArticle->save();
        return redirect()->action('ArticleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::pluck('name', 'id');
        $formOptions = ['method' => 'put',
                        'url' => route('articles.update', $article),
                        'files' => true];
        return view('back/articles/edit', compact('article', 'categories', 'formOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditArticleRequest $request, Article $article)
    {
        $this->storeFile($article, $request);
        $article->update($request->all());
        $article->save();
        return redirect()->action('ArticleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->next != null){
            $article->next->previous_id = $article->previous != null ? $article->previous->id : null;
            $article->next->save();
        }
        if ($article->previous != null){
            $article->previous->next_id = $article->next != null ? $article->next->id : null;
            $article->previous->save();
        }

        if ($article->image != null && Storage::disk('public')->exists($article->image))
            Storage::disk('public')->delete($article->image);

        Article::destroy($article->id);
        return redirect()->action('ArticleController@index');
    }

    public function previousArticle(Article $article){
        $previousArticle = $article->previous;
        while ($previousArticle != null || $previousArticle->online ){
            $previousArticle = $previousArticle->previous;
        }
        return $previousArticle;
    }
    
    public function nextArticle(Article $article){
        $nextArticle = $nextArticle->next;
        while ($nextArticle != null || $nextArticle->online ){
            $nextArticle = $nextArticle->next;
        }
        return $nextArticle;
    }

    private function storeFile(Article $article, $request){
        $file = $request->file('article_image');
        if ($file == null)
            return;
        if ($article->image != null && Storage::disk('public')->exists($article->image))
            Storage::disk('public')->delete($article->image);
        $article->image =  $file->store('article/image', 'public');
    }
}
