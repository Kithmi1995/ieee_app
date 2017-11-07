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
        <form id="candidate_reg" class="form register" method="POST" action="/confirm_mail">

            <h3 style="margin-bottom: 10px;">
                Confirm your email
            </h3>

            {{ csrf_field() }}

            <div style="font-weight: bold; color: #0D47A1;">
                A confirmation code was sent to your email ({{ auth()->user()->email }}).
                Please enter it below.
            </div>

            <br>


            <input type="text" name="confirmation_code" placeholder="Enter the Confirmation code" id="confirmation_code">
            <button type="submit" id="register-button" style="width: 300px;">Verify</button>
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
