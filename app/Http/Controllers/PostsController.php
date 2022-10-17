<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\models\Stars;

use Illuminate\Support\Facades\Auth;

class PostsController extends Controller

{

  /* view */
    public function index() {
        $post = Post::where('advertisement','on')->orderBy('id', 'desc')->get();      
        $post2 = Post::where('categories','men')->orderBy('id', 'desc')->get();      
        $post3 = Post::where('categories','women')->orderBy('id', 'desc')->get();      
        $post4 = Post::where('categories','baby')->orderBy('id', 'desc')->get();      
        $post5 = Post::orderBy('id', 'desc')->get();      

        return view('post.index', [
          'post' => $post,
          'post2' => $post2,
          'post3' => $post3,
          'post4' => $post4,
          'post5' => $post5,

        ]);
      }


      public function search() {
        $query= request('searchin');
        $search = Post::where('post_tags','like','%'.$query.'%')->orderBy('id', 'desc')->paginate(12);      
        return view('post.categories', [
          'posts' => $search,
        ]);
      }

      public function categories($categories) {
        $post = Post::where('categories',$categories)->orderBy('id', 'desc')->paginate(12);      
        return view('post.categories', [
          'posts' => $post,
        ]);
      }

      public function categories2($categories,$categories2) {
        $post = Post::where([['categories',$categories],['categories2',$categories2]])->orderBy('id', 'desc')->paginate(12);      
        return view('post.categories', [
          'posts' => $post,
        ]);
      }


      public function show($id) {
        $post = Post::findOrFail($id);
        $stars = Stars::where('post_id',$id)->orderBy('id', 'desc')->get();

        return view('post.show', ['post' => $post, 'stars' => $stars]);
      }
      public function create() {
        return view('post.create');
      }
      public function edit($id) {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post' => $post]);
      } 

      /* oprations */
      public function store(Request $request) {
        $post = new Post();
        $post->post_title = request('name');
        $post->price = request('price');
        $post->number = request('number');

        $post->post_status = request('post_status');
        $post->old_price = request('old_price');
        $post->advertisement = request('advertisement');

        $post->categories = request('categories');
        $post->color = request('color');
        $post->size = request('size');

        $post->post_content = request('content');

       $x = request('name');
       $x =  strtolower(trim($x)) ;

       /*  $tag = explode(' ',$x);
            $y = implode(", ",$tag); */

        $post->post_tags = $x;



        if($request->hasfile('filenames'))
        {
           foreach($request->file('filenames') as $file)
           {
               $name = uniqid().'.'.$file->extension();
               $file->move(public_path('uploads'), $name);  
               $data[] = $name;  
           }
           $post->images = $data;
        }
        if ($request->hasFile('file')) {
          $imageName = uniqid().'.'.$request->file->extension();  
          $request->file->move(public_path('uploads'), $imageName);
          $post->post_image = $imageName;
      }
else {
  $post->post_image = '123.png';
}
        $post->post_user_id = Auth::id();
        $post->post_user = Auth::user()->email;
        $post->save();
     //   notify()->success('Your Post added Successfully!', $post->post_title);
        return redirect('/create')->with('mssg', 'Your Post added Successfully!');
      }


      public function update($id,Request $request) {                    
        if ($request->hasFile('file')) {
          $imageName = uniqid().'.'.$request->file->extension();  
          $request->file->move(public_path('uploads'), $imageName);
      }
                else {
                $post = Post::findOrFail($id);
                   $imageName = $post->post_image;
                  }
                      Post::where('id', $id)->
                    update([     
           'post_title' => request('name'), 
           'post_status' => request('type'),     
           'post_desc' => request('content'),
           'post_content' => request('content'),
           'post_tags' => request('name'),
           'post_image' => $imageName,
                      ]);
        return redirect('/post/'.$id)->with('mssg', 'Your Post Edited Successfully!');
      } 
      public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/post');
      } 
    }