<?php
class job
{
	private $description;
	private $icon;
	private $quickinfo;
	private $statement;
	private $text_description_long;
	private $text_intro;
	private $text_requirements;
	private $text_tasks;
	private $text_offer;
	private $title;
	private $url;

	function __construct ($title, $description)
	{
		$this->description				= $description;
		$this->icon						= '';
		$this->quickinfo				= '';
		$this->statement				= array ();
		$this->text_description_long	= array ();
		$this->text_intro				= array ();
		$this->text_requirements		= array ();
		$this->text_tasks				= array ();
		$this->text_offer				= array ();
		$this->title					= $title;
		$this->url						= '';
	}

	// getters / setters
	function description_get ()
	{	return $this->description;
	}
	function description_set ($description)
	{	$this->description = $description;
	}

	function icon_get ()
	{	return $this->icon;
	}
	function icon_set ($icon)
	{	$this->icon = $icon;
	}

	function url_get ()
	{	return $this->url;
	}
	function url_set ($url)
	{	$this->url = $url;
	}

	function quickinfo_get ()
	{	return $this->quickinfo;
	}
	function quickinfo_set ($quickinfo)
	{	$this->quickinfo = $quickinfo;
	}

	function statement_get ()
	{	return $this->statement;
	}
	function statement_set ($statement)
	{	$this->statement[] = $statement;
	}

	function text_description_long_get ()
	{	return $this->text_description_long;
	}
	function text_description_long_set ($text_description_long)
	{	$this->text_description_long[] = $text_description_long;
	}

	function text_intro_get ()
	{	return $this->text_intro;
	}
	function text_intro_set ($text_intro)
	{	$this->text_intro[] = $text_intro;
	}

	function text_requirements_get ()
	{	return $this->text_requirements;
	}
	function text_requirements_set ($text_requirements)
	{	$this->text_requirements[] = $text_requirements;
	}

	function text_offer_get ()
	{	return $this->text_offer;
	}
	function text_offer_set ($text_offer)
	{	$this->text_offer[] = $text_offer;
	}

	function text_tasks_get ()
	{	return $this->text_tasks;
	}
	function text_tasks_set ($text_tasks)
	{	$this->text_tasks[] = $text_tasks;
	}

	function title_get ()
	{	return $this->title;
	}
	function title_set ($title)
	{	$this->title = $title;
	}
}

class job_statement
{
	private $image;
	private $name;
	private $position;
	private $text;

	function __construct ($image, $name, $position, $text)
	{
		$this->image	= $image;
		$this->name		= $name;
		$this->position	= $position;
		$this->text		= $text;
	}

	function image_get ()
	{	return $this->image;
	}
	
	function name_get ()
	{	return $this->name;
	}
	
	function position_get ()
	{	return $this->position;
	}

	function text_get ()
	{	return $this->text;
	}
}

class jobs_benefit
{
	private $title;
	private $text;

	function __construct ($title)
	{	$this->title	= $title;
		$this->text		= '';
	}

	// getters / setters
	function text_get ()
	{	return $this->text;
	}
	function text_set ($text)
	{	$this->text = $text;
	}

	function title_get ()
	{	return $this->title;
	}
	function title_set ($title)
	{	$this->title = $title;
	}
}


// jobs
function job_find_by_url ($jobs, $url)
{
	foreach ($jobs as $job)
	{	if ($job->url_get() == $url)
			return $job;
	}

	return null;
}

