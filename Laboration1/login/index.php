<?php
	require_once "LoginView.php"; 
	
	$title = "Laboration 1";
	$xhtml = "";
	
	$lw = new LoginView();
	
	$xhtml .= $lw->DoLoginBox();
	$xhtml .= $lw->DoLogoutBox();
	
	//Manuellt test av LoginView
	if ($lw->TriedToLogin() ) {
		$xhtml .= "Användaren har klickat på Login med användarnamn ";
		$xhtml .= $lw->GetUserName() . " och lösenord " . $lw->GetPassword();
	} else {
		$xhtml .= "Användaren har inte klickat på Loginknappen";
	}
	
	if ($lw->TriedToLogout() ) {
		$xhtml .= "<br />Användaren har klickat på Logoutknappen.";
	} else {
		$xhtml .= "<br />Användaren har inte klickat på Logoutknappen.";	
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
