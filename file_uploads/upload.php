<?php
if (isset($_POST["submit"])) {
  $targetDirectory = "uploads/"; // Directory where the file will be stored
  $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Path of the target file

  // Check if the file is a valid upload
  $uploadOk = 1;
  $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // Check if file already exists
  if (file_exists($targetFile)) {
    echo "File already exists.";
    $uploadOk = 0;
  }

  // If no errors occurred, try to upload the file
  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
      echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
      echo "Error uploading the file.";
    }
  }
}
?>
