<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Illuminate\Support\Facades\Auth;
class OtherController extends Controller
{
    public function search_view() {
        return view('other.search');
      }}
