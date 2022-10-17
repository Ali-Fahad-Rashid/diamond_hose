@extends('layouts.primary')
@section('content')
<div class="container">
<div class="row">  
<div class="col s12">
</br></br></br>
  <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-field">
    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="العنوان" class="validate" required>
  </div></br>

  <div class="input-field">
    <label for="price"></label>
    <input type="number" name="price" id="price" placeholder="السعر بالعراقي" class="validate" required>
  </div></br>

  <div class="input-field">
    <label for="old_price	"></label>
    <input type="number" name="old_price" id="old_price" placeholder="السعر السابق" class="validate" >
  </div></br>


  <div class="input-field">
    <label for="number"></label>
    <input type="number" name="number" id="number" placeholder="الكميه" class="validate" required>
  </div></br>
  <textarea  name="content" id="" class="materialize-textarea" placeholder="التفاصيل"></textarea>
  </br></br>

<div class="flex">
<div class="switch mll">
    <label>
      In Sale
      <input name="post_status" type="checkbox">
      <span class="lever"></span>
      Solid
    </label>
  </div>
  
  <div class="switch">
    <label>
نشر في لوحه الاعلانات الرئيسية      <input name="advertisement" type="checkbox">
      <span class="lever"></span>
عدم النشر
    </label>
  </div>
</div>

</br></br></br>


    <select name="categories" class="browser-default">
    <option value="women">ملابس نسائية</option>
      <option value="men">ملابس رجالية</option>
      <option value="baby">ملابس اطفال</option>
  </select>


  </br> 
  </br></br>

<div class="row">
  <div class="col s2">

<p>
      <input type="checkbox" id="test1" name="color[]" value="Red" />
      <label for="test1">Red</label>
    </p>
    <p>
      <input type="checkbox" id="test2" name="color[]" value="Blue" />
      <label for="test2">Blue</label>
    </p>
    </div>
    <div class="col s2">

    <p>
      <input type="checkbox" id="test3" name="color[]" value="Green"/>
      <label for="test3">Green</label>
    </p>
    <p>
      <input type="checkbox" id="test4" name="color[]" value="Cyan"/>
      <label for="test4">Cyan</label>
    </p>
    </div>
    <div class="col s2">
    <p>
      <input type="checkbox" id="test5" name="color[]" value="Black"/>
      <label for="test5">Black</label>
    </p>

    <p>
      <input type="checkbox" id="test6" name="color[]" value="White"/>
      <label for="test6">White</label>
    </p>
    </div>
    <div class="col s2">
    <p>
      <input type="checkbox" id="test7" name="color[]" value="Grey"/>
      <label for="test7">Grey</label>
    </p>
    <p>
      <input type="checkbox" id="test8" name="color[]" value="Pink"/>
      <label for="test8">Pink</label>
    </p>
    </div>
    <div class="col s2">
    <p>
      <input type="checkbox" id="test9" name="color[]" value="Yellow"/>
      <label for="test9">Yellow</label>
    </p>

    <p>
      <input type="checkbox" id="test10" name="color[]" value="Violet"/>
      <label for="test10">Violet</label>
    </p>
</div>
</div>
</br></br>

<div class="row">
  <div class="col s2">

<p>
      <input type="checkbox" id="test11" name="size[]" value="XS"/>
      <label for="test11">XS</label>
    </p>
    <p>
      <input type="checkbox" id="test12" name="size[]" value="S"/>
      <label for="test12">S</label>
    </p>
    </div>
    <div class="col s2">

    <p>
      <input type="checkbox" id="test13" name="size[]" value="M"/>
      <label for="test13">M</label>
    </p>
    <p>
      <input type="checkbox" id="test14" name="size[]" value="L"/>
      <label for="test14">L</label>
    </p>
    </div>
    <div class="col s2">
    <p>
      <input type="checkbox" id="test15" name="size[]" value="XL"/>
      <label for="test15">XL</label>
    </p>

    <p>
      <input type="checkbox" id="test16" name="size[]" value="XXL"/>
      <label for="test16">XXL</label>
    </p>
    </div>
    <div class="col s2">
    <p>
      <input type="checkbox" id="test17" name="size[]" value="XXXL"/>
      <label for="test17">XXXL</label>
    </p>

    <p>
      <input type="checkbox" id="test18" name="size[]" value="XXXXL"/>
      <label for="test18">XXXXL</label>
    </p>
    </div>
</div>

</br></br>

  <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Header Image">
      </div>
    </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>
        <input type="file" name="filenames[]" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Other Image">
      </div>
    </div>



    <input type="submit" value="نشر" class="btn pink">
  </form>
  </div> <!-- col -->
  </div> <!-- row -->
</div>  <!-- container -->

</br></br>
</br>
</br>

@endsection