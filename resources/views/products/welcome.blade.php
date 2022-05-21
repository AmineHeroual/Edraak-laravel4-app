<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Amine Store</title>
</head>
<body>
<style type="text/css">
  *{
    margin: 0;
    padding: 0;
  }
   .top{
  padding-top: 5px;
  background: radial-gradient(circle, #B9F8D3 20%, #97DBAE);
  background-size: cover;
  background-repeat: no-repeat;
}
h1 {
  padding: 30px;
      text-align: center;
      color: #456780;
      padding-bottom: 30px;
}

h3 {
  padding: 30px;
text-align: center;
color: #3A3845;
}
.search-container{
  width: 490px;
  display: block;
  margin: 0 auto;
  padding-bottom: 50px;
}

input#search-bar{
  margin: 0 auto;
  width: 100%;
  height: 45px;
  padding: 0 20px;
  font-size: 1rem;
  border: 1px solid #D0CFCE;
  outline: none;
  &:focus{
    border: 1px solid #008ABF;
    transition: 0.35s ease;
    color: #008ABF;
    &::-webkit-input-placeholder{
      transition: opacity 0.45s ease;
     opacity: 0;
     }
    &::-moz-placeholder {
      transition: opacity 0.45s ease;
     opacity: 0;
     }
    &:-ms-placeholder {
     transition: opacity 0.45s ease;
    opacity: 0;
     }
   }
 }

.search-icon{
  position: relative;
  float: right;
  width: 75px;
  height: 75px;
  top: -62px;
  right: -45px;
}


#EN {
    margin-left: 100px;
  }



#search-result {
  margin: 70px auto;
  font-size: 100px;
  width: 100px;
  height: 50px;

}




</style>

<!--  -->
<div class="top">
  {{-- <button id="EN">EN</button><button id="AR">AR</button> --}}
  <div class="d-grid gap-2 d-md-block">
    <button id="EN" class="btn btn-info " type="button">EN</button>
    <button id="AR" class="btn btn-info" type="button">AR</button>
  </div>
<h1 class="title">مرحبًا بك في متجرنا</h1>
<h3 class="text">مرحبا بك في متجرنا الرائع توجد الكثير من الاشياء الرائعة يمكنك الحصول عليها ماذا تنتظر انطلق الى اروع تجربة تسوق ستعيشها في متجرنا  الذي هو متجرك ايضا .... امزح</h3>
<form class="search-container d-flex" method="GET" action="{{url('product/amine')}}" autocomplete="on">
    <input  name= "query" type="text" id="search-bar" placeholder="البحث في منتجاتنا?" autocomplete="on">
    <button class="btn btn-outline-success" type="submit">Search</button>
    {{-- <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a> --}}

  </form>
</div>


{{-- <div id="search-result"> {{$search}} </div> --}}


  <script type="text/javascript">
     let title = document.querySelector('.title');
     let text = document.querySelector('.text');
     let btnAR = document.querySelector('#AR');
     let btnEN = document.querySelector('#EN');

     btnEN.addEventListener('click', changeToEnglish);
     btnAR.addEventListener('click', backToArabic);


     function changeToEnglish(){
      title.innerHTML = "Welcome To Our Store!";
      text.innerHTML = "Welcome to our wonderful store. There are a lot of wonderful things you can get. What are you waiting for? Go on to the most wonderful shopping experience you will have in our store, which is also your store .... joking";
      document.querySelector('#search-bar').placeholder = "search here";
     }

     function backToArabic(){
      title.innerHTML = "مرحبًا بك في متجرنا";
      text.innerHTML = "مرحبا بك في متجرنا الرائع توجد الكثير من الاشياء الرائعة يمكنك الحصول عليها ماذا تنتظر انطلق الى اروع تجربة تسوق ستعيشها في متجرنا  الذي هو متجرك ايضا .... امزح";
      document.querySelector('#search-bar').placeholder = "البحث في منتجاتنا?";
     }
  </script>

</body>
</html>
