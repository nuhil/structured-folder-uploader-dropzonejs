/**
* Comment
*/
<?php
    $ds = DIRECTORY_SEPARATOR;
    $storeFolder = 'uploads/';
     
    if (!empty($_FILES)) {
         
        $tempFile = $_FILES['file']['tmp_name'];
          
        $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;
        
        $fullPath = $storeFolder.rtrim($_POST['path'], "/.");
        $folder = substr($fullPath, 0, strrpos($fullPath, "/"));
        
        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }    
        
        if (move_uploaded_file($tempFile, $fullPath)) {
            die($fullPath);
        } else {
            die('e');
        }
    }
?>
