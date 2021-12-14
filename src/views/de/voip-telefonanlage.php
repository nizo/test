<?php
$product = new product ('VoIP-Telefonanlage', 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager');
$product->image_set ('https://callone.de/assets/images/photos/voip-telefonanlage.webp');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
    'Was unterscheidet die virtuelle Telefonanlage von CallOne von anderen Anbietern?',
    '<p>CallOne kombiniert eine flexibel anpassbare Cloud-Telefonanlage mit einer umfangreichen Callcenter-Lösung, Integrationen in andere Systeme und offenen APIs. Die CallOne Telefonielösungen sind somit frei skalierbar und können alle Anforderungen von der kleinen Officetelefonielösung bis hin zu weit ausgewachsenen und voll integrierten Kundenservice- und Sales-Abteilungen abbilden. Alle Telefoniedaten sind bei CallOne in detaillierten Statistiken auswertbar, die auch über APIs abgefragt oder in BI-Tools <a href="/cti-schnittstellen" title="Schnittstellen">integriert</a> werden können. Kontaktieren Sie uns einfach mit Ihren individuellen Anforderungen!</p>'
);
$faqs->faq_add (
    'Was kostet die CallOne Telefonanlage?',
    '<p>Sie können die CallOne Cloud-Telefonanlage bereits ab 5,90 € je Nebenstelle nutzen. Ihnen stehen Optionen im Self-Service oder mit einem persönlichen Customer Succcess Manager zur Verfügung. Nähere Informationen finden Sie auf unserer <a href="/callcenter-software">Preisseite</a> oder <a href="#" data-openmodal="contact-sales">kontaktieren</a> Sie uns einfach mit Ihren Anforderungen.</p>'
);
$faqs->faq_add (
    'Erhalte ich auch Rufnummern von CallOne?',
    '<p>Wir schalten Ihnen Rufnummern aus allen Vorwahlbereichen in Deutschland sowie lokale Rufnummern weltweit. Auch Servicerufnummern wie z.B. 0800-Rufnummern stellen wir Ihnen gerne zur Verfügung. Ebenso können Sie Ihre bereits vorhandenen Rufnummern jederzeit zu uns weiterleiten oder einfach portieren. Alle Rufnummern im CallOne Netz laufen über stabile Premium-Routen und bieten auszeichnete Sprachqualität.</p>'
);
$faqs->faq_add (
    'Wie kann ich über die virtuelle Telefonanlage von CallOne telefonieren?',
    '<p>Bei der Wahl des gewünschten Endgeräts sind Sie bei CallOne komplett flexibel. Nutzen Sie jedes beliebige Softphone oder Hardware-IP-Telefon und kombinieren Sie Ihre Telefonie für Sales und Kundenservice mit Dialerfunktionen und Click-to-Call. Oder Sie verzichten komplett auf Hard- oder Software-Telefone und nutzen die bei CallOne bereits integrierte Browsertelefonie (WebRTC).</p>'
);
$faqs->faq_add (
    'Welche Funktionen unterstützt die CallOne Telefonanlage?',
    '<p>Die Cloud-Telefonanlage von CallOne unterstützt alle bekannten Funktionen und Features einer Telefonanlage, z.B. Besetztlampenfelder, Parallelruf, Ringschaltung, Rufnummernübermittlung, uvm. Darüber hinaus bietet CallOne weitreichende Callcenter-Funktionen wie Warteschleifenadministration, SLAs, IVR-Menüs und Gesprächsaufzeichnung auch im Zusammenspiel mit der Telefonanlage. Kontaktieren Sie uns gerne mit Ihren Anforderungen! <a href="/voip-telefonanlagen-funktionen">Hier finden Sie mehr zu unseren Features</a>.</p>'
);
$faqs->faq_add (
    'Mit welchen anderen CRMs und Tools kann ich CallOne kombinieren?',
    '<p>Mit unseren offenen APIs haben Sie Möglichkeit Telefoniefunktionen in nahezu alle CRM-, Kundenservice- und Salestools zu integrieren. Beliebte Funktionen sind z.B. Click-to-Dial oder das automatisierte Anlegen von Nebenstellen oder Telefonbucheinträgen. Mehr Informationen zu unseren APIs finden Sie <a href="/cti-schnittstellen" title="´Apps und Schnittstellen">hier</a>.</p><p>Darüber hinaus bietet CallOne eine Vielzahl fertiger Apps für beliebte Tools wie Pipedrive, Salesforce, Zendesk, uvm. sowie Integrationen mit BI-Tools wie tableau und Geckoboard.</p>'
);
?>

<div class="section">
    <header class="hero">
        <div class="hero__text">
            <h1>Die sichere Cloud-Telefonanlage für Teams jeder Größe.</h1>
            <h2>CallOne ist die zentrale Lösung für Telefonie im Unternehmen:<br />Wir verbinden Unternehmen und Anrufer, um Telefonate effizient zu erledigen.</h2>

            <p>
                <a class="btn btn--primary" href="#" data-openmodal="contact-sales">Kontakt aufnehmen</a>
            </p>
        </div>
        <div class="hero__image">
            <img src="/assets/images/illus/voip-telephony-header.png" alt="" />
        </div>
    </header>
