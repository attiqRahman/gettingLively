






<!DOCTYPE html>
<html>
<head>
	<!--meta tags-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Marshall's Whiskies</title>

	<link rel="stylesheet"  href="css/bootstrap.min.css">
	

	<link rel="stylesheet"  href="css/style.css">

	


	<script src="https://kit.fontawesome.com/ba97170f73.js" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
	

</head>

<body>
	<?php 
	 
	 include_once("index_script.php");
	
		

	?>

	<!--Navbar-->

	
	
	<div class="container-fluid ">

	<nav class="navbar navbar-expand-lg navbar-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse pl-5" id="navbarTogglerDemo01">
		<a class="navbar-brand " href="#">Getting Lively</a>
		<ul class="navbar-nav ml-auto mt-2 mt-lg-0 pr-5">
		<li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">What's on</a>
		</li>
		<li class="nav-item   ">
			<a class="nav-link" href="#">About</a>
		</li>
		</ul>
		
	</div>
	</nav>
	  
	</div>



	



	<!----image slider with search---->


<div class="container-fluid px-0">

	
	
		<div class=" container-fluid px-0">
			<section>
				<div id="carouselExampleFade" class="carousel slide carousel-fade carousel pb-5 " data-ride="carousel">


					<div class="carousel-inner" >
						<div class="carousel-item active" style=" width:100%; height: 720px !important;">
							<img src="images/img2.jpg" class="d-block w-100"  alt="...">
						</div>
						<div class="carousel-item " style=" width:100%; height: 720px !important;">
							<img src="images/The Circuit images 3.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item" style=" width:100%; height: 720px !important;">
							<img src="images/The Circuit images 1.jpg" class="d-block w-100" alt="...">
						</div>
						
					</div>
				
				</div>
			</section>
		</div>



		<div class="col-lg-12 slider" style="padding-top: 15%;">
		
		<div class="row" >
		



			<div class="col-lg-12">
				<h2 class="display-3 text-white text-center "  id="welcome_text"></h2>
				<h3 class="headercustom text-center " ></h3>
			</div>


			<div class= "container bg-dark px-5 py-5 rounded-top border border-white" style="opacity: 0.9; width: 50%;" >
				<div class="row">

				<div class=" col-lg-8">
				<form>
					<div class="form-group">
						<input class="form-control"  type="text" placeholder="Bar / Restuarant / Club name"/>
					</div>
				</form>
			</div>


			<div class="col-lg-4" >
				
				<form>
					<div class="form-group"    >
						<button type="button" class=" btn btn-success text-uppercase" style="width: 100%;"><i class="fas fa-search "></i></button>
					</div>
				</form>

				
			</div>



			<div class=" col-lg-4">
				<form>
					<div class="form-group ">
						<select class="form-control  ">
							<option value="" disabled selected hidden>Type</option>
							<option  value="">All</option>
							<option  value="">Bar</option>
							<option  value="">Club</option>
							<option  value="">Restaurants</option>
							
						</select>
					</div>
				</form>
			</div>

			<div class=" col-lg-4">
				<form>
					<div class="form-group ">
						<select class="form-control ">
							<option value="" disabled selected hidden>State</option>
							<option  value="">All</option>
							<option value="">State 1</option>
							<option value="">State 2</option>
							<option value="">State 3</option>
							<option value="">State 4</option>

						</select>
					</div>
				</form>
			</div>


			<div class=" col-lg-4">
				<form>
					<div class="form-group">
						<select class="form-control">
							<option value="" disabled selected hidden>City</option>
							<option  value="">All</option>
							<option value="">City 1</option>
							<option value="">City 2</option>
							<option value="">City 3</option>
							<option value="">City 4</option>
						</select>
					</div>
				</form>
			</div>

				</div>
			</div>
		</div>
	</div>
