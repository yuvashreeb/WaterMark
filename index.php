<?php 
require 'func/images.func.php';
if(isset($_FILES['image'])){
    $file_name=$_FILES['image']['name'];
    $file_tmp=$_FILES['image']['tmp_name'];
    
   
    if(allowed_image($file_name)==true){
        //watermarkimg
        //echo '<p>Allowed!</p>';
        watermark_image($file_tmp,'');
        
    }else{
        echo '<p>Not an image or image not accepted</p>';
    }
     
}


?>
<form action="" method="post" enctype="multipart/form-data">
    Choose an image:
    <input type="file" name="image"/>
    <input type="submit" value="watermark"/>
    
</form>