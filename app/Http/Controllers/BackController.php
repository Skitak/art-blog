<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Galery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return redirect()->action("ArticleController@index");
        // Change that
    }

    public function article(Request $request, $title) {
        $article = Article::where('title', $title)->firstOrFail();
        return view('back/article', ['article' => $article]);
    }

    public function about() {
        return view("back/about");
    }

    public function contact(Request $request) {
        // if ($request->isMethod('post')) {}
        return view("back/contact");
    }
}