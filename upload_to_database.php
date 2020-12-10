<?php

  if(isset($_POST["insert"]))  
 {       $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
        //$query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
        $query = "REPLACE INTO tbl_images(id, name) VALUES (1,'$file')";
        if(mysqli_query($conn, $query))  
        {  
             echo '<script>alert("Image Inserted into Database")</script>';  
        }
        else{
            echo '<script>alert("Image NOT Inserted into Database")</script>'; 
        }
 }
?>