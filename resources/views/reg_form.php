<!DOCTYPE html>
<html>
<head>
	<!-- Materialize CSS -->
	<link rel="stylesheet" type="text/css" href="./assests/css/materialize.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import Material Stepper -->
    <link rel="stylesheet" href="./assests/css/materialize-stepper.css">
    <!-- <link rel="stylesheet" type="text/css" href="./assests/css/login.css"> -->
    <style type="text/css">
        .wrapper {
          background: #50a3a2;
          background: -webkit-linear-gradient(top left, #0097A7 0%, #53e3a6 100%);
          background: linear-gradient(to bottom right, #0097A7 0%, #53e3a6 100%);
          position: absolute;
          /*top: 50%;*/
          left: 0;
          width: 100%;
          min-height: 100vh;
          /*margin-top: -200px;*/
          overflow: hidden;
        }
        .wrapper.form-success .container h1 {
          -webkit-transform: translateY(85px);
                  transform: translateY(85px);
        }

        .container {
          /*max-width: 600px;*/
          margin: 0 auto;
          padding: 10vh 0;
          min-height: 100vh;
          text-align: center;
        }

        .bg-bubbles {
          position: absolute;
          top: 0;
          left: 0;
          width: 100vw;
          height: 100%;
          z-index: 1;
        }
        .bg-bubbles li {
          position: absolute;
          list-style: none;
          display: block;
          width: 40px;
          height: 40px;
          background-color: rgba(255, 255, 255, 0.15);
          bottom: -160px;
          -webkit-animation: square 25s infinite;
          animation: square 25s infinite;
          -webkit-transition-timing-function: linear;
          transition-timing-function: linear;
        }
        .bg-bubbles li:nth-child(1) {
          left: 10%;
        }
        .bg-bubbles li:nth-child(2) {
          left: 20%;
          width: 80px;
          height: 80px;
          -webkit-animation-delay: 2s;
                  animation-delay: 2s;
          -webkit-animation-duration: 17s;
                  animation-duration: 17s;
        }
        .bg-bubbles li:nth-child(3) {
          left: 25%;
          -webkit-animation-delay: 4s;
                  animation-delay: 4s;
        }
        .bg-bubbles li:nth-child(4) {
          left: 40%;
          width: 60px;
          height: 60px;
          -webkit-animation-duration: 22s;
                  animation-duration: 22s;
          background-color: rgba(255, 255, 255, 0.25);
        }
        .bg-bubbles li:nth-child(5) {
          left: 70%;
        }
        .bg-bubbles li:nth-child(6) {
          left: 80%;
          width: 120px;
          height: 120px;
          -webkit-animation-delay: 3s;
                  animation-delay: 3s;
          background-color: rgba(255, 255, 255, 0.2);
        }
        .bg-bubbles li:nth-child(7) {
          left: 32%;
          width: 160px;
          height: 160px;
          -webkit-animation-delay: 7s;
                  animation-delay: 7s;
        }
        .bg-bubbles li:nth-child(8) {
          left: 55%;
          width: 20px;
          height: 20px;
          -webkit-animation-delay: 15s;
                  animation-delay: 15s;
          -webkit-animation-duration: 40s;
                  animation-duration: 40s;
        }
        .bg-bubbles li:nth-child(9) {
          left: 25%;
          width: 10px;
          height: 10px;
          -webkit-animation-delay: 2s;
                  animation-delay: 2s;
          -webkit-animation-duration: 40s;
                  animation-duration: 40s;
          background-color: rgba(255, 255, 255, 0.3);
        }
        .bg-bubbles li:nth-child(10) {
          left: 90%;
          width: 160px;
          height: 160px;
          -webkit-animation-delay: 11s;
                  animation-delay: 11s;
        }
        @-webkit-keyframes square {
          0% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
          }
          100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
                    transform: translateY(-700px) rotate(600deg);
          }
        }
        @keyframes square {
          0% {
            -webkit-transform: translateY(0);
                    transform: translateY(0);
          }
          100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
                    transform: translateY(-700px) rotate(600deg);
          }
        }

        @media only screen and (min-width: 993px) {
          .careerRadio{
                border-width: 2px !important; 
                border-color: #272727 !important; 
                border-style: solid !important; 
                border-radius: 5px !important; 
                padding: 10px !important; 
                margin-left: 6% !important;
            }
        }

        @media only screen and (max-width: 993px){
            .careerRadio{
                border-width: 2px !important; 
                border-color: #272727 !important; 
                border-style: solid !important; 
                border-radius: 5px !important; 
                padding: 10px !important; 
                /*margin-left: 6%;*/
            }
        }
    </style>
