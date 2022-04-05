<?php
$product = new product ('Callcenter-Bot', 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.');
$product->image_set ('https://callone.de/assets/images/illus/relaxing.gif');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Wie funktioniert der CallOne Callcenter Bot?​',
    '<p>Wir bieten kundenindividuelle Lösungen für Ihre Telefonhotline, um Anruferanliegen zu automatisieren.<br>Dies reicht vom sprachgesteuerten Auswahlmenü bis hin zu einem KI-gesteuerten Sprachdialog, in dem wir verschiedene Komponenten wie Voice-to-Text, KI, Schnittstellenanbindung an Ihre Systeme und Text-to-Speech zur Lösung des Anruferanliegens zusammenführen. Es handelt sich hierbei stets um Projekte mit unterschiedlichem Umfang und Anforderungen. <a href="#" title="Sprechen Sie uns an - Wir beraten Sie gerne" data-openmodal="contact-sales" class="inline-link">Sprechen Sie uns an</a></p>'
);
$faqs->faq_add (
    'Was sind die häufigsten Anwendungsfälle des Callcenter-Bots?',
    '<p>Wir bieten Ihnen drei Anwendungsbereiche: Sprachgesteuerte IVR-Auswahlmenüs, FAQ-Portale, individuelle KI-gesteuerte Kundendialoglösungen mit Voice-to-Text, KI, Text-to-Speech und Schnittstellenintegrationen.</p>'
);
$faqs->faq_add (
    'Was sind die ersten Schritte mit dem Callcenter-Bot?',
    '<p>Sie setzen sich mit uns in Verbindung und wir besprechen Ihr konkretes Anwendungsszenario. Recht schnell erstellen wir ein Prototyp für Sie und testen. Bei komplexeren Anwendungsfällen wie Schnittstellenintegrationen und komplexen Anwendungsfällen steht Ihnen ein Projektteam aus eigenen Full Stack- und Schnittstellenentwicklern, Web-Entwicklern und Sprachwissenschaftlern zur Verfügung.</p>'
);
$faqs->faq_add (
    'Wie können wir den CallOne Callcenter-Bot nutzen?',
    '<p>Wir bieten Ihnen ein Full-Service-Paket. Hierbei erhalten Sie von uns alles, was Sie brauchen, um Ihr Spracherlebnis auf den Weg zu bringen - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>'
);
$faqs->faq_add (
    'Was kostet der Callcenter-Bot?',
    '<p>Die Pricing des Callcenter-Bots erfolgt nach Nutzung. Sie zahlen je Aufruf der Sprachanforderung (VTT) und Text-to-Speech (TTS). Der Aufwand für die Bereitstellung Ihres Callcenter-Bots ist kundenindividuell und richtet sich nach Art und Umfang des Projekts.</p>'
);
$faqs->faq_add (
    'Wie lange dauert die Umsetzung?',
    '<p>Der Start für einen Callcenter Bot kann innerhalb weniger Stunden für Sie erfolgen, wenn es sich beispielsweise um die Sprachautomatisierung Ihres IVR-Menüs handelt. Im laufenden Betrieb optimieren wir mit Ihnen die erkannten Eingaben. Projekte bei denen Schnittstellenintegrationen und vielzählige Plausibilitäten abzubilden sind, werden in einem individuellen Projektplan für Sie verbindlich zusammengestellt.​</p>'
);
?>

