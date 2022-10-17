@extends('layouts.primary')
@section('content')

<div class="container">
    <div class="col s12">
<h1 class="center-align">سله التسوق</h1>
</div>
    </div>

@foreach($basket as $basket)
<div class="container"> 
<div class=" card hoverable">



    <div class="row">          <a href="{{ route('post.show',$basket->post_id) }}">

    <div class="col s6"><p class="wrap ml">{{ $basket->post_title }}</p></div>
</a>
    </div>
    <div class="row">
    <div class="col s12">
        <div class=" col l1 m1 s3"></div>
<div class="">
    <div class="row">
    <div class="col l2 m3 s3"><img src="/uploads/{{ $basket->post_image }}" class="top" height="100" width="140" alt=""></div>
    <div class="col m3 s4"><div data-position="top" data-delay="50" data-tooltip="السعر للمفرد" class=" tooltipped flex"><span class="mb">IQD</span><input class="center-align price" id="price{{ $basket->id }}" 
    type="number" value="{{ $basket->price }}" disabled> </div> </div>
    <div class="col m2 s4"><div data-position="top" data-delay="50" data-tooltip="الكميه او العدد" class="tooltipped"><input class="center-align number2" id="number2{{ $basket->id }}" 
    data="{{ $basket->id }}" 
    name="number2" type="number" min="1" value="{{ $basket->number2 }}">  </div> </div>
    <div class="col m1 s4"><div data-position="top" data-delay="50" data-tooltip="السعر الاجمالي" class="tooltipped inline"><p class="inline price2" id="price2{{ $basket->id }}">{{ $basket->price2 }} </p><span class="inline">IQD</span></div></div>
    <div class="col m2 s4">
    <form action="{{ route('other.destroy', $basket->id) }}" method="POST">
    @csrf           
    @method('DELETE')
    <button class="btn-floating mll waves-effect waves-light red"><i class="material-icons">delete_forever</i></button>
  </form> 
    </div>
    </div></div></div>
    </div>
</div></div>
@endforeach

<div class="stick">
<div><span> السعر الكلي</span> :
<span class="center-align max" id="max"> {{ maxx() }} </span>
</div>
<a class="btn pink" href="/order" > تثبيت الطلب</a>
</div>


</br></br></br></br></br></br></br></br></br></br></br>

@endsection