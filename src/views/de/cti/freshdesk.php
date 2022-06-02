<?php
$faqs = new faqs ();
$faqs->faq_add (
	'Wie funktioniert die Anbindung von Freshdesk?',
	'<p>CallOne bietet eine in Deutschland gehostete Telefonanlage mit Callcenter-Software, die schnittstellenoffen ist und durch den fertigen Konnektor zu Freshdesk bequem mittels CTI angebunden werden kann. Wir benötigen dafür nur Ihren API-Key, entsprechende Freigaben und Ihre Freshdesk-Domain.</p>'
);
$faqs->faq_add (
	'Was kann ich mit dem Freshdesk-Konnektor machen?',
	'<p>Sie erhalten die Möglichkeit das Ticketsystem Freshdesk mit unserer Callcenter-Software zu koppeln. Eingehende Anrufe werden bei Gesprächsannahme dem Agenten in Freshdesk angezeigt. Neue Tickets können bearbeitet werden und bereits bestehende Tickets eines Anrufers werden diesem zugeordnet.</p>'
);
$faqs->faq_add (
	'Was kostet die Anbindung an Freshdesk?',
	'<p>Der Freshdesk Connector ist Teil der VoIP-Telefonanlage und Callcenter-Software von CallOne. <a href="#" title="Kontaktieren Sie uns für ein individuelles Angebot" data-openmodal="contact-sales">Bitte setzen Sie sich für ein individuelles Angebot mit uns in Verbindung</a>.</p>'
);
$faqs->faq_add (
	'Kann ich auch meine bestehende Telefonanlage nutzen?',
	'<p>Ja, es gibt zahlreiche CallOne Kunden, die ihre eigene Telefonanlage im Zusammenspiel mit der CallOne Callcenter-Software nutzen. Bitte sprechen sie mit uns über ihre individuellen Anforderungen.</p>'
);
$faqs->faq_add (
	'Kann ich die Callcenter-Software und die Freshdesk-Integration testen?',
	'<p>Ja, testen ist gewünscht. Sprechen sie uns an, um im ersten Step über ihre konkreten Anforderungen auszutauschen.</p>'
);
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Freshdesk Callcenter-Software Connector</h1>
            <p class="bigtext">Verbinden Sie das Ticketingtool Freshdesk und CallOne auf Knopfdruck und pushen Sie Tickets in Echtzeit zu Ihren Agenten.</p>
        </div>
        <div class="hero__image">
            <div id="lottie"></div>
            <script src="/assets/animations/svg/freshdesk.js"></script>
        </div>
    </header>

    <div class="anchors">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Wofür interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#beispiel">Beispiel</a>
            <a href="#funktionen">Funktionen</a>
            <a href="#faq" target="_blank">FAQ</a>
        </div>
    </div>
</div>

<div class="section section--light-green" id="beispiel">
    <div class="section__content section__content--wide">
        <div class="content-box content-box--white content-box--full-width content-box--shadow">
            <div class="co-grid">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--5-md co-grid__col--vcentered">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_37_2.svg',
                        'Ticketing und Telefonie werden eins - Freshdesk Callcenter software - Connector',
                        380, 367
                    ); ?>
                </div>
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md co-grid__col--vcentered">
                    <h2>VoIP-Telefonanlage mit Freshdesk</h2>
                    <ul class="list list--checkmarks list--checkmarks-green">
                        <li><strong>Ticketing und Telefonie werden eins</strong> im Kundenservice. In Echtzeit erhalten Ihre Agenten den Anruf und das Ticket öffnet sich in Freshdesk.</li>
                        <li><strong>Zielgerichtetes Vorgehen</strong> Ihrer Agenten wird durch Zuordnung bereits geöffneter Tickets zu einem Kunden gewährleistet.</li>
                        <li><strong>Schnellere Fallbearbeitung</strong>. Nutzen Sie die Vielfalt von Korrespondenz- und Interaktionsmöglichkeiten, die Freshdesk für Ihr Team bietet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black">
    <div class="section__content section__content--narrow centered mobile-left">
        <?= pictureTag(
            '/assets/images/icons_svg/small_07_2_2_white.svg',
            'Mehr Inforamtionen zu unserer Freshdesk Integration Callcenter Connector auf dem Freshworks Marketplace',
            70, 52
        ); ?>
        <h2>Erfahren Sie mehr über unseren Freshdesk Callcenter Connector</h2>
        <p class="btn-set btn-set--centered">
            <a href="https://www.freshworks.com/apps/freshdesk/call_center_connector_for_voice_ticket_integration/" target="_blank" class="btn btn--primary" title="Zum Freshworks Marketplace - Call Center Connector for Voice Ticket Integration" >Freshworks Marketplace</a>
        </p>
    </div>
