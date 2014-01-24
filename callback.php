<?php
/*This is the serverside programing for
the JSON object sent from index.html*/
	if(isset($_POST['name'])  && isset($_POST['comment'])) {				  // check if there is data in $_POST
	$_POST = array_map("strip_tags", $_POST);								  // removes posible tags from POST
	$name = $_POST['name'];												   	  //Get data
	$comment = $_POST['comment'];
	date_default_timezone_set('Europe/London');
	$date_time =  date('d/m/Y h:i:s a', time());
	$return_html =  '<div id="spot"><h1></h1></div>' .  '<h2 id="name_time">  At: ' . $date_time . ' ' 
    . $name . ' updated their comment to:</h2>' . '<p id="clear">' . $comment . '</p>'; //Place data in HTML
															}
	else{
		$return_html = 'Unfortunatly an error has occured!';
		}
		echo $return_html;													   // Return Name and comment
?>