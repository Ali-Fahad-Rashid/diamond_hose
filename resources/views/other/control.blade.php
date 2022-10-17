@extends('layouts.primary')
@section('content')

<div class="">
<div class="row">
    <div class="col s12"></br>
<h4 class="center-align">لوحة التحكم
</h4>    
    </div>
</div>

<div class="row">
  <div class="col s2"></div>
    <div class="col s4">

<h1 class="center-align">
<img  height="100" width="100" src="../../uploads/4.jpg">

</h1>

    <div class="input-field">
    <label for=""></label>
    <input type="email" name="email" placeholder="الايميل" class="" required>
  </div></br>

    <div class="input-field">
    <label for=""></label>
    <input type="text" name="name" placeholder="الاسم" class="" required>
  </div></br>

    <div class="input-field">
    <label for=""></label>
    <input type="password" name="password" placeholder="الباسسوورد" class="" required>
  </div></br>

  

    <div class="input-field">
    <label for=""></label>
    <input type="text" name="phone1" placeholder="رقم الموبايل الاساسي" class="" required>
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" name="phone2" placeholder="رقم الموبايل الثانوي" class="" >
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" name="city" placeholder="المدينة" class="" >
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" name="address1" id="" class="" placeholder="الناحية او القضاء" >
  </div></br>

  <div class="input-field">
    <label for=""></label>
    <input type="text" name="address2" id="" class="" placeholder=" الحي او الشارع">
  </div></br>

  <div class="input-field">
    <label class="" for=""> </label>
    <input type="text" name="address3" id="" class="" placeholder="اقرب نقطه داله" >
  </div></br>

  <div class="input-field">
    <label for=""></label>
    <input type="date" name="age" placeholder="المواليد" class="" required>
  </div></br>

  <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="صوره شخصيه">
      </div>
    </div>


  <!--  -->
    </div>
    <div class="col s6">
    <h4 class="center-align">
    <a href="{{ route('other.control') }}">معلوماتي</a>
</h4>    

<h4 class="center-align">
<a href="{{ url('/create') }}">اضافة منتج</a>
</h4>   

<h4 class="center-align">
<a href="{{ url('/couponview') }}">عرض الكوبونات</a>
</h4>   

<h4 class="center-align">
<a class=" modal-trigger" href="#modal1">اضافة كوبون</a>
</h4>  
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
  <form>
    <div class="modal-content">
    @csrf
    <div class="input-field">
    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="اسم الكوبون" class="namecop" required>
  </div></br>

  <div class="input-field">
    <label for="price"></label>
    <input type="number" name="price" id="price" placeholder="مقدار الخصم بالدينار العراقي" class="pricecop" required>
  </div></br>

  <div class="input-field">
    <label for="types"></label>
    <input type="number" name="types" id="types" placeholder="العدد" class="typescop" required>
  </div></br>

    </div>
    <div class="modal-footer">
      <button class="modal-action addcoupon waves-effect waves-green btn-flat">موافق</button>
    </div>
    </form>

  </div>

<h4 class="center-align">
<a href="{{ url('/finalorder') }}"> الطلبات الجديده</a>
</h4>   


<h4 class="center-align">
<a href="{{ url('/waitingOrder') }}"> الطلبات قيد الانتظار</a>
</h4>  

<h4 class="center-align">
<a href="{{ url('/completeOrder') }}"> الطلبات المكتمله</a>
</h4>  

<h4 class="center-align">
<a href="{{ url('/deletedOrder') }}"> الطلبات المحذوفه</a>
</h4>  
    </div>
</div>


</div>
@endsection
