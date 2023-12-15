<?php

include('includes/header.php');

?>

<body class="login-container">

	<!-- Page container -->
	<div class="page-container bg-primary-400">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
							<!-- Content area -->
			<div class="content" >
				<!-- Simple login form -->
				<form id="formCreate">
					<div class="panel panel-body login-form" >
						<div class="text-center">
							<!-- <img src="assets/images/pg_logo.png" class="" alt="" style="width: 10rem;"> -->
							<h5 class="content-group">Inventory System <small class="display-block">Enter your credentials below</small></h5>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" name="userName" id="userName" placeholder="Username">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group">
							<button type="button" id="btn_login" class="btn btn-success btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
						</div>

						<div class="text-center">
							<a href="#" id="forgotPass">Forgot password?</a>
						</div>
					</div>
				</form>
				<!-- /simple login form -->
			</div>
			
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


<style>
	.content{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);

	}
	
	.panel{
		box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  		text-align: center;
	}

</style>


<script>

    $('#btn_login').click(function(){
        
    
            var user = $('#userName').val();
            var pass =  $('#password').val();
        

        $.ajax({
            url: 'loginFunction.php',
            type: 'POST',
            data: {
                click_login: true,
                username: user,
                password: pass
            },
            dataType: 'JSON',
            success: function(res){

                if(res.status === 0)
                {   
                    swal({
                    title: "Error",
                    text: res.message,
                    type: "error",
                    closeOnClickOutside: false
                    });

                }

                else
                {
                    if(res.status === 1)
                    {
                        window.location.href='home.php';
                    }

                    else
                    {   
                        swal({
                        title: "Error",
                        text: res.message,
                        type: "error",
                        closeOnClickOutside: false
                        });
                       

                    }
                }

            }
            });

    })


</script>



</body>





