<?php
	session_start();
	include('connect/db.php');
	unset($_SESSION['SESS_USER_ID']);
	unset($_SESSION['SESS_ADMIN_ID']);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("include/css.php");?>
</head>

<body>

	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-3 col-sm-4 header-most-top">
					<p class=" text-lg-left text-center">Welcome to Book It</p>
				</div>
				<div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
					<!-- header lists -->
					<ul class="top-header-lists">						
						<li class="mx-3">
							<a href="#login" data-toggle="modal" data-target="#login" class="">
								<i class="fas fa-sign-in-alt mr-1"></i> Log In </a>
						</li>
						<li>
							<a href="#register" data-toggle="modal" data-target="#register" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Register </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<!-- Pop Up -->
    <?php include("include/popup.php");?>
	<!-- header-bottom-->
	<div class="header-bot my-md-4 my-3" id="site-header">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
				<!-- logo -->
				<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="index.php"><span>Sh</span> are <span>i</span>T Books</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-lg-9 col-md-8 header">
					<div class="row">
						<!-- search -->
						<div class="col-lg-9 col-sm-8 agileits_search">
							<form class="form-inline" action="#" method="post" style="max-width:600px;">
								<input class="form-control" type="search"
									placeholder="Search for Books, authors and more" aria-label="Search" required>
								<button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div
							class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
							<div class="cart-store">
								<!-- toggle switch for light and dark theme -->
								<div class="cont-ser-position">
									<nav class="navigation">
										<div class="theme-switch-wrapper">
											<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
													<i class="gg-sun"></i>
													<i class="gg-moon"></i>
												</div>
											</label>
										</div>
									</nav>
								</div>
								<!-- //toggle switch for light and dark theme -->
							</div>							
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
    <?php include("include/menu.php");?>
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Get flat
									<span>10%</span> Cashback</p>
								<h3 class="mt-2">Exciting Deals on Books</h3>
								<a class="btn btn-style mt-4" href="#">Sell Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Top
									<span>Brands</span> lowest <span>Prices</span></p>
								<h3 class="mt-2">Wide Range of Books!</h3>
								<a class="btn btn-style mt-4" href="#">Sell Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Get up to
									<span>25%</span> Off</p>
								<h3 class="mt-2">Books New Collection!</h3>
								<a class="btn btn-style mt-4" href="#">Sell Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Top
									<span>Sale</span> Best <span>Deals</span></p>
								<h3 class="mt-2"> Books !</h3>
								<a class="btn btn-style mt-4" href="#">Sell Now </a>
							</div>
						</div>
					</div>
				</div>
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
	<!-- //banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
	<!-- top Products -->
	<div class="ads-grid py-5">
		<div class="container py-md-5 py-4">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span class="font-weight-normal">Our</span> New Post</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-12 order-lg-last order-first">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-lg-4">
							<div class="row">
								<?php 
                                $result = $db->prepare("select * from books limit 3");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++)
                                {
								?>
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="photos/<?php echo $row["photo_1"];?>" alt="" class="img-fluid" style="width:70%; height:250px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center mt-2">
											<h4 class="pt-1">
												<a href="#"><?php echo $row["product_name"];?></a>
											</h4>
											<div class="info-product-price">
												<span class="item_price"><?php echo $row["category"];?></span>
												<del><?php echo $row["price"];?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            	<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="btn btn-style btn-style-secondary mt-3">
                                                More
												</a>												
											</div>
										</div>
									</div>
								</div>
								<?php }?>                                
								
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-lg-4 mb-5">
							<div class="row">
								<?php 
                                $result = $db->prepare("select * from books limit 3");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++)
                                {
								?>
                                <div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                        	<img src="photos/<?php echo $row["photo_1"];?>" class="img-fluid" style="width:90%; height:150px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product text-center mt-2">
											<h4 class="pt-1">
												<a href="#"><?php echo $row["product_name"];?></a>
											</h4>
											<div class="info-product-price">
												<span class="item_price"><?php echo $row["category"];?></span>
												<del><?php echo $row["price"];?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            	<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="btn btn-style btn-style-secondary mt-3">
                                                More
												</a>												
											</div>
										</div>
									</div>
								</div>
                                <?php }?>          
							</div>
						</div>
						<!-- //second section -->
						
                        <!-- third section -->
						<div class="px-lg-4 my-5">
							<div class="product-sec1 product-sec2">
								<div class="row p-5">
									<h3 class="col-md-4 effect-bg">Exciting Deals</h3>
									<p class="w3l-nut-middle">Up to 40% Off</p>
									<div class="col-md-8 bg-right-nut">
										<img src="images/image1.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-lg-4 mt-md-0 mt-5">
							<div class="row">
								
                                <?php 
                                $result = $db->prepare("select * from books limit 3");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++)
                                {
								?>
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="photos/<?php echo $row["photo_1"];?>" alt="" class="img-fluid" style="width:70%; height:250px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center mt-2">
											<h4 class="pt-1">
												<a href="#"><?php echo $row["product_name"];?></a>
											</h4>
											<div class="info-product-price">
												<span class="item_price"><?php echo $row["category"];?></span>
												<del><?php echo $row["price"];?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            	<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="btn btn-style btn-style-secondary mt-3">
                                                More
												</a>												
											</div>
										</div>
									</div>
								</div>
								<?php }?>   
                                
								
							</div>
						</div>
						<!-- //fourth section -->
						<!-- 5th section -->
						<div class="product-sec1 px-lg-4 mt-5">
							<div class="row">
								
                               <?php 
                                $result = $db->prepare("select * from books limit 3");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++)
                                {
								?>
                                <div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                        	<img src="photos/<?php echo $row["photo_1"];?>" class="img-fluid" style="width:90%; height:150px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
										</div>
										<div class="item-info-product text-center mt-2">
											<h4 class="pt-1">
												<a href="#"><?php echo $row["product_name"];?></a>
											</h4>
											<div class="info-product-price">
												<span class="item_price"><?php echo $row["category"];?></span>
												<del><?php echo $row["price"];?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            	<a href="#login" data-toggle="modal" data-target="#login" id="loginbtn" class="btn btn-style btn-style-secondary mt-3">
                                                More
												</a>												
											</div>
										</div>
									</div>
								</div>
                                <?php }?>  
							</div>
						</div>
						<!-- 5th section -->
                        
                       

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<a href="#">
						<div class="join-agile text-left p-4">
							<div class="row">
								<div class="col-sm-7 offer-name">
									<h6>New Collections, New Trendy</h6>
									<h4 class="mb-3">Books</h4>
									<p>Sale up to 25% off all in store</p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img src="images/off1.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<a href="#">
						<div class="join-agile text-left p-4">
							<div class="row ">
								<div class="col-sm-7 offer-name">
									<h6>Top Brands, lowest Price</h6>
									<h4 class="mb-3">Books</h4>
									<p>Free shipping order over $100</p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img src="images/off2.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
<?php include("include/footer.php");?>	
<?php include("include/js.php");?>
</body>

</html>