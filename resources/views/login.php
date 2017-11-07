 <!DOCTYPE html>
  <html>
    <head>
    	<!-- Login CSS -->
    	<link rel="stylesheet" type="text/css" href="/assests/css/login.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
		<div id="login_wrapper" class="wrapper hidden" style="">
			<div class="container">
				<h1>Welcome</h1>
				<h3>IEEE Career Fair '17</h3>
				
				<form class="form" method="POST" action="index.php">
					<input type="text" name="username" placeholder="Email" id="username"required="required">
					<input type="password" name="password" placeholder="Password" id="password" required="required">
					<button type="" id="login-button">Login</button>
					<p style="margin-top: 10px;">Not registered? <a href="/register" style="color: white;">Register</a> Now!</p>
				</form>
			</div>
			
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<script type="text/javascript" src="./assests/js/jquery-3.2.1.min.js"></script>
		<!-- <script type="text/javascript" src="./assests/js/login.js"></script> -->
	</body>
</html>
