<!DOCTYPE html>
<html>
<head>
<title>leave management system</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />

<style type="text/css">
* {
	margin: 0;
	padding: 0;
	font-family: 'Helvetica Neue', arial, sans-serif;
}
.header {
	position: fixed;
	width: 100%;
	background: #222;
	z-index: 10;
}
.header .navbar-brand {
	font-weight: 900;
}
.header .navbar {
	margin: 0;
	border: none;
}



@media (min-width: 768px) {
	.header .navbar-brand {
		padding-left: 0;
	}
	.navbar-nav {
		float: right;
	}
}

</style>
</head>

<body>
<div class="header">
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
	            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand scroll-top">CCL</a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
		            <li><a href="#" class="scroll-link">Login</a></li>
					<li><a href="seventh.php" class="scroll-link">Sign Up</a></li>
					<li><a href="admin.php" class="scroll-link">Admin</a></li>
	            </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</div>
<!--/.header-->
<div class="body">
		<div class="content">
			<div id="section">
				<br><br><br>
				<center><h2>Fill the following details to login in</h2></center>
				<form action="fifth.php" method="post">
					
					<br><center><strong>User Id:&nbsp&nbsp&nbsp&nbsp</strong>
					<input type="text" name="u" id="u"><br><br></center>
					<br><center><strong>Password:&nbsp</strong>
					<input type="password" name="p" id="p"><br><br></center>
					<a href="seventh.php"><br><br><center>havent registered yet.. click here!</center></a>
					<br>
					<center><input type="submit" name="submit" id="send" value="submit"></center>
				</form>
			
			</div>
		</div>
	</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	// navigation click actions	
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.scroll-top').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});
});
// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
</script>
</body>
</html>