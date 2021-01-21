<?php

function DetectTor($PUBLIC_IP){
    $filename = 'TORList';
    $searchfor = $PUBLIC_IP;
    $fh = fopen($filename, 'r');
    $olddata = fread($fh, filesize($filename));

    if(strpos($olddata, $searchfor)) 
    {
        fclose($fh);
        return(true);
    }
    fclose($fh);
    return (false);
}

?>