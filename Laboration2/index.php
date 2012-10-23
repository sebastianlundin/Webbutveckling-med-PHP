<?php
	
	session_start();

	require_once "/Controller/LoginController.php";
	require_once "/Controller/FileUploadController.php";
	require_once "/Model/LoginHandler.php";
	
	$title = "Laboration 2";
	$xhtml = "";
	
	$lc = new LoginController();
	$lh = new LoginHandler();
	$fc = new FileUploadController;
	
	$xhtml = $lc->DoControll($lh);
	
	//Manuellt test av LoginHandler
	if ($lh->IsLoggedIn()) {
		$xhtml .= "Inloggad";
	} else {
		$xhtml .= "Utloggad";
	}
	
	$xhtml .= $fc->DoControll($lh);
	
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
