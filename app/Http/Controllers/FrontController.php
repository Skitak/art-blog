<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Repositories\ArticleRepository;
// use App\Repositories\GaleryRepository;

class FrontController extends Controller
{
    protected $articles;
    protected $galeries;

    // public function __construct(ArticleRepository $article, GaleryRepository $galeries){
    //     $this->articles = $articles;
    //     $this->galeries = $galeries;
    // }
    
    public function show($id) {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function index() {
        return view('home');
    }

    public function article(Request $request, $name) {
        return view('article', ['article' => $name]);
    }

    public function galery() {
        return view("galery");
    }

    public function about() {
        return view("about");
    }

    public function contact(Request $request) {
        // if ($request->isMethod('post')) {}
        return view("contact");
    }
}