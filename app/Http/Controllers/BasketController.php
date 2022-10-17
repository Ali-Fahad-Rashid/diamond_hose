<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\models\Basket;
use Illuminate\Support\Facades\Auth;
class BasketController extends Controller
{
    public function basket() {
        $basket = Basket::where('post_user_id', Auth::id())->orderBy('id', 'desc')->get();      
        return view('other.basket', [
          'basket' => $basket,
        ]);
      }

      public function order() {
        return view('other.order');
      }

      
      public function destroy($id) {
        $post = Basket::findOrFail($id);
        $post->delete();
        return redirect('/basket');
      } 

}
