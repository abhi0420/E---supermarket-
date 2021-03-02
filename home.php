<?php


session_start();



?>



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>


<div class="header">
<div class="container">
	<div class="navbar">
<div class="logo">
	 <img src="Images/logo.jpg" width="250px" height="200px">
</div>	
    <nav>
	    <ul>
		<li><a href="">Home</a></li>
		<li><a href="products.html">Products</a></li>
		<li><a href="Aboutus.php">About</a></li>
		<li><a href="contactus.php">Contact</a></li>
		<li><a href="account2.php">Account</a></li>
	    </ul>

	


    </nav>
   <a href = "logout.php" class="logout"> LOGOUT </a>

</div>
<div class="row">
	<div class="col-2">
    <h2> Welcome <?php echo $_SESSION['username'];  ?>! </h2>
		<h1>Shopping made easy!</h1>
		<p>Discover the best quality Fruits, Vegetables <br>and a variety of essentials at the best prices <br>delivered to your doorstep.</p>
		<a href="products.html" class="btn">Start Shopping</a>		
	</div>
	<div class="col-2">
		<img src="Images/delivery.jpg">
	</div>
</div>



	
</div>

</div>


<br>

<!--------------- featured ------------------>

<div class="product">
      
      <div class="product-image">
        <span class="onsale-section"><span class="onsale"><a href="products.html#eco" id="link"><b>Save 10% on all eco and organic products</b></a></span></span>
      </div>
    </div>

	<h2 class="title">Shop By Category</h2><br>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#fruits">

          <div class="image-container" style="background-image: url('Images/veg.jpg');">
          </div>
          <!-- <img src="images/veg.jpg" alt="veggies" width="600" height="400"> -->
        </a>
        <div class="desc">Organic Fruits and Vegetables</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#foodgrains">
          <!-- <img src="images/grains.jpg" alt="grains" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/grains.jpg');">
          </div>
          
        </a>
        <div class="desc">Foodgrains, Oils & Masalas</div>
      </div>
    </div>
    <div class="responsive" style="">
      <div class="gallery">
        <a href="products.html#dairy">
          <!-- <img src="images/milkkk.jpg" alt="dairy" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/milkkk.jpg');">
          </div>
        </a>
        <div class="desc">Dairy Store and Eggs </div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#cleaning">
          <!-- <img src="images/clean.jpg" alt="cleaning" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/clean.jpg');">
          </div>
        </a>
        <div class="desc">Cleaning and Household</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#bakery">
          <!-- <img src="images/bake.jpeg" alt="bakery" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/bakery.jpg');">
          </div>
        </a>
        <div class="desc">Bakery Store</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#beverages">
          <!-- <img src="images/drinks.jpg" alt="drinks" height="400"> -->
          <div class="image-container" style="background-image: url('Images/drinks.jpg');">
          </div>
        </a>
        <div class="desc">Drinks and beverages</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#selfcare">
          <!-- <img src="images/care.jpg" alt="Personal care" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/care.jpg');">
          </div>
        </a>
        <div class="desc">Personal Care</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#snack">
          <!-- <img src="images/care.jpg" alt="Personal care" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/snacks.jpg');">
          </div>
        </a>
        <div class="desc">Snacks Store</div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <a href="products.html#gourmet">
          <!-- <img src="images/gourmet.jpg" alt="gourmet" width="600" height="400"> -->
          <div class="image-container" style="background-image: url('Images/gourmet.jpg');">
          </div>
        </a>
        <div class="desc">Gourmet and World Food</div>
      </div>
    </div>
    <div class="clearfix"></div>


