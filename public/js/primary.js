
    let _token   = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function(){  


    /* search */
    $(".live_search").keyup(function () {
      var query = $(this).val();
      if (query != "") {

          $.ajax({
              url: '/search',
              method: 'POST',
              data: {
                _token:_token,
                  query: query
              },
              success: function (data) {

                if (data.search != "") {

                  $('.search_result').html(data.search);

                  $('.see').css('display', 'block');

                  $(".live_search").focusin(function () {
                      $('.search_result').css('display', 'block');
                  });

                }
                  else {
                    $('.search_result').html("<h4 class='center-align'>No Result</h4>");
          
                  }
              }
          });
        }
   

  });


    /* checknumberbasket */
    $(".number2").change(function(){
         var k = $(this).attr("data"); 
      var x = $("#price"+k).val(); 
         var y = $("#number2"+k).val();
         var z = x*y;
         $("#price2"+k).text(z);
          $.ajax({
           url: "/check/"+k,
           type:"POST",
           data:{
             _token:_token,
             y:y,
             z:z,
           },
     
            success:function(r){
             if(r) {
                $(".max").text( r.maxy +" ");

}
           }, 
           
          }); 
     });


     /* CheckAddandDeletebasket */

     var x = $(".basket").attr("data"); 
     $.ajax({
       url: "/ajax2/"+x,
       type:"POST",
       data:{
         _token:_token,
       },
 
        success:function(response){
         if(response.t) {
        //     alert(response.t)
           $(".basket").hide();  
           $(".basket2").show();  
    }
    else {
       // alert(response.t+'gfjfgj')

     $(".basket2").hide();  
           $(".basket").show();
 
    }
       }, 
       
      });


    /* add */
$(".basket").click(function(){
    var x = $(".basket").attr("data"); 
    var color = $("#color").val(); 
    var size = $("#size").val(); 
    var number2 = $(".number2").val(); 
    $.ajax({
      url: "/ajax/"+x,
      type:"POST",
      data:{
        _token:_token,
        color:color,
        size:size,
        number2:number2,
      },

       success:function(response){
        if(response) {
          $(".basketcount").text(response.count);
          $(".basket").hide();  
          $(".basket2").show();  
   }
      }, 
      
     });
});

    /* delete */
    $(".basket2").click(function(){
         var x = $(".basket2").attr("data"); 
         $.ajax({
           url: "/ajaxdel/"+x,
           type:"delete",
           data:{
             _token:_token,
           },
     
            success:function(response){
             if(response) {
               $(".basketcount").text(response.count);
                     $(".basket2").hide();  
                     $(".basket").show();  
        }
           }, 
           
          });
     });


});

/* css */

    $('select').material_select();
    $('.modal').modal();


    $('.button-collapse').sideNav({
      edge: 'right', 
    }
  );

/* zoom */
    $(".xzoom, .xzoom-gallery").xzoom({
        tint: '#333',
        // Xoffset: -275,
         scroll:true,
         zoomWidth:'auto',
         zoomHeight:'auto',
         hover:true,
         position:'inside',
         
        });
/* silk */
    $('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  pauseOnHover:true,
});
	
$('.autoplay2').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  infinite: true,
  pauseOnHover:true,

});

/* stars */


