@extends('layouts.primary')
@section('content')
</br></br></br>
<div class="container">
<div class="row">
@foreach($posts as $post)
        <div class="col s4">
          <div class="card">
          <a href="{{ route('post.show',$post->post_id) }}">
            <div class="card-image">
            <img src="/uploads/{{ $post->post_image }}" height="150" width="190" class=" rounded-start">
            </div></a>
            <div class="card-content">
            <h5 class="card-title black-text">{{ $post->post_title }}</h5>
            <div class="flex">
            <p class="card-text"><small class="black-text  m">{{ $post->price }}</small></p>
            <p class="card-text"><small class="black-text line m">{{ $post->old_price }}</small></p>
            </div>
            </div>
            <div class="card-action">

            
            @if($post->post_status != "on")
<h6 class="red-text">متوفر في المخزن  {{$post->number}}</h6></br>
@else 
<h6 class="red-text">غير متوفر في المخزن </h6></br>
@endif
@if(Auth::user())
@if($post->post_status != "on")
@if(chexkbasket($post->id))
<button data="{{$post->id}}" id="catbasket2{{ $post->id }}" class="btn catbasket2 pink">
<i class="large material-icons">local_grocery_store</i></button>
<button style="display:none" data="{{$post->id}}" id="catbasket{{ $post->id }}" class="btn catbasket pink"> 
<i class="large material-icons">add_shopping_cart</i> </button>
@else
<button data="{{$post->id}}" id="catbasket{{ $post->id }}" class="btn catbasket pink">
<i class="large material-icons">add_shopping_cart</i> </button>
<button style="display:none" data="{{$post->id}}" id="catbasket2{{ $post->id }}" class="btn catbasket2 pink">
<i class="large material-icons">local_grocery_store</i></button>
@endif
@else
<button data="{{$post->id}}" class="btn  pink" disabled><i class="large material-icons">add_shopping_cart</i></button>
@endif
@else
<button data="{{$post->id}}" class="btn  pink" disabled><i class="large material-icons">add_shopping_cart</i></button>
@endif


<form action="{{ route('fav.destroy', $post->id) }}" method="POST">
    @csrf           
    @method('DELETE')
    <button class="btn-floating mll m waves-effect waves-light red"><i class="material-icons">delete_forever</i></button>
  </form> 
            </div>
          </div>
        </div>
        @endforeach


</div>    
</div>


@endsection
