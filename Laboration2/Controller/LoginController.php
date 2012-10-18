<?php

	require_once (__DIR__ . "/../Model/LoginHandler.php");
	require_once (__DIR__ . "/../View/LoginView.php");
	
	class LoginController {
		
		public function DoControll()
		{
			$lh = new LoginHandler();
			$lv = new LoginView();
			
			$xhtml = "<h2>Login Controller</h2>";
			
			if ($lv->GetCookieUsername() != NULL && $lv->GetCookiePassword() != NULL) {
				$lh->Dologin($lv->GetCookieUsername(), ($lv->GetCookiePassword()));
			}
			
			if ($lh->IsLoggedIn()) {
				if ($lv->TriedToLogout()) {
					$lh->DoLogout();
					$xhtml .= "Du är utloggad.";
				}
			} else {
				if ($lv->TriedToLogin()) {
					if ($lv->RememberMeChecked()) {
						$lv->SetCookies($lv->GetUserName(), $lv->GetPassword());	
					}
					
					if ($lh->Dologin($lv->GetUserName(), $lv->GetPassword())) {
						$xhtml .= "Du är inloggad.";
					} else {
						$xhtml .= "Fel användarnamn eller lösenord.";
					}
				}
			}
			
			if ($lh->IsLoggedIn()) {
				$xhtml .= $lv->DoLogoutBox();
			} else {
				$xhtml .= $lv->DoLoginBox();
			}
			
			return $xhtml;
		}
	}

?>