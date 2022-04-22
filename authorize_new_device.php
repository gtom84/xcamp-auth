<!doctype html>
<html lang="cs">
<head>
<title></title>
<meta name="robots" content="index,follow">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">	
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-2">
			<div class="col-md-6">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">PC</span>
				  </div>
				  <input id="device-name" type="text" class="form-control" placeholder="Název zařízení" aria-label="Název zařízení" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-2">
			<button id="btn-auth-new" class="btn btn-primary col-md-3">Autorizuj nové zařízení</button>
		</div>
		<div class="row justify-content-center mt-2">
			<div id="result" class="text-success col-md-6" role="alert"></div>
		</div>
	</div>
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.md5@1.0.2/index.min.js"></script>
	
    <script type = "text/javascript" language = "javascript">
       $(document).ready(function() {
		   $("#btn-auth-new").click(function(){
   			   
			   var device = $("#device-name").val();
			   var token = $.md5('value');
			   localStorage.setItem("Authorization",token);
			   localStorage.setItem("Device",device);
	      		$.ajax({
	      		  type: "POST",
	      		  url: 'https://grygier.cz/auth-test/auth-new-device.php',
	      		  data: {"token":token, "device":device},
	   		 	  success: function(data){
	   			  	$("#result").html(data);
	   		  	  }
	      		});
		   });
       });
    </script>
</body>
</html>
