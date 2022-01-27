<?php
class Router {
  private $routes = [];

  public function __construct() {
      require_once('./libs/functions.php');

      require_once('./libs/faqs.php');
      require_once('./libs/jobs.php');
      require_once('./libs/products.php');
      require_once('./libs/session.inc.php');
  }

  public function addRoute($method, $url, $callback) {
    $this->routes[] = array(
      'method' => $method,
      'url' => $url,
      'callback' => $callback
    );
  }

  public function serveRoutes($OVERRIDE_REQUEST_METHOD=null, $OVERRIDE_REQUEST_URI=null) {
    $reqMet = empty ($OVERRIDE_REQUEST_METHOD) ? $_SERVER['REQUEST_METHOD'] : $OVERRIDE_REQUEST_METHOD;
    $reqUrl = empty ($OVERRIDE_REQUEST_URI) ? $_SERVER['REQUEST_URI'] : $OVERRIDE_REQUEST_URI;

    foreach ($this->routes as $route) {
      $pattern = preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['url'], '@'));
      $pattern = "@^$pattern/?$@D";
      $matches = array();

      $reqUrlParts = explode ('?', $reqUrl);
      $reqUrl = $reqUrlParts[0];

      if ($reqMet == $route['method'] && preg_match($pattern, $reqUrl, $matches)) {
        array_shift($matches);
        call_user_func_array($route['callback'], array ($reqUrl));
        return true;
      }
    }

    return false;
  }
}


$r = new Router();
$GLOBALS['url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
    "https" : "http") . "://" . $_SERVER['HTTP_HOST'];


// Debug Widgets page
$r->addRoute('GET', '/widgets', function() {
  $title = 'Widgets';
  $description = '';
  $keywords = '';
  $background = 'blue';
  require_once('./layouts/header.php');
  require_once('./views/de/widgets.php');
  require_once('./layouts/footer.php');
});
$r->addRoute('GET', '/components', function() {
  $title = 'Components';
  $description = '';
  $keywords = '';
  $background = 'components--scrollbar';
  require_once('./layouts/header-components.php');
  require_once('./views/de/components.php');
  require_once('./layouts/footer-components.php');
});
$r->addRoute('GET', '/icons', function() {
  $title = 'Icons';
  $description = '';
  $keywords = '';
  $background = 'components--scrollbar';
  require_once('./layouts/header-components.php');
  require_once('./views/de/icons.php');
  require_once('./layouts/footer-components.php');
});
$r->addRoute('GET', '/screensize', function() {
  $title = 'Screen Size';
  $description = '';
  $keywords = '';
  $background = 'components--scrollbar';
  require_once('./layouts/header-components.php');
  require_once('./views/de/screensize.php');
  require_once('./layouts/footer-components.php');
});
$r->addRoute('GET', '/statistics', function() {
  $title = 'Statistics';
  $description = '';
  $keywords = '';
  $background = 'components--scrollbar';
  require_once('./layouts/header-components.php');
  require_once('./views/de/statistics.php');
  require_once('./layouts/footer-components.php');
});

