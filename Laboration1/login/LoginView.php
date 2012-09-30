<?php
    
	class LoginView {
	
		public function DoLoginBox() {
			$xhtml = "<fieldset style='width:250px;'>
						<form action=\"\" method='get'>
							<label for='name'>Name:</label><input type='text' name='name'><br />
							<label for='password'>Password:</label><input type='text' name='password'>
							<input type='submit' name='login' value=\"Login\">
							<label for='rembemerme'>Remember me:</label><input type='checkbox' name='rembemerme' value=\"yes\" checked='checked' />  
						</form>
					 </fieldset>";
			return $xhtml;
		}
		
		public function DoLogoutBox() {
			$xhtml = "<form action=\"\" method='get'><input type='submit' name='logout' value=\"Logout\"> </form>";
			return $xhtml;
		}
		
		public function GetUserName() {
			if ($_GET["name"] == NULL) {
				return NULL;
			}
			else {
				return $_GET["name"];
			}
		}
		
		public function GetPassword() {
			if ($_GET["password"] == NULL) {
				return NULL;
			}
			else {
				return $_GET["password"];
			}
		}
		
		public function TriedToLogin() {
			if (isset($_GET["login"])) {
				return true;
			}
			else {
				return false;
			}
		}
		
		public function TriedToLogout() {
			if (isset($_GET["logout"])) {
				return true;
			}
			else {
				return false;
			}
		}
	}
?>
