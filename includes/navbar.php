<?php
session_start();
?>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header ">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_demo.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

		
			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown dropdown-user">

					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholders/placeholder.jpg" alt="">
						
						<?php 

						if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) 
						{
							echo "<span>{$_SESSION['user']}</span>";
						}

						else
						{
							    // Unset all session variables
								session_unset();
								// Destroy the session
								session_destroy();
								// Redirect to the login page or perform any other action
								header("Location: loginPage.php");
								exit(); // Make sure to exit after redirection
						}

						?>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="" id="logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li id="li0"><a href="home.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Maintenance</span></a>
									<ul>
										<li id="li1" ><a href="productList.php">Product List</a></li>
									</ul>
								</li>
								
								

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
	</div>
			<!-- /main sidebar --


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
			<div class="content">


<script>

	$('#logout').click(function(){

		$.ajax({
		url: 'logout.php',
		type: 'POST',
		dataType: 'JSON',
		success: function(res){

			if(res.status === 1)
			{	
				alert(res.message);

				window.location.href='loginPage.php';
			}

		}
		});


		})

</script>
	

