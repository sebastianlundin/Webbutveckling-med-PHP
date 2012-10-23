<?php

	require_once (__DIR__ . "/../View/LoginView.php");
	
	class LoginController {
		
		public function DoControll($lh)
		{
			$lh = new LoginHandler();
			$lv = new LoginView();
			
			$xhtml = "<h2>Login Controller</h2>";
						
			if ($lh->IsLoggedIn()) {
				if ($lv->TriedToLogout()) {
					$lv->DeleteCookies();
					$lh->DoLogout();
					$xhtml .= "Du är utloggad.";
				}
			} else {
				if ($lv->GetCookieUsername() != NULL && $lv->GetCookiePassword() != NULL) {
					$lh->Dologin($lv->GetCookieUsername(), ($lv->GetCookiePassword()));
				}
				
				if ($lv->TriedToLogin()) {					
					if ($lh->Dologin($lv->GetUserName(), $lv->GetPassword())) {
						$xhtml .= "Du är inloggad.";
						if ($lv->RememberMeChecked()) {
							$lv->SetCookies($lv->GetUserName(), $lv->GetPassword());
						}
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