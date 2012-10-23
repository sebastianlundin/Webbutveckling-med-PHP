<?php

	class FileUploadHandler {

		public function UploadFile($file) {
			if ($file["error"] > 0) {
				return 0;
			}

			if (file_exists("uploads/" . $file["name"])) {
				return 1;
			}
			
			else {
				move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
				
				return 3;
			}
		}
	}
	
?>