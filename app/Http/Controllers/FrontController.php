<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Galery;
use App\Category;
use App\Subcategory;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index() {
        $url = Article::latest()->where('online', true)->first();
        if ($url == null)
            return view('front/article/no-article');
        return redirect()->action('FrontController@article', 
            ['article' => $url]);
    }

    public function article(Request $request, Article $article) {
        if($request->ajax()){
            return view('front/article/article', ['article' => $article]);
        }
        return view('front/article/index', ['article' => $article]);
    }

    public function nextArticle(Request $request, Article $article) {
        $message = "Il n'y a pas d'autres articles pour le moment, revenez plus tard.";
        if ($article->next == NULL)
            return view('front.utils.message', compact("message"));

        return view('front/article/article', ['article' => $article->next]);
    }

    public function previousArticle(Request $request, Article $article) {
        $message = "Il n'y a pas d'autres articles pour le moment, revenez plus tard.";
        if ($article->previous == NULL)
            return view('front/utils/message', compact("message"));

        return view('front/article/article', ['article' => $article->previous]);
    }

    public function galery() {
        return view("front/galery");
    }

    public function galeryCategory() {
        return view("front/galery");
    }

    public function galerySubcategory() {
        return view("front/galery");
    }

    public function galeryShow() {
        return view("front/galery");
    }

    public function about() {
        return view("front/about");
    }

    public function contact(Request $request) {
        // if ($request->isMethod('post')) {}
        return view("front/contact");
    }
}