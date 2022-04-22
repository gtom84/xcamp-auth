<?php
	
	$device = $_POST["device"];
	$token = $_POST["token"];
	
	if($device AND $token){
    $devices_str = file_get_contents("devices.json");
    $devices_arr = json_decode($devices_str,true);
	  $devices_arr[$device] = $token;
	  $devices_json = json_encode($devices_arr); 
   	$devices_file = fopen("devices.json", "w") or die("Unable to open file!");
	  fwrite($devices_file, $devices_json);
	  echo ("Přidáno ".$device);
  } else { echo "ERROR";}
  
?>
