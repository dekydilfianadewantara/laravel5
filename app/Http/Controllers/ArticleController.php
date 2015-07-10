<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Storage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Genre;
class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();
      // return view('articles.read', ['articles' => $articles]);
       return view('articles.read')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {      
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    

    public function store(Request $request)
    {
   

        $rules = [
         'title' => 'required',
         'content' => 'required'
        ];
        $messages = [
            'email.unique' => 'Email telah digunakan, Mohon masukkan yang lain',
        ];
        // untuk validasi, format parameter, input dan rule
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
            return Redirect()->to('article/create')->withErrors($validator);

        $data = new Article();
        $destinationPath = public_path('images/articles');
        $data->title = $request->get('title');
        $data->content = $request->get('content');

        $array = $request->get('genre');
        $data->save();
         //$data->genre = implode('_', $array);
         
     //   echo $arrays;
    // ['Joe', 'PHP', 'Ruby'];
        

        $destinationPath = public_path('images/articles');
        $fileName = $data->id.".PNG";
        $data->image = $fileName;
        $request->file('image')->move($destinationPath, $fileName);
        $data->save();

        foreach ($array as  $genre) {
            $data = new Genre();
             $data->genre  = $genre;
             $data->save();
         }
         
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article= Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
         $rules = [
         'email' => 'unique:articles,email',
         'password' => 'required',
         'role' => 'required'
        ];
        // untuk validasi, format parameter, input dan rule
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails())
            return Redirect()->back()->withInput()->withError($validator);

        $data = Article::find($id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->password = $request->get('password');
        $data->save();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $data = Article::find($id);
      
        $fileName = $data->image;
        Storage::delete($fileName);
        $data->delete();
        return redirect()->route('article.index');
    }
}