</div>

<div class="section" id="funktionen">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered mobile-left">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_04.svg',
                        'Einfache Integration',
                        67, 64, [
                            'style' => 'height:64px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered mobile-left">Einfach</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Keine Programmierkenntnisse für Anbindung erforderlich</li>
                    <li>Kundeninformationen und vergangenen Events beim eingehenden Anruf</li> 
                    <li>Kein Upgrade von Freshdesk notwendig</li>
                </ul>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered mobile-left">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_20.svg',
                        'Intuitive Bedienung',
                        81, 64, [
                            'style' => 'height:64px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered mobile-left">Intuitiv</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Bequeme Web-Administration von Agenten und Freshdesk-Usern</li>
                    <li>Agent erhält neues Ticket automatisch in gewohnter Freshdesk-Umgebung</li> 
                    <li>Intuitive, webbasierte Agentenmaske mit Telefonfunktion</li>
                </ul>          
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered mobile-left">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_06.svg',
                        'Alle Auswertungen auf einen Blick',
                        64, 64, [
                            'style' => 'height:64px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered mobile-left">Relevant</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Kundeninformationen und vergangenen Events beim eingehenden Anruf</li> 
                    <li>Callcenter-Software in ihren Supportdesk integriert</li> 
                    <li>Umfangreiche Statistikreportings</li>
                </ul>   
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-sm co-grid__col--3-md">
                <p class="centered mobile-left">
                    <?= pictureTag(
                        '/assets/images/icons_svg/small_02.svg',
                        'Skalierbar',
                        65, 64, [
                            'style' => 'height:64px'
                        ]
                    ); ?>
                </p>
                <h3 class="centered mobile-left">Skalierbar</h3>
                <ul class="list list--checkmarks list--checkmarks-top">
                    <li>Beliebig viele Freshdesk-Agenten administrierbar</li>
                    <li>Einbindung von Heimarbeitsplätzen möglich</li> 
                    <li>Gleicher Preis unabhängig der Anzahl von Freshdesk-Usern</li>
                </ul>   
            </div>
        </div>  
        
        <p class="btn-set btn-set--centered">
            <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Jetzt mit Experten sprechen</a>
        </p>
    </div>
</div>

<div class="section section--black" id="Tableau-Telefonkonnektor">
    <div class="section__content section__content--narrow">
		<h2 class="centered mobile-left">Freshdesk Telefon Connector</h2>

        <div class="co-grid">
			<div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_18_white.svg',
                            'Inkrementelle Datenaktualisierung',
                            69, 50
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						<div class="left-border">
                            <h3>Caller-Ticket erstellen</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_15_2_white.svg',
                            'Tableau Server fähig',
                            69, 50
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						<div class="left-border">
                            <h3>Statusänderung des Tickets</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_29_white.svg',
                            'Import via Webdata Connector',
                            69, 50
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						<div class="left-border">
                            <h3>Mobile Nutzung möglich</h3>
                        </div>	
                    </div>	
                </div>	
            </div>
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--6-md">
				<div class="co-grid">
					<div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/small_32_white.svg',
                            'Flexible Anfragezeiträume',
                            69, 50
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
						<div class="left-border">
                            <h3>Weltweit nutzbar</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--black" id="faq">
    <div class="section__content">
        <h2 class="centered mobile-left">FAQ Freshdesk Callcenter Software</h2>
        
        <?php
        $faqs->structured_data_get_code ();
        $faqs->html_get_code ('toggle-box--on-black');
        ?>
        
        <p class="btn-set btn-set--centered">
            <a href="/faq/" class="btn btn--primary">Mehr FAQ</a>
        </p>  
    </div>
</div>