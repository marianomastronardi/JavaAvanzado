<?php
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . basename($_FILES['file_upload']['name']);

    echo '<pre>';
    
    if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }

    echo 'Here is some more debugging info:';
    print_r($_FILES);

    print "</pre>";
?>