<?php
// 	require('config/config.php');
// require('config/database.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$msg =  $_POST['msg'];
		$fname =  $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		// echo $msg;
		//wp insert operation
	
		global $wpdb;
		$sql=$wpdb->insert("customer_message",array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"message"=>$msg));

		// $results = $GLOBALS['wpdb']->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT );
		// if ($sql) {
		// 	# code...
		// 	echo "<script>alert('success');</script>";
		// } else {
		// 	# code...
		// 	echo "<script>alert('failed');</script>";
		// }
		

		}
?>
