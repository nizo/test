<?php 
    
    /* Load CSS-Files from directory */
    function loadCSS($dir) {
        if (!isset($dir)) {
            $dir = getcwd();
            $dir = $dir . "/assets/stylesheets";
            //echo $dir;
        }
        $cssFiles = scandir ($dir);
        //print_r($cssFiles);
        foreach ($cssFiles as $cssFile) {
            if($cssFile === '.' || $cssFile === '..' || $cssFile === 'scss' || $cssFile === '.gitignore' ) {
                continue;
            }
                
            preg_match ( '/.*(min\.css)$/', $cssFile, $addCssFile );
            if ( empty($addCssFile) ) {
                break;
            }
                
            if ( preg_match('/.*(ie-fix)+.*$/', $addCssFile[0]) ) {
                echo '<!--[if lte IE 9]><link rel="stylesheet" href="/assets/stylesheets/' . $addCssFile[0] . '" type="text/css" /><![endif]-->';
            } else {
                echo '<link rel="stylesheet" href="/assets/stylesheets/' . $addCssFile[0] . '" type="text/css" />';
            }
        }
    }

    /* Load JS-Files from directory */
    function loadJS($dir) {
        if (!isset($dir)) {
            $dir = getcwd();
            $dir = $dir . "/assets/javascripts";
        }
        $jsFiles = scandir ($dir);
        foreach ($jsFiles as $jsFile) {
            if ( is_dir($dir.$jsFile) ) {
                continue;
            }
            if ( $jsFile === '.' || $jsFile === '..' || $jsFile === '.gitignore' ) {
                continue;
            }
           
            preg_match ( '/.*(min\.js)$/', $jsFile, $addJSFile );
            if ( empty($addJSFile) ) {
                break;
            }
            echo '<script src="/assets/javascripts/' . $addJSFile[0] . '"></script>';
        }
    }

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