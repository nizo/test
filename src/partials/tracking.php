<?php
/** tracking.php 
 *  
 */

//  Tracken des Userrouten - Wird per Formular weiter gegeben
if (!isset($_SESSION['userRoute'])) {
    $_SESSION['userRoute'] = []; 
    if(isset($_SERVER['HTTP_REFERER'])) {
        array_push($_SESSION['userRoute'], $_SERVER['HTTP_REFERER']);
    }
    array_push($_SESSION['userRoute'],$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
} else {
    $lastElement = array_slice($_SESSION['userRoute'], -1)[0];
    if($lastElement !== $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])
        array_push($_SESSION['userRoute'],$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
}

?>

<?php  if (isLocalHost()) : ?>	
    <!--Google Tag Manager Testsystem --> 
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MZN2XV4');</script>
    <!--End Google Tag Manager-->
<?php else : ?>
	<!--Google Tag Manager-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N5K7C35');</script>
    <!--End Google Tag Manager-->
<?php endif; ?>


	<!--Facebook Tracking Pixel-->
 	<script>(function() {
      var _fbq = window._fbq || (window._fbq = []);
      if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
      }
      _fbq.push(['addPixelId', '327131857475263']);
    })();
    window._fbq = window._fbq || [];
    //window._fbq.push(['addPixelId', '327131857475263']);
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>