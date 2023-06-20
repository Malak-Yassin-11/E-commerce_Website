<!DOCTYPE html>
<html>
<head>
    <title>Shopping cart</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/shoppingcart.css')}}">
</head>
<body class="card-body">
  <div class="nav container" style="justify-content:flex-start;"><h3>Home</h3><h3>/</h3><h3 style="color:red;">Shopping cart</h3></div>
  <div class="container">
    <!-- 0 shop-pro -->
    <div class="shop-pro">
      <!-- 0 small-card -->
      <div class="small-card">
        <div class="seller">
          <div class="white-box"><img src="{{url('images/ensomechb.jpg')}}"></div>
          <p class="discribtion">lettel case for gmaing</p>
        </div>
        <div class="countity">1</div>
        <div class="cost">EGP 850</div>
        <div class="x-icone"><button><img style="width:32px;" src="{{url('images/cancel_circle.png')}}"></button></div>
      </div>
      <!-- 1 small-card -->
      <!-- 0 small-card -->
      <div class="small-card">
        <div class="seller">
          <div class="white-box"><img src="{{url('images/Fury8.webp')}}"></div>
          <p class="discribtion">lettel Rayzen9 for gmaing</p>
        </div>
        <div class="countity">2</div>
        <div class="cost">EGP 700</div>
        <div class="x-icone"><button><img style="width:32px;" src="{{url('images/cancel_circle.png')}}"></button></div>
      </div>
      <!-- 1 small-card -->
      <!-- 0 small-card -->
      <div class="small-card">
        <div class="seller">
          <div class="white-box"><img src="{{url('images/b450.png')}}"></div>
          <p class="discribtion">lettel case for gmaing</p>
        </div>
        <div class="countity">1</div>
        <div class="cost">EGP 1,250</div>
        <div class="x-icone"><button><img style="width:32px;" src="{{url('images/cancel_circle.png')}}"></button></div>
      </div>
      <!-- 1 small-card -->
      <!-- 0 small-card -->
      <div class="small-card">
        <div class="seller">
          <div class="white-box"><img src="{{url('images/redcase.webp')}}"></div>
          <p class="discribtion">lettel case for gmaing</p>
        </div>
        <div class="countity">1</div>
        <div class="cost">EGP 850</div>
        <div class="x-icone"><button><img style="width:32px;" src="{{url('images/cancel_circle.png')}}"></button></div>
      </div>
      <!-- 1 small-card -->
    </div>
    <!-- 1 shop-pro -->
    <!-- 0 list -->
    <div class="list">
      <h2 class="head-recib">Order summary</h2>
      <hr>
      <!-- 0 head product -->
      <div class="head-product">
        <div class="id">ID</div>
        <div class="countatiy">Quantity</div>
        <div class="costs">Price</div>
      </div>
      <!-- 1 head product -->
      <!-- 0 head product -->
      <div class="head-product">
        <div class="id">1</div>
        <div class="countatiy">3</div>
        <div class="costs">850</div>
      </div>
      <!-- 1 head product -->
      <!-- 0 head product -->
      <div class="head-product">
        <div class="id">1</div>
        <div class="countatiy">3</div>
        <div class="costs">1,400</div>
      </div>
      <!-- 1 head product -->
      <!-- 0 head product -->
      <div class="head-product">
        <div class="id">1</div>
        <div class="countatiy">3</div>
        <div class="costs">1,250</div>
      </div>
      <!-- 1 head product -->
      <!-- 0 head product -->
      <div class="head-product">
        <div class="id">1</div>
        <div class="countatiy">3</div>
        <div class="costs">850</div>
      </div>
      <!-- 1 head product -->
      <!-- 0 head product -->
      <div class="head-product" style="border-bottom:none; margin-bottom:30px;">
        <div  class="id">shipping</div>
        <div  class="costs">EGP 20</div>
      </div>
      <!-- 1 head product -->
      <button class="pay-button"><a href="{{route('creditcard')}}">Pay</a></button>
    </div>
    <!-- 1 list -->
  </div>
  <div class="container">
    <div class="back"><img src="{{url('images/arrow_right_alt.png')}}"><a href="{{route('home')}}" style="color:red;">Continue shopping</a></div>
  </div>
</body>
</html>
