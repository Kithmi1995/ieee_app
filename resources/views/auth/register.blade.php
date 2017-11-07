<!DOCTYPE html>
<html>
<head>
    <!-- Materialize CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="./assests/css/materialize.css"> -->
    <!-- Login CSS -->
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
        input::-webkit-input-placeholder {
            color: mediumblue;
            font-weight: bold;
        }

        input::-moz-placeholder {
            color: mediumblue;
            font-weight: bold;
        }

        input:-ms-input-placeholder {
            color: mediumblue;
            font-weight: bold;
        }

        input:-o-input-placeholder {
            color: mediumblue;
            font-weight: bold;
        }

    </style>

</head>
<body>
<div id="login_wrapper" class="wrapper hidden" style="">
    <div class="container" style="padding-top: 20vh;">
        <h1>Register Now</h1>
        <h2>IEEE Career Fair '17</h2>
    <!-- 	<form class="form" id="candidate_reg" method="POST" action="index.php">
					<input type="text" name="Fname" id="Fname" placeholder="Your First Name">
					<input type="text" name="Mname" id="Mname" placeholder="Your Middle Name">
					<input type="text" name="Lname" id="Lname" placeholder="Your Last Name">
					<input type="text" name="email" placeholder="Your IEEE Email" id="email" required="required" class="span_input" style="display: inline;"><span style="padding: 8px 10px 10px 10px;">@ieee.org</span>
				</form> -->

        @if(count($errors->all()))
            <ul class="danger">
            @foreach($errors->all() as $error)
                <li style="color: red;">
                    <strong>
                        {{ $error }}
                    </strong>
                </li>
            @endforeach
            </ul>
        @endif
        <form id="candidate_reg" class="form register" method="POST" action="{{ route('register') }}">


            <h2 style="margin-bottom: 10px;">Register {{ (isset($type) && $type == 1)?'As a Company':'As a Candidate' }}</h2>


            @if(isset($type) && $type == 1)
                <a href="{{ route('employee.create') }}">
                    Register as a Candidate
                </a>
            @else
                <a href="{{ route('company.create') }}">
                    Register as a Company
                </a>
            @endif
            <br>
            <br>

            {{ csrf_field() }}
            <input type="hidden" name="type" value="{{ (isset($type))?$type:2 }}">

            <input type="text" name="first_name" placeholder="Your First Name" id="first_name" required="required">
            <input type="text" name="middle_name" placeholder="Your Middle Name" id="middle_name">
            <input type="text" name="last_name" placeholder="Your Last Name" id="last_name" required="required">

            @if(isset($type) && $type == 1)
                <input type="text" name="company_name" placeholder="Enter the company name" id="company_name">
                <input type="email" name="company_email" placeholder="Enter the company email" id="company_email">
                <input type="text" name="company_phone" placeholder="Enter the company phone" id="company_phone">

                <input type="text" name="email" placeholder="Your Email address" id="email" required="required">

            @else

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <input type="text" name="email" placeholder="Your IEEE Email" id="email" required="required" class="span_input" style="display: inline;"><span style="padding: 8px 10px 10px 10px; color: mediumblue; font-weight: bold;">@ieee.org</span>

            @endif


            <input type="text" name="phone" placeholder="Enter your contact number" id="phone" required="required">

            <input type="date" name="dob" placeholder="Your Date of Birth" id="dob" required="required">

            <input type="password" name="password" placeholder="Pick a password" id="password" required="required">
            <input type="password" name="password_confirmation" placeholder="Re-enter your password" id="password_confirmation" required="required">


        <!-- <div style="width: 250px; text-align: center;">
						<p style="text-align: center">In order to be registered with the IEEE Career Fair'17 you should be a IEEE member and must have a IEEE Mail. Provide the followig details with your IEEE mail (exclude the <i>@ieee.org</i> part and wait for confirmation mail to continue.</p>
					</div> -->
            <button type="submit" id="register-button" style="width: 300px;">Register</button>
            <p style="margin-top: 10px;">Already registered? <a href="/login " style="color: white;">Login</a> Here!</p>
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
<script type="text/javascript" src="/assests/js/jquery-3.2.1.min.js"></script>
<!-- <script type="text/javascript" src="./assests/js/login.js"></script> -->\
<!-- <script type="text/javascript">
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
</script> -->
</body>
</html>
