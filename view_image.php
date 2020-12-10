<?php  
    //$query = "SELECT * FROM tbl_images ORDER BY id DESC";  
    $query = "Select * FROM tbl_images WHERE id='1'";
    $result = mysqli_query($conn, $query);  
    
    while($row = mysqli_fetch_array($result))  
    {  
        echo '  
            <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" width=500" />';  
    }  
?>  