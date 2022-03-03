<?php if (isset($_COOKIE['cookiebanner-accepted']) && ($_COOKIE['cookiebanner-accepted'] > 100 || $_COOKIE['cookiebanner-accepted'] == 1)): ?>
 
    <?php if (!isLocalHost()) : ?>
        <!--Mouseflow-->
        <script type="text/javascript">
        var mouseflowCrossDomainSupport = false;
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript"; mf.defer = true;
            mf.src = "//cdn.mouseflow.com/projects/a81cdc73-8001-422e-9d46-c67c4f092c90.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
        </script>
        <!--End Mouseflow-->
    <?php endif; ?>

    <?php  if (isLocalHost()) : ?>	
        <!--Google Tag Manager Testsystem --> 
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MZN2XV4');</script>
        <!--End Google Tag Manager-->
    <?php elseif (isBeta()) : ?>
        <!--Mouseflow Beta Tag-->
        <script type="text/javascript">
        window._mfq.push(["tag", "beta"]);
        </script>
        <!--Mouseflow Beta Tag-->
    <?php else : ?>
    	<!--Google Tag Manager-->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N5K7C35');</script>
        <!--End Google Tag Manager-->
    <?php endif; ?>
    
    <!-- Mouseflow Add Tag for Banderole -->
    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
            let banderoleCta = document.querySelector('#banderole-cta');
            if (banderoleCta) {
                banderoleCta.addEventListener('click', (e) => {
                    console.log('Banderole CTA Clicked.');
                    window._mfq.push(['tag', 'Banderole Clicked']);
                    console.log('Mouseflow Tag Added');
                });
            }
        });
    </script>
    
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

<?php endif; ?>