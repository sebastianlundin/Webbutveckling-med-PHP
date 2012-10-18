<?php

	class FileUploadView {
		
		public function DoUploadForm() {
			$xhtml = "<form action=\"\" method='post' enctype='multipart/form-data'>
							<label for='file'>File:</label><input type='file' name='file'><br />
							<input type='submit' name='upload' value=\"Upload\">  
						</form>";
			
			return $xhtml;
		}
		
		public function DoFileList() {
			$dir = "uploads/";
			$filelist = "";
			
			if (is_dir($dir)) {
				if ($opendir = opendir($dir)) {
					while (($file = readdir($opendir)) !== false) {
						$filelist .= "<a href=\"uploads/$file\" target=\"_blank\"> $file </a><br />";
					}
					
					return $filelist;
					closedir($opendir);
				}
			}
		}
		
		public function TriedToUpload() {
			if (isset($_POST["upload"])) {
				return true;
			} else {
				return false;
			}
		}
	}
	
?>