<!--------------- exclusive offers ------------------>
<div class="small-container">
    <h2 class = "title"> Exclusive Offers</h2>
    <div class="row">
    	<div class = "col-4">
    		<a href="products.html#cleaning"><img src="Images/surf.jpg">
    		<h4>Surf Excel Detergent</h4>
    		<p>$5</p></a>
    		
    	</div>
    	    	<div class = "col-4">
    		<a href="products.html#cleaning"><img src="Images/lifebuoy.jpg">
    		<h4>Lifebuoy Sanitizer</h4>
    		<p>$4</p></a>
    		
    	</div>
    	    <a href="products.html#beverages">	<div class = "col-4">
    		<img src="Images/horlicks.jpg" height="250px">
    		<h4>Horlicks CLassic Malt</h4>
    		<p>$4</p></a>
    		
    	</div>
    	    <a href="products.html#foodgrains">	<div class = "col-4">
    		<img src="Images/ashir.jpg">
    		<h4>Atta whole wheat</h4>
    		<p>$4.50</p></a>
    		
    	</div>  
    	    <a href="products.html#cleaning">	<div class = "col-4">
    		<img src="Images/lizol.jpg">
    		<h4>Lizol Floor Cleaner</h4>
    		<p>$3.50</p></div>
    		
    	</div>
    	
    </div>

</div>


<!-------Brands Section------->
<h2 class="title">Exclusive Brands</h2>
<br>
<div class="brands">
	<div class="small-container">
        <div class="row">
			<div class="col-5">
				<img src="Images/tobasco.jpg" >
			</div>
			<div class="col-5">
				<img src="Images/soultree.jpg" >
			</div>	
			<div class="col-5">
				<img src="Images/english.jpg" >
			</div>	
			<div class="col-5">
				<img src="Images/livegreens.jpg">
			</div>				
			<div class="col-5">
				<img src="Images/melia.jpg" >
			</div>			

        </div>
    </div>
</div>   

<!---------------Footer------------------------->

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download our Mobile App from Google/Apple store <br> and get notified on <br> the latest deals and offers</p>
				<div class = 'app-logo'>
					<img src="Images/playstore.jpg">
					<img class = 'applestore' src="Images/applestore.jpg" height="39px">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="Images/app.jpg">
				<p>Our aim is to provide you with the best quality products<br> along with amazing offers and free delivery</p>
			</div>
			<div class="footer-col-4">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Our Blog</li>
					<li>Return Policy</li>
					
				</ul>
				
			</div>
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>Twitter</li>
					<li>Facebook</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
				
			</div>

		</div>
	</div>


</div>


</body>
</html>
<style type="text/css">
	
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}	
body
{
	font-family: 'Barlow Condensed', sans-serif;
}

.navbar
{
	display: flex;
	align-items: center;
	padding: 20px;

}
nav{
	flex: 1;
	text-align: right;
}
nav ul
{
	display: inline-block;
	list-style-type: none;

}
nav ul li
{
	display: inline-block;
	margin-right: 20px;
}
a
{
	text-decoration: none;
	color: #555;
}
p
{
	color: #555;
}
.container
{
	max-width: 1300px;
	margin: auto;
	padding-left: 25px;
	padding-right: 25px;
}
.row
{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	justify-content: space-around;
}
.col-2
{
	flex-basis: 50%;
	min-width: 300px;
}
.col-2 img
{
	max-width: 100%;
	padding: 50px 0;
}
.col-2 h1
{
	font-size: 50px;
	line-height: 60px;
	margin: 25px 0;

}
.btn{
	display: inline-block;
	background: #ff523b;
	color: #fff;
	padding: 8px 30px;
	margin: 30px 0;
	border-radius: 30px;
	transition: background 0.5s;
}


.btn:hover
{
background: #563434;
}

