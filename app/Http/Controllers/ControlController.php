<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Illuminate\Support\Facades\Auth;
use App\models\Order;
use Illuminate\Support\Facades\Log;
class ControlController extends Controller

{

  /* view */
    public function index() {
        return view('other.control');
      }

      public function order() {
        $ord = Order::where('operations','new')->orderBy('post_user_id', 'desc')->get();
        return view('other.finalorder',['orders'=>$ord]);
      }


      public function deletedOrder() {
        $ord = Order::where('operations','delete')->orderBy('post_user_id', 'desc')->get();
        return view('other.deletedOrder',['orders'=>$ord]);
      }

      public function completeOrder() {
        $ord = Order::where('operations','complete')->orderBy('post_user_id', 'desc')->get();
        return view('other.completeOrder',['orders'=>$ord]);
      }

      public function waitingOrder() {
        $ord = Order::where('operations','wait')->orderBy('post_user_id', 'desc')->get();
        return view('other.waitingOrder',['orders'=>$ord]);
      }
    


    public function addeditdelete($id,Request $request)
{
  $post = Order::findOrFail($id);

    switch (request('action')) {

        case 'delete':

          $post->operations = 'delete';
          $post->save();
          return back();

          break;

        case 'complete':

          $post->operations ='complete';
          $post->save();
          return back();

          break;

        case 'wait':

          $post->operations = 'wait';
          $post->save();
          return back();

          break;
    }
}









}