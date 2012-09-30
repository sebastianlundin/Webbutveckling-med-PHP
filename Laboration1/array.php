<?php

	/**
	 *  Klass för att hantera med arrayer
	 */
	class ArrayHandler {
		//en funktion som vänder på ordningen på en array
		//tex. array("Kalle", "Nisse", "Olle") skall bli array("Olle", "Nisse", "Kalle");
		public function ReverseArray($array) {
			$result = array();
			$result = array();
			$i = (count($array)-1);
			$resultIndex = 0;
			
			for ($arrayIndex = $i; $arrayIndex >= 0; $arrayIndex--) {
				$result[$resultIndex] = $array[$arrayIndex];
				$resultIndex++;
			}
			
			return $result;
		}
		
		//en funktion som returnerar sista elementet i en array
		public function ReturnLastItem($array) {
			$result = array();
			$result = array();
			$lastElement = $array[(count($array)-1)];
			
			return $lastElement;
		}
		
	
	  //En funktion för test av funktionerna i array.php
	  public function Test() {
	  		
	  	
	  		//En testarray
			$testArray = array(1, 2, 3, 4, 5, 6, 7);
			
			
			//Testa ReverseArray
			$resultArray = $this->ReverseArray($testArray);
			$reversedArray = array(7, 6, 5, 4, 3, 2, 1);
			
			for ($i = 0; $i < 7; $i++) {
				if (isset($resultArray[$i]) == false) {
					echo "ReverseArray test misslyckades: inget index i returnerad array $i </br>";
					return false;
				} else if ($resultArray[$i] != $reversedArray[$i]) {
					echo "ReverseArray test misslyckades: felaktig array returnerades  </br>";
					return false;
				}
			}
			
			
			//Testa ReturnLastItem
			if ($this->ReturnLastItem($testArray) != 7) {
				echo "ReturnLastItem test misslyckades: felaktigt returvärde </br>";
				return false;
			}
			
			return true;   	
	  }
  }
  