.header
{
	background: radial-gradient(#fff,#ffd6d6);

}
.header .row{
	margin-top: 70px;

}
.categories
{
	margin: 50px;
	margin-bottom: 10px;
}
.col-3
{
	flex-basis: 30%;
	min-width: 200px;
	margin-bottom: 30px;
}
.exc
{
	color: #acc543;
}
.col-4
{
	flex-basis: 20%;
	padding: 10px;
	min-width: 200px;
	margin-bottom: 50px;
	transition: transform 0.5s;
}
.col-4 img
{
width: 100%;
}
.title
{
	text-align: center;
	
	position: relative;
	line-height: 68px;
	color: #555;
}
.title::after
{
	content: '';
	background: #ff523b ;
	width: 80px;
	height: 5px;
	border-radius: 5px;
	position: absolute;
	bottom: 0;
	left: 47%;
	transform: translateX(-60);
}
h4
{
	color: #555;
	font-weight: dark;

}
.col-4 p
{
	font-size: 14px;
}
.col-4:hover
{
transform: translateY(-10px);
}
.brands
{
	margin: 100px auto;

}
.col-5
{
	width: 160px;
}
.col-5 img
{
	width: 100%;

}


.footer
{
	background: black;
	color: #8a8a8a;
	font-size: 14px;
	padding: 60px 0 20px;

}
.footer p
{
		color: #8a8a8a;
}
.footer h3
{
	color: white;
	margin-bottom: 20px;
}
.footer-col-1, .footer-col-2,.footer-col-3, .footer-col-4
{
	min-width: 250px;
	margin-bottom: 20px;
}
.footer-col-1
{
	flex-basis: 30%;
}

.footer-col-2
{
    flex:1;
	text-align: center;
}
.footer-col-2 img
{
	width: 80px;

	margin-bottom: 20px;

}
.footer-col-3, .footer-col-4
{
	flex-basis: 12%;
	text-align: center;
}
ul
{
	list-style-type: none;
}


.app-logo
{
	margin-top: 20px;
}
.app-logo img
{
	width: 140px;
	align-self: auto;
}
.applestore
{
	margin-bottom:  7px;
}

.logout
{


  width: auto;
  padding: 10px 10px;
  background-color: #f44336;
  color: white;
}

     .product {
    width: 50vw;
    font-family: sans-serif;
    
    margin:  auto;
    }
    .product-image {
    background: url("Images/waste.jpg") center/cover no-repeat;
    background-size: contain;
    background-color: #b2d0d0;
    margin-bottom: 10px;
    position: relative;
    min-height: 238px;
    border-radius: 15px;
    }
    .onsale-section {
    position: absolute;
    top: -6px;
    right: 15px;
    }
    .onsale-section:after {
    position: absolute;
    content: '';
    display: block;
    width: 0;
    height: 0;
    border-left: 85px solid transparent;
    border-right: 69px solid transparent;
    border-top: 10px solid #D99C9C;
    }
    .onsale {
    position: relative;
    display: inline-block;
    text-align: center;
    color: #fff;
    background: #D99C9C;
    font-size: 14px;
    line-height: 1;
    padding: 35px 35px 35px ;
    border-top-right-radius: 8px;
    width: 153px;
    text-transform: uppercase
    }
    .onsale:before,
    .onsale:after {
    position: absolute;
    content: '';
    display: block;
    }
    .onsale:before {
    background: #6ec5d5;
    height: 7px;
    width: 6px;
    left: -6px;
    top: 0;
    }
    .onsale:after {
    background: #96a0a2;
    height: 7px;
    width: 8px;
    border-radius: 8px 8px 0 0;
    left: -8px;
    top: 0;
    }
    .product img {
    display: block;
    }
    #link{
    text-decoration: none;
    }

    div.gallery {
    border: 1px solid #ccc;
    border-radius: 10px 10px 10px 10px;
    }
    div.gallery:hover {
    border: 1px solid #777;
    }
    div.gallery img {
    width: 100%;
    height: 400px;
    }
    div.desc {
    padding: 15px;
    text-align: center;
	color: #555;
    font-size: 30px;
    min-height: 100px;
    }
    * {
    box-sizing: border-box;
    }
    .responsive {
    padding: 0 55px;
    float: left;
    width: 33.33333%;
    margin-bottom: 40px;
    }
    .image-container{
    height: 260px;
    width: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 10px 10px 0px 0px;
    }
    @media only screen and (max-width: 700px) {
    .responsive {
    width: 49.99999%;
    margin: 6px 0;
    }
    }
    @media only screen and (max-width: 500px) {
    .responsive {
    width: 100%;
    }
    }
    .clearfix:after {
    content: "";
    display: table;
    clear: both;
    }


</style>