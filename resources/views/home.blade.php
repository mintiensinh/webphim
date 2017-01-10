</script>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/myweb.css')}}">
</head>
<body>
	<nav class="nav" role="navigation">
		<div class="container">
			<div class="collapse navbar-collapse navbar-ex1-collapse ">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Sign in</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Order Status</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<nav class="hear" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-lg-4">
					<div class="navbar-header">
						<a class="navbar-brand" href="#"><img src="{{asset('images/min/logo.png')}}"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-lg-4">
					<form class="navbar-form" role="search">
						<div class="input-group">
				            <input type="text" class="form-control" name="search">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
				            </div>
				        </div>
		            </form>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-4"></div>
		</div>

	</nav>

	<div class="container">
			<ul class="nav navbar-nav col-sm-12">
				<li class="active"><a href="#">Computers</a></li>
				<li><a href="#">Cooking</a></li>
				<li><a href="#">Education</a></li>
				<li><a href="#">Fiction </a></li>
				<li><a href="#">Health </a></li>
				<li><a href="#">Mathematics</a></li>
				<li><a href="#">Medical </a></li>
				<li><a href="#">Reference</a></li>
				<li><a href="#">Science</a></li>
			</ul>
	</div>

	<div class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
		<!-- Wrapper for slides -->
				<div class="carousel-inner">
			    	<div class="item active">
			    		<img src="http://mdbootstrap.com/img/Photos/Slides/img%20(27).jpg" alt="...">
				    	<div class="carousel-caption">
				    		<h3>Caption Text</h3>
				    	</div>
			    	</div>
				    <div class="item">
				      	<img src="http://mdbootstrap.com/img/Photos/Slides/img%20(27).jpg" alt="...">
				      	<div class="carousel-caption">
				      		<h3>Caption Text</h3>
				      	</div>
				    </div>
				    <div class="item">
				    	<img src="http://mdbootstrap.com/img/Photos/Slides/img%20(27).jpg" alt="...">
				    	<div class="carousel-caption">
				      		<h3>Caption Text</h3>
				    	</div>
				    </div>
			  	</div>

			  <!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div> <!-- Carousel -->
	</div>

	<div class="container">
		<div class="row" id="than">
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<div class="list-group">
					<button type="button" class="list-group-item">Cras justo odio</button>
					<button type="button" class="list-group-item">Dapibus ac facilisis in</button>
					<button type="button" class="list-group-item">Morbi leo risus</button>
					<button type="button" class="list-group-item">Porta ac consectetur ac</button>
					<button type="button" class="list-group-item">Vestibulum at eros</button>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
				<div class="row">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
						</li>
						<li role="presentation">
							<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
						</li>
					</ul>
				</div>
				<div class="row">
				<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					    <div class="thumbnail">
					        <img src="{{asset('images/min/video1.jpg')}}" alt="...">
					        <div class="caption">
						        <h3>Thumbnail label</h3>
						        <p>video1</p>
						        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      	</div>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					    <div class="thumbnail">
					        <img src="{{asset('images/min/video2.jpg')}}" alt="...">
					        <div class="caption">
						        <h3>Thumbnail label</h3>
						        <p>video2</p>
						        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      	</div>
					   	</div>
					</div>
				    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					    <div class="thumbnail">
					        	<img src="{{asset('images/min/video3.jpg')}}" alt="...">
					        	<div class="caption">
						        <h3>Thumbnail label</h3>
						        <p>video3</p>
						        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      		</div>
					    	</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					    <div class="thumbnail">
					        	<img src="{{asset('images/min/video4.jpg')}}" alt="...">
					        	<div class="caption">
						        <h3>Thumbnail label</h3>
						        <p>video4</p>
						        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      		</div>
					    	</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					    <div class="thumbnail">
					        	<img src="{{asset('images/min/video11.jpg')}}" alt="...">
					        	<div class="caption">
						        <h3>Thumbnail label</h3>
						        <p>video 5</p>
						        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					      		</div>
					    </div>
					</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tab">tab</div>
					</div>
				</div>



				<div class="row">

				</div>
			</div>
		</div>
	</div>
</body>
</html>