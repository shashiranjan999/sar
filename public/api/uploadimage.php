<?php
// Profile
if (! empty($_FILES)) {
    $imagePath = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : "Undefined";
    $targetPath = "../assets/uploads/";
    $imagePath = $targetPath . $imagePath;
    $tempFile = $_FILES['file']['tmp_name'];
    
    $targetFile = $targetPath . $_FILES['file']['name'];
    
    if (move_uploaded_file($tempFile, $targetFile)) {
        echo "true";
    } else {
        echo "false";
    }
}

?>