</div>

<div class="section section--no-padding-top">
    <div class="section__content section__content--wide">
        <p class="centered bigtext">Cloud-Telefonanlagen angepasst für Unternehmen jeder Größe - auch Ihres!</p>

        <div class="small-tabs small-tabs--clear">
            <div class="small-tabs__tabs">
                <div class="small-tabs__tab" data-tab="1">Enterprise</div>
                <div class="small-tabs__tab" data-tab="2">Mittelstand</div>
                <div class="small-tabs__tab" data-tab="3">Fast-Growing</div>
            </div>
            <div class="small-tabs__content centered" data-tab="1">
                <img src="/assets/images/client-logos/Enterprise-Kombi.svg" alt="" />
            </div>
            <div class="small-tabs__content centered" data-tab="2">
                    <img src="/assets/images/client-logos/Mittelstand-Kombi.svg" alt="" />
            </div>
            <div class="small-tabs__content centered" data-tab="3">
                <img src="/assets/images/client-logos/FastGrowing-Kombi.svg" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="section section--light-green-white">
    <div class="anchors mobile-hidden">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Für was interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#funktionen">Funktionen</a>
            <a href="#erweiterbarkeit">Erweiterbarkeit</a>
            <a href="#vorteile">Vorteile</a>
            <a href="#warum-callone">Warum CallOne?</a>
            <a href="#geschichten">Kundengeschichten</a>
        </div>
    </div>

    <div class="section__content section__content--wide" id="funktionen">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                <p><img src="/assets/images/icons_svg/solution-package.svg" alt="" /></p>
                <h1>Funktionen unserer Telefonanlage</h1>
                <p class="bigtext">TODO: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus tincidunt at eget eget. Scelerisque proin ultrices sed viverra amet. Euismod diam cursus rutrum vestibulum suspendisse. Vitae pretium consequat neque facilisis dignissim turpis mattis. Blandit.</p>
                <div class="btn-set">
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Anrufgruppen</a>
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Zeitsteuerungen</a>
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">BLF</a>
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Voicemail</a>
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Parallel Ringing</a>
                    <a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Rufumleitung</a>
                </div>
                <p>
                    <a href="#todo" class="btn btn--primary">Alle Funktionen entdecken</a>
                </p>
            </div>
            <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                <img src="/assets/images/illus/voip-telefonanlage-softphone.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="section section--white-grey-green-half-circle section--no-padding-top">
    <div class="section__content section__content--wide">
        <p class="centered">
            <img src="/assets/images/icons_svg/modules-icon.svg" alt="" />
        </p>

        <h1 class="centered">Mehr als nur eine Cloud-Telefonanlage</h1>
        <p class="centered bigtext">
            Wie alle unsere Telefonie-Produkte kann sie modular an Ihre <br />
            Unternehmensbedürfnisse angepasst werden.<br />
            <br />
            <br />
        </p>

        <h3 class="centered">Welches Modul hilft Ihren Geschäftsprozessen?</h3>

        <div class="co-grid">
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/callcenter-software-icon.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Callcenter Software</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Unsere Callcenter Software ist modular und funktioniert mit unserer oder Ihrer bestehenden Telefonanlage.</p>

                    <p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Bessere Businesstelefonie</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/menu-app-api.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <h4 style="margin-bottom:0">Kommunikations-APIs</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Kommunikation muss für Sie ohne Stress funktionieren. Passen Sie die CallOne Telefonanlage mit unseren offenen.</p>

                    <p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">Schneller Kunden bearbeiten</a></p>
                </div>
            </div>
            <div class="co-grid__col co-grid__col--4-xs">
                <div class="content-box content-box--white content-box--shadow content-box--small-padding">
                    <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                        <div class="co-grid__col co-grid__col--vcentered">
                            <img src="/assets/images/icons_svg/msteams-icon.svg" alt="" />
                        </div>
                        <div class="co-grid__col co-grid__col--fill co-grid__col--vcentered">
                            <div class="tag" style="--size:12px;--bg:#86EC16;--color:#000;--marginBottom:5px">Beliebtes Modul</div>
                            <h4 style="margin-bottom:0">Teams-Integration</h4>
                        </div>
                    </div>

                    <p style="margin-top:var(--gutter-xs)">Kommunikation muss für Sie ohne Stress funktionieren. Passen Sie die CallOne Telefonanlage mit unseren offenen.</p>

                    <p><a href="#todo" class="btn btn--border-bottom btn--arrow-right-small">MS Teams verbinden</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section--dark-green-black">
    <div class="section__content section__content--wide">
        TODO: Tabs
    </div>
</div>

<div class="section section--grey-white">
    <div class="section__content section__content--wide">
        TODO: Slider
    </div>
</div>

<?php
// $faqs->structured_data_get_code ();
// $faqs->html_get_code ();
?>