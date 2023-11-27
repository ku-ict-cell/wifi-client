<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Member Login Form</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1 style="font-family:times;">Khulna University<br/> Central Library <br/> Login System Integrated With KU Accounts</h1>

	<div class="container w3layouts agileits">

		<div class="login w3layouts agileits">
			<h2>Sign In</h2>
			<form action="{{route('login')}}" method="post">
                @csrf
				<input type="text" name="username" placeholder="Username" required="">
				<input type="password" name="password" placeholder="Password" required="">

			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
					<input type="submit" value="Sign In">
			</div>
            </form>
			<a href="#">Forgot Password?</a>

			<div class="clear"></div>
		</div>

		<div class="register w3layouts agileits">
			<div class="social-icons w3layouts agileits" style="margin-top:40%;">
				<p>- Or Sign In With -</p>
				<ul>
					{{-- <li><a href="#"><span class="icons w3layouts agileits"></span><span class="text w3layouts agileits">Facebook</span></a></li> --}}
					<li class="twt w3ls"><a href="{{route('get.token')}}"><span class="icons w3layouts"></span><span class="text w3layouts agileits">Khulna University Accounts</span></a></li>
					{{-- <li class="ggp aits"><a href=""><span class="icons agileits"></span><span class="text w3layouts agileits">Google+</span></a></li> --}}
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
                    <div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; {{date('Y')}} Library Patron Login Form. All Rights Reserved | Developed by <a href="https://ku.ac.bd" target="_blank">Khulna University ICT CELL</a></p>
	</div>

</body>
<!-- //Body -->

</html>
