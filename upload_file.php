<form  method="post" enctype="multipart/form-data">
    <input type="file" name="file" require> 
    <input type="submit" value="Upload">
</form>

<?php

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_destination = '../uploads/' . $file_name;
}
    if (move_uploaded_file($file_tmp, $file_destination)) {
        echo "Upload File สำเร็จ";
    } else {
        echo "การอัพโหลดไฟล์ล้มเหลว";
    }
    

?>