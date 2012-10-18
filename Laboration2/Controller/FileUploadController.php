<?php

	require_once (__DIR__ . "/../Model/FileUploadHandler.php");
	require_once (__DIR__ . "/../Model/LoginHandler.php");
	require_once (__DIR__ . "/../View/FileUploadView.php");

	class FileUploadController {
		
		public function DoControll()
		{
			$fh = new FileUploadHandler();
			$fv = new FileUploadView();
			$lh = new LoginHandler();
				
			$xhtml = "";
				
			if ($lh->IsLoggedIn()) {
				if ($fv->TriedToUpload()) {
					$result = $fh->UploadFile();
					
					if($result == 0) {
						$xhtml .= "<br />Ett fel uppstod vid uppladdning av filen.";
					} else if ($result == 1) {
						$xhtml .= "<br />Filen finns redan.";
					} else {
						$xhtml .= "<br />Uppladdningen lyckades!";
					}
				}
				
				$xhtml .= $fv->DoUploadForm();
				$xhtml .= "<h2>Uppladdade filer:</h2>";
				$xhtml .= $fv->DoFileList();
			} else {
				$xhtml .= "<h2>Uppladdade filer:</h2>";
				$xhtml .= $fv->DoFileList();
			}
				
			return $xhtml;
		}
	}

?>