<div class="section">
    <div class="hero">
        <div class="hero__text">
            <h1>Callcenter-Bot <br>für Kundenservice und Helpdesk</h1>
            <p class="bigtext">Sprachgesteuerte Menüführung, automatisierte FAQ am Telefon und Callcenter Bots, die Ihren Callcenter-Agenten Standardaufgaben abnehmen.</p>
            <p class="mobile-centered">
                <a href="#" class="btn btn--primary trackedElement" data-label="Button Header - Sales kontaktieren" data-category="Link" data-action="Show Contact Modal" data-openmodal="contact-sales">Mit Experten sprechen</a>
            </p>
        </div>
        <div class="hero__image">
            <div class="chat-conversation mobile-hidden">
                <div><img src="/assets/images/icons_svg/big_15.svg" title="Kunde fragt" alt="Kunde fragt" width="60" height="60" /><span class="text">Ich möchte meinen Lieferstatus wissen.</span></div>
                <div><span class="text">Ihr Pakt wird morgen geliefert.</span><img src="/assets/images/icons_svg/big_14.svg" title="Callcenter Bot Bender antwortet " alt="Callcenter Bot Bender antwortet" width="59" height="60" /></div>
            </div>
            <img src="/assets/images/illus/relaxing.gif" title="Verbessern von Kundenzufriedenheit durch sprachbasierte Auswahlmenüs" alt="Verbessern von Kundenzufriedenheit durch sprachbasierte Auswahlmenüs" width="880" height="256" style="margin-top:var(--gutter-xs)" />
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Verwendungsmöglichkeiten für den Callcenter-Bot <br>Das sprachgesteuerte KI-Sprachdialogsystem</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered"><img src="/assets/images/icons_svg/small_38.svg" alt="Auswahlmenüs - Sprachauswahl statt DTMF-Tasten" width="45" height="50" style="height:50px" /></p>
                <h3 class="centered">Sprachgesteuertes IVR</h3>
                <p class="centered">Sprachdialoge statt starrer Menüs.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Erkennung menschlicher Sprache</li>
                    <li>Intelligente Spracherlebnisse</li>
                    <li>Anlernbar, beliebig skalierbar, mehrsprachig</li>
                </ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered"><img src="/assets/images/icons_svg/big_13.svg" alt="Self-Service / FAQ - Anliegen aufnehmen und vollautomatisiert bearbeiten" width="56" height="50" style="height:50px" /></p>
                <h3 class="centered">Informationsbots</h3>
                <p class="centered">Anruferanfragen automatisiert beantworten.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Sprachbasierte FAQ</li>
                    <li>Vorqualifizierung von Anruferanliegen</li>
                    <li>Aktuelle Nachrichteninformationen</li>
                    <li>Automatisierte Informationsübermittlung</li>
                </ul> 
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--4-md">
                <p class="centered"><img src="/assets/images/icons_svg/big_12.svg" alt="Individual - Kundenindividuelle Anwendungen" width="63" height="50" style="height:50px" /></p>
                <h3 class="centered">Callcenter Bots</h3>
                <p class="centered">Leistungsstarke Schnittstellen für kundenindividuelle Anwendungen.</p>
                <ul class="list list--checkmarks list--checkmarks-green">
                    <li>Termin vereinbaren</li>
                    <li>Lieferstatus erfragen</li>
                    <li>Passwort ändern</li>
                    <li>Kontostand abrufen</li>
                </ul> 
            </div>
        </div>

        <p class="centered">
            <a href="#" data-openmodal="contact-sales" class="btn btn--secondary trackedElement" data-label="Button - Mit Experten sprechen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
        </p>
    </div>
</div>

