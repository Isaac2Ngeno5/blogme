<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BlogMe</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="main.js"></script>
</head>
<body>
	<!--navigation bar -->
	<nav class="navbar navbar-inverse fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="#">BlogMe</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
	        <li><a href="#">Posts</a></li>
	        <li><a href="#">Notification</a></li> 
	        <li><a href="#">About</a></li> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!--container wraps everything in the page-->
	<div class="container">
		<!--jumbotron-->
	  <div class="jumbotron text-center">
	    <h1>Welcome To BlogMe</h1> 
	    <p>Grow yourself today by sharing your experiences, sharing is caring.</p> 
	  </div>

	  	<!--content-->
	  <div class="row">
	  		<!--left side-->
	  	<div class="col-md-8" >
	  		<h2>Blog Posts</h2>
	<!--post content-->
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h4> post title</h4>
	  			</div>
	  			<div class="row">
		  			<div class="col-md-4">
		  				<img src="images/bground.jpg" class="img-thumbnail" alt="cob web" width="304" height="236">
		  			</div>
		  			<div class="col-md-8">
		  				<p>Many users already have downloaded Bootstrap from MaxCDN when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.
	</p>
		  			</div>	
	  			</div>
	  			<div class="row">
		  			<div class="col-md-4">
		  				<i class="fa fa-thumbs-o-up"></i>
		  			</div>
		  			<div class="col-md-4">
		  				<i class="fa fa-heart"></i>
		  			</div>
		  			<div class="col-md-4">
		  				<i class="fa fa-comment"></i>
		  			</div>
	  			</div>
	  			<div class="col-md-10">
	  				<form role="form">
	  					<input type="text" name="comment" class="form-control" placeholder="comment here...">
	  				</form>
	  			</div>
	  			<div class="col-md-2">
	  				<button class="btn"> comment</button>
	  			</div>
	  		</div>
	  	</div>
	  		<!--right side-->
	  	<div class="col-md-3" style="padding: 20px">
			<div class="list-group">
			  <a href="#" class="list-group-item ">Latest Posts</a>
			  <a href="#" class="list-group-item">Popular Posts</a>
			  <a href="#" class="list-group-item">Older posts</a>
			</div>
	  	</div>
	  </div>
	</div>
</body>
</html>