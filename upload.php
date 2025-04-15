<?php
if(isset($_FILES['file'])) {
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $file);
    echo "File uploaded to /uploads/$file";
}
?>
