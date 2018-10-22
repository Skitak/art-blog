<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditGaleryRequest;
use App\Galery;
use App\Post;
use Illuminate\Http\Request;
use App\Subcategory;

class GaleryController extends Controller
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
        $galeries = Galery::all();
        return view('back/galeries/index', ['galeries' => $galeries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galery = new galery();
        $galery->subcategory_id = 1;
        $subcategories = Subcategory::pluck('name', 'id');
        $formOptions = ['method' => 'post',
                        'url' => route('galeries.store', $galery),
                        'files' => true];
        return view('back/galeries/create', compact('galery', 'subcategories', 'formOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditGaleryRequest $request)
    {
        $galery = Galery::create($request->all());
        $this->storeFiles($galery, $request);
        $galery->save();
        return redirect()->action('GaleryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        $subcategories = Subcategory::pluck('name', 'id');
        $formOptions = ['method' => 'put',
                        'url' => route('galeries.update', $galery),
                        'files' => true];
        return view('back/galeries/edit', compact('galery', 'subcategories', 'formOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditGaleryRequest $request, Galery $galery)
    {
        $galery->update($request->all());
        $this->storeFiles($galery, $request);
        $galery->save();
        return redirect()->action('GaleryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        foreach ($galery->posts as $post) {
            if (Storage::disk('public')->exists($post->slug))
                Storage::disk('public')->delete($article->image);
        }
        Galery::destroy($galery->id);
        return redirect()->action('GaleryController@index');
    }

    private function storeFiles($galery, $request){
        foreach($request->file('galery_images') as $image){
            $post = Post::create(['galery_id' => $galery->id]);
            $post->slug = $image->store('galeries', 'public');
            $post->save();
        }
    } 
}
