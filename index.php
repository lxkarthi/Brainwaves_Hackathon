<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Management and Investing</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  <div class="navbar navbar-inverse navbar-static-top" >
  <div class="container" >
		<a href= "#" class="navbar-brand"> Tech site </a>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse" >
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
		<span class = "icon-bar"></span>
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse">
		
		<ul class = "nav navbar-nav navbar-right">
			<li class="active"><a  href="#"> Home</a></li>
			<li><a href="#"> Order</a></li>
			<li><a href="#"> Store</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle = "dropdown" > Social Media <b class= "caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href= "#" >Twitter</a></li>
					<li><a href= "#" >Facebook</a></li>
					<li><a href= "#" >Google+</a></li>
					<li><a href= "#" >Instangram</a></li>
				</ul>
			</li>
			<li><a href="#"> About</a></li>
			<li><a href="#contact" data-toggle = "modal" > Contact Us</a></li>
		</ul>
		
		</div>
  </div>
  
  </div>  
  
    <div class = "container">
	<div class = "jumbotron" >
		<center><div class = "container">
	<div class="wrapper">
		<form action="listing.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
		</form>			
	</div>
</div>
		</center>
	</div>
	</div>

	
	<div class = "navbar navbar-default navbar-fixed-bottom">
	<div class = "container" >
	<p class = "navbar-text pull-left" > Site build by Karthik</p>
	<a href = "#youtube" class = "navbar-btn btn btn-danger btn pull-right"> Subscribe on Youtube(email)</a>
	</div>
	</div>

		<div class="modal fade" id="contact" role = "dialog">
		<div class="modal-dialog">
			<div class="modal-content" >
			<form class = "form-horizontal">
					<div class="modal-header" >
						<h4> Contact Tech Site</h4>
					</div>
					<div class="modal-body">
					
						<div class  = "form-group" >
							<label for = "contact-name" class="col-lg-2 control-label"> Name:</label> 
							<div class="col-lg-10" >
								<input type = "text"  class="form-control"  id = "contact-name" placeholder = "Full Name" >
							</div>
						</div>
						  <div class  = "form-group" >
							<label for = "contact-email" class="col-lg-2 control-label"> Email:</label> 
							<div class="col-lg-10" >
								<input type = "email"  class="form-control"  id = "contact-email" placeholder = "you@example.com" >
							</div>
						</div>
						   <div class  = "form-group" >
							<label for = "contact-message" class="col-lg-2 control-label"> Message:</label> 
							<div class="col-lg-10" >
								<textarea class="form-control" rows = "6" id="contact-message" placeholder = "your query here." ></textarea>
							</div>
						</div>
						  
					</div>
					<div class="modal-footer" >
							<a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
							<button class="btn  btn-primary" type = "submit" >Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>