</div>








			
		
	

















	<!----Jumbotron------>

	<!-- <div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4 text-center">Explore the Night</h1>
	    
	  </div>
	</div> -->




	
		<!-- <div class=""> -->
			<!-- <h2 class="col-md-6 col-lg-6 col-sm-12 mx-auto my-auto ctt display-4 headercustom" id="welcome_text"></h2> -->
		<!-- </div> -->
	





	<!----header--->

	<div class="container bg-dark border border-white rounded ">
	<h2 class="display-4 text-center headercustom" id="about_text"></h2>
	</div>
	<div class="container padding_bottom">
	<p class="lead text-center headercustom" id="about_text_pg"></p>
	</div>
	



	<!-- search box -->
	<!-- <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">
		<div class="input-group form-container">
			<input type="text" name="search" class="form-control search-input bg-dark" placeholder="Search" autofocus="autofocus" autocomplete="off">

			<select class="form-control search-slt bg-dark" id="exampleFormControlSelect1">
				<option>Type</option>
				<option>Activites</option>				                                
			</select>
			<select class="form-control search-slt bg-dark" id="exampleFormControlSelect1">
				<option>Type</option>
				<option>Activites</option>				                                
			</select>
			<select class="form-control search-slt bg-dark" id="exampleFormControlSelect1">
				<option>Type</option>
				<option>Activites</option>				                                
			</select>

			<span class="btn btn-search border" href="#!" role="button">
				<i class="fas fa-search"></i></span>

		</div>
	</div> -->





	
			
			

				<!-- <div class="form-group ">
					<select data-filter="model" class="filter-model filter form-control">
						<option value="">Select Model</option>
						<option value="">Show All</option>
					</select>
				</div>

				<div class="form-group">
					<select data-filter="type" class="filter-type filter form-control">
						<option value="">Select Type</option>
						<option value="">Show All</option>
					</select>
				</div>

				<div class="form-group ">
					<select data-filter="price" class="filter-price filter form-control">
						<option value="">Select Price Range</option>
						<option value="">Show All</option>
					</select> -->

					

				
			
		
		

		</div>
	</div>





	<!---search--->
				
				<!-- <section class="search-sec">
				    <div class="container">
				        <form action="#" method="post" novalidate="novalidate">
				            <div class="row">
				                <div class="col-lg-12">

				                    <div class="row">
				                        
				                        <div class="col-lg-6 col-md-2 col-sm-12 p-0">
				                            <input type="text" class="form-control " placeholder="Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
				                        </div>
				                        <div class="col-lg-6 col-md-2 col-sm-12 p-0">
				                            <select class="form-control search-slt" id="exampleFormControlSelect1">
				                                <option>Type</option>
				                                <option>Activites</option>
				                                
				                            </select>
				                        </div>
				                        <div class="col-lg-6 col-md-2 col-sm-12 p-0">
				                            <select class="form-control search-slt" id="exampleFormControlSelect1">
				                                <option>City</option>
				                                <option>City 1</option>
				                                <option>City 2</option>
				                                <option>City 3</option>
				                                <option>City 4</option>
				                                <option>City 5</option>
				                                <option>City 6</option>
				                            </select>
				                        </div>

				                        <div class="col-lg-6 col-md-2 col-sm-12 p-0">
				                            <select class="form-control search-slt" id="exampleFormControlSelect1">
				                                <option>State</option>
				                                <option>City 1</option>
				                                <option>City 2</option>
				                                <option>City 3</option>
				                                <option>City 4</option>
				                                <option>City 5</option>
				                                <option>City 6</option>
				                            </select>
				                        </div>
				                        <div class="col-lg-6 col-md-2 col-sm-12 p-0">
				                            <select class="form-control search-slt" id="exampleFormControlSelect1">
				                                <option>State</option>
				                                <option>City 1</option>
				                                <option>City 2</option>
				                                <option>City 3</option>
				                                <option>City 4</option>
				                                <option>City 5</option>
				                                <option>City 6</option>
				                            </select>
				                        </div>
				                        
				                        <div class="col-lg-6 col-md-12 col-sm-12 p-0">
				                            <button type="button" class="btn btn-info wrn-btn custom">Search</button>
				                        </div>


				                    </div>
				                </div>
				            </div>




				           
				        </form>
				    </div>
				</section> -->
			

	<!----header--->

	<div class="container">
	<h2 class="display-4 headercustom" id="trending_text"></h2>
	</div>


	<!--------Image slider------>

	<div class="container ">
		
		<div class="row pb-5">
			<div class="col-lg-8 col-md-12 col-sm-12 ">
				

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					
					<div class="carousel-inner" style=" width:100%; height: 450px !important;" id="carousel_items">
					  <div class="carousel-item active">
						<img id="active_img" class="d-block w-100" src="" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="lead" id = "active_title"></h5>
							<p class="lead" id="active_para"></p>
						</div>
					  </div>
					  
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
				
				</div>
			</div>

			<!-- Login and Signup -->

			<!-- <div class="col-lg-4 col-md-4 col-sm-12 border" align="center"> -->
				<!-- <div class="container">
					<h3 class="display-4 text-center headercustom padding_top_form">Login</h3> -->
					
				<div class="col-lg-4 col-md-12 col-sm-12 border " align="center">
					
					<form  id="login_form">
					  <div class="form-group align">
						<h3 class="display-4 text-center headercustom padding_top_form">Login</h3>
					    <label class=" lead text-white py-1" for="login_email">Email address</label>
					    <input type="email" class="form-control"  id="login_email" aria-describedby="emailHelp" placeholder="Enter email" >
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label class=" lead text-white py-1"  for="login_password">Password</label>
					    <input type="password" class="form-control" id="login_password" placeholder="Password" >
					  </div>
					  <div class="container py-2">
						<button type="submit" class="btn btn-secondary btn_width lead py-2">Login</button>
						<button type="button" class="btn btn-secondary btn_width lead py-2" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" >Signup</button>
					  </div>
					</form>



				</div>
				
				
			</div>
			
		</div>
	


	<!----header--->

	<div class="container bg-dark">
	<h2 class="display-4 text-center headercustom">Our Guide</h2>
	</div>












 <div class="container py-3">
 	<div class="row py-0">
 		<div class="col-lg-6 padding_bottom">
 			
 			<a href="#" class="btn"><img id="guide_image1" class="d-block w-100" src="bar_img1" height="300"></a>
 			

 		</div>
 		<div class="col-lg-6 padding_bottom">
 			<h4 id="guide_title1" class="pager-header text-center headercustom"></h4>
 			
		 	<p id="guide_para1" class="lead text-center headercustom"></p>



		
 		</div>
 		<div class="col-lg-6 padding_bottom">
 			<h4 id="guide_title2" class="pager-header text-center headercustom"></h4>
	 		<p id="guide_para2" class="lead text-center headercustom"></p>

			
 		</div>
 		<div class="col-lg-6 padding_bottom">
 			<a href="#" class="btn"><img id="guide_image2" class="d-block w-100" src="" height="300"></a>
 		</div>

 	</div>
 </div>
























	<!-----cards------>


	<div class="container">
	  <div class="px-lg-5">

	    

	    <div class="row">
			
	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
			  
	        <div class="bg-white rounded shadow-sm">
				<img id = "card_image1"  alt="" class="img-fluid card-img-top">
	          	<div class="p-4">
	            	<h5> <a href="#" id="card_title1" class="text-dark"></a></h5>
	            	<p id= "card_para1" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          	</div>
	        </div>
		  </div>
		  </li>
	      <!-- End -->
		
	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id = "card_image2" src="images/The Circuit images 17.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title2" class="text-dark">Bar/club</a></h5>
	            <p id="card_para2" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
		  </div>
		
	      <!-- End -->

		  <!-- Gallery item -->
		  
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image3" src="images/The Circuit images 17.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id ="card_title3" class="text-dark">Bar/club</a></h5>
	            <p id="card_para3" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
		  </div>
		
	      <!-- End -->

		  <!-- Gallery item -->
		
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image4" src="images/The Circuit images 17.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title4" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para4" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
		  </div>
		
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image5" src="images/The Circuit images 17.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title5" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para5" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image6" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title6" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para6" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image7" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title7" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para7" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image8" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title8" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para8" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image9" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title9" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para9" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image10" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title10" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para10" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image11" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title11" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para11" id= "card_para4" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
	      </div>
	      <!-- End -->

	      <!-- Gallery item -->
	      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
	        <div class="bg-white rounded shadow-sm"><img id="card_image12" src="images/The Circuit images 9.jpg" alt="" class="img-fluid card-img-top">
	          <div class="p-4">
	            <h5> <a href="#" id="card_title12" class="text-dark">Bar/club</a></h5>
	            <p id= "card_para12" class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
	            
	          </div>
	        </div>
		  </div>
		
	      <!-- End -->

	    </div>
	    <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
	  </div>
	</div>











		<!----header--->

		<div class="container bg-dark">
		<h2 class="display-4 text-center headercustom">Discover in City/State</h2>
		</div>


		<!-----cards according to places---->

		<div class="container">
		
			<div class="row py-3">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card mb-3">
					  <img class="card-img-top" src="images/The Circuit images 6.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5> <a href="#" class="text-dark">Bar/club</a></h5>
					    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					    
					    
					  </div>
					</div>
				</div>			
			</div>

			<div class="row padding_bottom">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card mb-3">
				  <img class="card-img-top" src="images/The Circuit images 6.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5> <a href="#" class="text-dark">Bar/club</a></h5>
				    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				    
				    
				  </div>
				</div>
			</div>			
		</div>

		<div class="row padding_bottom">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card mb-3">
				  <img class="card-img-top" src="images/The Circuit images 6.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h5> <a href="#" class="text-dark">Bar/club</a></h5>
				    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				    
				    
				  </div>
				</div>
			</div>			
		</div>
		<div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
		
	</div>
	




	<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Email-->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fas fa-envelope-open-text"></i></a>


    

      
    </section>
    <!-- Section: Social media -->


    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">Attiq Rahman</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




	



	<!--jquery-->


	
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>