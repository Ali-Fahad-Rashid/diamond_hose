<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use App\models\Basket;
use App\models\Fav;
use App\models\Coupon;
use App\models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function order(Request $request) {

        $copp = request('coupon');
        $pri2 = request('pri2');
        $pri = request('pri');
        $phone1 = request('phone1');
        $phone2 = request('phone2');
        $city = request('city');   
         $address1 = request('address1');
        $address2 = request('address2');
        $address3 = request('address3');

        $basket = Basket::where('post_user_id', Auth::id())->orderBy('id', 'desc')->get();     
        
        
        if($basket){
            $result="تمت العمليه بنجاح" ;
        
      


        foreach($basket as $baske){

    $orde = new Order();
    $orde = $baske->replicate()->setTable('orderr');

    $orde->phone1 = $phone1;
    $orde->phone2 = $phone2;
    $orde->city = $city;
    $orde->address1 = $address1;
    $orde->address2 = $address2;
    $orde->address3 = $address3;

    if($copp){

        $coupget = Coupon::where(    
            'types',  $copp
        )->first();
        $coupget->status = 'used' ;
        $coupget->username = Auth::user()->email ;
        $coupget->user_id = Auth::id() ;

        $coupget->save();

    $orde->price_coupon = $pri2;
    $orde->coupon = $coupget->name ;
}



    $orde->save();


        }
    }


    

    else{
        $result="السله فارغه " ;

    } 
        
        return response()->json(['result'=>$result]);
    
    }


}
