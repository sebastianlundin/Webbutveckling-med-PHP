<?php

	require_once "/Model/LoginHandler.php";
	require_once "/View/LoginView.php";
	
	$title = "Tester - Laboration 2";
	
	$lh = new LoginHandler();
	$lv = new LoginView();
	
	$xhtml = "<h1>Enhetstester</h1>";
	
	$xhtml .= "<h2>LoginHandler</h2>";
	
	if ($lh->Test()) {
		$xhtml .= "<p>LoginHandler test lyckades!</p>";
	} else {
		$xhtml .= "<p>LoginHandler test misslyckades!</p>";
	}
	
	$xhtml .= "<h2>LoginView</h2>";
	
	if ($lv->Test()) {
		$xhtml .= "<p>LoginView test lyckades!</p>";
	} else {
		$xhtml .= "<p>LoginView test misslyckades!</p>";
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<title>
    	<?php 
    		echo $title;
    	?>
    </title>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  </head>
  <body>
	<?php
		echo $xhtml;	
	?>
  </body>
</html>
