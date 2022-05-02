<?php
// Require libs
require_once(dirname(__FILE__).'/functions.inc.php');
require_once(dirname(__FILE__).'/faqs.inc.php');
require_once(dirname(__FILE__).'/jobs.inc.php');
require_once(dirname(__FILE__).'/products.inc.php');
require_once(dirname(__FILE__).'/session.inc.php');

// Default route/page data
define('DEFAULT_SITENAME', 'CallOne');
define('DEFAULT_LAYOUT', 'default.php');
define('DEFAULT_TITLE', 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern');
define('DEFAULT_META_DESCRIPTION', 'VoIP-Telefonanlage und Callcenter Software &quot;all-in-one&quot; mit CTI-Integration aus der deutschen Cloud. Keine Hardware oder Softphones notwendig. Jetzt testen!');
define('DEFAULT_OG_IMAGE_TEXT', 'Cloud Callcenter Software, VoIP-__Telefonanlagen');
define('DEFAULT_OG_IMAGE_BACKGROUND', 'default');
define('DEFAULT_OG_TITLE', DEFAULT_TITLE);
define('DEFAULT_SITEMAP_INCLUDE', true);
define('DEFAULT_SITEMAP_PRIORITY', '0.5');
define('DEFAULT_SITEMAP_CHANGE_FREQUENCY', 'weekly');

// Global site data
define('DOMAIN', 'https://'.@$_SERVER['HTTP_HOST']);
define('DIRECTORY_VIEWS', './views/de/');
define('DIRECTORY_LAYOUTS', './layouts/');


class Router {
    private static $routes;

    public static function add($uri, $view, $data = []) {
        self::$routes[] = new Route($uri, $view, $data);
    }

    public static function get_by_uri($uri) {
        // Remove query string if present
        $uri_parts = explode('?', $uri);
        $uri = $uri_parts[0];

        foreach (self::$routes as $route) {
            // Check if passed URI exists as route
            if ($route->uri == $uri)
                return $route; // Return page instance
        }

        return null;
    }

    public static function get_routes() {
        return self::$routes;
    }

    public static function get_sorted($property = 'sitemap_priority', $order = 'desc') {
        $routes = self::get_routes();
        usort($routes, function($a, $b) use ($property, $order) {
            $cmp = strcmp($a->{$property}, $b->{$property});
            return $order === 'asc' ? $cmp : -$cmp;
        });
        return $routes;
    }
}


class Route {
    // Page relevant data
    public $uri;
    public $view;
    public $layout = DEFAULT_LAYOUT;
    public $title = DEFAULT_TITLE;
    public $shorttitle;
    public $body_class;
    public $menu_position;

    // Meta relevant data
    public $meta_description = DEFAULT_META_DESCRIPTION;
    public $canonical;

    // Open graph data
    public $og_title = DEFAULT_OG_TITLE;
    public $og_image_background = DEFAULT_OG_IMAGE_BACKGROUND;
    public $og_image_text = DEFAULT_OG_IMAGE_TEXT;

    // Sitemap relevant data
    public $sitemap_include = DEFAULT_SITEMAP_INCLUDE;
    public $sitemap_priority = DEFAULT_SITEMAP_PRIORITY;
    public $sitemap_change_frequency = DEFAULT_SITEMAP_CHANGE_FREQUENCY;

    // Additionally passed data will be stored here
    public $additional = [];

    function __construct($uri, $view, $data = []) {
        $this->uri = $uri;
        $this->view = $view;

        foreach ($data as $key => $value) {
            // Check if passed data key exists as class property
            if (property_exists($this, $key)) {
                // Overwrite default value with passed value
                $this->{$key} = $value;
            } else {
                // Put key/data into additional data property
                $this->additional[$key] = $value;
            }
        }
    }
}

/* **************** **
** ** INDEX PAGE ** **
** **************** */
Router::add('/', 'index.php', [
    'title' => 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern',
    'meta_description' => 'VoIP-Telefonanlage und Callcenter Software &quot;all-in-one&quot; mit CTI-Integration aus der deutschen Cloud. Keine Hardware oder Softphones notwendig. Jetzt testen!',
    'og_image_text' => 'Cloud Callcenter Software, VoIP-__Telefonanlagen',
    'sitemap_priority' => '1.0'
]);

/* ******************* **
** ** MENU PRODUKTE ** **
** ******************* */
Router::add('/voip-telefonanlage', 'voip-telefonanlage.php', [
    'shorttitle' => 'VoIP Telefonanlage',
    'title' => 'VoIP-Telefonanlage – Cloud Telefonanlage, virtuelle Telefonanlage',
    'meta_description' => 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager',
    'og_image_text' => 'VoIP-Telefonanlage, Cloud und virtuelle Telefonanlage',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.9'
]);
Router::add('/callcenter-software', 'callcenter-software.php', [
    'shorttitle' => 'Callcenter-Software',
    'title' => 'Callcenter-Software, ACD, Kundenservice, Contact Center Software, Helpdesk',
    'meta_description' => 'Callcenter-Software mit Computer Telephony Integration (CTI), professionellem Warteschleifenmanagement, Callbackfunktion. Jetzt testen!',
    'og_image_text' => 'Callcenter-Software, ACD, Kundenservice, Contact Center Software',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.9'
]);
Router::add('/0800-lokal-nummern', 'rufnummern.php', [
    'shorttitle' => 'Rufnummern',
    'title' => 'Freecall 0800, Ortsnetz, international, Wunschrufnummer Deutschland',
    'meta_description' => ' ☎ 0800 Wunschnummer bestellen ☎ Internationale Rufnummern. Lokale, Ortsnetzrufnummern und Rufnummernblöcke im gesamten Bundesgebiet. Noch heute schalten!',
    'og_image_text' => 'Wunschrufnummer, Freecall 0800, international, Ortsnetz',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.9'
]);
Router::add('/ms-teams', 'ms-teams.php', [
    'shorttitle' => 'Microsoft Teams',
    'title' => 'Teams Telefonie: Die smarte Telefonie für Ihr Unternehmen',
    'meta_description' => 'Integrieren Sie Ihre Business-Telefonie in Microsoft Teams. Als Teams only oder in Kombination mit der CallOne Callcenter Software auf Ihre Ansprüche abgestimmt!',
    'menu_position' => 'produkte',
    'og_image_text' => 'Ihre Unternehmens-__telefonie in Microsoft-Teams',
    'sitemap_priority' => '0.9'
]);
Router::add('/softphone', 'softphone.php', [
    'shorttitle' => 'Softphone',
    'title' => 'Softphone: VoIP Telefon im Browser integriert',
    'meta_description' => 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren Lieblingsbrowser, nutzbar mit Ihrem Anbieter',
    'og_image_text' => 'VoIP Telefon im Browser integriert',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.8'
]);

/* ******************* **
** ** MENU LÖSUNGEN ** **
** ******************* */
Router::add('/call-tracking', 'calltracking.php', [
    'shorttitle' => 'Call-Tracking',
    'title' => 'Call-Tracking: Individuelle Rufnummern für Ihre Kunden',
    'meta_description' => ' Nutzen Sie Call-Tracking, um Anrufe auf Ihrer Hotline einer aktiven Websession zuzuordnen und mit Kundendaten anzureichern.',
    'og_image_text' => 'Individuelle Rufnummern für Ihre Kunden',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);
Router::add('/callcenter-bot', 'callcenter-bot.php', [
    'shorttitle' => 'Callcenter Bot',
    'title' => 'Callcenter Bot – KI-Sprachgesteuerte Auswahlmenüs IVR',
    'meta_description' => 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.',
    'og_image_text' => 'Callcenter Bot KI-Sprachgesteuerte Auswahlmenüs IVR',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.9'
]);
Router::add('/callcenter-software-apps', 'callcenter-software-apps.php', [
    'shorttitle' => 'Anbindungen und Apps',
    'title' => 'CRM und Ticketing kombiniert mit dem Telefon',
    'meta_description' => 'Ihr CRM- und andere Business-Lösungen sind in Ihre Telefonie integriert. Sie erstellen auf Knopfdruck CTI-Anbindungen.',
    'og_image_text' => 'CRM und Ticketing kombiniert mit dem Telefon',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);
Router::add('/callcenter-sprachanalyse', 'callcenter-sprachanalyse.php', [
    'shorttitle' => 'Sprachanalyse',
    'title' => 'Callcenter Software mit Analyse und Coaching in Sales & Kundenservice',
    'meta_description' => 'Verbessern Sie Ihren Sales & Service mit dem i2x Client. Sprachanalyse und Coaching in Echtzeit als Integration in der CallOne Callcenter Software.',
    'og_image_text' => 'Echtzeitsprachanalyse für besseren Sales und Service',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.9'
]);
Router::add('/statistiken', 'statistiken.php', [
    'shorttitle' => 'Statistiken',
    'title' => 'Call Center Software Statistiken | KPI, SLA mit BI-Integration',
    'meta_description' => 'CallOne liefert eine Call Center Software mit dem vielleicht umfänglichsten Angebot an statistischen Auswertungsmöglichkeiten. Wallboards, Tabellen, Einzelverbindungen, Anrufgründe Rohdaten und vieles mehr stehen in Echtzeit zur Verfügung.',
    'og_image_text' => 'Call Center Software Statistiken, KPI, SLA, BI-Integration',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);
Router::add('/telefonanlage-mit-warteschleife', 'telefonanlage-mit-warteschleife.php', [
    'shorttitle' => 'Smarte Warteschleifen',
    'title' => 'Cloud Telefonanlage mit virtueller Warteschleife',
    'meta_description' => 'Telefonanlage mit vielzähligen Funktionen rund um Ihre Warteschleifen: virtuelle Warten, eigene Warteschleifenmusik, kostenfreier Rückruf und Ansage der Wartedauer',
    'og_image_text' => 'Cloud Telefonanlage mit virtueller Warteschleife',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);
Router::add('/voip-api', 'voip-api.php', [
    'shorttitle' => 'Schnittstellen',
    'title' => 'Telefon Schnittstellen für alle Belange',
    'meta_description' => 'Schaffen Sie Anbindungen zu Ihrem CRM, BI oder ERP-System und nutzen Sie die Vorteile von Big Data.',
    'og_image_text' => 'Telefon Schnittstellen für alle Belange',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.6'
]);

/* ************************ **
** ** MENU CALLONE ** **
** ************************ */
Router::add('/customer-success', 'customer-success.php', [
    'shorttitle' => 'Customer Success',
    'title' => 'Effiziente Unternehmenstelefonie mit CallOne',
    'meta_description' => 'Top Service für Ihre Cloud Telefonanlage und Callcenter Software. CallOne bietet persönliche Beratung und Betreuung für Ihre Unternehmenstelefonie',
    'og_image_text' => 'Effiziente Unternehmens-__telefonie mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);
Router::add('/dsgvo-telekommunikation', 'dsgvo-telekommunikation.php', [
    'shorttitle' => 'Datenschutz und Sicherheit',
    'title' => 'Datenschutz in der Telekommunikation mit CallOne',
    'meta_description' => 'Gehen Sie mit Ihrer Cloud Telefonanlage auf Nummer sicher. CallOne hostet in Deutschland und bietet die vielleicht umfänglichsten Optionen beim Thema Datenschutz',
    'og_image_text' => 'Datenschutz in der Telekommunikation mit CallOne',
    'menu_position' => 'callone'
]);
Router::add('/ueber-uns', 'ueber-uns.php', [
    'shorttitle' => 'Über uns',
    'title' => 'CallOne ist ein inhabergeführtes Unternehmen für cloudbasierte Telefonie',
    'meta_description' => 'CallOne bietet cloudbasierte Telefonieprodukte. Einfach bedienbare VoIP-Telefonanlagen, professionelle cloudbasierte Callcenter Software. Wie können wir helfen?',
    'og_image_text' => 'CallOne bietet cloudbasierte Telefonieprodukte',
    'menu_position' => 'callone'
]);

/* ***************** **
** ** CASESTUDIES ** **
** ***************** */
Router::add('/case-study-check24', 'case-study-check24.php', [
    'shorttitle' => 'Check24',
    'title' => 'Callcenter Software und Tableau-Integration - Kundenservice bei Check24',
    'meta_description' => 'Callcenter Lösung beim Marktführer Check24. CallOne stellt umfassende VoIP-Telefonanlage und Callcenter Software mit offenen API für Kundenservice bereit',
    'og_image_text' => 'Check24 mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);
Router::add('/case-study-apodiscounter', 'case-study-apodiscounter.php', [
    'shorttitle' => 'apodiscounter',
    'title' => 'Anrufsteuerung im virtuellen Callcenter mittels REST-API und Webhooks',
    'meta_description' => 'Automatierung und Effizienz im telefonischen Kundenservice. Mit kompletter ERP-Integration steuert die Onlineapotheke Apodicounter sein virtuelles Callcenter',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'apodiscounter mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);
Router::add('/case-study-flaconi', 'case-study-flaconi.php', [
    'shorttitle' => 'Flaconi',
    'title' => 'VoIP-Telefonanlage und Callcenter Software für das gesamte Unternehmen',
    'meta_description' => 'Das Startup Flaconi setzt bei der VoIP-Telefonanlage komplett auf den Dienstleister CallOne. Callcenter Software, Rufnummern, SNOM-Telefone fürs Unternehmen',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'Flaconi mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);
Router::add('/case-study-niceshops', 'case-study-niceshops.php', [
    'shorttitle' => 'niceshops',
    'title' => 'Case Study: Die Telefonielösungen von niceshops',
    'meta_description' => 'Die individuelle Callcenter-Lösung des österreichischen E-Commerce-Unternehmens ✔ IP-Telefonie ✔ Freshdesk-Integration ✔ WebRTC ✔ 40 Shop-Hotlines',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'niceshops mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

/* ************** **
** ** KARRIERE ** **
** ************** */
Router::add('/karriere', 'karriere.php', [
    'shorttitle' => 'Offene Stellen',
    'title' => 'CallOne Karriere - Alle offenen Stellen',
    'meta_description' => 'Offene Stellen bei CallOne: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich jetzt!',
    'og_image_text' => 'CallOne Karriere Alle offenen Stellen',
    'menu_position' => 'callone'
]);
Router::add('/karriere-bei-callone', 'karriere-bei-callone.php', [
    'shorttitle' => 'Karriere bei CallOne',
    'title' => 'CallOne Karriere - Bei uns arbeiten',
    'meta_description' => 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen.',
    'og_image_text' => 'CallOne Karriere__Bei uns arbeiten',
    'menu_position' => 'callone'
]);
$jobs = jobs_load();
foreach ($jobs->jobs_get() as $job) {
    if (empty($job->url_get()))
        continue;
    Router::add($job->url_get(), 'karriere-details.php', [
        'shorttitle' => $job->category_get().' Karriere',
        'title' => 'CallOne Karriere - '.$job->title_get(),
        'meta_description' => $job->title_get().': '.$job->description_get(),
        'og_image_text' => $job->title_get().'__CallOne Karriere',
        'menu_position' => 'callone'
    ]);
}

/* ****************** **
** ** OTHERS (A-Z) ** **
** ****************** */
Router::add('/callcenter-einsparpotential', 'callcenter-einsparpotential.php', [
    'shorttitle' => 'Einsparpotential',
    'title' => 'Callcenter Software Einsparpotential berechnen',
    'meta_description' => 'Bares Geld mit Callcenter Software und VoIP Telefonanlage sparen. Berechnen Sie hier Ihr Einsparpotential!',
    'og_image_text' => 'Jetzt Ihr mögliches Einsparpotential berechnen',
]);
Router::add('/callcenter-software-features', 'callcenter-software-features.php', [
    'shorttitle' => 'Callcenter Software Features',
    'title' => 'Callcenter Software Features',
    'body_class' => 'bg-kundenservice',
    'og_image_text' => 'CallOne Callcenter Software Features'
]);
Router::add('/callcenter-software-funktionen', 'callcenter-software-funktionen.php', [
    'shorttitle' => 'Callcenter Software Funktionen',
    'title' => 'Vergleich Funktionen, Angebot Callcenter Software, CTI, Cloud, API',
    'meta_description' => 'Die vielleicht umfangreichste Auswahl an Funktionen im Bereich virtueller Telefonanlagen. Vergleichen Sie unser Angebot und sprechen Sie mit uns. Jetzt anrufen!',
    'og_image_text' => 'Die vielleicht umfangreichste Auswahl an Funktionen'
]);
Router::add('/callcenter-software-integrationen', 'callcenter-software-integrationen.php', [
    'shorttitle' => 'Integrationen',
    'title' => 'Integrieren Sie Anrufe in Ihre Businesstools und steuern Sie Anrufe bequem mit in Ihre CRM, Ticketing oder BI-Tool',
    'meta_description' => 'Verbinden Sie CRM, Analytics, Ihre Abrechnung und weitere Integrationen mit Ihrer Cloud Telefonanlage und Callcenter Software.',
    'og_image_text' => 'Integrieren Sie Anrufe in Ihre Businesstools',
    'sitemap_priority' => '0.8'
]);
Router::add('/cti-salesforce', 'cti/salesforce.php', [
    'shorttitle' => 'Salesforce',
    'title' => 'CallOne Salesforce Integration',
    'meta_description' => 'Geben Sie dem geballten Wissen und den starken Tools von Salesforce endlich eine Stimme! Integration von Anrufdaten und Click-to-Call sorgen für transparentere, schnellere und einfach bessere Prozesse.',
    'og_image_text' => 'CallOne Salesforce Integration',
    'body_class' => 'bg-karriere'
]);
Router::add('/customer-service-solutions', 'solutions-customer-service.php', [
    'shorttitle' => 'Customer Service Solutions',
    'title' => 'Callcenter Software ACD',
    'meta_description' => 'Cloud Callcenter-Plattform, angepasst auf Ihre Bedürfnisse, verknüpft mit CRM und Helpdesk',
    'og_image_text' => 'Callcenter Software ACD'
]);
Router::add('/datenschutz', 'datenschutz.php', [
    'shorttitle' => 'Datenschutz',
    'title' => 'CallOne Datenschutz - DSGVO, Cloud EU',
    'meta_description' => 'CallOne bietet VoIP-Telefonanlagen und Callcenter Lösungen aus der deutschen Cloud. Datenschutz hat für uns oberste Priorität. ✔  DSGVO-konform  ✔',
    'og_image_text' => 'CallOne Datenschutz, DSGVO, Cloud EU',
]);
Router::add('/download', 'downloads.php', [
    'shorttitle' => 'Downloads',
    'title' => 'CallOne Downloads',
    'meta_description' => 'Profitieren Sie von den cloudbasierten Telekommunikationslösungen von CallOne für Unternehmen. Meistern Sie digitale Herausforderungen.',
    'og_image_text' => 'CallOne Downloads'
]);
Router::add('/freshdesk-callcenter-software', 'cti/freshdesk.php', [
    'shorttitle' => 'Freshdesk',
    'title' => 'Freshdesk in Verbindung mit Call Center Software & VoIP-Telefonanlage',
    'meta_description' => 'Freshdesk Ticketing mit Verbindung mit Call Center Software und VoIP-Telefonanlage. CTI Integration mit einem der führenden CRM und Ticketing-Tool',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'Freshdesk in Verbindung mit Call Center Software'
]);
Router::add('/impressum', 'impressum.php', [
    'shorttitle' => 'Impressum',
    'title' => 'CallOne Impressum - Callcenter Software und VoIP-Telefonanlagen',
    'meta_description' => 'CallOne ist ein inhabergeführtes Unternehmen mit Sitz in Berlin, Potsdam und Mainz. Wir bieten hochwertige cloudbasierte Telefonanlagen für Sales und Service',
    'og_image_text' => 'CallOne Impressum Rechtliches',
    'body_class' => 'bg-landingpages'
]);
Router::add('/it-helpdesk-solutions', 'solutions-helpdesk.php', [
    'shorttitle' => 'IT Helpdesk',
    'title' => 'Integriertes Telefon für IT Helpdesk Software',
    'meta_description' => 'Telefonlösung für Ihren IT-Helpdesk und Servicedesk zur effizienten Bearbeitung von Tickets',
    'og_image_text' => 'Integriertes Telefon für IT Helpdesk Software'
]);
Router::add('/kontakt', 'contact.php', [
    'shorttitle' => 'Kontakt',
    'title' => 'CallOne kontaktieren – von modernen Telekommunikationslösungen profitieren',
    'meta_description' => 'Ihr Kontakt für eine Cloud Telefonanlage, Callcenter Software oder passende Integrationen für Ihre Telekommunikationslösung.',
    'og_image_text' => 'CallOne Kontakt'
]);
Router::add('/microsip', 'microsip.php', [
    'shorttitle' => 'MicroSIP',
    'title' => 'MicroSIP vorkonfiguriert',
    'meta_description' => 'Um Dir den Konfigurationsaufwand zu ersparen, bieten wir einen direkt vorkonfigurierten SIP-Client an.',
    'og_image_text' => 'MicroSIP vorkonfiguriert',
    'body_class' => 'full-bg background-transition'
]);
Router::add('/omnichannel-callcenter', 'omnichannel-callcenter.php', [
    'shorttitle' => 'Omnichannel',
    'title' => 'Omnichannel Callcenter',
    'og_image_text' => 'Omnichannel Callcenter'
]);
Router::add('/omr', 'omr-goodie.php', [
    'shorttitle' => 'OMR Podcast',
    'title' => 'OMR Goodie',
    'meta_description' => 'OMR Goodie',
    'og_image_text' => 'OMR Goodie',
    'sitemap_include' => false
]);
Router::add('/sales-solutions', 'solutions-sales.php', [
    'shorttitle' => 'Sales Solutions',
    'title' => 'Outbound Callcenter Software',
    'meta_description' => 'Outbound Sales am Telefon mit der Callcenter Software von CallOne und Ihrem Businesslösung verbunden',
    'og_image_text' => 'Outbound Callcenter Software'
]);
Router::add('/salesforce', 'salesforce.php', [
    'shorttitle' => 'Salesforce',
    'title' => 'Salesforce Integration',
    'meta_description' => 'Salesforce Integration für Ihre Callcenter Software. Die CallOne CTI App für Salesforce Lightning & Classis.',
    'og_image_text' => 'Salesforce'
]);
Router::add('/tableau-callcenter-connector', 'cti/tableau.php', [
    'shorttitle' => 'Tableau Connector',
    'title' => 'Tableau Callcenter Connector - Integrieren Sie Daten und Callcenter-KPI',
    'meta_description' => 'Integrieren Sie mit dem CallOne Tableau Connector alle anrufspezifischen Telefoniedaten und Callcenter-KPIs in Ihre Tableau Dashboards und Datenanalysen',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'Tableau Callcenter Connector'
]);
Router::add('/voip-telefonanlagen-funktionen', 'voip-telefonanlagen-funktionen.php', [
    'shorttitle' => 'Telefonanlage Funktionen',
    'title' => 'Features, Funktionen, Vergleich VoIP-Telefonanlage '.date('Y'),
    'meta_description' => 'Alle Funktionen im Überblick, vergleichen Sie und unsere Customer Success Manager helfen Ihnen bei der Auswahl ihres perfekten Settings. Rufen Sie uns an!',
    'og_image_text' => 'VoIP-Telefonanlage Funktionen im Vergleich '.date('Y')
]);
Router::add('/zendesk-cti-ticketing', 'cti/zendesk.php', [
    'shorttitle' => 'Zendesk CTI',
    'title' => 'CallOne Zendesk Integration',
    'meta_description' => 'Bester Kundenservice und effiziente Agenten — integrieren Sie Voice Tickets in Zendesk für ein optimales Kundenerlebnis im Callcenter auf allen Kanälen',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'CallOne Zendesk Integration'
]);

/* ********************* **
** ** DEBUGGING PAGES ** **
** ********************* */
Router::add('/tools/components', 'tools/components.php', [
    'title' => 'Components',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);
Router::add('/tools/routes', 'tools/routes-list.php', [
    'title' => 'Routes List',
    'layout' => 'clean.php',
    'sitemap_include' => false
]);
Router::add('/tools/assets', 'tools/assets.php', [
    'title' => 'CallOne Assets',
    'layout' => 'clean.php',
    'sitemap_include' => false
]);
Router::add('/tools/screensize', 'tools/screensize.php', [
    'title' => 'Screen Size',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);

/* *************** **
** ** ERROR 404 ** **
** *************** */
Router::add('/404', '404.php', [
    'title' => '404 - Die Seite konnte nicht gefunden werden!',
    'body_class' => 'bg-index',
    'sitemap_include' => false
]);
?>
