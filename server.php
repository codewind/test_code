<?php

	function GetIP(){
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
			$cip = $_SERVER['HTTP_CLIENT_IP'];
		else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
			$cip = $_SERVER['HTTP_X_FORWAREDED_FOR'];
		else if(!empty($_SERVER['REMOTE_ADDR']))
			$cip = $_SERVER['REMOTE_ADDR'];
		else
			$cip = 'can not';
		
		return $cip;
	}
	
	echo "<br>IP:".GetIP()."<br>";
	echo "<br>IP referer:".$_SERVER["HTTP_REFERER"];
