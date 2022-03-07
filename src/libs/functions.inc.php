<?php
function prepareOgImageText($text) {
    $text = str_replace(' ', '_', $text);
    $text = urlencode($text);
    return $text;
}

// Get css/js hash
function getCssHash() {
    $css_hash = "";
    if (file_exists(__DIR__.'/css_hash.cfg')) {
        $css_hash = file_get_contents(__DIR__.'/css_hash.cfg');
    }
    return $css_hash;
}
function getJsHash() {
    $js_hash = "";
    if (file_exists(__DIR__.'/js_hash.cfg')) {
        $js_hash = file_get_contents(__DIR__.'/js_hash.cfg');
    }
    return $js_hash;
}

/* Load CSS-Files from directory */
function loadCSS($dir, $js=false) {
    $css_hash = getCssHash();

    if (!isset($dir)) {
        $dir = getcwd();
        $dir = $dir . "/assets/stylesheets";
        //echo $dir;
    }
    $cssFiles = scandir ($dir);
    //print_r($cssFiles);
    $css = "<script>
            function lazyLoadingCss(filename,opt) {
                var l = document.createElement('link');
                l.rel = 'stylesheet';
                l.href = filename
                var h = document.getElementsByTagName('head')[0];
                h.parentNode.insertBefore(l, h);
            }
            function cb() {";
            
    foreach ($cssFiles as $cssFile) {
        if($cssFile === '.' || $cssFile === '..' || $cssFile === 'scss' || $cssFile === '.gitignore' || $cssFile === 'libs') {
            continue;
        }
                    
        preg_match ( '/.*(min\.css)$/', $cssFile, $addCssFile );
        if ( empty($addCssFile) ) {
            continue;
        }
        
        if ($js && !preg_match('/.*(ie-fix)+.*$/', $addCssFile[0]) && !preg_match('/application.*$/', $addCssFile[0])) { 
                $css .= "lazyLoadingCss('/assets/stylesheets/".$addCssFile[0]."');";
        } else {
            if ( preg_match('/.*(ie-fix)+.*$/', $addCssFile[0]) ) {
                echo '<!--[if lte IE 9]><link rel="stylesheet" href="/assets/stylesheets/' . $addCssFile[0] . '?build='.$css_hash.'" type="text/css" /><![endif]-->';
            } else {
                echo '<link rel="stylesheet" href="/assets/stylesheets/' . $addCssFile[0] . '?build='.$css_hash.'" type="text/css" />';
            }
        }
    }
    $css .= "}
        var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) {
            raf(cb);
        } else {
            window.addEventListener('load', cb);
        }
        </script>";
    if($js && !preg_match('/.*(ie-fix)+.*$/', $addCssFile[0]))
        echo $css;
}

/* Load JS-Files from directory */
function loadJS($dir) {
    $js_hash = getJsHash();

    if (!isset($dir)) {
        $dir = getcwd();
        $dir = $dir . "/assets/javascripts";
    }
    $jsFiles = scandir ($dir);
    foreach ($jsFiles as $jsFile) {
        if ( is_dir($dir.$jsFile) ) {
            //echo $jsFile;
            continue;
        }
        if ( $jsFile === '.' || $jsFile === '..' || $jsFile === '.gitignore' ) {
            continue;
        }
        
        preg_match ( '/.*(min\.js)$/', $jsFile, $addJSFile );
        if ( empty($addJSFile) ) {
            break;
        }
        echo '<script src="/assets/javascripts/' . $addJSFile[0] . '?build='.$js_hash.'"></script>';            
    }
}

function getLogoParade($logos, $showStars = null, $template = 'clients') {
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
        $logoWidth = '';
        $logoHeight = '';
        if (file_exists('assets/images/client-logos/'.$logo['data'])) {
            $logoSize = getimagesize('assets/images/client-logos/'.$logo['data']);
            $logoWidth = $logoSize[0];
            $logoHeight = $logoSize[1];
        }
        
        $paradeData.= '<div class="logo"><img src="/assets/images/photos/placeholder.gif" data-src="/assets/images/client-logos/' . $logo['data'] . '" data-srcset="/assets/images/client-logos/' . $logo['data'] . '" alt="' . $logo['alt'] . '" title="' . $logo['alt'] . '" width="' . $logoWidth . '" height="' . $logoHeight . '" class="lazy '. $logo['cssClass'] .'"/></div>';
    }
    
    require('./partials/logo-parade-'.$template.'.php');
    return;   
}

function isLocalHost(){
    if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false)
        return true;
    return false;
}

function isBeta(){
    if (strpos($_SERVER['HTTP_HOST'], 'beta.www.') !== false)
        return true;
    return false;
}
    
function isRole($role) {
    
    if(empty($_COOKIE['co_role']))
        return false;
    
    switch($role) {
        case "callcenter-leiter":
            if($_COOKIE['co_role'] === "002")
                return true;
            break;
        case "boss": 
            if($_COOKIE['co_role'] === "003")
                return true;
            break;
        case "it-leiter":
        default:
            if($_COOKIE['co_role'] === "001")
                return true;
            break;
    }
    
    return false;
}

function isChristmas() {
    return (date('n') == 12);
}

function isCrawler ($user_agent)
{
    $user_agent = strtolower ($user_agent);

    $crawler_user_agents = [];
    $crawler_user_agents[] = 'bingbot';
    $crawler_user_agents[] = 'bingpreview';
    $crawler_user_agents[] = 'chrome-lighthouse';
    $crawler_user_agents[] = 'compatible; optimizer';   // sistrix
    $crawler_user_agents[] = 'duckduckbot';
    $crawler_user_agents[] = 'googlebot';
    $crawler_user_agents[] = 'adsbot-google';
    $crawler_user_agents[] = 'hubspot crawler';
    $crawler_user_agents[] = 'infotigerbot';
    $crawler_user_agents[] = 'jugendschutzprogramm-crawler';
    $crawler_user_agents[] = 'metajobbot';
    $crawler_user_agents[] = 'neevabot';
    $crawler_user_agents[] = 'opensiteexplorer';
    $crawler_user_agents[] = 'semrushbot';
    $crawler_user_agents[] = 'sistrix optimize';
    $crawler_user_agents[] = 'yandexbot';

    foreach ($crawler_user_agents as $crawler_user_agent)
    {   if (strpos ($user_agent, $crawler_user_agent) !== false)
            return true;
    }

    return false;
}

/* Simple decode function (bitweise) */
function decode($encoded) {
    $decoded = "";
    for( $i = 0; $i < strlen($encoded); $i++ ) {
        $b = ord($encoded[$i]);
        $a = $b ^ 6; // must be the same number as in JS function
        $decoded .= chr($a);
    }
    return $decoded;
}
?>