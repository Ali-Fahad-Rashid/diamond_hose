@extends('layouts.primary')
@section('content')

<div class="container">
    <div class="col s12">
<h1 class="center-align"> الطلبات</h1>
</div>
    </div>

@foreach($orders as $order)
<div class="card hoverable">

<div class="row">

    <div class="col s1">
<p>  {{$order->post_user_id}}  </p>
    </div>

    <div class="col s2">
<p class="wrap">  {{$order->post_user}}  </p>
    </div>

    <div class="col s1">
<p>  {{$order->created_at}}  </p>
    </div>
    


<!--     <div class="col s1">
<p>  {{$order->post_id}}  </p>
    </div> -->

    <div class="col s1">
<p class="wrap">  <a href="{{route('post.show',$order->post_id)}}">{{$order->post_title}} </a> </p>
    </div>

    <div class="col s1">
<p>  {{$order->price}}  IQD </p>
    </div>

    <div class="col s1">
<p>  {{$order->categories}}  </p>
    </div>

    <div class="col s1">
    @if($order->number2)

<p>  {{$order->number2}}  </p>
@else
<p>1</p>
@endif
    </div>

    <div class="col s1">
<p>  {{$order->price3}}  IQD</p>
    </div>


    <div class="col S1">
    @if($order->coupon)

<p>  {{$order->coupon}}  </p>
@else
<p>No coupon</p>
@endif

    </div>

    <div class="col S1">
    @if($order->price_coupon)

<p>  {{$order->price_coupon}}  IQD</p>
@else 

<p>No coupon</p>
@endif

    </div>


    <div class="col S1">
    @if($order->color)
    @foreach($order->color as $color)

<p class="inline2">  {{$color}}  </p>
@endforeach

@else 

<p>No color</p>
@endif

    </div>



    <div class="col S1">
    @if($order->size)
    @foreach($order->size as $siz)

<p class="inline2">  {{$siz}}  </p>
@endforeach

@else 

<p>No size</p>
@endif

    </div>



    <div class="col s1">
<p>  {{$order->phone1}}  </p>
    </div>

    <div class="col S1">
    @if($order->phone2)

<p>  {{$order->phone2}}  </p>
@else 

<p>No phone2</p>
@endif

    </div>

    <div class="col s1">
<p>  {{$order->city}}  </p>
    </div>
    <div class="col s1">
<p>  {{$order->address1}}  </p>
    </div>
    <div class="col s1">
<p>  {{$order->address2}}  </p>
    </div>
    <div class="col s1">
<p>  {{$order->address3}}  </p>
    </div>

<form action="{{route('addeditdelete',$order->id)}}" method="post">
@csrf           

<button type="submit" name="action" value="delete" class="btn btn-floating red pulse"><i class="material-icons">delete_forever</i></button>
<button type="submit" name="action" value="complete" class="btn btn-floating pink pulse"><i class="material-icons">done_outline</i></button>
<button type="submit" name="action" value="wait" class="btn btn-floating cyan pulse"><i class="material-icons">access_time</i></button>
</form>




<!--  -->
</div><!--  -->
    </div><!--  -->
<!--  -->

@endforeach

@endsection