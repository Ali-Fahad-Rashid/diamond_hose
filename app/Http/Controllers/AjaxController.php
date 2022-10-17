<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\models\Basket;
use App\models\Fav;

use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function store($id,Request $request) {
        $post = Post::findOrFail($id);
        $baske = new Basket();
        $baske = $post->replicate()->setTable('basket');
        $baske->post_id = $id;
        $num = request('number2');
        if($num<1){$num=1;}
        $baske->number2 = $num;

        $baske->post_user_id= Auth::id();
        $baske->post_user= Auth::user()->email;
        $baske->color = request('color');
        $baske->size = request('size');
        $baske->price2 = $baske->price;
        $sum = Basket::where('post_user_id',  Auth::id())->sum('price');
        $baske->price3 = $sum + $baske->price;
        $baske->save();
        $count = Basket::where('post_user_id',  Auth::id())->count();
                return response()->json(['count'=>$count]);
    }

    public function destroy($id) {
         Basket::where([['post_id', $id],['post_user_id',  Auth::id()]])->delete();
        $count = Basket::where('post_user_id',  Auth::id())->count();
        return response()->json(['count'=>$count]);
    } 

    public function CheckAddandDelete($id) {
       $t = Basket::where([['post_user_id', '=', Auth::id()],['post_id', '=', $id]])->count();
       return response()->json(['t'=>$t]);
   } 

   public function checkbasket($id ,Request $request) {
    $x = Basket::findOrFail($id);
    $x->number2 = request('y');
    $x->price2 = request('z');
    $x->save();
    $sum = Basket::where(    
        'post_user_id',  Auth::id()
    )->sum('price2');
    $x->price3 = $sum;
    $x->save();
    $maxy = Basket::where(    
        'post_user_id',  Auth::id()
    )->max('price3');
    return response()->json(['z'=>$x,'maxy'=>$maxy]);
} 

public function search(Request $request) {
$query = request('query');
$query =  strtolower(trim($query)) ;

    $post2 = Post::where(    
        'post_tags','like','%'.$query.'%'
    )->orderBy('id', 'desc')
    ->limit(4)->get();
    $search="";
    foreach($post2 as $post){
    $search .='
    <a href=" '.route("post.show",$post->id).' ">
        <div class="card">
        <div class="row">         <div class="col s3"> 

        <img src="/uploads/'.$post->post_image.' " height="50" width="50" class=" circle m rounded-start" ></div>
        <div class="col s9">

        <h6 class="wrap black-text m"> '.substr($post->post_title,0,50) .' </h6>
        <h6 class="wrap black-text m"> '.$post->price.' </h6>
        <h6 class="wrap line black-text m"> '.$post->old_price.' </h6>
        </div></div></div></a>

';
        }
    return response()->json(['search'=>$search]);
} 
/* fav */
public function storefav($id,Request $request) {
    $post = Post::findOrFail($id);
    $baske = new Fav();
    $baske = $post->replicate()->setTable('favourite');
    $baske->post_id = $id;
    $baske->number2 = request('number2');
    $baske->post_user_id= Auth::id();
    $baske->color = request('color');
    $baske->size = request('size');
    $baske->price2 = $baske->price;
    $sum = Fav::where('post_user_id',  Auth::id())->sum('price');
    $baske->price3 = $sum + $baske->price;
    $baske->save();
    $count = Fav::where('post_user_id',  Auth::id())->count();
    return response()->json(['count'=>$count]);
}

public function destroyfav($id) {
    Fav::where([['post_id', $id],['post_user_id',  Auth::id()]])->delete();
    $count = Fav::where('post_user_id',  Auth::id())->count();
    return response()->json(['count'=>$count]);
} 
public function CheckAddandDeletefav($id) {
   $t = Fav::where([['post_user_id', '=', Auth::id()],['post_id', '=', $id]])->count();
   return response()->json(['t'=>$t]);
} 



}