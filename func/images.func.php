<?php

function allowed_image($file_name) {
    $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
    $file_ext = end(explode('.', $file_name));
    
    return(in_array($file_ext,$allowed_ext)==true)?true:false;
      
}
function watermark_image($file,$destination){
    $watermark=imagecreatefrompng('images/watermark.png');
    $source=  getimagesize($file);
    print_r($source);
}

?>