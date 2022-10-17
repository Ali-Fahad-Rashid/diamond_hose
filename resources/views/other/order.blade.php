@extends('layouts.primary')
@section('content')

<form >
<div class="container">
<div class="row">
    <div class="col s12"></br>
<h4 class="center-align">تثبيت الطلب
</h4>    
    </div>
</div>

<div class="row">
    <div class="col s6">

<h1 class="center-align">
<img  height="100" width="100" src="../../uploads/4.jpg">

</h1>



  

    <div class="input-field">
    <label for=""></label>
    <input type="text" class="phone1" placeholder="رقم الموبايل الاساسي"  required>
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" class="phone2" placeholder="رقم الموبايل الثانوي" >
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" class="city" placeholder="المدينة"  required>
  </div></br>

  <div class="input-field">
    <label for=""> </label>
    <input type="text" class="address1"  placeholder="الناحية او القضاء" required>
  </div></br>

  <div class="input-field">
    <label for=""></label>
    <input type="text" class="address2"   placeholder=" الحي او الشارع" required>
  </div></br>

  <div class="input-field">
    <label  for=""> </label>
    <input type="text" class="address3"  placeholder="اقرب نقطه داله" required>
  </div></br>






  <!--  -->
    </div>
    <div class="col s6">

    <div class="input-field right col s5 ">
    <label for="co"></label>
    <input type="text" class="cop"  id="co" placeholder="ادخل  رمز الكوبون" >
  </div></br>




 <span class="done" ><i class="material-icons b m pink-text">done
</i></span> 


</br></br></br></br>

<span> السعر الكلي</span> :<span class="pri" > {{ maxx() }} </span> IQD
</br></br>
<div class="pr" style="display: none;">
<span >  السعر الكلي بعد الخصم</span> :<span class="pri2" > {{ maxx() }} </span> IQD

</div>
</br></br>
<button class="btn pink order certain">تأكيد</button>

<h5 style="display: none;" class="certain2"> تم ارسال طلبك بنجاح</h5>


    </div>
</div>


</div>
</form>
@endsection
