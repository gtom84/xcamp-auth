<?php session_start(); ?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-2">
				<button id="btn-auth" class="btn btn-primary col-md-6">AUTH</button>
		</div>
		<div class="row justify-content-center mt-2">
				<div class="p-3 mb-2 bg-primary text-white col-md-6" id="result"><?php if($_SESSION['auth']){ echo "LOGIN OK!";} else { echo "Přístup zamítnut!";}?></div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	
    <script type = "text/javascript" language = "javascript">
       $(document).ready(function() {
	      $("#btn-auth").click(function(){
   		    var token = localStorage.getItem("Authorization");
		      var device = localStorage.getItem("Device");
   	  	$.ajax({
   	  	  type: "POST",
   	  	  url: 'https://grygier.cz/auth-test/auth-test.php',
   	  	  data: {"token":token,"device":device},
		      success: function(data){
			      $("#result").html(data);
		      }
   		  });
	     });
      });
    </script>
</body>
</html>
