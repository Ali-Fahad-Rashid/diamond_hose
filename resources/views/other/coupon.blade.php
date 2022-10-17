@extends('layouts.primary')
@section('content')

<div class="container">
    <div class="col s12">
<h1 class="center-align"> الكوبونات </h1>
</div>
    </div>


    <div class="container">
    <div class="row">

    <div class="col s12 ">

    <ul id="tabs-swipe-demo" class="tabs ">
    <li class="tab col s6 "><a href="#test-swipe-1">الكوبونات الجديده</a></li>
    <li class="tab col s6"><a class="" href="#test-swipe-2">الكوبونات المستخدمة</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12 ">
      
  @foreach($posts as $post)
<div class="card hoverable">

<div class="row">

    <div class="col s2">
<p>  {{$post->name	}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$post->price}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$post->status}}  </p>
    </div>

    <div class="col s2">
<p>  {{$post->types}}  </p>
    </div>
    
 
</div>
    </div>

@endforeach 

  </div>
  <div id="test-swipe-2" class="col s12 ">
  @foreach($posts2 as $post2)
<div class="card hoverable">

<div class="row">

    <div class="col s2">
<p>  {{$post2->name	}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$post2->price}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$post2->status}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$post2->username}}  </p>
    </div>

    <div class="col s2">
<p>  {{$post2->types}}  </p>
    </div>
    
 
</div>
    </div>

@endforeach 


  </div>



  <!--       
-->

</div>
    </div>
    </div>



@endsection