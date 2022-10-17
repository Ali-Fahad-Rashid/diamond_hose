<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Post;
use App\models\Stars;

use Illuminate\Support\Facades\Auth;

class StarsController extends Controller
{

    public function rating(Request $request) {


        $stars = request('stars');
        $id = request('id');
        $con = request('con');


        $post = Post::findOrFail($id);
        $st = new Stars();

        $st->user_id  = Auth::id();
        $st->post_id = $id;
        $st->types= $stars;
        $st->com= $con;
        $st->name= Auth::user()->name;
        $st->email= Auth::user()->email;

        $st->star_status= 'no';

        $st->save();

        
        $sum = Stars::where(    
            'post_id', $id
        )->sum('types');

        $count = Stars::where(
            'post_id', $id
        )->count();
    
        $post->avg = $sum / $count;
        $post->save();
        
        return response()->json(['count'=>'تم ارسال مراجعتك']); 
    
    }


}
