@extends('layouts.primary')
@section('content')
</br></br></br>
<div class="container">
<div class="row">
@foreach($posts as $post)
        <div class="col s4">
          <div class="card"><a href="{{ route('post.show',$post->id) }}">
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
@if(chexkfav($post->id))
<button style="display:none" id="catfav{{ $post->id }}"  data="{{$post->id}}" class="btn catfav cyan"><i class="large material-icons">favorite_border</i> </button>
<button data="{{$post->id}}" id="catfav2{{ $post->id }}"  class="btn catfav2 cyan"><i class="large material-icons">favorite</i></button>
@else
<button data="{{$post->id}}" id="catfav{{ $post->id }}" class="btn catfav cyan"><i class="large material-icons">favorite_border</i> </button>
<button style="display:none" id="catfav2{{ $post->id }}" data="{{$post->id}}" class="btn catfav2 cyan"><i class="large material-icons">favorite</i></button>
@endif
@else
<button data="{{$post->id}}" class="btn  pink" disabled><i class="large material-icons">add_shopping_cart</i></button>
 <button data="{{$post->id}}" class="btn  cyan" disabled><i class="large material-icons">favorite_border</i></button>
@endif
            </div>
          </div>
        </div>
        @endforeach
</div>    
</div>
<div class="container">
<div class="row">
  <div class="col s8">
 </br></br></br>
@if ($posts->hasPages())
    <ul class="pagination pagination">
        {{-- Previous Page Link --}}
        @if ($posts->onFirstPage())
            <li class="disabled"><span>«</span></li>
        @else
            <li><a href="{{ $posts->previousPageUrl() }}" rel="prev">«</a></li>
        @endif
        @if($posts->currentPage() > 3)
            <li class="hidden-xs"><a href="{{ $posts->url(1) }}">1</a></li>
        @endif
        @if($posts->currentPage() > 4)
            <li><span>...</span></li>
        @endif
        @foreach(range(1, $posts->lastPage()) as $i)
            @if($i >= $posts->currentPage() - 2 && $i <= $posts->currentPage() + 2)
                @if ($i == $posts->currentPage())
                    <li class="page-item active"><a >{{ $i }}</a></li>
                @else
                    <li><a href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($posts->currentPage() < $posts->lastPage() - 3)
            <li><span>...</span></li>
        @endif
        @if($posts->currentPage() < $posts->lastPage() - 2)
            <li class="hidden-xs"><a href="{{ $posts->url($posts->lastPage()) }}">{{ $posts->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($posts->hasMorePages())
            <li><a href="{{ $posts->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled"><span>»</span></li>
        @endif
    </ul>
@endif
  </div>
</div>
</div>
@endsection