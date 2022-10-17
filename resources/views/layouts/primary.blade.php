<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Diamond Hose</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="{{ asset('css/primary.css') }}" rel="stylesheet">

    <!-- xzoom -->
    <link rel="stylesheet" type="text/css" href="../../xzoom/xzoom.css" media="all" />
    <!-- slick -->
    <link rel="stylesheet" href="../../slick/slick.css">
    <link rel="stylesheet" href="../../slick/slick-theme.css"> 




</head>
<body>
<div class="">

<!-- side-nav -->
<div id="slide-out" style="" class="black side-nav">
   <div class="user-view black-text"></br>
<a href="#!user"><img class="circle" src="uploads/123.png"></a></br>
<div  class="mydropdown"> 
@if (Auth::user() != null)
<a class="white-text" href="{{ route('other.control') }}">{{ Auth::user()->name }}</a>
@else 
<a class="white-text" href="{{ route('login') }}">تسجيل الدخول</a>                              
@endif 
<div class="mydropdown-content"></br>
@if (Auth::user() != null) 
<a class="white black-text" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">تسجيل خروج</a>
@else 
<a class="white black-text" href="{{ route('register') }}"> تسجيل حساب</a>
@endif                    
</div></div></div>
</br>
<div class="  black">
    <div class="col s12  black">
      <ul class="tabs  black">
        <li class="tab  col s6"><a class="" href="#test1"><h6>الرئيسية</h6></a></li>
        <li class="tab  col s6"><a class="" href="#test2"><h6>الاقسام</h6></a></li>
        <li class="tab col s6"><a class="" href="#test2"></a></li>

     </ul>
    </div>
    <div id="test1" class=" white-text">
        
    <ul class="white-text ">
</br>
          <li><a class="white-text " href="{{ url('/basket') }}">
          <span class="new left badge black white-text basketcount" data-badge-caption="">{{ basket_count() }}</span>
          سلة التسوق
          </a></li>
          <li><a class="white-text " href="{{ route('other.fav') }}">المفضلة
          <span class="new left badge black white-text favcount" data-badge-caption="">{{ fav_count() }}</span>

          </a></li>
          <li><a class="white-text " href="{{ route('other.control') }}">لوحة التحكم</a></li>
          
          </ul>
</div>
    <div id="test2" class="">
    </br>

    <ul id="" class="">

<li><div  class="mydropdown4"> 
<a class="white-text " href="{{route('post.categories','women')}}"> العروض</a>

<div class="mydropdown-content4 ">
<a class="" href="collapsible.html"> عروض فساتين</a></br>
<a href="collapsible.html"> عروض تنوره</a></br>
<a href="collapsible.html"> عروض تيشيرت</a></br>
<a href="collapsible.html"> عروض ملابس رجاليه</a>

</div>    </div></li>




<li><div  class="mydropdown4"> 
<a class="white-text "  href="{{route('post.categories','women')}}">العناية والجمال</a>
<div class="mydropdown-content4">
<a href="collapsible.html">  مكياج</a></br>
<a href="collapsible.html"> مستحضرات عنايه بالبشره </a></br>
<a href="collapsible.html"> واقي شمس </a></br>
<a href="collapsible.html"> بودره  </a></br>

</div>    </div></li>



<li><div  class="mydropdown4"> 
<a class="white-text "  href="{{route('post.categories','women')}}">اكسسوارات ومجوهرات</a>
<div class="mydropdown-content4">
<a href="collapsible.html">  مجوهرات</a>
<a href="collapsible.html"> اكسسوارات</a>

</div>    </div></li>



<li><div  class="mydropdown4"> 
<a class="white-text "  href="{{route('post.categories','baby')}}">ملابس اطفال</a>
<div class="mydropdown-content4">
<a href="collapsible.html">  اولاد</a>
<a href="collapsible.html"> بنات</a>

</div>    </div></li>



<li><div  class="mydropdown4"> 
<a class="white-text"  href="{{route('post.categories','men')}}">ملابس رجالية</a>
<div class="mydropdown-content4">
<a href="collapsible.html">  بنطال</a>
<a href="collapsible.html"> بلوزه</a>

</div>    </div></li>



  <li><div  class="mydropdown4"> 
  <a class="white-text "  href="{{route('post.categories','women')}}">ملابس نسائية</a>
<div class="mydropdown-content4">
<div class="row"> 
<a href="collapsible.html">  بلوزه</a>
<a href="collapsible.html"> تنوره</a>

<a class="" href="collapsible.html"> قميص</a>


</div>
</div>    </div></li>

</ul>
</div>
  </div>


  </div>

  </div>

<nav id="navbar" class="black">
<div class="nav-wrapper">

  <a href="#" data-activates="slide-out" class="right button-collapse"><i class="material-icons">menu</i></a> 
        <!-- side-nav end -->

       <a href="{{ url('/post') }}" class="brand-logo">Diamond Home</a>
      <ul id="nav-mobile" class="left ">
          
<li class="hide-on-med-and-down"><a href="{{ url('/basket') }}">سلة التسوق
<span class="new badge black white-text basketcount" data-badge-caption="">{{ basket_count() }}</span>
</a></li>
<li  class="hide-on-med-and-down"><a href="{{ route('other.fav') }}">المفضلة
<span class="new badge black white-text favcount" data-badge-caption="">{{ fav_count() }}</span>