</head>
<body>
    <div class=" wrapper">
        <div class="container" style="">
        <ul class="stepper linear horizontal" style="background-color: white; border-radius: 25px; box-shadow: 2px 2px 10px #272727; z-index: 2; min-height: 548px;">
           <li class="step active">
              <div class="step-title waves-effect">You</div>
              <div class="step-content">
                 <div class="row">
                    <h5>You</h5>
                    <div class="input-field col s12 m4">
                       <input id="fname" name="fname" type="text" class="validate" value="XXXX" readonly="readonly">
                       <label for="fname">First Name</label>
                    </div>
                    <div class="input-field col s12 m4">
                       <input id="mname" name="mname" type="text" class="validate" value="XXXX" readonly="readonly">
                       <label for="mname">Middle Name</label>
                    </div>
                    <div class="input-field col s12 m4">
                       <input id="lname" name="lname" type="text" class="validate" value="XXXX" readonly="readonly">
                       <label for="lname">Last Name</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="email" name="email" type="email" class="validate" value="XXXX@ieee.org" readonly="readonly">
                       <label for="email">Your e-mail</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="ieeeNumber" name="ieeeNumber" type="number" class="validate" required="required">
                       <label for="ieeeNumber">Your IEEE Membership Number</label>
                    </div>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div id="step2" class="step-title waves-effect">Security</div>
              <div class="step-content">
                 <div class="row">
                    <h5>Security Details</h5>
                    <div class="input-field col s12">
                       <input id="password" name="password" type="password" class="validate" required>
                       <label for="password">Enter Password</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="cpassword" name="cpassword" type="password" class="validate" required>
                       <label for="cpassword">Enter Password to Confirm</label>
                    </div>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                    <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div class="step-title waves-effect">Contact Details</div>
              <div class="step-content">
                 <div class="row">
                    <h5>Contact Details</h5>
                    <div class="input-field col s12">
                       <input id="address1" name="address1" type="text" class="validate" required="required">
                       <label for="fname">Street Adress</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="city" name="city" type="text" class="validate" required="required">
                       <label for="city">City</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="province" name="province" type="text" class="validate" required="required">
                       <label for="province">Province</label>
                    </div>
                    </br>
                    <!-- <hr> -->
                    <!-- </br> -->
                    <div class="input-field col s12">
                       <input id="phonenumber" name="phonenumber" type="number" class="validate"">
                       <label for="phonenumber">Contact Number</label>
                    </div>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div class="step-title waves-effect">Education</div>
              <div class="step-content">
                 <div class="row">
                    <h5>Education</h5>
                    <div class="input-field col s12">
                       <input id="uni" name="uni" type="text" class="validate" required="required">
                       <label for="uni">University / Institute</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="res_uni" name="res_uni" type="text" class="validate">
                       <label for="res_uni">Respective Local Campus (If any...)</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="fos" name="fos" type="text" class="validate" required="required">
                       <label for="fos">Field of Study</label>
                    </div>
                    <div class="input-field col s12">
                       <input id="dog" name="dog" type="text" class="datepicker validate"">
                       <label for="dog">Date of Graduation</label>
                    </div>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div class="step-title waves-effect">Career Interest</div>
              <div class="step-content">
                 <div class="row">
                    <h5>Carrer Interest</h5>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="electrical" name="electrical" />
                      <label for="electrical">Electrical</label>
                    </p>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="telecommunication" name="telecommunication" />
                      <label for="telecommunication">Telecommunication</label>
                    </p>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="softwareandit" name="softwareandit" />
                      <label for="softwareandit">Software & IT</label>
                    </p>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="electronicandautomation" name="electronicandautomation" />
                      <label for="electronicandautomation">Electronic  & Automation</label>
                    </p>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="mechanical" name="mechanical" />
                      <label for="mechanical">Mechanical</label>
                    </p>
                    <p class="col s12 m5 careerRadio">
                      <input name="group1" type="radio" id="other" name="other" />
                      <label for="other">Other</label>
                    </p>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div class="step-title waves-effect">About you</div>
              <div class="step-content">
                 <div class="row">
                    <h5>About You</h5>
                    <div class="input-field col s12">
                      <textarea id="pstatement" class="materialize-textarea"></textarea>
                      <label for="pstatement">Personal Statement</label>
                    </div>
                    </br>
                    <div class="col s12 m6">
                        <h5>Upload Your CV</h4>
                    </div>
                    <div class="file-field input-field col s12 m6">
                      <div class="btn">
                        <span>File</span>
                        <input type="file" id="cv" name="cv">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                 </div>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                 </div>
              </div>
           </li>
           <li class="step">
              <div class="step-title waves-effect">Done</div>
              <div class="step-content">
                <p style="text-align: center">
                 <h4>Whoahh! Registration Completed....</h3></br>
                 <h5>Go and <a href="login.php">Login</a> to your account now!!</h4>
                    <img src="./assests/images/completed.png" width="200px;">
                </p>
                 <div class="step-actions">
                    <button class="waves-effect waves-dark btn" type="submit">SUBMIT</button>
                 </div>
              </div>
           </li>
        </ul>
    </div>
</div>

            <!-- <ul class="bg-bubbles" style="z-index: 1">
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
            </ul> -->



    <!-- JQuery -->
    <script type="text/javascript" src="./assests/js/jquery-3.2.1.min.js"></script>
    <!-- Materialize JS -->
    <script type="text/javascript" src="./assests/js/materialize.js"></script>
    <!-- jQueryValidation Plugin (optional) -->
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <!-- Stepper JS -->
    <script type="text/javascript" src="./assests/js/materialize-stepper.js"></script>
    <script type="text/javascript">
        $(function(){
           $('.stepper').activateStepper();
        });

         $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
          });
    </script>
</body>
</html>