$(document).ready(function(){  


  var x = $(".fav").attr("data"); 


var y = 0;

$("#st1").click(function() {  
  $(".fa-star1").css("color", "black");  
  $("#st1").css("color", "yellow");
  y=1;

});  


$("#st2").click(function() {  
  $(".fa-star1").css("color", "black");  
  $("#st1, #st2").css("color", "yellow");  
  y=2;

});  


$("#st3").click(function() {  
  $(".fa-star1").css("color", "black")  
  $("#st1, #st2, #st3").css("color", "yellow");  
  y=3;

});  


$("#st4").click(function() {  
  $(".fa-star1").css("color", "black");  
  $("#st1, #st2, #st3, #st4").css("color", "yellow");  
  y=4;

});  


$("#st5").click(function() {  
  $(".fa-star1").css("color", "black");  
  $("#st1, #st2, #st3, #st4, #st5").css("color", "yellow");  

  y=5;

});  


$(".rating").click(function() {  


  var z = $(".starcontent").val();

  if(z.length >= 10){

    if(y > 0){


 $.ajax({
  url: "/rating",
  type: 'POST',
  data: {
    _token:_token,

  stars: y,
  id: x,
  con:z,
  },
   success: function(data){
alert("تم الارسال بنجاح")  
location.reload();
} 
  }); 

    }
    else {
      alert(" يرجى اختيار نجوم ")  


    }

}

  else {
    alert(" لا يمكن ارسال مراجعه فارغه او قصيره")  


  }
});  

/* coupon */


$(".done").click(function() {  


  var coupon = $(".cop").val();
var y = $(".pri").text();
 $.ajax({
  url: "/coupon",
  type: 'POST',
  data: {
    _token:_token,
    coupon:coupon,
  },
   success: function(data){
alert(data.result)  

if(data.copmin>0){
$(".pri2").text(y - data.copmin);
$(".pr").css("display", "");  

$(".done").css("display", "none");  
}
} 
  }); 

}); 

$(".addcoupon").click(function(e) {  

e.preventDefault();

var namecop = $(".namecop").val();
var pricecop = $(".pricecop").val();
var typescop = $(".typescop").val();

if(
  namecop.trim().length 
  && pricecop.trim().length 
  && typescop.trim().length 
){

$.ajax({
  url: "/addcoupon",
  type: 'POST',
  data: {
    _token:_token,
    namecop:namecop,
    pricecop:pricecop,
    typescop:typescop,

  },
   success: function(data){
alert(data.result)  
$('#modal1').modal('close');

} 
  }); 
}
else {

  alert('الرجاء ملئ جميع الحقول')  

}
}); 


/* order */


$(".order").click(function(e) {  

e.preventDefault();

var phone1 = $(".phone1").val();
var phone2 = $(".phone2").val();
var city = $(".city").val();
var address1 = $(".address1").val();
var address2 = $(".address2").val();
var address3 = $(".address3").val();

var coupon = $(".cop").val();
var pri = $(".pri").text();
var pri2 = $(".pri2").text();

if(phone1.trim().length 
&& phone2.trim().length 
&& city.trim().length 
&& address1.trim().length 
&& address2.trim().length 
&& address3.trim().length){

 $.ajax({
  url: "/order",
  type: 'POST',
  data: {
    _token:_token,
    coupon:coupon,
    pri2:pri2,
    pri:pri,
    
    phone1:phone1,
    phone2:phone2,
    city:city,
    address1:address1,
    address2:address2,
    address3:address3,

  },
   success: function(data){

    alert(data.result);
    $(".certain").css("display", "none");  
    $(".certain2").css("display", "");  


} 
  }); 

}
else

alert('الرجاء ملئ جميع الحقول');

}); 



/* multi basket */
    /* add */
$(".catbasket").click(function(){
    var x = $(this).attr("data"); 
    var color = $("#color").val(); 
    var size = $("#size").val(); 
    var number2 = $(".number2").val(); 
    $.ajax({
      url: "/ajax/"+x,
      type:"POST",
      data:{
        _token:_token,
        color:color,
        size:size,
        number2:number2,
      },

       success:function(response){
        if(response) {
          $(".basketcount").text(response.count);
          $("#catbasket"+x).hide();  
          $("#catbasket2"+x).show();  
   }
      }, 
      
     });
});

    /* delete */
    $(".catbasket2").click(function(){
         var x = $(this).attr("data"); 
         $.ajax({
           url: "/ajaxdel/"+x,
           type:"delete",
           data:{
             _token:_token,
           },
     
            success:function(response){
             if(response) {
               $(".basketcount").text(response.count);
                     $("#catbasket2"+x).hide();  
                     $("#catbasket"+x).show();  
                    }
           }, 
           
          });
     });


/* fav */
/* CheckAddandDeletebasket */
var x = $(".fav").attr("data"); 
$.ajax({
  url: "/ajax2fav/"+x,
  type:"POST",
  data:{
    _token:_token,
  },
   success:function(response){
    if(response.t) {
      $(".fav").hide();  
      $(".fav2").show();  
}
else {
$(".fav2").hide();  
      $(".fav").show();
}
  }, 
 });
/* add */
$(".fav").click(function(){
var x = $(".fav").attr("data"); 
var color = $("#color").val(); 
var size = $("#size").val(); 
var number2 = $(".number2").val(); 
$.ajax({
 url: "/ajaxfav/"+x,
 type:"POST",
 data:{
   _token:_token,
   color:color,
   size:size,
   number2:number2,
 },
  success:function(response){
   if(response) {
     $(".favcount").text(response.count);
     $(".fav").hide();  
     $(".fav2").show();  
}
 }, 
});
});
/* delete */
$(".fav2").click(function(){
    var x = $(".fav2").attr("data"); 
    $.ajax({
      url: "/ajaxdelfav/"+x,
      type:"delete",
      data:{
        _token:_token,
      },
       success:function(response){
        if(response) {
          $(".favcount").text(response.count);
                $(".fav2").hide();  
                $(".fav").show();  
   }
      }, 
     });
});


/* multi fav */

    /* add */
    $(".catfav").click(function(){
      var x = $(this).attr("data"); 
      var color = $("#color").val(); 
      var size = $("#size").val(); 
      var number2 = $(".number2").val(); 
      $.ajax({
        url: "/ajaxfav/"+x,
        type:"POST",
        data:{
          _token:_token,
          color:color,
          size:size,
          number2:number2,
        },
  
         success:function(response){
          if(response) {
            $(".favcount").text(response.count);
            $("#catfav"+x).hide();  
            $("#catfav2"+x).show();  
     }
        }, 
        
       });
  });
  
      /* delete */
      $(".catfav2").click(function(){
           var x = $(this).attr("data"); 
           $.ajax({
             url: "/ajaxdelfav/"+x,
             type:"delete",
             data:{
               _token:_token,
             },
       
              success:function(response){
               if(response) {
                 $(".favcount").text(response.count);
                       $("#catfav2"+x).hide();  
                       $("#catfav"+x).show();  
                      }
             }, 
             
            });
       });
  



});  /*  */

/* nav */

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}


