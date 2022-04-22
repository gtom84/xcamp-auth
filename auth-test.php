<?php
	
	session_start();
	$device = $_POST["device"];
	$token = $_POST["token"];
	
    $devices_str = file_get_contents("devices.json");
    $devices_arr = json_decode($devices_str,true);
	
	if(array_key_exists($device, $devices_arr)){
		if($devices_arr[$device] == $token){
			$_SESSION['auth'] = true;
			echo "LOGIN OK!";
		} else { echo "Neplatná autentikace!"; } 
	} else {
		echo "Neznáme zařízení!";
	}
?>
