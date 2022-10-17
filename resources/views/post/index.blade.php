@extends('layouts.primary')
@section('content')
<div class="row">  
<div class="col s12">
<div dir="ltr" class="autoplay slider">
@foreach($post as $x)
   <a href="/post/{{$x->id }}">
   <div class="card">
            <div class="card-image">  
            <img src="/uploads/{{ $x->post_image }}" height="500" width="500">
              <span class="card-title ">{{$x->post_title}}</span>
            </div>
          </div>
   </a>
@endforeach
  </div>
</div>
</div>
</br></br></br>
<div class="">  
<div class="col "> 
<div class="slid">
<div dir="ltr" class="autoplay2 slider ">
@foreach($post2 as $x)
   <a href="/post/{{$x->id }}">
   <div class="card">
            <div class="card-image">  
            <img src="/uploads/{{ $x->post_image }}" height="500" width="500">
              <span class="card-title ">{{$x->post_title}}</span>
            </div>
          </div>
   </a>
@endforeach
</div><!--  -->
</div>
</div>
</div>
</br></br></br>
<div class="">  
<div class="col s11"> 
<div class="slid">
<div dir="ltr" class="autoplay2 slider ">
@foreach($post3 as $x)
   <a href="/post/{{$x->id }}">
   <div class="card">
            <div class="card-image">  
            <img src="/uploads/{{ $x->post_image }}" height="500" width="500">
              <span class="card-title ">{{$x->post_title}}</span>
            </div>
          </div>
   </a>
@endforeach
</div><!--  -->
</div>
</div>
</div>
</br></br></br>
<div class="">  
<div class="col s11"> 
<div class="slid">
<div dir="ltr" class="autoplay2 slider ">
@foreach($post4 as $x)
   <a href="/post/{{$x->id }}">
   <div class="card">
            <div class="card-image">  
            <img src="/uploads/{{ $x->post_image }}" height="500" width="500">
              <span class="card-title ">{{$x->post_title}}</span>
            </div>
          </div>
   </a>
@endforeach
</div>
</div>
</div>
</div>
</br></br></br>
<div class="">  
<div class="col s11"> 
<div class="slid">
<div dir="ltr" class="autoplay2 slider ">
@foreach($post5 as $x)
   <a href="/post/{{$x->id }}">
   <div class="card">
            <div class="card-image">  
            <img src="/uploads/{{ $x->post_image }}" height="500" width="500">
              <span class="card-title ">{{$x->post_title}}</span>
            </div>
          </div>
   </a>
@endforeach
</div><!--  -->
</div>
</div>
</div>
@endsection