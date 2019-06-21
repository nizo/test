<?php 
    function getLogoParade($logos) {
        if(empty($logos)) {
            return;
        }
        
        $paradeData = null;
        
        foreach($logos as $logo) {
            if(empty($logo['cssClass']))
                $logo['cssClass'] = '';
            if(empty($logo['alt']))
                    $logo['alt'] = '';
            if(empty($logo['data']))
                    $logo['data'] = '';
                        
            
                    $paradeData.= '<div class="logo"><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/client-logos/' . $logo['data'] . '" data-srcset="/assets/images/client-logos/' . $logo['data'] . '" alt="' . $logo['alt'] . '" title="' . $logo['alt'] . '" class="lazy '. $logo['cssClass'] .'"/></div>';
        }
        
        require_once('./partials/logo-parade-clients.php'); 
        return;   
    }

    function isLocalHost(){
        if ($_SERVER['HTTP_HOST'] == '//localhost:3000' ||   $_SERVER['HTTP_HOST'] == '127.0.0.1:8000')
            return true;
        
        return false;
    }
?>