function jobs_load ()
{
	$jobs = array ();

	$job = new job ('Customer Success Manager*in, in Teil- oder Vollzeit', 'Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?');
	$job->url_set ('/karriere/job-customer-success-manager-in-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?');
	$job->text_description_long_set ('Als Customer Success Manager*in (w/d/m) bist Du Teil unseres Projektteams und bearbeitest eigenständig neue und bestehende Kundenprojekte in Teil- oder Vollzeit.');
	$job->text_description_long_set ('Unsere Kunden sind vorwiegend mittelständische Unternehmen, die wir mit unseren Telefonielösungen im Bereich Kundenservice oder Inside-Sales unterstützen.');
	$job->text_description_long_set ('Du bist Ansprechpartner*in für unsere Kunden, mit denen wir einen sehr engen und partnerschaftlichen Kontakt pflegen. Du unterstützt sie vom Livegang bis hin zum Tagesgeschäft, erarbeitest gemeinsam mit dem Team Optimierungsvorschläge und Lösungsstrategien.');
	$job->text_tasks_set ('Betreuung von Bestandskunden');
	$job->text_tasks_set ('Unterstützung der Kunden beim Onboarding unserer Telefonielösungen');
	$job->text_tasks_set ('Planung und Umsetzung neuer Kundenprojekte');
	$job->text_tasks_set ('Koordination von Support-Anfragen und Feature Requests');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Entwicklung, Lieferanten und Partnern');
	$job->text_tasks_set ('Eigenständige Dokumentation und Analyse von Kundenprojekten');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung (Quereinsteiger willkommen)');
	$job->text_requirements_set ('Gute technische Auffassungsgabe und der Wille, technische Sachverhalte zu begreifen');
	$job->text_requirements_set ('Teamfähigkeit, Zuverlässigkeit und Eigeninitiative gehören zu deiner Persönlichkeit');
	$job->text_requirements_set ('Erfahrung in der Kommunikation mit Kunden und Offenheit gegenüber neuen Menschen und Situationen');
	$job->text_requirements_set ('Optimal wären Erfahrungen im Projektmanagement oder Customer Success im SaaS-Umfeld');
	$job->text_requirements_set ('Sehr gute MS Office Kenntnisse, vor allem Excel, Word und Outlook');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_02.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs[] = $job;

	$job = new job ('Projektmanager*in, in Teil- oder Vollzeit', 'Du kümmerst Dich um das Wohl unserer Kunden, übernimmst das Onboarding und stehst als zentrale Ansprechpartner*in zur Verfügung.');
	$job->url_set ('/karriere/job-projektmanager-in-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du kümmerst Dich um das Wohl unserer Kunden, übernimmst das Onboarding und die Schulung der Mitarbeitenden und stehst als zentrale Ansprechpartner*in zur Verfügung.');
	$job->text_description_long_set ('Als Projektmanager*in bist du die Schnittstelle zwischen Entwicklung, Support und Lieferanten und arbeitest eigenständig an Neu- und Bestandskundenprojekten in Teil- oder Vollzeit.');
	$job->text_description_long_set ('Gemeinsam unterstützen wir unsere Kunden mit intelligenten Cloud-Softwarelösungen im Bereich der Telefonie von Kundenservice- und Sales-Abteilungen.');
	$job->text_description_long_set ('Bei uns bist du Ansprechpartner*in für unsere Kunden im Tagesgeschäft, bei jährlichen Workshops oder neuen Projekten und pflegst mit ihnen einen partnerschaftlichen Kontakt.');
	$job->text_tasks_set ('Eigenständige Betreuung von Bestandskunden');
	$job->text_tasks_set ('Partnerschaftliche Zusammenarbeit mit Kunden-Ansprechpartner*innen');
	$job->text_tasks_set ('Koordination und Durchführung von Onboardings');
	$job->text_tasks_set ('Planung, Umsetzung und Analyse neuer Kundenprojekte');
	$job->text_tasks_set ('Koordination zwischen Entwicklung, Lieferanten und Kunden');
	$job->text_tasks_set ('Unterstützung unserer Kunden bei Anwendungsfragen');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung (Quereinsteiger willkommen)');
	$job->text_requirements_set ('Gute technische Auffassungsgabe und Interesse daran technische Sachverhalte zu verstehen');
	$job->text_requirements_set ('Proaktive Grundhaltung und ausgeprägte Lösungskompetenz');
	$job->text_requirements_set ('Erfahrung in der Kommunikation mit Kunden und Offenheit gegenüber neuen Menschen und Situationen');
	$job->text_requirements_set ('Optimal wären Projektmanagement-Erfahrungen im SaaS-Umfeld');
	$job->text_requirements_set ('Sehr gute Kenntnisse von MS Office');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_02.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die Große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs[] = $job;

	$job = new job ('Kauffrau /-mann für Bürokommunikation, in Teil- oder Vollzeit', 'Du lebst für gute Organisation und hast Lust uns in unseren Arbeitsabläufen tatkräftig zu unterstützen?');
	$job->url_set ('/karriere/job-kaufmann-frau-fuer-buerokommunikation-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du brennst für Organisation und Planung und bist bereit uns im Alltagsgeschäft tatkrätig zu unterstützen? Dann haben wir einen Job für dich!');
	$job->text_description_long_set ('Als Unterstützung für unser Back- und Frontoffice bist du ein wichtiger Bestandteil unseres Teams. Du bist die Stütze unses Projektmanagements und Supports und hilfst mit Zuarbeit und bei der Planung neuer und bestehender Kundenprojekte.');
	$job->text_description_long_set ('Als Allrounder sind deine Aufgaben recht vielfältig und reichen vom Erstellen von Angeboten und Accounts über Bestellungen bei Lieferanten bis hin zur Pflege von Listen und Dokumentationen. Gerne berücktsichtigen wir deine Interessen und Schwerpunkte.');
	$job->text_description_long_set ('Wichtig ist uns, dass du Spaß an der Arbeit im Team hast, den Kontakt zu Neu- und Bestandskunden nicht scheust und Interesse daran hast dich in neue Themengebiete im Bereich von SaaS-Lösungen einzuarbeiten.');
	$job->text_tasks_set ('Unterstützung bei allen administrativen Prozessen');
	$job->text_tasks_set ('Erstellung und Anpassung von Angeboten');
	$job->text_tasks_set ('Unterstützung bei Onboarding, Schulung und Support von Kundenprojekten');
	$job->text_tasks_set ('Koordination der Zusammenarbeit mit Lieferanten');
	$job->text_requirements_set ('Klarer Kommunikationsstil, sowohl mündlich als auch schriftlich');
	$job->text_requirements_set ('Gute technische Auffassungsgabe und der Wille, technische Sachverhalte zu begreifen');
	$job->text_requirements_set ('Eigenständige, proaktive und sorgfältige Arbeitsweise');
	$job->text_requirements_set ('Sicherer Umgang mit den gängigen MS-Office-Programmen wie Word, Excel und Power Point');
	$job->text_requirements_set ('Interesse an der Einarbeitung in neue Themengebiete und an einer "Allrounder-"-Tätigkeit');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_05.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die Große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs[] = $job;

	$job = new job ('IT-Systemkauffrau /-mann, in Teil- oder Vollzeit', 'Du hast ein breit aufgestelltes Wissen im IT-Bereich, um unsere Kunden im Alltag zu unterstützen?');
	$job->url_set ('/karriere/job-it-systemkaufmann-frau-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du hast ein breit aufgestelltes Wissen im IT-Bereich, um unsere Kunden im Alltag zu unterstützen?');
	$job->text_description_long_set ('Als IT-Systemfachkraft bist du bei uns erste Ansprechperson für unsere Kunden bei technischen Fragestellungen. Dabei unterstützt du nicht nur im Bereich von Alltagsproblemen im Bereich der IP-Telefonie, sondern auch bei Onboardings und der generellen Konfiguration und Administration unserer Telefonielösungen.');
	$job->text_description_long_set ('Wenn du Freude daran hast, komplexere Sachverhalte klar zu definieren und zu analysieren, bist du bei uns genau richtig. Neben klassischen IT-Support-Themen wünschen wir uns von dir Unterstützung bei der Umsetzung von IT-Projekten im Zusammenspiel mit verschiedenen APIs und Schnittstellen sowie bei der Implementierung neuer Produkte.');
	$job->text_tasks_set ('Hilfestellungen bei Fragen zu Soft- und Hardware, sowie bei der Inbetriebnahme unseres Telefonsystems');
	$job->text_tasks_set ('Second Level Support bei Fragen im Bereich Netzwerk, Firewall und SIP');
	$job->text_tasks_set ('Generieren von Ideen und weiterer Aufbau von technischem Wissen');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Entwicklung und Projektleitung im Rahmen von Kundenprojekten');
	$job->text_tasks_set ('Unterstützung der Entwicklungsabteilung');
	$job->text_requirements_set ('Erfolgreich abgeschlossene Ausbildung zum IT-System-Kaufmann (m/w/d), Fachinformatiker (m/w/d), Informatikkaufmann (m/w/d) oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Grundkenntnisse in den Bereichen VoIP und SIP sowie in Betriebssystemen und in der Arbeit mit der Browser-Console');
	$job->text_requirements_set ('Gute Kenntnisse in HTML, PHP, mySQL und JavaScript');
	$job->text_requirements_set ('Kenntnisse im Bereich Netzwerk, Firewall-Architekturen');
	$job->text_requirements_set ('Zuverlässige Arbeitsweise und Eigeninitiative');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of IT', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$job->icon_set ('/assets/images/icons_svg/job_02.svg');
	$jobs[] = $job;

	$job = new job ('IT-Support, in Teil- oder Vollzeit', 'Du hast ein solides Arsenal technisches Wissen und kannst Partner, Kunden und IT-Mitarbeiter umfassend betreuen?');
	$job->url_set ('/karriere/job-it-support-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du hast eine technische Ausbildung absolviert und kannst analytisch-strukturiert denken?	Du besitzt eine hohe Auffassungsgabe, um komplexe Prozesse zu durchdringen und arbeitest gerne im Team? Dann bist du bei uns genau richtig!');
	$job->text_description_long_set ('Als Mitarbeiter*in im IT-Support bist du erste Ansprechperson für technische Anforderungen unserer Kunden.');
	$job->text_description_long_set ('Du hilfst bei der Konfiguration und Administration der IP-Lösungen, die wir bereitstellen.  Zudem sorgst du dafür, dass Kundenanfragen und Probleme bestmöglich gelöst werden, indem du sie analysierst, dokumentierst und Lösungen direkt oder mit dem Team umsetzt. Dazu gehört, komplexe Sachverhalte klar zu definieren und damit die Basis für konkrete Lösungen zu schaffen.');
	$job->text_tasks_set ('1st und 2nd Level Support bei Fragen im Bereich Netzwerk, Firewall und VoIP/SIP');
	$job->text_tasks_set ('Hilfestellungen bei Fragen zu Soft- und Hardware sowie bei der Inbetriebnahme unseres Telefonsystems');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Entwicklung und Projektleitung bei Kundenprojekten');
	$job->text_tasks_set ('Erstellung und Pflege von Dokumentationen und FAQs zur ständigen Qualitätsoptimierung');
	$job->text_requirements_set ('Berufserfahrung im IT-Bereich; Quereinsteiger*innen mit entsprechendem Know-how sind ebenfalls willkommen');
	$job->text_requirements_set ('Erfahrungen im (Remote-)Anwendersupport für Software-Lösungen');
	$job->text_requirements_set ('Grundkenntnisse im Bereich Netzwerk, Firewall-Architekturen und Programmierung (PHP, Python, Java o.Ä. und SQL) ');
	$job->text_requirements_set ('Optimal wären Grundkenntnisse in den Bereichen VoIP und SIP sowie in Betriebssystemen und in der Arbeit mit der Browser-Console ');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie die Eigeninitiative das ganze Team mit deinen Ideen voranzutreiben');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_03.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of IT', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs[] = $job;

	$job = new job ('Fachinformatiker*in, in Teil- oder Vollzeit', 'Du bist Fachinformatiker*in mit Schwerpunkt Entwicklung oder Systemintegration und hast Lust uns mit deiner Expertise zu unterstützen?');
	$job->url_set ('/karriere/job-fachinformatiker-in-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du verfügst über grundlegende Kenntnisse der gängigen Betriebssysteme, konntest bereits in vergleichbaren IT-Projekten Erfahrungen sammeln und dein Herz schlägt für technische Sachverhalte?');
	$job->text_intro_set ('Du besitzt eine hohe Auffassungsgabe für komplexe Prozesse und arbeitest gerne im Team? Dann bist du bei uns genau richtig!');
	$job->text_description_long_set ('Als tragende Figur in einem schlagkräftigen Team bewegst Du Dich in einer komplexen, aber anwenderfreundlichen IT-Softwarelandschaft, erkennst technische Probleme und begegnest ihnen mit Ehrgeiz und Kampfeslust.');
	$job->text_description_long_set ('Du bringst dein Wissen in echten Projekten und bei echten Kunden ein und betreust diese bei technischen Fragen rund um unsere Softwarelösung.');
	$job->text_tasks_set ('Installation, Administration und Konfiguration unserer Softwarelösung');
	$job->text_tasks_set ('Bearbeitung im Ticketsystem: Priorisierung, Klassifizierung und Dokumentation');
	$job->text_tasks_set ('Fehleranalyse durchführen und Maßnahmen einleiten');
	$job->text_tasks_set ('Wissensdatenbank: Erfassen, Pflegen, Dokumentieren');
	$job->text_tasks_set ('Unterstützung von IT- Projekten');
	$job->text_requirements_set ('Erfolgreich abgeschlossene Ausbildung zum Fachinformatiker (m/w/d), IT-System-Kaufmann (m/w/d), Informatikkaufmann (m/w/d) oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Ein ausgeprägtes technisches Verständnis und die Faszination für Innovationen');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise, sowie die Eigeninitiative das ganze Team mit deinen Ideen voranzutreiben');
	$job->text_requirements_set ('Sehr gutes Deutsch in Wort & Schrift');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_04.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of IT', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs[] = $job;

	$job = new job ('Webdesigner*in, in Teil- oder Vollzeit', 'HTML und Grafikdesign sind dein tägliches Handwerk? Dann bist du bei uns genau richtig!');
	$job->url_set ('/karriere/job-webdesigner-in-potsdam');
	$job->quickinfo_set ('Potsdam · unbefristet · (m/w/d)');
	$job->text_intro_set ('Wir haben es uns zum Ziel gesetzt, Kundenservice richtig gut zu machen. Dafür brauchen wir dich!');
	$job->text_intro_set ('HTML und Grafikdesign sind dein tägliches Handwerk? Dann bist du bei uns genau richtig!​​');
	$job->text_description_long_set ('Als Webdesigner*in kümmerst du dich um das Wohl unserer Kunden auf unseren Webpräsenzen. Du pflegst und erweiterst unser Corporate Design, erstellst passende Grafiken für unsere Social Media Kanäle und vieles mehr. Du bringst eine gute Portion Neugier und Kreativität mit sowie die Fähigkeit, dich mit neuen Ideen einzubringen.');
	$job->text_tasks_set ('Planung, Entwicklung und technische Umsetzung von statischen, dynamischen und mobilen Webseiten der CallOne');
	$job->text_tasks_set ('Schaffung webbasierter Benutzeroberflächen für unsere Kunden');
	$job->text_tasks_set ('Kreative Ideen für die Weiterentwicklung von Webseiten und/oder Produkten ');
	$job->text_tasks_set ('Erstellung von Online-Werbemitteln und Landingpages');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung in Grafikdesign, Mediendesign, Kommunikationsdesign oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Gute Kenntnisse in HTML5 und CSS3 (SASS), JS');
	$job->text_requirements_set ('Kreativität und ein besonders ausgeprägtes Gefühl für modernes und ansprechendes Design und Weblayout');
	$job->text_requirements_set ('Sicherer Umgang mit modernen Design Tools wie z.B. Figma');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie die Eigeninitiative, das ganze Team mit deinen Ideen voranzutreiben');
	$job->text_offer_set ('Ein humorvolles Team mit unterschiedlichen Persönlichkeiten und Hands-on-Mentalität');
	$job->text_offer_set ('Regelmäßiger Austausch und eine Diskussionskultur ohne Angst, das Falsche zu sagen');
	$job->text_offer_set ('Freiraum: Du kannst deine Ideen und Vorstellungen einbringen und auch einfach mal etwas ausprobieren');
	$job->text_offer_set ('Fundierte Einarbeitung in unsere Software-Lösungen für die Business-Telefonie');
	$job->text_offer_set ('Ein sicherer Arbeitsplatz in einem Potsdamer IT-Unternehmen mit solidem Geschäftsmodell');
	$job->text_offer_set ('Individuelle Weiterbildung, die uns alle weiterbringt');
	$job->text_offer_set ('Unterstützung bei der Vereinbarkeit von Job und Privatleben, z.B. durch die Möglichkeit zu Teilzeit und mobilem Arbeiten');
	$job->text_offer_set ('30 Tage Urlaub im Jahr');
	$job->icon_set ('/assets/images/icons_svg/job_04.svg');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of IT', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs[] = $job;

	return $jobs;
}


