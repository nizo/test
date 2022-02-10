<?php
// Require libs
require_once('./libs/functions.inc.php');
require_once('./libs/faqs.inc.php');
require_once('./libs/jobs.inc.php');
require_once('./libs/products.inc.php');
require_once('./libs/session.inc.php');

// Default route/page data
define('DEFAULT_LAYOUT', 'default.php');
define('DEFAULT_TITLE', 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern');
define('DEFAULT_META_TITLE', DEFAULT_TITLE);
define('DEFAULT_META_DESCRIPTION', 'VoIP-Telefonanlage und Callcenter Software &quot;all-in-one&quot; mit CTI-Integration aus der deutschen Cloud. Keine Hardware oder Softphones notwendig. Jetzt testen!');
define('DEFAULT_META_KEYWORDS', 'Software, callone, callcenter, telefonanlage, voip, cloud, rufnummern, sales, kundenservice, Unternehmen, integration, api, schnittstellen, crm, telefonie, lösung, call, center');
define('DEFAULT_OG_IMAGE_TEXT', 'Cloud Callcenter Software, VoIP-__Telefonanlagen');
define('DEFAULT_OG_IMAGE_BACKGROUND', 'default');
define('DEFAULT_OG_TITLE', DEFAULT_META_TITLE);
define('DEFAULT_SITEMAP_INCLUDE', true);
define('DEFAULT_SITEMAP_PRIORITY', '0.5');
define('DEFAULT_SITEMAP_CHANGE_FREQUENCY', 'weekly');

// Global site data
define('DOMAIN', 'https://'.$_SERVER['HTTP_HOST']);
define('DIRECTORY_VIEWS', './views/de/');
define('DIRECTORY_LAYOUTS', './layouts/');


class Router {
    private static $routes;

    public static function add($uri, $view, $data = []) {
        self::$routes[] = new Route($uri, $view, $data);
    }

    public static function get_by_uri($uri) {
        foreach (self::$routes as $route) {
            // Check if passed URI exists as route
            if ($route->uri == $uri)
                return $route; // Return page instance
        }

        // Return status 404 and 404 route if no route could be found
        header('HTTP/1.0 404 Not Found');
        return self::get_by_uri('/404');
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
    public $body_class;
    public $menu_position;

    // Meta relevant data
    public $meta_title = DEFAULT_META_TITLE;
    public $meta_description = DEFAULT_META_DESCRIPTION;
    public $meta_keywords = DEFAULT_META_KEYWORDS;
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


// Debugging pages
Router::add('/components', 'components.php', [
    'title' => 'Components',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);

Router::add('/routes', 'routes-list.php', [
    'title' => 'Routes List',
    'layout' => 'clean.php',
    'sitemap_include' => false
]);

Router::add('/icons', 'icons.php', [
    'title' => 'Icons',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);

Router::add('/screensize', 'screensize.php', [
    'title' => 'Scree Size',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);

Router::add('/statistics', 'statistics.php', [
    'title' => 'Statistics',
    'layout' => 'clean.php',
    'body_class' => 'components--scrollbar',
    'sitemap_include' => false
]);

// Page Routes
Router::add('/', 'index.php', [
    'title' => 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern',
    'meta_description' => 'VoIP-Telefonanlage und Callcenter Software &quot;all-in-one&quot; mit CTI-Integration aus der deutschen Cloud. Keine Hardware oder Softphones notwendig. Jetzt testen!',
    'meta_keywords' => 'Software, callone, callcenter, telefonanlage, voip, cloud, rufnummern, sales, kundenservice, Unternehmen, integration, api, schnittstellen, crm, telefonie, lösung, call, center',
    'og_image_text' => 'Cloud Callcenter Software, VoIP-__Telefonanlagen',
    'sitemap_priority' => '1.0'
]);

Router::add('/event', 'event.php', [
    'title' => 'Bestätigung Ihrer persönlichen Einladung zur CallOne Lounge',
    'body_class' => 'bg-sales',
    'sitemap_include' => false
]);

Router::add('/datenschutz', 'datenschutz.php', [
    'title' => 'CallOne Datenschutz - DSGVO, Cloud EU',
    'meta_description' => 'CallOne bietet VoIP-Telefonanlagen und Callcenter Lösungen aus der deutschen Cloud. Datenschutz hat für uns oberste Priorität. ✔  DSGVO-konform  ✔',
    'og_image_text' => 'CallOne Datenschutz, DSGVO, Cloud EU',
    'body_class' => 'bg-landingpages',
    'menu_position' => 'callone'
]);

Router::add('/statistiken', 'statistiken.php', [
    'title' => 'Call Center Software Statistiken | KPI, SLA mit BI-Integration',
    'meta_description' => 'CallOne liefert eine Call Center Software mit dem vielleicht umfänglichsten Angebot an statistischen Auswertungsmöglichkeiten. Wallboards, Tabellen, Einzelverbindungen, Anrufgründe Rohdaten und vieles mehr stehen in Echtzeit zur Verfügung.',
    'og_image_text' => 'Call Center Software Statistiken, KPI, SLA, BI-Integration',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);

Router::add('/impressum', 'impressum.php', [
    'title' => 'CallOne Impressum - Callcenter Software und VoIP-Telefonanlagen',
    'meta_description' => 'CallOne ist ein inhabergeführtes Unternehmen mit Sitz in Berlin, Potsdam und Mainz. Wir bieten hochwertige cloudbasierte Telefonanlagen für Sales und Service',
    'og_image_text' => 'CallOne Impressum Rechtliches',
    'body_class' => 'bg-landingpages'
]);

Router::add('/microsip', 'microsip.php', [
    'title' => 'MicroSIP vorkonfiguriert',
    'meta_description' => 'Um Dir den Konfigurationsaufwand zu ersparen, bieten wir einen direkt vorkonfigurierten SIP-Client an.',
    'meta_keywords' => 'sip, sip-client, microsip, cloud telefonanlage, api, microsip einrichten, callone, schnittstellen, telefonie, callcenter software, callcenter,voip, voip telefonanlage',
    'og_image_text' => 'MicroSIP vorkonfiguriert',
    'body_class' => 'full-bg background-transition'
]);

Router::add('/download', 'downloads.php', [
    'title' => 'CallOne Downloads',
    'meta_description' => 'Profitieren Sie von den cloudbasierten Telekommunikationslösungen von CallOne für Unternehmen. Meistern Sie digitale Herausforderungen.',
    'og_image_text' => 'CallOne Downloads'
]);

Router::add('/preiskalkulator', 'preiskalkulator.php', [
    'title' => 'Jetzt Preis Ihrer Callcenter-Lösung, VoIP-Telefonie-Lösung berechnen',
    'meta_description' => 'Berechnen Sie den Preis Ihrer VoIP-Telefonanlage und Callcenter-Lösung passend zu Ihren Anforderungen. CallOne cloudbasierte Telefonanlagen für Sales und Service',
    'meta_keywords' => 'call center, software, callcenter, lösung, voip-telefonanlage, voip, telefonanlage, rufnummern, schnittstellen, integrationen, preis, preise, rechner, preiskalkulator, berechnen, kosten',
    'body_class' => 'full-bg background-transition',
    'og_image_text' => 'Jetzt Preis Ihrer Callcenter-Lösung berechnen',
    'menu_position' => 'produkte'
]);

Router::add('/callcenter-software', 'callcenter-software.php', [
    'title' => 'Callcenter-Software, ACD, Kundenservice, Contact Center Software, Helpdesk',
    'meta_description' => 'Callcenter-Software mit Computer Telephony Integration (CTI), professionellem Warteschleifenmanagement, Callbackfunktion. Jetzt testen!',
    'meta_keywords' => 'callcenter software, call center software, ACD, contact center software, helpdesk, computer telephony integration, cti, warteschleifenmanagement, callbackfuntion, kostenlos testen',
    'og_image_text' => 'Callcenter-Software, ACD, Kundenservice, Contact Center Software',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.9'
]);

Router::add('/callcenter-software-features', 'callcenter-software-features.php', [
    'title' => 'Callcenter Software Features',
    'body_class' => 'bg-kundenservice',
    'og_image_text' => 'CallOne Callcenter Software Features'
]);

Router::add('/telefonanlage-mit-warteschleife', 'warteschleifen-management.php', [
    'title' => 'Cloud Telefonanlage mit virtueller Warteschleife',
    'meta_description' => 'Telefonanlage mit vielzähligen Funktionen rund um Ihre Warteschleifen: virtuelle Warten, eigene Warteschleifenmusik, kostenfreier Rückruf und Ansage der Wartedauer',
    'og_image_text' => 'Cloud Telefonanlage mit virtueller Warteschleife',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);

Router::add('/customer-success', 'customer-success.php', [
    'title' => 'Effiziente Unternehmenstelefonie mit CallOne',
    'meta_description' => 'Top Service für Ihre Cloud Telefonanlage und Callcenter Software. CallOne bietet persönliche Beratung und Betreuung für Ihre Unternehmenstelefonie',
    'og_image_text' => 'Effiziente Unternehmens-__telefonie mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

Router::add('/dsgvo-telekommunikation', 'data-protection.php', [
    'title' => 'Datenschutz in der Telekommunikation mit CallOne',
    'meta_description' => 'Gehen Sie mit Ihrer Cloud Telefonanlage auf Nummer sicher. CallOne hostet in Deutschland und bietet die vielleicht umfänglichsten Optionen beim Thema Datenschutz',
    'og_image_text' => 'Datenschutz in der Telekommunikation mit CallOne',
    'menu_position' => 'callone'
]);

Router::add('/0800-lokal-nummern', 'rufnummern.php', [
    'title' => 'Freecall 0800, Ortsnetz, international, Wunschrufnummer Deutschland',
    'meta_description' => ' ☎ 0800 Wunschnummer bestellen ☎ Internationale Rufnummern. Lokale, Ortsnetzrufnummern und Rufnummernblöcke im gesamten Bundesgebiet. Noch heute schalten!',
    'og_image_text' => 'Wunschrufnummer, Freecall 0800, international, Ortsnetz',
    'body_class' => 'bg-preisanfrage',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.9'
]);

Router::add('/cti-salesforce', 'cti/salesforce.php', [
    'title' => 'CallOne Salesforce Integration',
    'meta_description' => 'Geben Sie dem geballten Wissen und den starken Tools von Salesforce endlich eine Stimme! Integration von Anrufdaten und Click-to-Call sorgen für transparentere, schnellere und einfach bessere Prozesse.',
    'og_image_text' => 'CallOne Salesforce Integration',
    'body_class' => 'bg-karriere'
]);

Router::add('/tableau-callcenter-connector', 'cti/tableau.php', [
    'title' => 'Tableau Callcenter Connector - Integrieren Sie Daten und Callcenter-KPI',
    'meta_description' => 'Integrieren Sie mit dem CallOne Tableau Connector alle anrufspezifischen Telefoniedaten und Callcenter-KPIs in Ihre Tableau Dashboards und Datenanalysen',
    'meta_keywords' => 'Integration, Tableau, Callcenter, KPI, Dashboard, Connector',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'Tableau Callcenter Connector'
]);

Router::add('/freshdesk-callcenter-software', 'cti/freshdesk.php', [
    'title' => 'Freshdesk in Verbindung mit Call Center Software & VoIP-Telefonanlage',
    'meta_description' => 'Freshdesk Ticketing mit Verbindung mit Call Center Software und VoIP-Telefonanlage. CTI Integration mit einem der führenden CRM und Ticketing-Tool',
    'meta_keywords' => 'freshdesk, callcenter, voip, telefonanlage, ticketing, cti, integration, crm, tool',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'Freshdesk in Verbindung mit Call Center Software'
]);

Router::add('/zendesk-cti-ticketing', 'cti/zendesk.php', [
    'title' => 'CallOne Zendesk Integration',
    'meta_description' => 'Bester Kundenservice und effiziente Agenten — integrieren Sie Voice Tickets in Zendesk für ein optimales Kundenerlebnis im Callcenter auf allen Kanälen',
    'body_class' => 'bg-karriere',
    'og_image_text' => 'CallOne Zendesk Integration'
]);

Router::add('/voip-telefonanlage', 'voip-telefonanlage.php', [
    'title' => 'VoIP-Telefonanlage – Cloud Telefonanlage, virtuelle Telefonanlage',
    'meta_description' => 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager',
    'og_image_text' => 'VoIP-Telefonanlage, Cloud und virtuelle Telefonanlage',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.9'
]);

Router::add('/call-tracking', 'calltracking.php', [
    'title' => 'Call-Tracking: Individuelle Rufnummern für Ihre Kunden',
    'meta_description' => ' Nutzen Sie Call-Tracking, um Anrufe auf Ihrer Hotline einer aktiven Websession zuzuordnen und mit Kundendaten anzureichern.',
    'meta_keywords' => 'call, tracking, browsing, individuelle, rufnummern, websession, kunden, hotline, kundendaten, anrufe, customer journey',
    'body_class' => 'bg-landingpages',
    'og_image_text' => 'Individuelle Rufnummern für Ihre Kunden',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.8'
]);

Router::add('/callcenter-bot', 'callcenter-bot.php', [
    'title' => 'Callcenter Bot – KI-Sprachgesteuerte Auswahlmenüs IVR',
    'meta_description' => 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.',
    'meta_keywords' => 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'Callcenter Bot KI-Sprachgesteuerte Auswahlmenüs IVR',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.9'
]);

Router::add('/callcenter-software-funktionen', 'callcenter-software-funktionen.php', [
    'title' => 'Vergleich Funktionen, Angebot Callcenter Software, CTI, Cloud, API',
    'meta_description' => 'Die vielleicht umfangreichste Auswahl an Funktionen im Bereich virtueller Telefonanlagen. Vergleichen Sie unser Angebot und sprechen Sie mit uns. Jetzt anrufen!',
    'body_class' => 'bg-preisanfrage',
    'og_image_text' => 'Die vielleicht umfangreichste Auswahl an Funktionen'
]);

Router::add('/voip-telefonanlagen-funktionen', 'voip-telefonanlagen-funktionen.php', [
    'title' => 'Features, Funktionen, Vergleich VoIP-Telefonanlage '.date('Y'),
    'meta_description' => 'Alle Funktionen im Überblick, vergleichen Sie und unsere Customer Success Manager helfen Ihnen bei der Auswahl ihres perfekten Settings. Rufen Sie uns an!',
    'body_class' => 'bg-preisanfrage',
    'og_image_text' => 'VoIP-Telefonanlage Funktionen im Vergleich '.date('Y')
]);

Router::add('/referenzen', 'referenzen.php', [
    'title' => 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'CallOne Referenzen'
]);

Router::add('/ueber-uns', 'ueber-uns.php', [
    'title' => 'CallOne ist ein inhabergeführtes Unternehmen für cloudbasierte Telefonie',
    'meta_description' => 'CallOne bietet cloudbasierte Telefonieprodukte. Einfach bedienbare VoIP-Telefonanlagen, professionelle cloudbasierte Callcenter Software. Wie können wir helfen?',
    'og_image_text' => 'CallOne bietet cloudbasierte Telefonieprodukte',
    'menu_position' => 'callone'
]);

Router::add('/case-study-check24', 'case-study-check24.php', [
    'title' => 'Callcenter Software und Tableau-Integration - Kundenservice bei Check24',
    'meta_description' => 'Callcenter Lösung beim Marktführer Check24. CallOne stellt umfassende VoIP-Telefonanlage und Callcenter Software mit offenen API für Kundenservice bereit',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'Check24 mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

Router::add('/case-study-apodiscounter', 'case-study-apodiscounter.php', [
    'title' => 'Anrufsteuerung im virtuellen Callcenter mittels REST-API und Webhooks',
    'meta_description' => 'Automatierung und Effizienz im telefonischen Kundenservice. Mit kompletter ERP-Integration steuert die Onlineapotheke Apodicounter sein virtuelles Callcenter',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'apodiscounter mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

Router::add('/case-study-flaconi', 'case-study-flaconi.php', [
    'title' => 'VoIP-Telefonanlage und Callcenter Software für das gesamte Unternehmen',
    'meta_description' => 'Das Startup Flaconi setzt bei der VoIP-Telefonanlage komplett auf den Dienstleister CallOne. Callcenter Software, Rufnummern, SNOM-Telefone fürs Unternehmen',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'Flaconi mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

Router::add('/case-study-niceshops', 'case-study-niceshops.php', [
    'title' => 'Case Study: Die Telefonielösungen von niceshops',
    'meta_description' => 'Die individuelle Callcenter-Lösung des österreichischen E-Commerce-Unternehmens ✔ IP-Telefonie ✔ Freshdesk-Integration ✔ WebRTC ✔ 40 Shop-Hotlines',
    'meta_keywords' => 'niceshops, Telefonielösung, Callcenter-Lösung, E-Commerce, IP-Telefonie, Freshdesk-Integration, webRTC, Hotline',
    'body_class' => 'bg-casestudy',
    'og_image_text' => 'niceshops mit CallOne',
    'menu_position' => 'callone',
    'sitemap_priority' => '0.7'
]);

Router::add('/customer-service-solutions', 'solutions-customer-service.php', [
    'title' => 'Callcenter Software ACD | CallOne',
    'meta_description' => 'Cloud Callcenter-Plattform, angepasst auf Ihre Bedürfnisse, verknüpft mit CRM und Helpdesk',
    'meta_keywords' => 'Kundenservice, Helpdesk, Inbound, ACD, Callcenter Software, Cloud, ACD, Contact Center, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage',
    'og_image_text' => 'Callcenter Software ACD'
]);

Router::add('/sales-solutions', 'solutions-sales.php', [
    'title' => 'Outbound Callcenter Software | CallOne',
    'meta_description' => 'Outbound Sales am Telefon mit der Callcenter Software von CallOne und Ihrem Businesslösung verbunden',
    'meta_keywords' => 'Predictive Dialing, Outdial, Telefonlösung, Speed dial, Predictive Dialer, eingehend, Callcenter-Software, Voip, gehosteter Dialer, virtuelles Callcenter, Web-Dialer, Online-Dialer, Cloud-Dialer, Cloud-Dialer-System, Power-Dialer, Telemarketing-Software, Telemarketing-Dialing, Auto-Dialing-Software, Kundenanrufsoftware',
    'og_image_text' => 'Outbound Callcenter Software'
]);

Router::add('/it-helpdesk-solutions', 'solutions-helpdesk.php', [
    'title' => 'Integriertes Telefon für IT Helpdesk Software | CallOne',
    'meta_description' => 'Telefonlösung für Ihren IT-Helpdesk und Servicedesk zur effizienten Bearbeitung von Tickets',
    'meta_keywords' => 'Kundenservice, Helpdesk, IT, Support, Inbound, Outbound, CRM, ACD, Callcenter Software, Cloud, Tickets, Servicedesk, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage',
    'og_image_text' => 'Integriertes Telefon für IT Helpdesk Software'
]);

Router::add('/callcenter-software-integrationen', 'callcenter-software-integrationen.php', [
    'title' => 'Integrieren Sie Anrufe in Ihre Businesstools und steuern Sie Anrufe bequem mit in Ihre CRM, Ticketing oder BI-Tool',
    'meta_description' => 'Verbinden Sie CRM, Analytics, Ihre Abrechnung und weitere Integrationen mit Ihrer Cloud Telefonanlage und Callcenter Software.',
    'meta_keywords' => 'CRM, ERP, BI, API, Webhook, Rest-API, Zendesk, Salesforce, Pipedrive, Jira, Browser Extension, Chrome, ACD, Dialer, Callcenter Software, Telefon, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage',
    'og_image_text' => 'Integrieren Sie Anrufe in Ihre Businesstools',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);

Router::add('/callcenter-software-apps', 'callcenter-software-apps.php', [
    'title' => 'CRM und Ticketing kombiniert mit dem Telefon | CallOne ',
    'meta_description' => 'Telefon integriert in Ihre CRM- und Ticketinglösung auf Knopfdruck freigeschaltet',
    'meta_keywords' => 'CTI, Apps, Integration, Voice, Zendesk, Salesforce, Jira, Pipedrive, Browser Extension, CRM, ERP, BI, API, Webhook, Rest-API, Chrome, ACD, Dialer, Callcenter Software, Telefon, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage',
    'og_image_text' => 'CRM und Ticketing kombiniert mit dem Telefon',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.8'
]);

Router::add('/voip-api', 'voip-api.php', [
    'title' => 'Telefon Schnittstellen für alle Belange | CallOne',
    'meta_description' => 'Schaffen Sie Anbindungen zu Ihrem CRM, BI oder ERP-System und nutzen Sie die Vorteile von Big Data.',
    'meta_keywords' => 'CTI, Apps, Integration, Voice, Zendesk, Salesforce, Jira, Pipedrive, Browser Extension, CRM, ERP, BI, API, Webhook, Rest-API, Chrome, ACD, Dialer, Callcenter Software, Telefon',
    'og_image_text' => 'Telefon Schnittstellen für alle Belange',
    'menu_position' => 'loesungen',
    'sitemap_priority' => '0.6'
]);

Router::add('/salesforce', 'salesforce.php', [
    'title' => 'Salesforce Integration | CallOne',
    'meta_description' => 'Salesforce Integration für Ihre Callcenter Software. Die CallOne CTI App für Salesforce Lightning & Classis.',
    'og_image_text' => 'Salesforce'
]);

Router::add('/softphone', 'softphone.php', [
    'title' => 'VoIP Telefon im Browser integriert | CallOne Softphone',
    'meta_description' => 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren Lieblingsbrowser, nutzbar mit Ihrem Anbieter',
    'meta_keywords' => 'Microsoft TEAMS, VoIP, SIP Phone, Softphone, 1-Click, SBC, Sipgate, Placetel, Telekom, Cloud Telefonanlage, Telefonieren mit dem PC, PBX',
    'og_image_text' => 'VoIP Telefon im Browser integriert',
    'menu_position' => 'produkte',
    'sitemap_priority' => '0.8'
]);

Router::add('/omr', 'omr-goodie.php', [
    'title' => 'OMR Goodie',
    'meta_description' => 'OMR Goodie',
    'og_image_text' => 'OMR Goodie',
    'sitemap_include' => false
]);

Router::add('/kontakt', 'contact.php', [
    'title' => 'CallOne kontaktieren – von modernen Telekommunikationslösungen profitieren',
    'meta_description' => 'Ihr Kontakt für eine Cloud Telefonanlage, Callcenter Software oder passende Integrationen für Ihre Telekommunikationslösung.',
    'og_image_text' => 'CallOne Kontakt'
]);

// Job Routes Start
Router::add('/karriere', 'karriere.php', [
    'title' => 'CallOne Karriere - Alle offenen Stellen',
    'meta_description' => 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen.',
    'og_image_text' => 'CallOne Karriere Alle offenen Stellen',
    'menu_position' => 'callone'
]);

Router::add('/karriere-bei-callone', 'karriere-bei-callone.php', [
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
        'title' => 'CallOne Karriere - '.$job->title_get(),
        'meta_description' => $job->title_get().': '.$job->description_get(),
        'og_image_text' => $job->title_get().'__CallOne Karriere',
        'menu_position' => 'callone'
    ]);
}
// Job Routes End

Router::add('/404', '404.php', [
    'title' => '404 - Die Seite konnte nicht gefunden werden!',
    'body_class' => 'bg-index',
    'sitemap_include' => false
]);
?>