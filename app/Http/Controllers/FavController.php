<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fav;
use Illuminate\Support\Facades\Auth;

class FavController extends Controller
{
    public function favorite() {
        $post = Fav::where('post_user_id',Auth::id())->orderBy('id', 'desc')->get();      
        return view('other.fav', [
          'posts' => $post,
        ]);
      }
    
    
      public function destroy($id) {
        $post = Fav::findOrFail($id);
        $post->delete();
        return redirect('/favorite/myfavorite');
      } 
    
    
    
    }
