var uname = 0;
var upass = 0;
$( document ).ready(function() {
    $('#login_wrapper').fadeIn(1000).removeClass('hidden');
    var username = $("username").val();
    var password = $("password").val();
    console.log("username = "+username);
    console.log("password = "+password);
    if(username == undefined && password == undefined){
    	var login_btn = $("#login-button").hide();
    }else{
    	console.log("Something");
    }
});

$("#username").on('input',function(e){
    uname = 1;
    console.log("uname changed");
    if(username == undefined && password == undefined){
    	//do nothing
    }else{
    	var login_btn = $("#login-button").show();
    }
});

$("#password").on('input',function(e){
    upass = 1;
    console.log("upass changed");
    console.log(uname);
    console.log(upass);
    if(username == undefined && password == undefined){
    	//do nothing
    }else{
    	var login_btn = $("#login-button").show();
    }
});

 $("#login-button").submit(function(event){
 	event.preventDefault();

 	$('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
	

	 // function submit_form(){
  //     $("#login-button").submit()
  //  };

  //  window.setTimeout( submit_form, 5000 );



});