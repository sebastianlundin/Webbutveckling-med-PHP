<?php 

	class LoginHandler {
		
		private $session_status = "status";
		
		public function __construct() {
			$_SESSION[$this->session_status] = "Utloggad";
		}
		
		//Kontrollerar om användaren är inloggad
		public function IsLoggedIn () {
			if (isset($_SESSION[$this->session_status]) && $_SESSION[$this->session_status] == "Inloggad"){
				return true;
			} else
				return false;	
		}
		
		//Kontrollerar vilken användare som loggat in
		public function Dologin ($usrname, $pwd) {
			switch ($usrname)
			{
			case "Tage":
				if ($pwd == "Banan") {
					$usrname . "loggades in.";
					$_SESSION[$this->session_status]="Inloggad";
					return true;	
				}
				break;
			
			case "Greger":
				if ($pwd == "Apelsin") {
					$usrname . "loggades in.";
					$_SESSION[$this->session_status]="Inloggad";
					return true;	
				}
				break;
				
			case "Mange":
				if ($pwd == "Äpple" ) {
					$usrname . "loggades in.";
					$_SESSION[$this->session_status]="Inloggad";
					return true;	
				}
				break;
			default:
					return false;
			}
		}
		
		//Loggar ut användaren
		public function DoLogout () {
			unset($_SESSION[$this->session_status]);
			return true;
		}
		
		//En funktion för att test av funktionerna i LoginHandler.php
		public function Test() {
		
			//Säkerställer att man är utloggad
			$this->DoLogout();
			if($this->IsLoggedIn() == true) {
				echo "<br>Det fungerade inte att logga ut.</br>";
				return false;
			}
				
			//Testar att logga in med felaktiga uppgifter
			if ($this->DoLogin("fel","fel") == true) {
				echo "<br>Du matade in felaktiga uppgifter.</br>";
				return false;
			}
		
			if($this->IsLoggedIn() == true) {
				echo "<br>Det gick att logga in med felaktiga uppgifter.</br>";
				return false;
			}
				
			//Testar att logga in med korrekta uppgifter
			if ($this->Dologin("Tage", "Banan") == false) {
				echo "<br>Du matade in korrekta uppgifter men de tolkades som felaktiga.</br>";
				return false;
			}
				
			if ($this->IsLoggedIn() == false) {
				echo "<br>Det fungerade inte att logga in även fast du angav korrekta uppgifter.</br>";
				return false;
			}
				
			//Testar att logga ut
			$this->DoLogout();
			if ($this->IsLoggedIn() == true) {
				echo "<br>Det fungerade inte att logga ut.</br>";
				return false;
			}
				
			//Testar att logga in med korrekt användarnamn och fel lösenord
			if ($this->DoLogin("Tage","fel") == true) {
				echo "<br>Du matade in felaktigt l�senord</br>";
				return false;
			}
				
			if($this->IsLoggedIn() == true) {
				echo "<br>Det gick att logga in med felaktiga uppgifter.</br>";
				return false;
			}
				
			return true;
		}
	}
	
?>
