<?php
// $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $params = explode("/", $path);

// echo "<pre>";
// print_r($params);
// echo "</pre>";

// switch ($params[1]) {
//   case "summoner":
//     echo $params[3];
//   break;
// }

class Router {
  private $routes = [];

  public function __construct() {
      require ('./libs/functions.php');
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
        call_user_func_array($route['callback'], $matches);
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
  $background = 'bg-index';
  $ogUrl = $GLOBALS['url'] . '/';
  require_once('./layouts/header.php');
  require_once('./views/de/index.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/index.php', function() {
    require_once('./views/de/redirect.php');
});

$r->addRoute('GET', '/cloud-telefonanlage', function() {
  $title = 'VoIP-Telefonanlage im Web: VoIP, Fax, WebRTC, Callcenter Software';
  $description = 'Telefonanlage aus der Cloud ✔  bestes Preis-Leistungsverhältnis  ✔ Wenn Sie mit iher bestehenden TK-Anlage an Grenzen stoßen! Persönlicher Success Manager. Unverbindlich testen!';
  $keywords = '';
  $background = 'bg-businesstelefonie';
  $ogUrl = $GLOBALS['url'] . '/cloud-telefonanlage';
  require_once('./layouts/header.php');
  require_once('./views/de/businesstelefonie.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/datenschutz', function() {
  $title = 'CallOne Datenschutz - DSGVO, Cloud EU';
  $description = 'CallOne bietet VoIP-Telefonanlagen und Callcenter Lösungen aus der deutschen Cloud. Datenschutz hat für uns oberste Priorität. ✔  DSGVO-konform  ✔';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/datenschutz';
  require_once('./layouts/header.php');
  require_once('./views/de/datenschutz.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/impressum', function() {
  $title = 'CallOne Impressum - Callcenter Software und VoIP-Telefonanlagen';
  $description = 'CallOne ist ein inhabergeführtes Unternehmen mit Sitz in Berlin, Potsdam und Mainz. Wir bieten hochwertige cloudbasierte Telefonanlagen für Sales und Service';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/impressum';
  require_once('./layouts/header.php');
  require_once('./views/de/impressum.php');
  require_once('./layouts/footer.php');
});


/* Preiskalkulator */
$r->addRoute('GET', '/preiskalkulator', function() {
    $title = 'Jetzt Preis Ihrer Callcenter-Lösung, VoIP-Telefonie-Lösung berechnen';
    $description = 'Berechnen Sie den Preis Ihrer VoIP-Telefonanlage und Callcenter-Lösung passend zu Ihren Anforderungen. CallOne cloudbasierte Telefonanlagen für Sales und Service';
    $keywords = 'call center, software, callcenter, lösung, voip-telefonanlage, voip, telefonanlage, rufnummern, schnittstellen, integrationen, preis, preise, rechner, preiskalkulator, berechnen, kosten';
    $background = 'full-bg background-transition';
    $ogUrl = $GLOBALS['url'] . '/preiskalkulator';
    require_once('./layouts/header.php');
    require_once('./views/de/price-calc.php');
    require_once('./layouts/footer.php');
});


/* LandingPages */

$r->addRoute('GET', '/callcenter', function() {
  $title = 'Das Tool für Ihren Alltag als Callcenter-Leitung';
  $description = 'Intelligente Callcenter-Lösung für Ihr Kundenservice-Team: Agentenverwaltung, Echtzeit- Statistiken und smarte Warteschleifen.';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/callcenter';
  require_once('./layouts/header.php');
  require_once('./views/de/index-callcenter.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/ceo', function() {
  $title = 'Wartungsfreie und voll integrierte Telefonielösungen';
  $description = 'Die CallOne Cloud-Telefonanlage schont Ihre IT. Mit offenen REST-APIs, fertigen Apps und einer intuitiven Benutzeroberfläche.';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/ceo';
  require_once('./layouts/header.php');
  require_once('./views/de/index-ceo.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/it', function() {
  $title = 'Mehr Verkäufe mit effizienter Telefonie';
  $description = 'Die CallOne Callcenter-Lösung bringt Ihnen mehr Sales und zufriedene Kunden. Mit Telefonie, die genau zum Unternehmen passt.';
  $keywords = '';
  $background = 'bg-landingpages';
  $ogUrl = $GLOBALS['url'] . '/it';
  require_once('./layouts/header.php');
  require_once('./views/de/index-it.php');
  require_once('./layouts/footer.php');
});

/* Jobs Sites */

$r->addRoute('GET', '/karriere', function() {
  $title = 'Karriere, Jobs, Telekommunikation Potsdam, Berlin, Mainz, inhabergeführt';
  $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen in Berlin, Potsdam, Mainz ';
  $keywords = '';
  $background = 'bg-karriere';
  $ogUrl = $GLOBALS['url'] . '/karriere';
  require_once('./layouts/header.php');
  require_once('./views/de/karriere.php');
  require_once('./layouts/footer.php');
});

    $r->addRoute('GET', '/karriere/kundenberater-1st-level-support', function() {
        $title = 'CallOne Karriere - Kundenberater';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen in Berlin, Potsdam, Mainz';
        $keywords = '';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/kundenberater-1st-level-support';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/kundenberater.php');
        require_once('./layouts/footer.php');
    });
    
    $r->addRoute('GET', '/karriere/team-assistenz', function() {
        $title = 'CallOne Karriere - Team Assistenz';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen in Berlin, Potsdam, Mainz';
        $keywords = '';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/team-assistenz';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/assistenz.php');
        require_once('./layouts/footer.php');
    });   
    
    $r->addRoute('GET', '/karriere/technischer-produktmanager', function() {
        $title = 'CallOne Karriere - Technischer Produktmanager';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere offenen Stellen in Berlin, Potsdam, Mainz';
        $keywords = '';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/technischer-produktmanager';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/produktmanager.php');
        require_once('./layouts/footer.php');
    });
    
    $r->addRoute('GET', '/karriere/it-consultant-potsdam', function() {
        $title = 'CallOne Karriere - IT Consultant in Potsdam';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden und Struktur. Bewirb Dich auf unsere Stelle als IT Consultant in Potsdam';
        $keywords = '';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/it-consultant-potsdam';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/it-consultant-potsdam.php');
        require_once('./layouts/footer.php');
    });   
    
    $r->addRoute('GET', '/karriere/job-customer-success-manager-potsdam', function() {
        $title = 'Customer Success Manager Stelle/Job in Potsdam - Karriere';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden. Bewirb Dich auf unsere Stelle als Customer Success Manager in Potsdam';
        $keywords = 'Karriere, Customer Success Manager, Potsdam, Job, Stelle, bewerben';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/job-customer-success-manager-potsdam';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/customer-success-manager.php');
        require_once('./layouts/footer.php');
    }); 
    
    $r->addRoute('GET', '/karriere/job-webdesigner-potsdam', function() {
        $title = 'Webdesigner/Job in Potsdam - Karriere';
        $description = 'Karriere bei CallOne heißt: Langfristigkeit, gute Bezahlung, keine Überstunden. Bewirb Dich auf unsere Stelle als Webdesigner in Potsdam';
        $keywords = 'Karriere, Webdesigner, Potsdam, Job, Stelle, bewerben';
        $background = 'bg-casestudy';
        $ogUrl = $GLOBALS['url'] . '/karriere/job-webdesigner-potsdam';
        require_once('./layouts/header.php');
        require_once('./views/de/karriere/webdesigner.php');
        require_once('./layouts/footer.php');
    });  

$r->addRoute('GET', '/callcenter-software', function() {
  $title = 'Callcenter-Software, ACD, Kundenservice, Contact Center Software, Helpdesk';
  $description = 'Callcenter-Software mit Computer Telephony Integration (CTI), professionellem Warteschleifenmanagement, Callbackfunktion. Jetzt testen!';
  $keywords = 'callcenter software, call center software, ACD, contact center software, helpdesk, computer telephony integration, cti, warteschleifenmanagement, callbackfuntion, kostenlos testen';
  $background = '';
  $ogUrl = $GLOBALS['url'] . '/callcenter-software';
  require_once('./layouts/header.php');
  require_once('./views/de/kundenservice.php');
  require_once('./layouts/footer.php');
});

    $r->addRoute('GET', '/callcenter-software-features', function() {
        $title = '';
        $description = '';
        $keywords = '';
        $background = 'bg-kundenservice';
        $ogUrl = $GLOBALS['url'] . '/callcenter-software-features';
        require_once('./layouts/header.php');
        require_once('./views/de/wishlist.php');
        require_once('./layouts/footer.php');
    });

$r->addRoute('GET', '/preise', function() {
  $title = 'Preise vergleichen VoIP-Telefonanlage und Callcenter Software von CallOne';
  $description = 'Preise vergleichen für Cloud Telefonanlagen von CallOne ✔  bestes Preis-Leistungsverhältnis  ✔  Persönlicher Success Manager. Unverbindlich testen!';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $ogUrl = $GLOBALS['url'] . '/preise';
  require_once('./layouts/header.php');
  require_once('./views/de/preise.php');
  require_once('./layouts/footer.php');
});

/* Product sites */
$r->addRoute('GET', '/callcenter-loesung', function() {
  $title = 'Callcenter Software, Kundenservice, Sales, WebRTC, CTI, VoIP, Cloud';
  $description = 'Virtuelle Callcenter Software für Customer Service und Sales: Agenten- und Warteschleifen, Auswahlmenü (IVR), API, CTI, Dialer, kombinierbar mit ihrer TK-Anlage';
  $keywords = '';
  $background = 'bg-preisanfrage';
  $ogUrl = $GLOBALS['url'] . '/callcenter-loesung';
  require_once('./layouts/header.php');
  require_once('./views/de/produkt-acd.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/0800-lokal-nummern', function() {
    $title = 'Freecall 0800, Ortsnetz, international, Wunschrufnummer Deutschland';
    $description = ' ☎ 0800 Wunschnummer bestellen ☎ Internationale Rufnummern. Lokale, Ortsnetzrufnummern und Rufnummernblöcke im gesamten Bundesgebiet. Noch heute schalten!';
    $keywords = '';
    $background = 'bg-preisanfrage';
    $ogUrl = $GLOBALS['url'] . '/0800-lokal-nummern';
    require_once('./layouts/header.php');
    require_once('./views/de/produkt-rufnummern.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/cti-schnittstellen', function() {
    $title = 'CTI, Salesforce, Pipedrive, Zendesk, Click-to-Dial, REST-API, Webhooks';
    $description = 'VoIP verbunden mit Ihren Businesslösungen. CTI-Integration für CRM, Ticketing,  REST-API und Webhooks. Vereinfachen Sie Ihren Workflow. Beginnen Sie noch heute!';
    $keywords = '';
    $background = 'bg-preisanfrage';
    $ogUrl = $GLOBALS['url'] . '/cti-schnittstellen';
    require_once('./layouts/header.php');
    require_once('./views/de/produkt-cti.php');
    require_once('./layouts/footer.php');
});

    $r->addRoute('GET', '/cti-salesforce', function() {
        $title = 'CallOne Salesforce Integration';
        $description = 'Geben Sie dem geballten Wissen und den starken Tools von Salesforce endlich eine Stimme! Integration von Anrufdaten und Click-to-Call sorgen für transparentere, schnellere und einfach bessere Prozesse.';
        $keywords = '';
        $background = 'bg-karriere';
        $ogUrl = $GLOBALS['url'] . '/cti-salesforce';
        require_once('./layouts/header.php');
        require_once('./views/de/cti/salesforce.php');
        require_once('./layouts/footer.php');
    });

    $r->addRoute('GET', '/cti-zoho', function() {
        $title = 'CallOne ZOHO Integration';
        $description = 'Wählen Sie direkt aus Ihrem Zoho CRM oder erhalten Sie eingehende Anrufe in Echtzeit zugeordnet dargestellt. Optimieren Sie mit der Zoho-Integration Ihren Kundenkontakt und Ihre Geschäftsprozesse.';
        $keywords = '';
        $background = 'bg-karriere';
        $ogUrl = $GLOBALS['url'] . '/cti-zoho';
        require_once('./layouts/header.php');
        require_once('./views/de/cti/zoho.php');
        require_once('./layouts/footer.php');
    });
    
    $r->addRoute('GET', '/tableau-callcenter-connector', function() {
        $title = 'Tableau Callcenter Connector -Integrieren Sie Daten und Callcenter-KPI';
        $description = 'Integrieren Sie mit dem CallOne Tableau Connector alle anrufspezifischen Telefoniedaten und Callcenter-KPIs in Ihre Tableau Dashboards und Datenanalysen';
        $keywords = 'Integration,Tableau,Callcenter,KPI,Dashboard,Connector';
        $background = 'bg-karriere';
        $ogUrl = $GLOBALS['url'] . '/tableau-callcenter-connector';
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
        require_once('./layouts/header.php');
        require_once('./views/de/cti/zendesk.php');
        require_once('./layouts/footer.php');
    });     

$r->addRoute('GET', '/voip-telefonanlage', function() {
    $title = 'VoIP-Telefonanlage – Cloud Telefonanlage, virtuelle Telefonanlage';
    $description = 'Intuitiv bedienbare VoIP-Telefonanlage mit Festnetz, Fax und Callcenter-Software aus der Cloud. Geprüfte Gesprächsqualität. Eigener Customer Success Manager';
    $keywords = '';
    $background = 'bg-landingpages';
    $ogUrl = $GLOBALS['url'] . '/voip-telefonanlage';
    require_once('./layouts/header.php');
    require_once('./views/de/produkt-telefonanlage.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/call-tracking', function() {
    $title = 'Call-Tracking: Individuelle Rufnummern für Ihre Kunden';
    $description = ' Nutzen Sie Call-Tracking, um Anrufe auf Ihrer Hotline einer aktiven Websession zuzuordnen und mit Kundendaten anzureichern.';
    $keywords = 'call,tracking,browsing,individuelle,rufnummern,websession,kunden,hotline,kundendaten,anrufe,customer journey';
    $background = 'bg-landingpages';
    $ogUrl = $GLOBALS['url'] . '/call-tracking';
    $canonical = $GLOBALS['url'] . '/call-tracking';
    require_once('./layouts/header.php');
    require_once('./views/de/produkt-calltracking.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-bot', function() {
    $title = 'Callcenter Bot – KI-Sprachgesteuerte Auswahlmenüs IVR';
    $description = 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR. Der Callcenter Bot - Das automatisierte Sprachdialogsystem für Ihr Unternehmen.';
    $keywords = 'Intelligente Sprachsteuerung, KI, Telefon, Auswahlmenü, IVR';
    $background = 'bg-casestudy';
    $ogUrl = $GLOBALS['url'] . '/callcenter-bot';
    $ogImage = 'https://www.callone.de/assets/images/icons_png/robot-ogImage.png';
    $canonical = $GLOBALS['url'] . '/callcenter-bot';
    require_once('./layouts/header.php');
    require_once('./views/de/produkt-voicebot.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/callcenter-software-funktionen', function() {
    $title = 'Vergleich Funktionen, Angebot Callcenter Software, CTI, Cloud, API';
    $description = 'Die vielleicht umfangreichste Auswahl an Funktionen im Bereich virtueller Telefonanlagen. Vergleichen Sie unser Angebot und sprechen Sie mit uns. Jetzt anrufen!';
    $keywords = '';
    $background = 'bg-preisanfrage';
    $ogUrl = $GLOBALS['url'] . '/callcenter-software-funktionen';
    require_once('./layouts/header.php');
    require_once('./views/de/features-acd.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/voip-telefonanlagen-funktionen', function() {
    $title = 'Features, Funktionen, Vergleich VoIP-Telefonanlage 2019';
    $description = 'Alle Funktionen im Überblick, vergleichen Sie und unsere Customer Success Manager helfen Ihnen bei der Auswahl ihres perfekten Settings. Rufen Sie uns an!';
    $keywords = '';
    $background = 'bg-preisanfrage';
    $ogUrl = $GLOBALS['url'] . '/voip-telefonanlagen-funktionen';
    require_once('./layouts/header.php');
    require_once('./views/de/features-telephony.php');
    require_once('./layouts/footer.php');
});
        
$r->addRoute('GET', '/referenzen', function() {
  $title = 'referenzen';
  $description = '';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/referenzen';
  require_once('./layouts/header.php');
  require_once('./views/de/referenzen.php');
  require_once('./layouts/footer.php');
});

/* Sales Seite */
$r->addRoute('GET', '/crm-callcenter', function() {
  $title = 'Salesforce, Pipedrive, Zendesk Virtual Callcenter Integration, Dialer';
  $description = 'Telefonieren sie mit ihrem CRM. Fertige CTI-Lösungen für Ticketing und CRM. Nutzen sie >  50 API und Webhooks für individuelle Anbindungen. Jetzt testen';
  $keywords = '';
  $background = 'bg-sales';
  $ogUrl = $GLOBALS['url'] . '/crm-callcenter';
  require_once('./layouts/header.php');
  require_once('./views/de/sales.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/testen', function() {
  $title = 'Call Center Lösung, VoIP-Telefonanlage Features vergleichen und testen';
  $description = 'Vergleichen Sie unsere VoIP-Telefonanlage und Callcenter Software ✔  Kundenwertung: Note 1  ✔ Persönlicher Success Manager. Unverbindlich testen!';
  $keywords = '';
  $background = 'bg-testen';
  $ogUrl = $GLOBALS['url'] . '/testen';
  require_once('./layouts/header.php');
  require_once('./views/de/testen.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/ueber-uns', function() {
  $title = 'CallOne ist ein inhabergeführtes Unternehmen für cloudbasierte Telefonie';
  $description = 'CallOne bietet cloudbasierte Telefonieprodukte. Einfach bedienbare VoIP-Telefonanlagen, professionelle cloudbasierte Callcenter Software. Wie können wir helfen?';
  $keywords = '';
  $background = 'bg-ueberuns';
  $ogUrl = $GLOBALS['url'] . '/ueber-uns';
  require_once('./layouts/header.php');
  require_once('./views/de/ueber-uns.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-check24', function() {
  $title = 'Callcenter Software und Tableau-Integration - Kundenservice bei Check24';
  $description = 'Callcenter Lösung beim Marktführer Check24. CallOne stellt umfassende VoIP-Telefonanlage und Callcenter Software mit offenen API für Kundenservice bereit';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/case-study-check24';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-check24.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-apodiscounter', function() {
  $title = 'Anrufsteuerung im virtuellen Callcenter mittels REST-API und Webhooks';
  $description = 'Automatierung und Effizienz im telefonischen Kundenservice. Mit kompletter ERP-Integration steuert die Onlineapotheke Apodicounter sein virtuelles Callcenter';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/case-study-apodiscounter';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-apodiscounter.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-flaconi', function() {
  $title = 'VoIP-Telefonanlage und Callcenter Software für das gesamte Unternehmen';
  $description = 'Das Startup Flaconi setzt bei der VoIP-Telefonanlage komplett auf den Dienstleister CallOne. Callcenter Software, Rufnummern, SNOM-Telefone fürs Unternehmen';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/case-study-flaconi';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-flaconi.php');
  require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-niceshops', function() {
    $title = 'Case Study: Die Telefonielösungen von niceshops';
    $description = 'Die individuelle Callcenter-Lösung des österreichischen E-Commerce-Unternehmens ✔ IP-Telefonie ✔ Freshdesk-Integration ✔ WebRTC ✔ 40 Shop-Hotlines';
    $keywords = 'niceshops, Telefonielösung, Callcenter-Lösung, E-Commerce, IP-Telefonie, Freshdesk-Integration, webRTC, Hotline';
    $background = 'bg-casestudy';
    $ogImage = 'https://www.callone.de/assets/images/client-logos/callone-und-niceshops.png';
    $ogUrl = $GLOBALS['url'] . '/case-study-niceshops';
    require_once('./layouts/header.php');
    require_once('./views/de/case-study-niceshops.php');
    require_once('./layouts/footer.php');
});

$r->addRoute('GET', '/case-study-navabi', function() {
  $title = 'Callcenter Software und CTI-Integration  Zendesk, Kundenbefragung';
  $description = 'Mittelständler Navabi nutzt VoIP-Telefonanlage und kombiniert dies mit Zendesk als Ticketing-Lösung. Professionelle Anrufsteuerung mit Freecall 0800 Nummern';
  $keywords = '';
  $background = 'bg-casestudy';
  $ogUrl = $GLOBALS['url'] . '/case-study-navabi';
  require_once('./layouts/header.php');
  require_once('./views/de/case-study-navabi.php');
  require_once('./layouts/footer.php');
});

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

if (!$r->serveRoutes())
{
  // 404
  header("HTTP/1.0 404 Not Found");
  $r->serveRoutes(null, '/404');
}
?>