</a></li>
<li  class="hide-on-med-and-down"> <a href="{{ route('other.control') }}">لوحة التحكم</a></li>


         <li  class="hide-on-med-and-down"><div  class="mydropdown"> 
         @if (Auth::user() != null)
         <a href="{{ route('other.control') }}">
                                    {{ Auth::user()->name }}
                                </a>
                                    @else
                                    <a class="" href="{{ route('login') }}">تسجيل الدخول</a>

                              
                            @endif
             <div class="mydropdown-content">

             @if (Auth::user() != null)

             <a class="black white black-text center-align" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل خروج                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                        @csrf
                                    </form>
@else
<a class="black white black-text center-align" href="{{ route('register') }}"> تسجيل حساب</a>

                              
                            @endif
                        
                        </div>

</div></li>


<li class=""><div class="mydropdown2 "> 
<a><i class="material-icons">search</i></a>
<div class="mydropdown-content2">


  <form action="{{route('search')}}" method="GET">
  @csrf
  <div class="input-field col s12"><input placeholder="البحث" name="searchin" id="first_name" class="live_search border" type="text"></div>
<div class="search_result"></div>
<div style="display:none" class="row see">
<div class="input-field col s12">
  <a style="display:none" class="see  cyan  waves-effect waves-light btn-large"><button class="cyan  waves-effect waves-light btn-large">عرض الكل</button></a>
  </div></div>
  </form>

</div></div></li>


      </ul>
    </div>
  </nav>

  
  <nav class="black center-align hide-on-med-and-down">
    <div class="row">  
<div class="col m9 push-m3">
      <ul class="center-align hide-on-med-and-down">

      <li><div  class="mydropdown3"> 
      <a href="{{route('post.categories','women')}}"> العروض</a>

<div class="mydropdown-content3">
<a href="collapsible.html"> عروض فساتين</a>
<a href="collapsible.html"> عروض تنوره</a>
<a href="collapsible.html"> عروض تيشيرت</a>
<a href="collapsible.html"> عروض ملابس رجاليه</a>

</div>    </div></li>


      

      <li><div  class="mydropdown3"> 
      <a href="{{route('post.categories','women')}}">العناية والجمال</a>
<div class="mydropdown-content3">
<a href="collapsible.html">  مكياج</a>
<a href="collapsible.html"> مستحضرات عنايه بالبشره </a>
<a href="collapsible.html"> واقي شمس </a>
<a href="collapsible.html"> بودره  </a>

</div>    </div></li>



      <li><div  class="mydropdown3"> 
      <a href="{{route('post.categories','women')}}">اكسسوارات ومجوهرات</a>
<div class="mydropdown-content3">
<a href="collapsible.html">  مجوهرات</a>
<a href="collapsible.html"> اكسسوارات</a>

</div>    </div></li>



      <li><div  class="mydropdown3"> 
      <a href="{{route('post.categories','baby')}}">ملابس اطفال</a>
<div class="mydropdown-content3">
<a href="collapsible.html">  اولاد</a>
<a href="collapsible.html"> بنات</a>

</div>    </div></li>



      <li><div  class="mydropdown3"> 
      <a href="{{route('post.categories','men')}}">ملابس رجالية</a>
<div class="mydropdown-content3">
<a href="collapsible.html">  بنطال</a>
<a href="collapsible.html"> بلوزه</a>

</div>    </div></li>



        <li><div  class="mydropdown3"> 
        <a href="{{route('post.categories','women')}}">ملابس نسائية</a>
<div class="mydropdown-content3">
    <div class="row"> 
<a href="/categories/women/shoes">  بلوزه</a>
<a href="collapsible.html"> تنوره</a>
<a class="" href="collapsible.html"> قميص</a>


</div>
</div>    </div></li>

      </ul>

      </div>  

    </div>

  </nav>


    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
        </br></br></br></br></br>

        <footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="pink-text ">عن المتجر</h5>
                <p class="cyan-text text-lighten-5">
                    دايموند هوم هو متجر عراقي الكتروني  <br>
                   اسس لتحسين تجربة الزبون العراقي في التسوق الالكتروني 
                   <br>
                    حيث نسعى لتوفير افضل المنتجات بافضل الاسعار واسرع طرق التوصيل
                    <br>

                     مع دايموند هوم اختر مشترياتك 
                    واترك الباقي علينا</p>

                    <h5 class="pink-text ">للاستفسار</h5>
                    <p class="cyan-text text-lighten-5">
                    كورك: 07515095836    
 <br>
                          اسيا   :   07725742021     
                       <br>
   
البريد الالكتروني: chrisalialmla@gmail.com
</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="pink-text mm">للتواصل معنا</h5>
                <ul class="right-align">
                  <li class="right-align"><a class="cyan-text text-lighten-5 right-align" href="#!">Facebook</a></li>
                  <li><a class="cyan-text  text-lighten-5" href="#!">Instagram</a></li>
                  <li><a class="cyan-text text-lighten-5" href="#!">Tiktok</a></li>
                  <li><a class="cyan-text text-lighten-5" href="#!">Telegram</a></li>
                  <li><a class="cyan-text text-lighten-5" href="#!">WhatsApp</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class=" footer-copyright">
            <div class="container">
              
<h6 class="center-align">
<a class="grey-text text-darken-1 ">  All Rights Reserved © 2021 Diamond Home - Made by AF </a>

</h6>       
     </div>
          </div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="/xzoom/xzoom.min.js"></script>
    <script src="/slick/slick.js"></script>
    <script src="{{ asset('js/primary.js') }}" ></script>






        
</body>
</html>
