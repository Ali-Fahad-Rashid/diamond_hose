<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\Post;
use App\models\Basket;
use App\models\Fav;
use App\models\Coupon;
use Illuminate\Support\Str;

class CouponController extends Controller
{

   public function couponview() {
      $s1 = Coupon::where('status','new')->orderBy('id', 'desc')->paginate(12);     
      $s2 = Coupon::where('status','used')->orderBy('id', 'desc')->paginate(12);      
 
      return view('other.coupon', [
        'posts' => $s1,
        'posts2' => $s2,

      ]);
    }



    public function coupon(Request $request) {
        $x=0;
        $copp = request('coupon');       
        $coop = Coupon::where([['types', $copp],['status','new']])->count();    
        $coupget = Coupon::where([['types', $copp],['status','new']])->first();    
if($coop){ $x=$coupget->price;
       $result="تمت العمليه بنجاح" ;
    }
    else {    
            $result="الرمز غير صالح" ;   
         }
        return response()->json(['result'=>$result,'copmin'=>$x]);   
     }

     public function addcoupon(Request $request) {

      $namecop = request('namecop');    
      $pricecop = request('pricecop');       
      $typescop = request('typescop');       

      for($i=0;$i<$typescop;$i++){
$newcoupon = new Coupon();
$newcoupon->name =$namecop ;
$newcoupon->status = 'new';
$newcoupon->price = $pricecop ;
$random = Str::random(20);
$newcoupon->types	 = $random;
$newcoupon->save();

      }

      return response()->json(['result'=>"تمت العمليه بنجاح"]);   
   }

     

}