$r->addRoute('GET', '/components_overview', function() {
  $title = 'components_overview';
  $description = '';
  $keywords = '';
  $background = '';
  require_once('./layouts/header.php');
  require_once('./views/de/components_overview.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/testseite', function() {
  $title = 'Testseite CallOne';
  $description = '';
  $keywords = '';
  $background = '';
  require_once('./layouts/header.php');
  require_once('./views/de/testseite.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/event', function() {
  $title = 'Bestätigung Ihrer persönlichen Einladung zur CallOne Lounge';
  $description = '';
  $keywords = '';
  $background = 'bg-sales';
  require_once('./layouts/header.php');
  require_once('./views/de/event.php');
  require_once('./layouts/footer.php');
});
        
$r->addRoute('GET', '/', function() {
  $title = 'Cloud Callcenter Software, VoIP-Telefonanlagen, weltweite Rufnummern';
  $description = 'VoIP-Telefonanlage und Callcenter Software &quot;all-in-one&quot; mit CTI-Integration aus der deutschen Cloud. Keine Hardware oder Softphones notwendig. Jetzt testen!';
  $keywords = 'Software,callone,callcenter,telefonanlage,voip,cloud,rufnummern,sales,kundenservice,Unternehmen,integration,api,schnittstellen,crm,telefonie,lösung,call,center';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/';
  $ogImageText = 'Cloud Callcenter Software, VoIP-Telefonanlagen';
  $ogImageBackground = 'default';
  require_once('./layouts/header.php');
  require_once('./views/de/index.php');
  require_once('./layouts/footer.php');
});

// FIXME: wofür ist das drin? [BM/2021-01-29]
$r->addRoute('GET', '/index.php', function() {
    require_once('./views/de/redirect.php');
});

$r->addRoute('GET', '/cloud-telefonanlage', function() {
  $title = 'VoIP-Telefonanlage im Web: VoIP, Fax, WebRTC, Callcenter Software';
  $description = 'Telefonanlage aus der Cloud ✔  bestes Preis-Leistungsverhältnis  ✔ Wenn Sie mit iher bestehenden TK-Anlage an Grenzen stoßen! Persönlicher Success Manager. Unverbindlich testen!';
  $keywords = '';
  $background = 'bg-businesstelefonie';
  $ogUrl = $GLOBALS['url'] . '/cloud-telefonanlage';
  $ogImageText = 'VoIP-Telefonanlage im Web';
  require_once('./layouts/header.php');
  require_once('./views/de/cloud-telefonanlage.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/datenschutz', function() {
  $title = 'CallOne Datenschutz - DSGVO, Cloud EU';
  $description = 'CallOne bietet VoIP-Telefonanlagen und Callcenter Lösungen aus der deutschen Cloud. Datenschutz hat für uns oberste Priorität. ✔  DSGVO-konform  ✔';
  $keywords = '';
  $background = 'bg-landingpages';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/datenschutz';
  $ogImageText = 'CallOne Datenschutz, DSGVO, Cloud EU';
  require_once('./layouts/header.php');
  require_once('./views/de/datenschutz.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/statistiken', function() {
  $title = 'Call Center Software Statistiken | KPI, SLA mit BI-Integration';
  $description = 'CallOne liefert eine Call Center Software mit dem vielleicht umfänglichsten Angebot an statistischen Auswertungsmöglichkeiten. Wallboards, Tabellen, Einzelverbindungen, Anrufgründe Rohdaten und vieles mehr stehen in Echtzeit zur Verfügung.';
  $keywords = '';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/statistiken';
  $ogImageText = 'Call Center Software Statistiken, KPI, SLA, BI-Integration';
  require_once('./layouts/header.php');
  require_once('./views/de/statistiken.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/impressum', function() {
  $title = 'CallOne Impressum - Callcenter Software und VoIP-Telefonanlagen';
  $description = 'CallOne ist ein inhabergeführtes Unternehmen mit Sitz in Berlin, Potsdam und Mainz. Wir bieten hochwertige cloudbasierte Telefonanlagen für Sales und Service';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/impressum';
  $ogImageText = 'CallOne Impressum Rechtliches';
  require_once('./layouts/header.php');
  require_once('./views/de/impressum.php');
  require_once('./layouts/footer.php');
});

/* Downloads: MicroSIP */
$r->addRoute('GET', '/microsip', function() {
  $title = 'MicroSIP vorkonfiguriert';
  $description = 'Um Dir den Konfigurationsaufwand zu ersparen, bieten wir einen direkt vorkonfigurierten SIP-Client an.';
  $keywords = 'voip, microsip';
  $background = 'full-bg background-transition';
  $ogUrl = $GLOBALS['url'] . '/microsip';
  $ogImageText = 'MicroSIP vorkonfiguriert';
  require_once('./layouts/header.php');
  require_once('./views/de/microsip.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/download', function() {
  $title = 'CallOne Downloads';
  $description = 'Software und Dokumente zum herunterladen';
  $keywords = '';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/download';
  $ogImageText = 'CallOne Downloads';
  require_once('./layouts/header.php');
  require_once('./views/de/downloads.php');
  require_once('./layouts/footer.php');
});


/* Preiskalkulator */
$r->addRoute('GET', '/preiskalkulator', function() {
  $title = 'Jetzt Preis Ihrer Callcenter-Lösung, VoIP-Telefonie-Lösung berechnen';
  $description = 'Berechnen Sie den Preis Ihrer VoIP-Telefonanlage und Callcenter-Lösung passend zu Ihren Anforderungen. CallOne cloudbasierte Telefonanlagen für Sales und Service';
  $keywords = 'call center, software, callcenter, lösung, voip-telefonanlage, voip, telefonanlage, rufnummern, schnittstellen, integrationen, preis, preise, rechner, preiskalkulator, berechnen, kosten';
  $background = 'full-bg background-transition';
  $menuPosition = 'produkte';
  $ogUrl = $GLOBALS['url'] . '/preiskalkulator';
  $ogImageText = 'Jetzt Preis Ihrer Callcenter-Lösung berechnen';
  require_once('./layouts/header.php');
  require_once('./views/de/preiskalkulator.php');
  require_once('./layouts/footer.php');
});


/* Jobs Sites */
$r->addRoute('GET', '/karriere', function() {
  $title = 'CallOne Karriere - Alle offenen Stellen';
  $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen.';
  $keywords = '';
  $background = '';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/karriere';
  $ogImageText = 'CallOne Karriere Alle offenen Stellen';
  require_once('./layouts/header.php');
  require_once('./views/de/karriere.php');
  require_once('./layouts/footer.php');
});

/* Karriere bei CallOne */
$r->addRoute('GET', '/karriere-bei-callone', function() {
  $title = 'CallOne Karriere - Bei uns arbeiten';
  $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen.';
  $keywords = '';
  $background = '';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/karriere-bei-callone';
  $ogImageText = 'CallOne Karriere__Bei uns arbeiten';
  require_once('./layouts/header.php');
  require_once('./views/de/karriere-bei-callone.php');
  require_once('./layouts/footer.php');
});

/* dynamically add jobs */
$jobs = jobs_load();
foreach ($jobs->jobs_get() as $job)
{
  if (empty ($job->url_get()))
    continue;

  $r->addRoute('GET', $job->url_get(), function ($url) {
    $jobs = jobs_load();
    $job = job_find_by_url($jobs->jobs_get(), $url);

    define ('JOB_URL', $url);
    
    $title = 'CallOne Karriere - '.$job->title_get();
    $description = $job->title_get().': '.$job->description_get();
    $keywords = '';
    $background = '';
    $menuPosition = 'callone';
    $ogUrl = $GLOBALS['url'] . $job->url_get();
    $ogImageText = $job->title_get().'__CallOne Karriere';
    require_once('./layouts/header.php');
    require_once('./views/de/karriere-details.php');
    require_once('./layouts/footer.php');
  });
}


$r->addRoute('GET', '/callcenter-software', function() {
  $title = 'Callcenter-Software, ACD, Kundenservice, Contact Center Software, Helpdesk';
  $description = 'Callcenter-Software mit Computer Telephony Integration (CTI), professionellem Warteschleifenmanagement, Callbackfunktion. Jetzt testen!';
  $keywords = 'callcenter software, call center software, ACD, contact center software, helpdesk, computer telephony integration, cti, warteschleifenmanagement, callbackfuntion, kostenlos testen';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/callcenter-software';
  $ogImageText = 'Callcenter-Software, ACD, Kundenservice, Contact Center Software';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-software.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-software-features', function() {
  $title = '';
  $description = '';
  $keywords = '';
  $background = 'bg-kundenservice';
  $ogUrl = $GLOBALS['url'] . '/callcenter-software-features';
  $ogImageText = 'CallOne Callcenter Software Features';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-software-features.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/telefonanlage-mit-warteschleife', function() {
  $title = 'Cloud Telefonanlage mit virtueller Warteschleife';
  $description = 'Telefonanlage mit vielzähligen Funktionen rund um Ihre Warteschleifen: virtuelle Warten, eigene Warteschleifenmusik, kostenfreier Rückruf und Ansage der Wartedauer';
  $keywords = '';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/telefonanlage-mit-warteschleife';
  $ogImageText = 'Cloud Telefonanlage mit virtueller Warteschleife';
  require_once('./layouts/header.php');
  require_once('./views/de/warteschleifen-management.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/customer-success', function() {
  $title = 'Effiziente Unternehmenstelefonie mit CallOne';
  $description = 'Top Service für Ihre Cloud Telefonanlage und Callcenter Software. CallOne bietet persönliche Beratung und Betreuung für Ihre Unternehmenstelefonie';
  $keywords = '';
  $background = '';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/customer-success';
  $ogImageText = 'Effiziente Unternehmens-__telefonie mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/customer-success.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/dsgvo-telekommunikation', function() {
  $title = 'Datenschutz in der Telekommunikation mit CallOne';
  $description = 'Gehen Sie mit Ihrer Cloud Telefonanlage auf Nummer sicher. CallOne hostet in Deutschland und bietet die vielleicht umfänglichsten Optionen beim Thema Datenschutz';
  $keywords = '';
  $background = '';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/dsgvo-telekommunikation';
  $ogImageText = 'Datenschutz in der Telekommunikation mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/data-protection.php');
  require_once('./layouts/footer.php');
});

/* Product sites */
$r->addRoute('GET', '/callcenter-loesung', function() {
  $title = 'Callcenter Software, Kundenservice, Sales, WebRTC, CTI, VoIP, Cloud';
  $description = 'Virtuelle Callcenter Software für Customer Service und Sales: Agenten- und Warteschleifen, Auswahlmenü (IVR), API, CTI, Dialer, kombinierbar mit ihrer TK-Anlage';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $ogUrl = $GLOBALS['url'] . '/callcenter-loesung';
  $ogImageText = 'Callcenter Software, Kundenservice, Sales, WebRTC, CTI, VoIP, Cloud';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-loesung.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/0800-lokal-nummern', function() {
  $title = 'Freecall 0800, Ortsnetz, international, Wunschrufnummer Deutschland';
  $description = ' ☎ 0800 Wunschnummer bestellen ☎ Internationale Rufnummern. Lokale, Ortsnetzrufnummern und Rufnummernblöcke im gesamten Bundesgebiet. Noch heute schalten!';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $menuPosition = 'produkte';
  $ogUrl = $GLOBALS['url'] . '/0800-lokal-nummern';
  $ogImageText = 'Wunschrufnummer, Freecall 0800, international, Ortsnetz';
  require_once('./layouts/header.php');
  require_once('./views/de/rufnummern.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/cti-salesforce', function() {
  $title = 'CallOne Salesforce Integration';
  $description = 'Geben Sie dem geballten Wissen und den starken Tools von Salesforce endlich eine Stimme! Integration von Anrufdaten und Click-to-Call sorgen für transparentere, schnellere und einfach bessere Prozesse.';
  $keywords = '';
  $background = 'bg-karriere';
  $ogUrl = $GLOBALS['url'] . '/cti-salesforce';
  $ogImageText = 'CallOne Salesforce Integration';
  require_once('./layouts/header.php');
  require_once('./views/de/cti/salesforce.php');
  require_once('./layouts/footer.php');
});
    
$r->addRoute('GET', '/tableau-callcenter-connector', function() {
  $title = 'Tableau Callcenter Connector - Integrieren Sie Daten und Callcenter-KPI';
  $description = 'Integrieren Sie mit dem CallOne Tableau Connector alle anrufspezifischen Telefoniedaten und Callcenter-KPIs in Ihre Tableau Dashboards und Datenanalysen';
  $keywords = 'Integration,Tableau,Callcenter,KPI,Dashboard,Connector';
  $background = 'bg-karriere';
  $ogUrl = $GLOBALS['url'] . '/tableau-callcenter-connector';
  $ogImageText = 'Tableau Callcenter Connector';
  $canonical = $GLOBALS['url'] . '/tableau-callcenter-connector';
  require_once('./layouts/header.php');
  require_once('./views/de/cti/tableau.php');
  require_once('./layouts/footer.php');
});
    
$r->addRoute('GET', '/freshdesk-callcenter-software', function() {
  $title = 'Freshdesk in Verbindung mit Call Center Software & VoIP-Telefonanlage';
  $description = 'Freshdesk Ticketing mit Verbindung mit Call Center Software und VoIP-Telefonanlage. CTI Integration mit einem der führenden CRM und Ticketing-Tool';
  $keywords = 'freshdesk,callcenter,voip,telefonanlage,ticketing,cti,integration,crm,tool';
  $background = 'bg-karriere';
  $ogUrl = $GLOBALS['url'] . '/freshdesk-callcenter-software';
  $ogImageText = 'Freshdesk in Verbindung mit Call Center Software';
  $canonical = $GLOBALS['url'] . '/freshdesk-callcenter-software';
  require_once('./layouts/header.php');
  require_once('./views/de/cti/freshdesk.php');
  require_once('./layouts/footer.php');
});
    
$r->addRoute('GET', '/zendesk-cti-ticketing', function() {
  $title = 'CallOne Zendesk Integration';
  $description = 'Bester Kundenservice und effiziente Agenten — integrieren Sie Voice Tickets in Zendesk für ein optimales Kundenerlebnis im Callcenter auf allen Kanälen';
  $keywords = '';
  $background = 'bg-karriere';
  $ogUrl = $GLOBALS['url'] . '/zendesk-cti-ticketing';
  $ogImageText = 'CallOne Zendesk Integration';
  require_once('./layouts/header.php');
  require_once('./views/de/cti/zendesk.php');
  require_once('./layouts/footer.php');
});     

$r->addRoute('GET', '/voip-telefonanlage', function() {
  $title = 'VoIP-Telefonanlage – Cloud Telefonanlage, virtuelle Telefonanlage';
  $description = 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager';
  $keywords = '';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/voip-telefonanlage';
  $ogImageText = 'VoIP-Telefonanlage, Cloud & virtuelle Telefonanlage';
  require_once('./layouts/header.php');
  require_once('./views/de/voip-telefonanlage.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/call-tracking', function() {
  $title = 'Call-Tracking: Individuelle Rufnummern für Ihre Kunden';
  $description = ' Nutzen Sie Call-Tracking, um Anrufe auf Ihrer Hotline einer aktiven Websession zuzuordnen und mit Kundendaten anzureichern.';
  $keywords = 'call,tracking,browsing,individuelle,rufnummern,websession,kunden,hotline,kundendaten,anrufe,customer journey';
  $background = 'bg-landingpages';
  $menuPosition = 'produkte';
  $ogUrl = $GLOBALS['url'] . '/call-tracking';
  $ogImageText = 'Individuelle Rufnummern für Ihre Kunden';
  $canonical = $GLOBALS['url'] . '/call-tracking';
  require_once('./layouts/header.php');
  require_once('./views/de/calltracking.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-bot', function() {
  $title = 'Callcenter Bot – KI-Sprachgesteuerte Auswahlmenüs IVR';
  $description = 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.';
  $keywords = 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR';
  $background = 'bg-casestudy';
  $menuPosition = 'produkte';
  $ogUrl = $GLOBALS['url'] . '/callcenter-bot';
  $ogImageText = 'Callcenter Bot KI-Sprachgesteuerte Auswahlmenüs IVR';
  $canonical = $GLOBALS['url'] . '/callcenter-bot';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-bot.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-software-funktionen', function() {
  $title = 'Vergleich Funktionen, Angebot Callcenter Software, CTI, Cloud, API';
  $description = 'Die vielleicht umfangreichste Auswahl an Funktionen im Bereich virtueller Telefonanlagen. Vergleichen Sie unser Angebot und sprechen Sie mit uns. Jetzt anrufen!';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $ogUrl = $GLOBALS['url'] . '/callcenter-software-funktionen';
  $ogImageText = 'Die vielleicht umfangreichste Auswahl an Funktionen';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-software-funktionen.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/voip-telefonanlagen-funktionen', function() {
  $title = 'Features, Funktionen, Vergleich VoIP-Telefonanlage '.date('Y');
  $description = 'Alle Funktionen im Überblick, vergleichen Sie und unsere Customer Success Manager helfen Ihnen bei der Auswahl ihres perfekten Settings. Rufen Sie uns an!';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $ogUrl = $GLOBALS['url'] . '/voip-telefonanlagen-funktionen';
  $ogImageText = 'VoIP-Telefonanlage Funktionen im Vergleich '.date('Y');
  require_once('./layouts/header.php');
  require_once('./views/de/voip-telefonanlagen-funktionen.php');
  require_once('./layouts/footer.php');
});
        
$r->addRoute('GET', '/referenzen', function() {
  $title = 'referenzen';
  $description = '';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/referenzen';
  $ogImageText = 'CallOne Referenzen';
  require_once('./layouts/header.php');
  require_once('./views/de/referenzen.php');
  require_once('./layouts/footer.php');
});

/* Sales Seite */
$r->addRoute('GET', '/testen', function() {
  $title = 'Call Center Lösung, VoIP-Telefonanlage Features vergleichen und testen';
  $description = 'Vergleichen Sie unsere VoIP-Telefonanlage und Callcenter Software ✔  Kundenwertung: Note 1  ✔ Persönlicher Success Manager. Unverbindlich testen!';
  $keywords = '';
  //$background = 'bg-testen';
  $ogUrl = $GLOBALS['url'] . '/testen';
  $ogImageText = 'VoIP-Telefonanlage jetzt testen';
  require_once('./layouts/header.php');
  require_once('./views/de/testen.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/ueber-uns', function() {
  $title = 'CallOne ist ein inhabergeführtes Unternehmen für cloudbasierte Telefonie';
  $description = 'CallOne bietet cloudbasierte Telefonieprodukte. Einfach bedienbare VoIP-Telefonanlagen, professionelle cloudbasierte Callcenter Software. Wie können wir helfen?';
  $keywords = '';
  $background = '';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/ueber-uns';
  $ogImageText = 'CallOne bietet cloudbasierte Telefonieprodukte';
  require_once('./layouts/header.php');
  require_once('./views/de/ueber-uns.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-check24', function() {
  $title = 'Callcenter Software und Tableau-Integration - Kundenservice bei Check24';
  $description = 'Callcenter Lösung beim Marktführer Check24. CallOne stellt umfassende VoIP-Telefonanlage und Callcenter Software mit offenen API für Kundenservice bereit';
  $keywords = '';
  $background = 'bg-casestudy';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/case-study-check24';
  $ogImageText = 'Check24 mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-check24.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-apodiscounter', function() {
  $title = 'Anrufsteuerung im virtuellen Callcenter mittels REST-API und Webhooks';
  $description = 'Automatierung und Effizienz im telefonischen Kundenservice. Mit kompletter ERP-Integration steuert die Onlineapotheke Apodicounter sein virtuelles Callcenter';
  $keywords = '';
  $background = 'bg-casestudy';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/case-study-apodiscounter';
  $ogImageText = 'apodiscounter mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-apodiscounter.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-flaconi', function() {
  $title = 'VoIP-Telefonanlage und Callcenter Software für das gesamte Unternehmen';
  $description = 'Das Startup Flaconi setzt bei der VoIP-Telefonanlage komplett auf den Dienstleister CallOne. Callcenter Software, Rufnummern, SNOM-Telefone fürs Unternehmen';
  $keywords = '';
  $background = 'bg-casestudy';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/case-study-flaconi';
  $ogImageText = 'Flaconi mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-flaconi.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-niceshops', function() {
  $title = 'Case Study: Die Telefonielösungen von niceshops';
  $description = 'Die individuelle Callcenter-Lösung des österreichischen E-Commerce-Unternehmens ✔ IP-Telefonie ✔ Freshdesk-Integration ✔ WebRTC ✔ 40 Shop-Hotlines';
  $keywords = 'niceshops, Telefonielösung, Callcenter-Lösung, E-Commerce, IP-Telefonie, Freshdesk-Integration, webRTC, Hotline';
  $background = 'bg-casestudy';
  $menuPosition = 'callone';
  $ogUrl = $GLOBALS['url'] . '/case-study-niceshops';
  $ogImageText = 'niceshops mit CallOne';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-niceshops.php');
  require_once('./layouts/footer.php');
});

// loesungen
$r->addRoute('GET', '/customer-service-solutions', function() {
  $title = 'Callcenter Software ACD | CallOne';
  $description = 'Cloud Callcenter-Plattform, angepasst auf Ihre Bedürfnisse, verknüpft mit CRM und Helpdesk';
  $keywords = 'Kundenservice, Helpdesk, Inbound, ACD, Callcenter Software, Cloud, ACD, Contact Center, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/solutions-customer-service';
  $ogImageText = 'Callcenter Software ACD';
  require_once('./layouts/header.php');
  require_once('./views/de/solutions-customer-service.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/sales-solutions', function() {
  $title = 'Outbound Callcenter Software | CallOne';
  $description = 'Outbound Sales am Telefon mit der Callcenter Software von CallOne und Ihrem Businesslösung verbunden';
  $keywords = 'Predictive Dialing, Outdial, Telefonlösung, Speed dial, Predictive Dialer, eingehend, Callcenter-Software, Voip, gehosteter Dialer, virtuelles Callcenter, Web-Dialer, Online-Dialer, Cloud-Dialer, Cloud-Dialer-System, Power-Dialer, Telemarketing-Software, Telemarketing-Dialing, Auto-Dialing-Software, Kundenanrufsoftware';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/solutions-sales';
  $ogImageText = 'Outbound Callcenter Software';
  require_once('./layouts/header.php');
  require_once('./views/de/solutions-sales.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/it-helpdesk-solutions', function() {
  $title = 'Integriertes Telefon für IT Helpdesk Software | CallOne';
  $description = 'Telefonlösung für Ihren IT-Helpdesk und Servicedesk zur effizienten Bearbeitung von Tickets';
  $keywords = 'Kundenservice, Helpdesk, IT, Support, Inbound, Outbound, CRM, ACD, Callcenter Software, Cloud, Tickets, Servicedesk, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/solutions-helpdesk';
  $ogImageText = 'Integriertes Telefon für IT Helpdesk Software';
  require_once('./layouts/header.php');
  require_once('./views/de/solutions-helpdesk.php');
  require_once('./layouts/footer.php');
});

// integrationen
$r->addRoute('GET', '/callcenter-software-integrationen', function() {
  $title = 'Integrieren Sie Anrufe in Ihre Businesstools und steuern Sie Anrufe bequem mit in Ihre CRM, Ticketing oder BI-Tool';
  $description = 'Integrationen';
  $keywords = 'CRM, ERP, BI, API, Webhook, Rest-API, Zendesk, Salesforce, Pipedrive, Jira, Browser Extension, Chrome, ACD, Dialer, Callcenter Software, Telefon, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/integrations';
  $ogImageText = 'Integrieren Sie Anrufe in Ihre Businesstools';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-software-integrationen.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-software-apps', function() {
  $title = 'CRM und Ticketing kombiniert mit dem Telefon | CallOne ';
  $description = 'Telefon integriert in Ihre CRM- und Ticketinglösung auf Knopfdruck freigeschaltet';
  $keywords = 'CTI, Apps, Integration, Voice, Zendesk, Salesforce, Jira, Pipedrive, Browser Extension, CRM, ERP, BI, API, Webhook, Rest-API, Chrome, ACD, Dialer, Callcenter Software, Telefon, Cloud PBX, IP-Telefonie, Cloud-Telefonanlage';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/api';
  $ogImageText = 'CRM und Ticketing kombiniert mit dem Telefon';
  require_once('./layouts/header.php');
  require_once('./views/de/callcenter-software-apps.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/voip-api', function() {
  $title = 'Telefon Schnittstellen für alle Belange | CallOne';
  $description = 'Schaffen Sie Anbindungen zu Ihrem CRM, BI oder ERP-System und nutzen Sie die Vorteile von Big Data.';
  $keywords = 'CTI, Apps, Integration, Voice, Zendesk, Salesforce, Jira, Pipedrive, Browser Extension, CRM, ERP, BI, API, Webhook, Rest-API, Chrome, ACD, Dialer, Callcenter Software, Telefon';
  $background = '';
  $menuPosition = 'loesungen';
  $ogUrl = $GLOBALS['url'] . '/api';
  $ogImageText = 'Telefon Schnittstellen für alle Belange';
  require_once('./layouts/header.php');
  require_once('./views/de/voip-api.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/salesforce', function() {
  $title = 'Salesforce';
  $description = 'Salesforce';
  $keywords = '';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/salesforce';
  $ogImageText = 'Salesforce';
  require_once('./layouts/header.php');
  require_once('./views/de/salesforce.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/softphone', function() {
  $title = 'VoIP Telefon im Browser integriert | CallOne Softphone';
  $description = 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren Lieblingsbrowser, nutzbar mit Ihrem Anbieter';
  $keywords = 'Microsoft TEAMS, VoIP, SIP Phone, Softphone, 1-Click, SBC, Sipgate, Placetel, Telekom, Cloud Telefonanlage, Telefonieren mit dem PC, PBX';
  $background = '';
  $menuPosition = 'produkte';
  $ogUrl = $GLOBALS['url'] . '/softphone';
  $ogImageText = 'VoIP Telefon im Browser integriert';
  require_once('./layouts/header.php');
  require_once('./views/de/softphone.php');
  require_once('./layouts/footer.php');
});

// omr podcast
$r->addRoute('GET', '/omr', function() {
  $title = 'OMR Goodie';
  $description = 'OMR Goodie';
  $keywords = '';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/omr-goodie';
  $ogImageText = 'OMR Goodie';
  require_once('./layouts/header.php');
  require_once('./views/de/omr-goodie.php');
  require_once('./layouts/footer.php');
});

// Contact
$r->addRoute('GET', '/kontakt', function() {
  $title = 'Kontakt';
  $description = 'Kontakt';
  $keywords = '';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/kontakt';
  $ogImageText = 'CallOne Kontakt';
  require_once('./layouts/header.php');
  require_once('./views/de/contact.php');
  require_once('./layouts/footer.php');
});

// FALLBACK 404
$r->addRoute('GET', '/404', function() {
  $title = '404 - Die Seite konnte nicht gefunden werden!';
  $description = '';
  $keywords = '';
  $background = 'bg-index';
  $status = '404';
  $ogUrl = $GLOBALS['url'] . '/404';
  require_once('./layouts/header.php');
  require_once('./views/de/404.php');
  require_once('./layouts/footer.php');
});

if (!$r->serveRoutes())
{ header("HTTP/1.0 404 Not Found");
  $r->serveRoutes(null, '/404');
}


// EXAMPLES

// $r->addRoute('GET', '/new_site', function() {
//   $title = 'new_site';
// $description = '';
// $keywords = '';
//   require_once('./layouts/header.php');
//   require_once('./views/de/new_site.php');
//   require_once('./layouts/footer.php');
// });

// Examples
// $langs = ['de', 'en', 'it'];
// foreach ($langs as $lang) {
//   $r->addRoute('GET', '/'.$lang.'/callback', function() {
//     require_once($lang.'/callback.html');
// $description = '';
// $keywords = '';
//   });
// }

// $r->addRoute('GET', '/users/:uid', function($uid) {
//   echo 'User: '.$uid;
// $description = '';
// $keywords = '';
// });
?>