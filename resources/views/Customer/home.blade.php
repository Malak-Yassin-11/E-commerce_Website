<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/framework.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/master.css')}}">
	<link rel="stylesheet" href="{{url('css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
	<!-- 0 header -->
	<div class="head">
		<div class="container">
			<h1 style="margin:0px;">smart store</h1>
		</div>
	</div>
	<header>
		<div class="container">
			<div class="head-left">
				<img src="{{url('images/Land.png')}}">
				<form action="{{route('search.results')}}" method="POST">
                    @csrf
                    <input class="searchh" type="search" name="product_name" placeholder="what are u looking for ?">
                    <button  style="color:white; background-color:black;" class="search-bt ">Search</button>
                    {{-- <button  style="color:white; background-color:black;" class="search-bt "><a href="{{route('results')}}">search</a></button> --}}
                </form>
			</div>
            @if (Session::has('logged_in_customer'))
            <div class="head-Right">
				<a href="{{route('shoppingcart')}}" class="carddd"><img src="{{url('images/shopping-card.png')}}"></a>
				<button style="color:white; background-color:black;" class="search-bt"><a href="{{route('logout')}}">Logout</a></button>
			</div>
            @elseif (!Session::has('logged_in_customer'))
            <div class="head-Right">
				{{-- <a href="{{route('shoppingcart')}}" class="carddd"><img src="{{url('images/shopping-card.png')}}"></a> --}}
				<button style="color:white; background-color:black;" class="search-bt"><a href="{{route('login')}}">Login</a></button>
			</div>
            @endif

		</div>
	</header>
	<!-- 1 header -->
	<!-- 0 content -->
	<section class="content">
		<div class="container">
			<div class="sidebar bg-white p-20 p-relative">
	        <h3 class="p-relative txt-c mt-0">category</h3>
	        <ul>
	          <li>
	            <a class="active d-flex align-center fs-14 c-black rad-6 p-10 link" href="#mother">
	              <span>Motherboard</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#Processor">
	              <span>Processor</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#Ram">
	              <span>Memory(Ram)</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#Graphics">
	              <span>Graphics cardd</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#Hard">
	              <span>Storage device</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#Case">
	              <span>case</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#watches">
	              <span>watches</span>
	            </a>
	          </li>
	          <li>
	            <a class="d-flex align-center fs-14 c-black rad-6 p-10 link" href="#TV">
	              <span>TV</span>
	            </a>
	          </li>
	        </ul>
	    </div>
	    <!-- <div class="img"> -->
	    	<!-- <img src="../image/sponserd.png"> -->
			<div id="carouselExampleFade" class="carousel slide carousel-fade img" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="{{url('images/sponserd.png')}}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{url('images/FhQ9y-8aEAAZAFV.jpg')}}" class="d-block w-100" alt="...">
				  </div>
				  <div class="carousel-item">
					<img src="{{url('images/LX5ipuxb4vckRpKt7o5oLC.jpg')}}" class="d-block w-100" alt="...">
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Next</span>
				</button>
			  </div>
	    <!-- </div> -->
      </div>
	</section>
	<!-- 1 content -->
	<!-- 0 prduct -->
	<section class="Products">
		<!-- 0 cointaner -->
		<div class="container">
			<!-- 0 category -->
			<div class="category" id="mother">
				<div class="line">
				    <h2>Motherboard</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>B550</h3>
						<div class="im"><img src="{{url('images/b450.png')}}"></div>
					    <h4 class="pri">EGP 1200</h4>
					    <a href="{{route('shoppingcart')}}"class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>Z690</h3>
						<div class="im"><img src="{{url('images/b550.webp')}}"></div>
						<h4 class="pri">EGP 3,300</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>B450</h3>
						<div class="im"><img src="{{url('images/msi.webp')}}"></div>
						<h4 class="pri">EGP 2,500</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			<!-- 0 category -->
			<div class="category" id="Processor">
				<div class="line">
				    <h2>Processor</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>Rayzen9</h3>
						<div class="im"><img src="{{url('images/Rayzen9.webp')}}"></div>
					    <h4 class="pri">EGP 17,500</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>intel3</h3>
						<div class="im"><img src="{{url('images/intel-cor-i3.webp')}}"></div>
						<h4 class="pri">EGP 2,000</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>Rayzen7</h3>
						<div class="im"><img src="{{url('images/Rayzen7.webp')}}"></div>
						<h4 class="pri">EGP 7,200</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			<!-- 0 category -->
			<div class="category" id="Ram">
				<div class="line">
				    <h2>Ram</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>Fury8</h3>
						<div class="im"><img src="{{url('images/Fury8.webp')}}"></div>
					    <h4 class="pri">EGP 800</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>XPG16</h3>
						<div class="im"><img src="{{url('images/XPG16.webp')}}"></div>
						<h4 class="pri">EGP 2,000</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>hp8</h3>
						<div class="im"><img src="{{url('images/hp8.webp')}}"></div>
						<h4 class="pri">EGP 900</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			<!-- 0 category -->
			<div class="category" id="Graphics">
				<div class="line">
				    <h2>Graphics cardd</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>RX5600XT</h3>
						<div class="im"><img src="{{url('images/RX5600.jpg')}}"></div>
					    <h4 class="pri">EGP 43,000</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>RTX3090</h3>
						<div class="im"><img src="{{url('images/3090.jpg')}}"></div>
						<h4 class="pri">EGP 55,000</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>RX6800XT</h3>
						<div class="im"><img src="{{url('images/6800XT.jpg')}}"></div>
						<h4 class="pri">EGP 60,000</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			<!-- 0 category -->
			<div class="category" id="Hard">
				<div class="line">
				    <h2>HDD & SSD</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>Seagate4T</h3>
						<div class="im"><img src="{{url('images/Seagate4T.webp')}}"></div>
					    <h4 class="pri">EGP 3,000</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>Xpg256</h3>
						<div class="im"><img src="{{url('images/Xpg256.webp')}}"></div>
						<h4 class="pri">EGP 1,200</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>WD2t</h3>
						<div class="im"><img src="{{url('images/Wd2t.webp')}}"></div>
						<h4 class="pri">EGP 1,100</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			<!-- 0 category -->
			<div class="category" id="Case">
				<div class="line">
				    <h2>Case</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>Ensomech-White</h3>
						<div class="im"><img src="{{url('images/ensomechw.jpg')}}"></div>
					    <h4 class="pri">EGP 850</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>Red-case</h3>
						<div class="im"><img src="{{url('images/redcase.webp')}}"></div>
						<h4 class="pri">EGP 1,200</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>Ensomech-Black</h3>
						<div class="im"><img src="{{url('images/ensomechb.jpg')}}"></div>
						<h4 class="pri">EGP 2,100</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			</div>
			<div class="category" id="watches">
				<div class="line">
				    <h2>watches</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>HUGO BOSS</h3>
						<div class="im"><img src="{{url('images/HB151.3920_600x.webp')}}"></div>
					    <h4 class="pri">EGP 6,745.50</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>TISSOT</h3>
						<div class="im"><img src="{{url('images/T055.417.16.057_5000x.webp')}}"></div>
						<h4 class="pri">EGP 9,697.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>CASIO </h3>
						<div class="im"><img src="{{url('images/MTP-V001L-1BUDF_5000x.webp')}}"></div>
						<h4 class="pri">EGP 4,135.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>

				</div>
			<!-- 1 category -->
			</div>
			<div class="category" >

				<div class="Product">
					<div class="cardd">
						<h3>TISSOT</h3>
						<div class="im"><img src="{{url('images/T116.617.11.037_5000x.webp')}}"></div>
					    <h4 class="pri">EGP 8,482.50</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>CASIO</h3>
						<div class="im"><img src="{{url('images/MTP-V002D-1BUDF_5000x.webp')}}"></div>
						<h4 class="pri">EGP 760.50 </h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>LACOSTE </h3>
						<div class="im"><img src="{{url('images/2011155_5000x.webp')}}"></div>
						<h4 class="pri">EGP 4,837.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			</div>
			<div class="category" id="TV">
				<div class="line">
				    <h2>TV</h2>
				</div>
				<div class="Product">
					<div class="cardd">
						<h3>TORNADO</h3>
						<div class="im"><img src="{{url('images/51-PKfOZ14L._AC_UL320_.jpg')}}"></div>
					    <h4 class="pri">EGP 6,745.50</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>UNIONAIRE</h3>
						<div class="im"><img src="{{url('images/61BeeUi4HhL._AC_UL320_.jpg')}}"></div>
						<h4 class="pri">EGP 9,697.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3> TOSHIBA</h3>
						<div class="im"><img src="{{url('images/71ePz00p-kL._AC_UL320_.jpg')}}"></div>
						<h4 class="pri">EGP 4,135.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>

				</div>
			<!-- 1 category -->
			</div>
			<div class="category" >

				<div class="Product">
					<div class="cardd">
						<h3>CAIXUN</h3>
						<div class="im"><img src="{{url('images/71O2g3X2N1L._AC_UL320_.jpg')}}"></div>
					    <h4 class="pri">EGP 8,482.50</h4>
					    <a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>JAC</h3>
						<div class="im"><img src="{{url('images/614XC0WxZpL._AC_UL320_.jpg')}}"></div>
						<h4 class="pri">EGP 760.50 </h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
					<div class="cardd">
						<h3>SAMSUNG</h3>
						<div class="im"><img src="{{url('images/61pWfDIRxmL._AC_UL320_.jpg')}}"></div>
						<h4 class="pri">EGP 4,837.50</h4>
						<a href="{{route('shoppingcart')}}" class="cardd-bt">Add to cart</a>
					</div>
				</div>
			<!-- 1 category -->
			</div>

		 <!-- 1 cointaner -->
		</div>
	</section>
	<!-- 1 prduct -->
<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