// benefits
function jobs_benefits_load ()
{
	$jobs_benefits = array ();

	$jobs_benefit = new jobs_benefit ('Langfristigkeit');
	$jobs_benefit->text_set ('Job-Hopping bedeutet Stress und immer nur einen kurzen Energieschub. Wir setzen auf langfristige Anstellungen, krisensichere und zukunftsfähige Jobs und die Perspektive, das Beste aus dir rauszuholen, damit du zufrieden bist.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Work-Life Balance');
	$jobs_benefit->text_set ('Uns allen ist der Wert unserer Arbeit besonders wichtig. Wir wollen, dass unsere Arbeit einen Einfluss hat. Das bedeutet für uns: Fokussiertes, eﬀizientes Arbeiten, das sich an Ergebnissen orientiert. Aber auch pünktlich Feierabend machen zu können und am Wochenende frei zu haben. Du möchtest weniger als 40 Stunden pro Woche arbeiten? Du möchtest auch mal von zu Hause arbeiten können? - Lass uns hierzu ins Gespräch kommen! ');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Einatmen, ausatmen');
	$jobs_benefit->text_set ('Statt im Betonklotz in Friedrichshain sitzen wir in der Potsdamer Innenstadt. Viel Nähe zur Natur in der Mittagspause und ein ruhiges, stressfreies Arbeitsklima sind Teil deiner Arbeitsumgebung.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Urlaub &amp; Gehalt');
	$jobs_benefit->text_set ('30 Tage Urlaub im Jahr und ein überdurchschnittliches Gehalt für überdurchschnittliche Leistung. Wir liegen gern ein paar Stufen über dem Durchschnitt.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Struktur, kein Unsinn');
	$jobs_benefit->text_set ('Hierarchien halten wir flach, unsere Strukturen sind transparent, die Kommunikationswege kurz und Wertschätzung hoch. Wir haben eine klare Vision, an der du mitarbeiten und mitentscheiden sollst.'); 
	$jobs_benefits[] = $jobs_benefit;

	return $jobs_benefits;
}
?>