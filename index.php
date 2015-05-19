<?php require_once 'function.php';?>
<!DOCTYPE html>
<head>
	<title>HW4</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container text-center">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span><span
								class="icon-bar"></span><span class="icon-bar"></span><span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Brand</a>
					</div>
					<div class="collapse navbar-collapse"
						id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a id="resumeBtn" href="#">resume</a></li>
						</ul>
					</div>
				</nav>
				<div class="jumbotron">
					<h1>Hello, world!</h1>
					<p><?php
					echo "<br />";
					echo 'Now it is ' . now ();
					?>
				
				
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-4 column">
				<h2>площадь</h2>
				<p>
				<?php
				echo "<br />";
				echo showArea ();
				?>
				</p>
			</div>
			<div class="col-md-4 column">
				<h2>площадь</h2>
				<p>
				<?php
				echo "<br />";
				echo showArea ();
				?>
				</p>
			</div>
			<div class="col-md-4 column">
				<h2>площадь</h2>
				<p>
				<?php
				echo "<br />";
				echo showArea ();
				?>
				</p>
			</div>
		</div>
		<div class="row clearfix">
			<div id="resume"></div>
		</div>
	</div>
	<div class="container">
		<div class="clearfix row">
			<div class="navbar-fixed-bottom text-center">
				<p class="text-muted">Copyright © Evgeniy Zarechenskiy <?php echo date("Y")?></p>
			</div>
		</div>
	</div>
	<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		$( document ).ready(function() {
			$('#resumeBtn').click(function(){
				$("#resume").load("resume.php");
			});
		});
	</script>

</body>
</html>