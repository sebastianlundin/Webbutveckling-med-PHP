<?php
    
	class LoginView {
	
		public function DoLoginBox() {
			$xhtml = "<fieldset style='width:250px;'>
						<form action=\"\" method='get'>
							<label for='name'>Name:</label><input type='text' name='name'><br />
							<label for='password'>Password:</label><input type='password' name='password'>
							<input type='submit' name='login' value=\"Login\">
							<label for='rembemerme'>Remember me:</label><input type='checkbox' name='remembemerme' value=\"yes\" checked='checked' />  
						</form>
					 </fieldset>";
			return $xhtml;
		}
		
		public function DoLogoutBox() {
			$xhtml = "<form action=\"\" method='get'><input type='submit' name='logout' value=\"Logout\"> </form>";
			return $xhtml;
		}
		
		public function GetUserName() {
			if (isset($_GET["name"])) {
				return $_GET["name"];
			} else {
				return NULL;
			}
		}
		
		public function GetPassword() {
			if (isset($_GET["password"])) {
				return $_GET["password"];
			} else {
				return NULL;
			}
		}
		
		public function TriedToLogin() {
			if (isset($_GET["login"])) {
				return true;
			} else {
				return false;
			}
		}
		
		public function TriedToLogout() {
			if (isset($_GET["logout"])) {
				return true;
			} else {
				return false;
			}
		}
		
		public function RememberMechecked() {
			if (isset($_GET["remembemerme"])) {
				return true;
			} else {
				return false;
			}	
		}
		
		public function SetCookies($username, $password) {
			if (isset($username) && isset($password)) {
				setcookie("username", $username, time()+3600);
				setcookie("password", $password, time()+3600);
			}
		}
		
		public function GetCookieUsername() {
			if (isset($_COOKIE["username"])) {
				return $_COOKIE["username"];
			} else {
				return NULL;
			}	
		}
		
		public function GetCookiePassword() {
			if (isset($_COOKIE["password"])) {
				return $_COOKIE["password"];
			} else {
				return NULL;
			}
		}
		
		public function Test() {
			$this->SetCookies("användare", "lösenord");

			if (!isset($_COOKIE["username"]) && !isset($_COOKIE["password"])) {
				echo "Det fungerade inte att sätta cookies!";
				return false;
			}
			
			return true;
		}
	}
	
?>