<div class="section section--black" id="calltracking">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--6-hidden co-grid__col--6-md co-grid__col--vcentered">
                <img src="/assets/images/illus/CallOneRobot-invers-2.svg" alt="So funktioniert unser Spachdialogsystem - Der Callcenter Bot" usemap="#robot" width="570" height="968" />
                <map name="robot">
                    <script>
                    function showStep(e, step){
                        e = e || window.event;
                        e.preventDefault();

                        $(document).ready(function() {
                            console.log($('[data-map]'));
                            $('[data-map]').css('background-color','');
                            $('[data-map="'+ step +'"]').css('background-color','#86ed18');
                        });
                    }
                    </script>
                    <style>.blue{outline: 1px solid red;}</style>
                    <area class="blue" onmouseover="showStep(event, 1)" onclick="showStep(event, 1)" shape="rect" coords="7,77,79,153" href="#" alt="Callcenter Bot 1">
                    <area class="blue" onmouseover="showStep(event, 2)" onclick="showStep(event, 2)" shape="rect" coords="489,280,564,356" href="#" alt="Callcenter Bot 2">
                    <area class="blue" onmouseover="showStep(event, 3)" onclick="showStep(event, 3)" shape="rect" coords="9,342,86,418" href="#" alt="Callcenter Bot 3">
                    <area class="blue" onmouseover="showStep(event, 4)" onclick="showStep(event, 4)" shape="rect" coords="492,639,569,715" href="#" alt="Callcenter Bot 4">
                </map>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md co-grid__col--vcentered">
                <h3 class="centered">Wie funktioniert unser Callcenter Bot?</h3>

                <div class="content-box content-box--white content-box--nofill" data-map="1">
                    <div class="subtitle">1. Sprachportal nimmt Anruf entgegen</div>
                    <p>Das CallOne Sprachdialogsystem erkennt das gesprochene Wort des Anrufers. Diese auch als Voice-to-Text (VTT) oder Automatic-Speech-Recognition (ASR) bezeichnete Technologie ermöglicht es, in Echtzeit aus Sprache Text zu erstellen.</p>
                </div>
                <div class="content-box content-box--white content-box--nofill" data-map="2">
                    <div class="subtitle">2. Das Anliegen mittels vortrainierter KI identifizieren</div>
                    <p>Schlüsselwörter und semantische Zusammenhänge werden erkannt.</p>
                </div>
                <div class="content-box content-box--white content-box--nofill" data-map="3">
                    <div class="subtitle">3. Sprachdialog mit Ihrem Anrufer</div>
                    <p>mittels Sprachsynthese (Text-to-Speech)</p>
                </div>
                <div class="content-box content-box--white content-box--nofill" data-map="4">
                    <div class="subtitle">4. Vorqualifizierung oder Lösung des Anruferanliegens</div>
                    <p>Ist das Anliegen des Anrufers definiert erfolgt die Weiterleitung auf die hinterlegte Routing-Logik (unterschiedliche Ziele, Skills, Warteschleifen).</p>
                </div>

                <p class="centered">
                    <a href="#" data-openmodal="contact-sales" class="btn btn--primary trackedElement" data-label="Button - Jetzt einfach ausprobieren!" data-category="Link" data-action="linked to #demos">Weitere Fragen? Kontaktieren sie uns!</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section" id="integrations">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">Nutzen</h2>
        <p class="bigtext centered mobile-left">CallOne bietet das Full-Service Paket für Callcenter-Bots am Telefon - von der Konzeptentwicklung bis zur Markteinführung und Optimierung Ihres Produkts.</p>

        <div class="content-box content-box--white content-box--shadow content-box--full-width">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--vcentered">
                    <img src="/assets/images/illus/voicebot-business.gif" alt="Callcenter Bot - Nutzen für Unternehmen" width="315" height="280" />
                </div>
                <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                    <h3>Unternehmen</h3>
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li>Das Anliegen sofort verstehen und Geld sparen (Verkürzte Anrufdauern)</li>
                        <li>Den Service entlasten mit kürzeren Gesprächszeiten (Optimale Vorqualifizierung)</li>
                        <li>Mehrsprachigen Kundenservice anbieten (Internationaler Rollout)</li>
                    </ul>
                </div>
            </div>    
        </div>

        <div class="content-box content-box--white content-box--shadow content-box--full-width">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered co-grid__col--order-2-xs">
                    <h3>Anrufer</h3>
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li>Zufriedenere Anrufer durch natürliche Menüführung</li>
                        <li>Optimale Übertragung des Anruferanliegen an den Servicemitarbeiter</li>
                        <li>24/7 Erreichbarkeit für Ihre Anrufer</li>
                    </ul>
                </div>
                <div class="co-grid__col co-grid__col--vcentered co-grid__col--order-1-xs">
                    <img src="/assets/images/illus/voicebot-user.gif" alt="Callcenter Bot - Nutzen für Anrufer" width="315" height="301" style="width:315px!important" />
                </div>
            </div>    
        </div>

        <p class="centered">
            <a href="#" class="btn btn--primary trackedElement" data-openmodal="contact-sales" data-label="Button - Jetzt 14 Tage testen" data-category="Link" data-action="opens sales modal">Mit Experten sprechen</a>
        </p>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow">
        <div class="subtitle centered mobile-left">Supported by</div>

        <div class="content-box content-box--white content-box--full-width">
            <div class="co-grid centered">
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                    <p><img src="/assets/images/logo/partnerlogos/logo-google.svg" alt="Supported by Google" width="118" height="40" style="height:40px" /></p>
                </div>
                <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                    <p><img src="/assets/images/logo/partnerlogos/logo-amazon.svg" alt="Supported by Amazon" width="133" height="40" style="height:40px" /></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('partials/slider-callcenter-bot.php'); ?>

<div class="section section--black" id="addons">
    <div class="section__content section__content--narrow">
        <h2 class="centered mobile-left">Weitere Callcenter Bot-Addons</h2>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <img src="/assets/images/icons_svg/small_18.svg" alt="Alles über eine Webseite steuerbar" class="white icon" width="69" height="50" style="filter:saturate(0) grayscale(100%) brightness(1000%);height:50px" />
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Call-Tracking</h3>
                            <p>Rückgabe von relevanten Informationen auf Basis der Website-Daten.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-chat-acknowledge sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Callcenter-Software</h3>
                            <p>Steuerung von Anrufen mit Hilfe von Spracheingaben.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-document1 sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>VoIP-Telefonanlage</h3>
                            <p>Live-Chat mit Website-Besuchern und Versenden von Dokumenten.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-routing sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Zusammenspiel mit eigener Anlage</h3>
                            <p>Routing auf Basis von Webseiteneingaben oder Warenkorbinhalten.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-database1 sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>CTI-Integration mit Ihrem CRM</h3>
                            <p>Anreicherung von Websitedaten mit Informationen aus Ihren (CRM-)Systemen.</p>
                        </div>
                    </div>
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <span class="sl sl-cobrowsing sl-size-l"></span>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                        <div class="left-border">
                            <h3>Co-Browsing</h3>
                            <p>Starten einer Co-Browsing Session nach Kontaktaufnahme durch den Nutzer.</p>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="section__content section__content--wide">
        <h2 class="centered mobile-left">FAQ Callcenter-Bot</h2>
    
        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ();
        ?>

        <br />
        <br />
        <p class="centered">
            <a href="/faq/" class="btn btn--primary trackedElement" data-label="Button - Mehr FAQ" data-category="Link" data-action="linked to /faq/">Weitere FAQ</a>
        </p>  
    </div>
</div>

<?php
// Contact form has been replaced by sales contact modal
// include('partials/contact-form.php');
?>