<?php
use Illuminate\Support\Facades\Auth;
use App\models\Basket;
use App\models\Post;
use App\models\Fav;
use App\models\Stars;

if (! function_exists('basket_count')) {
    function basket_count() {
$count = Basket::where('post_user_id', Auth::id())->count();
return $count;
    }
}

if (! function_exists('fav_count')) {
    function fav_count() {
$favcount = Fav::where('post_user_id', Auth::id())->count();
return $favcount;
    }
}


if (! function_exists('maxx')) {
    function maxx() {
        $maxx = Basket::where(    
            'post_user_id',  Auth::id()
        )->max('price3');
        
        return $maxx;
    }
}



if (! function_exists('chexkbasket')) {
    function chexkbasket($id) {
        $chexkbask = Basket::where([['post_user_id',Auth::id()],['post_id', $id]])->count();
        return $chexkbask;
    }
}


if (! function_exists('chexkfav')) {
    function chexkfav($id) {
        $chexkbask = Fav::where([['post_user_id',Auth::id()],['post_id', $id]])->count();
        return $chexkbask;
    }
}