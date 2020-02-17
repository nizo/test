<?php

    if(isset($_POST['optInActive']) && !empty($_POST['optInActive'])) {        
        $file = dirname(__FILE__) . '/../optin.txt';        
        
        // default counter 
        $counter = 1;
        
        // add value from file to counter
        if (file_exists($file)) {
            $counter += file_get_contents($file);
        }
        
        // write the new counter value to the file
        $file_data = file_put_contents($file, $counter);
        if (empty($file_data)) {
            echo "error";
        } else {
            var_dump($file_data);
            echo "success";
        }
    } else {
        echo "error";
    }
    
?>