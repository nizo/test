<?php
function prepareOgImageText($text) {
    $text = str_replace(' ', '_', $text);
    $text = urlencode($text);
    return $text;
}

// Insert picture element with multiple sources and fallback (fallback, retina and webp)
function pictureTag($path, $alt, $width = null, $height = null, $attributes = [], $lazyloading = true) {
    // Add extra attributes
    $extraAttributes = ' ';
    foreach ($attributes as $attribute => $value) {
        $extraAttributes .= $attribute.'="'.$value.'" ';
    }

    // Get file information
    $file = pathinfo($path);
    $filename = $file['dirname'].'/'.$file['filename'];
    $root = $_SERVER['DOCUMENT_ROOT'];

    // Build <picture> template
    $template = '<picture>'.PHP_EOL;

    if (strtolower($file['extension']) !== 'svg') {
        // Set WEBP sources if available
        $webp = $filename.'.webp';
        if (file_exists($root.$webp)) {
            $webp2x = $filename.'@2x.webp';
            $webp3x = $filename.'@3x.webp';
            $extraSourcesWebp = '';
            if (file_exists($root.$webp3x))
                $extraSourcesWebp .= $webp3x.' 3x, ';
            if (file_exists($root.$webp2x))
                $extraSourcesWebp .= $webp2x.' 2x, ';

            $template .= '<source srcset="'.$extraSourcesWebp.$webp.' 1x" type="image/webp" />'.PHP_EOL;
        }

        // Set original sources if available
        $original2x = $filename.'@2x.'.$file['extension'];
        $original3x = $filename.'@3x.'.$file['extension'];
        $extraSourcesOriginal = '';
        if (file_exists($root.$original3x))
            $extraSourcesOriginal .= $original3x.' 3x, ';
        if (file_exists($root.$original2x))
            $extraSourcesOriginal .= $original2x.' 2x, ';
        $template .= '  <source srcset="'.$extraSourcesOriginal.$path.' 1x" type="image/'.$file['extension'].'" />'.PHP_EOL;
    }

    // Fallback image
    $template .= '  <img src="'.$path.'"'.($lazyloading ? ' loading="lazy"' : '').' alt="'.$alt.'" title="'.$alt.'"'.($width ? ' width="'.$width.'" ' : '').($height ? ' height="'.$height.'"' : '').$extraAttributes.' />'.PHP_EOL;
    $template .= '</picture>'.PHP_EOL;

    return $template;
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

// Declare variable to store additional JS files, defined in view/content files
$additional_js_files = [];
function addAdditionalScript($file) {
    global $additional_js_files;
    $additional_js_files[] = $file;
}
function loadAdditionalScripts() {
    global $additional_js_files;
    if (count($additional_js_files) == 0)
        return null;

    $output = '';
    foreach ($additional_js_files as $file) {
        $output .= '<script src="'.$file.'"></script>';
    }
    echo $output;
}

// Check if passes page is current page
function getPageActiveClass($uri) {
    global $page;
    
    if ($uri == $page->uri)
        return ' submenu__link--active';
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