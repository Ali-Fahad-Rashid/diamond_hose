@extends('layouts.primary')
@section('content')

</br></br>
<div class="container">   
<div class="row">

<div>

</div>
  </div> <!-- r -->

  <div class="row">
<div class="col l4 m12 s12">
<div>
<h1 class="wrap">{{$post->post_title}}</h1>






@if($post->old_price)
<h6 class="line">IQD {{$post->old_price}}</h6>

@endif
<h4>IQD {{$post->price}}</h4>
<pre class="wrap">
  
{{$post->post_content}}

</pre>
<div class="flex"> 
@if($post->color)
<div class="width2 m"> 
  
<select name="color" id="color" class="browser-default" >

@foreach($post->color as $color)
<option value="{{$color}}"> {{$color}} </option>
@endforeach

  </select></div>
  @endif

  @if($post->size)
<div class="width2 m"> 
<select name="size" id="size" class="browser-default" > 

@foreach($post->size as $size)
<option value="{{$size}}">{{$size}} </option>
@endforeach

  </select></div>
  @endif
  </br>

  <div class="col m6 s4 width"><div><input class="center-align width number2"
    name="number2" type="number" min="1" value="1">  </div> </div>
    </div>

  </br> 

  @if($post->post_status != "on")

  <h6 class="red-text">متوفر في المخزن  {{$post->number}}</h6></br>

  @else 

  <h6 class="red-text">غير متوفر في المخزن</h6></br>

  @endif

@if(Auth::user())

@if($post->post_status != "on")
  <button style="display:none" data="{{$post->id}}" class="btn basket pink"> <i class="large material-icons">add_shopping_cart</i> </button>
  <button style="display:none" data="{{$post->id}}" class="btn basket2 pink"><i class="large material-icons">local_grocery_store</i></button>
  @else
  <button data="{{$post->id}}" class="btn basket pink" disabled><i class="large material-icons">add_shopping_cart</i></button>

  @endif
  <button style="display:none" data="{{$post->id}}" class="btn fav cyan"><i class="large material-icons">favorite_border</i> </button>
  <button style="display:none" data="{{$post->id}}" class="btn fav2 cyan"><i class="large material-icons">favorite</i></button>
@else
  <button data="{{$post->id}}" class="btn basket pink" disabled><i class="large material-icons">add_shopping_cart</i></button>
  <button data="{{$post->id}}" class="btn fav cyan" disabled><i class="large material-icons">favorite_border</i></button>
  @endif

</div>

</div> <!-- col -->
<div class="col l6 m9 s8">
<div class=""></br>
@if($post->images)

<img class="xzoom" src="../../uploads/{{$post->images[0]}}" xoriginal="../../uploads/{{$post->images[0]}}" height="500" width="350" />
@endif

</div>

</div>  <!-- col -->


<div class="col l2 m3 s4"></br>
@if($post->images)
<div class="zomimage">

@foreach($post->images as $image)
<div class="xzoom-thumbs">
  <a href="../../uploads/{{ $image }}">
    <img class="xzoom-gallery" height="100" width="100" src="../../uploads/{{ $image }}"  xpreview="../../uploads/{{ $image }}">
  </a>
</div>
@endforeach
</div>
  @endif



</div>  <!-- col -->
  </div>  <!-- r -->


  <div class="row">
  </br></br>
<h5>مراجعة وتقييم
</h5>

  </br>
  <label for="">محتوى المراجعة</label>

  <textarea class="materialize-textarea starcontent" required></textarea>

<ul class="left-align">
  
<i class = "fa fa-star fa-star1" aria-hidden = "true" id = "st1"></i>  
<i class = "fa fa-star fa-star1" aria-hidden = "true" id = "st2"></i>  
<i class = "fa fa-star fa-star1" aria-hidden = "true" id = "st3"></i>  
<i class = "fa fa-star fa-star1" aria-hidden = "true" id = "st4"></i>  
<i class = "fa fa-star fa-star1" aria-hidden = "true" id = "st5"></i> 

</ul>  

  <button class="waves-effect waves-light pink btn-large rating">ارسال</button>

  </br></br>



  </div>

  <div class="row">
  @foreach($stars as $star)

  
  <div class="row">
        <div class="col s12 m7">
          <div class="card hoverable z-depth-4 ">
            <div class="row"> 
            <div class="col s4">
            <ul class="left-alignn">

            @if($star->types==="1")
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s1"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s5"></i>  
        @elseif($star->types==="2")
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s1"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s5"></i>  
        @elseif($star->types==="3")
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s1"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s5"></i>  

        @elseif($star->types==="4")
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s1"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s5"></i>  

        @elseif($star->types==="5")
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s5"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" style="color:yellow;" aria-hidden = "true" id = "s1"></i>  
@else
<i class = "fa fa-star" aria-hidden = "true" id = "s1"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s2"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s3"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s4"></i>  
<i class = "fa fa-star" aria-hidden = "true" id = "s5"></i>  

        @endif

</ul> 
            </div>
  <div class="col s7">
  <p class="right-alignn ">{{$star->name}}</p>

   </div></div>

              <div class="divider gery"></div>

            <div class="card-content">
              <p>{{$star->com}}</p>

            </div>
            <small class="mm pink-text">{{$star->created_at}}</small>

<br></br>

          </div>
        </div>
      </div>

@endforeach

  </div>



    </div> <!-- c -->
@endsection