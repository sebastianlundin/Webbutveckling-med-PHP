<?php

	class FileUploadHandler {

		public function UploadFile() {
			if ($_FILES["file"]["error"] > 0) {
				return 0;
			}

			if (file_exists("uploads/" . $_FILES["file"]["name"])) {
				return 1;
			}
			
			else {
				move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
				
				return 3;
			}
		}
	}
	
?>