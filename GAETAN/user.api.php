<<?php 
	seesion_start();	




	function user_is_logged_in(){
		if (isset($_SESSIN['user'])){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

 ?>