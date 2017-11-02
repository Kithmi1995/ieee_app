 <!DOCTYPE html>
  <html>
    <head>
    	<!-- Materialize CSS -->
    	<!-- <link rel="stylesheet" type="text/css" href="./assests/css/materialize.css"> -->
    	<!-- Login CSS -->
    	<link rel="stylesheet" type="text/css" href="./assests/css/login.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
		<div id="login_wrapper" class="wrapper hidden" style="">
			<div class="container" style="padding-top: 20vh;">
				<h1>Register Now</h1>
				<h3>IEEE Career Fair '17</h3>
				<form>
					<select id="select_reg_option" class="select_option">
					<option class="option_select" selected="selected">Select Your Role</option>
					<option class="option_select">Register as candicate</option>
					<option class="option_select">Register as company</option>
				</select>
				</form>
				<form id="candidate_reg" class="form register" action="index.php">
					<h3 style="margin-bottom: 10px;">Register as Candidate</h3>
					<input type="text" name="fname" placeholder="Your First Name" id="fname" required="required">
					<input type="text" name="mname" placeholder="Your Middle Name" id="mname" required="required">
					<input type="text" name="lname" placeholder="Your Last Name" id="lname" required="required">
					<input type="number" name="ieeeNo" placeholder="Your IEEE Number" id="ieeeNo" required="required">
					<input type="text" name="email" placeholder="Your IEEE Email" id="email" required="required" class="span_input" style="display: inline;"><span style="padding: 8px 10px 10px 10px;">@ieee.org</span>
					<input type="text" class="datepicker" name="dob" placeholder="Date of Birth" id="dob" onfocus="(this.type='date')" required="required">
					<input type="text" name="username" placeholder="Username" id="username"required="required">
					<input type="password" name="password" placeholder="Password" id="password" required="required">
					<input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required="required">
					<span type="text" id='message' style="display: block; width: 300px;"></span>
					<button type="submit" id="register-button" style="width: 300px;">Register</button>
					<p style="margin-top: 10px;">Not registered? <a href="" style="color: white;">Register</a> Now!</p>
				</form>

				<form id="company_reg" class="form register" action="index.php">
					<h3 style="margin-bottom: 10px;">Register as Company</h3>
					<input type="text" name="cname" placeholder="Your Company Name" id="cname" required="required">
					<!-- <input type="text" name="mname" placeholder="Your Middle Name" id="mname" required="required">
					<input type="text" name="lname" placeholder="Your Last Name" id="lname" required="required"> -->
					<!-- <input type="text" name="email" placeholder="Your IEEE Email" id="email" required="required" class="span_input" style="display: inline;"><span style="padding: 8px 10px 10px 10px;">@ieee.org</span> -->
					<!-- <input type="text" class="datepicker" name="dob" placeholder="Date of Birth" id="dob" onfocus="(this.type='date')" required="required"> -->
					<input type="text" name="username" placeholder="Username" id="username"required="required">
					<input type="password" name="password" placeholder="Password" id="password" required="required">
					<input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required="required">
					<span type="text" id='cmessage' style="display: block; width: 300px;"></span>
					<button type="submit" id="register-button" style="width: 300px;">Register</button>
					<p style="margin-top: 10px;">Not registered? <a href="" style="color: white;">Register</a> Now!</p>
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
		<!-- <script type="text/javascript" src="./assests/js/login.js"></script> -->\
		<script type="text/javascript">
			$( document ).ready(function() {
				$('#candidate_reg').hide();
				$('#company_reg').hide();
			    $('#message').hide();
			    $('#cmessage').hide();
			    // $("register-button").hide();
			    $("#register-button").attr("disabled", true);
			});

			// $( "#myselect option:selected" ).text();
			$('select').on('change', function() {
			  if(this.value == 'Register as candicate'){
			  	$("#company_reg").hide();
			  	$("#candidate_reg").fadeIn();
			  	$("#candidate_reg").show();
			  }else if(this.value == 'Register as company'){
			  	$("#candidate_reg").hide();
			  	$("#company_reg").fadeIn();
			  	$("#company_reg").show();
			  }else{
			  	$("#company_reg").hide();
				$("#candidate_reg").hide();
			  }
			});

			$('#cpassword').on('focusout', function () {
			  if ($('#password').val() != $('#cpassword').val()) {
			  	$('#message').show();
			    $('#message').html('Password Not Matching').css('color', 'red');
			  }else{
			  	$("#register-button").attr("disabled", false);
			  }
			});
			$('#email').on('keyup', function(){

			});
		</script>
	</body>
</html>
