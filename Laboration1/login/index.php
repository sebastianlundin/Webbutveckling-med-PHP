<?php
	require_once "LoginView.php"; 
	
	$title = "title";
	$body = "";
	
	$lw = new LoginView();
	
	$body .= $lw->DoLoginBox();
	$body .=$lw->DoLogoutBox();
	
	if ($lw->TriedToLogin() )
	{
		$body .= "Användaren har klickat på Login med användarnamn ";
		$body .= $lw->GetUserName() . " och lösenord " . $lw->GetPassword();
	}
	else
	{
		$body .= "Användaren har inte klickat på Loginknappen";
	}
	
	if ($lw->TriedToLogout() )
	{
		$body .= "<br />Användaren har klickat på Logoutknappen.";
	}
	else 
	{
		$body .= "<br />Användaren har inte klickat på Logoutknappen.";	
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
  		echo $body;
	?>
  </body>
</html>
