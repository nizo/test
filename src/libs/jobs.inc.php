<?php
class jobs
{
	private $jobs;

	function __construct ()
	{	$this->jobs = array ();
	}

	function categories_get ()
	{
		$categories = array ();

		foreach ($this->jobs as $job_tmp)
		{
			if (empty ($job_tmp->category_get()))
				continue;
			if (in_array ($job_tmp->category_get(), $categories))
				continue;
			
			$categories[] = $job_tmp->category_get();
		}
		sort ($categories);

		return $categories;
	}

	function job_add ($job)
	{	$this->jobs[] = $job;
	}

	function jobs_get ()
	{	return $this->jobs;
	}

	function jobs_get_by_category ($category)
	{
		$jobs_filtered = array ();

		foreach ($this->jobs as $job_tmp)
		{	if ($job_tmp->category_get() == $category)
				$jobs_filtered[] = $job_tmp;
		}

		return $jobs_filtered;
	}

	function category_id_get ($category)
	{
		$category_id = preg_replace("/[^A-Za-z0-9 ]/", '', $category); // Remove all but alphanumeric
		$category_id = preg_replace('!\s+!', ' ', $category_id); // Replace multiple spaces with single space
		$category_id = strtolower($category_id); // To lowercase
		$category_id = str_replace(" ", "-", $category_id); // Replace spaces with hyphen
		return $category_id;
	}
}

class job
{
	private $agenda_filename;
	private $category;
	private $description;
	private $icon;
	private $job_start_end;
	private $job_worktime;
	private $location;
	private $quickinfo;
	private $statement;
	private $text_description_long;
	private $text_intro;
	private $text_requirements;
	private $text_tasks;
	private $title;
	private $url;

	function __construct ($category, $title, $description)
	{
		$this->agenda_filename			= '';
		$this->category					= $category;
		$this->description				= $description;
		$this->icon						= '';
		$this->job_start_end			= '';
		$this->job_worktime				= '';
		$this->location					= '';
		$this->quickinfo				= '';
		$this->statement				= array ();
		$this->text_description_long	= array ();
		$this->text_intro				= array ();
		$this->text_requirements		= array ();
		$this->text_tasks				= array ();
		$this->title					= $title;
		$this->url						= '';
	}

	// getters / setters
	function agenda_filename_get ()
	{	return $this->agenda_filename;
	}
	function agenda_filename_set ($agenda_filename)
	{	$this->agenda_filename = $agenda_filename;
	}

	function category_get ()
	{	return $this->category;
	}

	function description_get ()
	{	return $this->description;
	}

	function icon_get ()
	{	return $this->icon;
	}
	function icon_set ($icon)
	{	$this->icon = $icon;
	}

	function job_start_end_get ()
	{	return $this->job_start_end;
	}
	function job_start_end_set ($job_start_end)
	{	$this->job_start_end = $job_start_end;
	}

	function job_worktime_get ()
	{	return $this->job_worktime;
	}
	function job_worktime_set ($job_worktime)
	{	$this->job_worktime = $job_worktime;
	}

	function location_get ()
	{	return $this->location;
	}
	function location_set ($location)
	{	$this->location = $location;
	}

	function url_get ()
	{	return $this->url;
	}
	function url_set ($url)
	{	$this->url = strtolower ($url);
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

	function text_tasks_get ()
	{	return $this->text_tasks;
	}
	function text_tasks_set ($text_tasks)
	{	$this->text_tasks[] = $text_tasks;
	}

	function title_get ()
	{	return $this->title;
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
	private $icon;
	private $alt_icon;
	private $title;
	private $text;

	function __construct ($title)
	{	
		$this->icon		= '';
		$this->alt_icon = '';
		$this->title	= $title;
		$this->text		= '';
	}

	// getters / setters
	function icon_get ()
	{	return $this->icon;
	}
	function icon_set ($icon)
	{	$this->icon = $icon;
	}

	function alt_icon_get ()
	{	return $this->alt_icon;
	}
	function alt_icon_set ($alt_icon)
	{	$this->alt_icon = $alt_icon;
	}

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

// Icons

function jobs_load ()
{
	$icons = array(
		'administration' => '/assets/images/icons_svg/administration-black.svg',
		'care'			 => '/assets/images/icons_svg/care-black.svg',
		'developer'		 => '/assets/images/icons_svg/developer-black.svg',
		'mouse'			 => '/assets/images/icons_svg/job_01.svg',
		'headset'		 => '/assets/images/icons_svg/job_02.svg',
		'clipboard'		 => '/assets/images/icons_svg/job_03.svg',
		'laptop'		 => '/assets/images/icons_svg/job_04.svg',
		'screen'		 => '/assets/images/icons_svg/job_05.svg'
	);

	$jobs = new jobs ();

	/*
	$job = new job ('Management', 'Leiter*in Finanzen (CFO)', 'Der Umgang mit Zahlen liegt dir ebenso wie die Kommunikation mit Menschen? Die vielfältige Verantwortung in Finanzen, Accounting und Controlling liegen dir im Blut und am Herzen?');
	$job->location_set ('Potsdam-Berlin-Hamburg');
	$job->url_set ('/karriere/job-finanzleiter-in-cfo'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du liebst den Umgang mit Zahlen, bringst ein hohes Maß an Eigenverantwortung und strategischem Denken mit? Du kommunizierst professionell, transparent und mühelos gegenüber Mitarbeitenden, Partnern und Stakeholdern und bringst eine Hands-on-Mentalität mit?');
	$job->text_description_long_set ('Als CFO bringst du deine ausgeprägte Kommunikationsfähigkeit, dein souveränes verhalten sowie deine Hands-on-Persönlichkeit gemeinsam mit der nötigen Bodenständigkeit im mittelständischen Unternehmensumfald in die Weiterentwicklung und Sicherstellung sämtlicher Prozesse mit ein, um die Skalierbarkeit in einem stark wachsenden Unternehmen zu gewährleisten.');
	$job->text_description_long_set ('Du wünschst dir ein hohes Maß an Eigenverantwortung und eine sehr gute berufliche und persönliche Entwicklungsperspektive? Hier findest du genau das! Vertrauensvolle Zusammenarbeit mit einem hoch motivierten und leidenschaftlichen Team wird deinen Arbeitsalltag auszeichnen. Ebenso wie attraktive und leistungsgerechte Vergütung und kurze Entscheidungswege Dank flacher Hierarchien.');
	$job->text_description_long_set ('Wir umfassen inzwischen knapp 50 Mitarbeitende und über 3000 Kunden. Unser starkes Teams sowie unser Partner ermöglichen den großen Wachstum sowie die Umsatzgröße von 10 Millionen Euro unseres Unternehmens. Deine Rolle ist strategisch geprägt und umfasst die Verantwortung für die Bereiche Finanzen, Accounting und Controlling.');
	$job->text_tasks_set ('Partnerschaftliche Unterstützung von Geschäftsführung und Partner in allen kaufmännischen Themen');
	$job->text_tasks_set ('Gewährleistung der Skalierbarkeit unseres stark wachsenden Unternehmens, indem reibungslose Abläufe sichergestellt und sämtliche Prozesse weiterentwickelt werden');
	$job->text_tasks_set ('Als Ansprechpartner für Steuerberater, Wirtschaftsprüfer und Banken/Fremdfinanzierungspartnern steuerst du diese Positionen auch');
	$job->text_tasks_set ('Du koordinierst und begleitest die Erstellung von Monats-, Quartals- und Jahresabschlüssen und erstellst monatliche Reporting an das Management, Partner und Banken');
	$job->text_tasks_set ('Du übernimmst Verantwortung im Planungsprozess und bei der Erstellung der jährlichen Budgets');
	$job->text_tasks_set ('Das Controlling entwickelst du operativ und KPI-basiert samt geeigneter Analysen zur Beobachtung und Bewertung der wirtschaftlichen Entwicklung.');
	$job->text_tasks_set ('Du stellst sicher, dass Richtlinien und Regularien eingehalten werden und identifizierst etwaige Risiken nicht nur, sondern beugst ihnen auch vor');
	$job->text_tasks_set ('Du übernimmst Personalverantwortung mit organisatorischer Führung und arbeitest aktiv an strategischen Sonderprojekten mit');
	$job->text_requirements_set ('Abgeschlossenes Studium der Betriebswirtschaftslehre oder eine kaufmännische Ausbildung');
	$job->text_requirements_set ('Du kannst mindestens 5-7 Jahre Berufserfahrung im kaufmännischen Bereich der KMU vorweisen.');
	$job->text_requirements_set ('Teamfähigkeit, Zuverlässigkeit und Eigeninitiative gehören zu deiner Persönlichkeit');
	$job->text_requirements_set ('Du bringst fundierte Kenntnisse in der Rechnungslegung sowie Konsolidierung mit und gehst sicher mit gängigen Softwares wie MS-Office sowie ERP- und Buchhaltungs-Systemen um');
	$job->text_requirements_set ('Idealerweise verfügst du bereits über Kenntnisse in DATEV und Lucanet');
	$job->text_requirements_set ('Du bringst ein ausgeprägtes Zahlenverständnis mit und zeichnest dich durch eine lösungsorientierte Arbeitsweise im Team aus');
	$job->text_requirements_set ('Du beherrschst sehr gutes Deutsch und Englisch in Wort und Schrift');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);
	*/
	
	$job = new job ('Projekte & Support', 'Key Account Manager (w/m/d) I 4-Tage-Woche und remote work möglich', 'Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-key-account-manager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du liebst den Umgang mit Menschen und kommunizierst mühelos sowie zielführend mit Kunden? Außerdem hast du eine schnelle technische Auffassungsgabe und eine selbstständige Arbeitsweise?');
	$job->text_description_long_set ('Als Key Account Manager*in bist Du Teil unseres Projektteams und bearbeitest eigenständig vor allem bestehende Kundenprojekte in Teil- oder Vollzeit.');
	$job->text_description_long_set ('Unsere Kunden sind vorwiegend mittelständische Unternehmen, die wir mit unseren Telefonielösungen im Bereich Kundenservice oder Inside-Sales unterstützen. Insbesondere mit unseren Key Accounts stehen wir im sehr regelmäßigen Austausch, sodass eine stetige Kundenprozessoptimierung stattfinden kann.');
	$job->text_description_long_set ('Du bist Ansprechpartner*in für unsere Key Account Kunden, mit denen wir einen sehr engen und partnerschaftlichen Kontakt pflegen. Du unterstützt sie vom Livegang bis hin zum Tagesgeschäft, erarbeitest gemeinsam mit dem Team Optimierungsvorschläge und Lösungsstrategien und sorgst auf Basis von Kundenentwicklungsplänen für eine optimale und partnerschaftliche Projektbetreuung.');
	$job->text_tasks_set ('Betreuung von Bestandskunden');
	$job->text_tasks_set ('Unterstützung der Kunden beim Onboarding unserer Telefonielösungen');
	$job->text_tasks_set ('Planung und Umsetzung neuer Kundenprojekte');
	$job->text_tasks_set ('Erstellung und Umsetzung von Kundenentwicklungsplänen');
	$job->text_tasks_set ('Koordination von Support-Anfragen und Feature Requests');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Entwicklung, Lieferanten und Partnern');
	$job->text_tasks_set ('Eigenständige Dokumentation und Analyse von Kundenprojekten');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung (Quereinsteiger willkommen)');
	$job->text_requirements_set ('Gute technische Auffassungsgabe und der Wille, technische Sachverhalte zu begreifen');
	$job->text_requirements_set ('Teamfähigkeit, Zuverlässigkeit und Eigeninitiative gehören zu deiner Persönlichkeit');
	$job->text_requirements_set ('Erfahrung in der Kommunikation mit Kunden und Offenheit gegenüber neuen Menschen und Situationen');
	$job->text_requirements_set ('Optimal wären Erfahrungen im Key Account Management, Sales Management oder Customer Success im SaaS-Umfeld');
	$job->text_requirements_set ('Sehr gute MS Office Kenntnisse, vor allem Excel, Word und Outlook');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);
	
	$job = new job ('Projekte & Support', 'Customer Success Manager (w/m/d) I 4-Tage-Woche und Home Office möglich, ', 'Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-customer-success-manager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du liebst den Umgang mit Menschen, kommunizierst mühelos mit Kunden und hast eine schnelle technische Auffassungsgabe?');
	$job->text_description_long_set ('Als Customer Success Manager*in bist Du Teil unseres Projektteams und bearbeitest eigenständig neue und bestehende Kundenprojekte in Teil- oder Vollzeit.');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);

	$job = new job ('Projekte & Support', 'Projektmanager I Prozessmanager (w/m/d) I  4-Tage-Woche und Home Office möglich', 'Du kümmerst Dich um das Wohl unserer Kunden, übernimmst das Onboarding und stehst als zentrale Ansprechpartner*in zur Verfügung.');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-projektmanager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die Große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);

	/*$job = new job ('Office', 'Kauffrau /-mann für Bürokommunikation', 'Du lebst für gute Organisation und hast Lust uns in unseren Arbeitsabläufen tatkräftig zu unterstützen?');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-kaufmann-frau-fuer-buerokommunikation-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['administration']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die Große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);*/

	$job = new job ('Office', 'Assistenz der Geschäftsführung (w/m/d)', 'In der Rolle der Assistenz der Geschäftsführung arbeitest Du eng mit unserer Geschäftsführung und dem Projektmanagement zusammen.');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-assistenz-geschaeftsfuehrung-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Unterstütze die Geschäftsführung tagtäglich bei einem vielfältigen Aufgabenspektrum.');
	$job->text_description_long_set ('In der Rolle der Assistenz der Geschäftsführung arbeitest Du eng mit unserer Geschäftsführung und dem Projektmanagement zusammen, um einen reibungslosen Ablauf und effiziente Entscheidungsprozesse zu gewährleisten. Dein vielfältiges Aufgabenspektrum umfasst die Koordination und Kommunikation zwischen verschiedenen internen und externen Stakeholdern.');
	$job->text_description_long_set ('Sie sind interessiert und möchten mehr über diese spannende Position erfahren? Stefanie Bendig freut sich auf Ihre Kontaktaufnahme! Sie können sich darauf verlassen, dass absolute Diskretion gewahrt wird und eventuelle Sperrvermerke eingehalten werden.');
	$job->text_tasks_set ('Koordination und Kommunikation zwischen Geschäftsführung, Projektmanagement und externen Partnern');
	$job->text_tasks_set ('Erarbeitung von Entscheidungsgrundlagen und Durchführung von Recherchen zur Entscheidungsfindung');
	$job->text_tasks_set ('Erstellung von detaillierten Projektberichten, ansprechenden Präsentationen sowie Visualisierung von Ergebnissen und Kalkulationen');
	$job->text_tasks_set ('Organisation und Verwaltung von Terminen, Reisen sowie Reisekostenabrechnungen');
	$job->text_requirements_set ('Erfolgreich abgeschlossene kaufmännische Ausbildung, z. B. als Sekretär/in, Notariatsfachangestellte/r, Steuerfachangestellte/r (m/w/d) oder vergleichbar');
	$job->text_requirements_set ('Mehrjährige Berufserfahrung in einer Assistenzposition im Managementbereich');
	$job->text_requirements_set ('Umfassende MS-Office-Kenntnisse, insbesondere Excel');
	$job->text_requirements_set ('Hervorragende Kommunikationsfähigkeiten auf allen Hierarchieebenen und eigeninitiatives Handeln');
	$job->text_requirements_set ('Verhandlungssichere Deutschkenntnisse');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['administration']);
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$jobs->job_add ($job);

	$job = new job ('Office', 'Quereinsteiger I Junior Projektmanagement (w/m/d) I  4-Tage-Woche und Home Office möglich', 'Mit unserem umfassenden Einarbeitungsprogramm machen wir Dich zur Projektmanager*in für unsere großartigen Kunden');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-quereinsteiger-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Mit unserem umfassenden Einarbeitungsprogramm machen wir Dich zur Projektmanager*in für unsere großartigen Kunden');
	$job->text_description_long_set ('Du bringst als Quereinsteiger*in die nötigen Softskills mit, die es braucht, um partnerschaftlich und serviceorientiert mit dem CallOne Team und unseren Kunden zusammenzuarbeiten. Den Rest bringen wir dir bei!');
	$job->text_description_long_set ('Projektmanager*innen sind unsere Schnittstelle zum Kunden und betreuen Sie. Mit unserem Quereinsteigerprogramm vermitteln wir dir das nötige Fachwissen, dass Du neben Deinen Softskills benötigst, um Sie fachkundig zu betreuen.');
	$job->text_description_long_set ('Du lernst neben Projektmanagement mit smarten Tools das nötige Fachwissen durch praxisnahe Unterstützung, Schulungsvideos und durch Deine neuen Kolleg*innen, die dich in diesem Prozess unterstützen.');
	$job->text_tasks_set ('Unterstützung des Projektteams​');
	$job->text_tasks_set ('Gemeinsame Projektumsetzungen​');
	$job->text_tasks_set ('Betreuung kleinerer Accounts');
	$job->text_tasks_set ('Unterstützung bei Kundenanfragen');
	$job->text_tasks_set ('Gemeinsame, stetige Optimierung unserer internen Prozesse​');
	$job->text_requirements_set ('Erfahrung in der Kommunikation mit Kunden und Offenheit gegenüber neuen Menschen und Situationen');
	$job->text_requirements_set ('Teamfähigkeit, Zuverlässigkeit, Strukturiertheit und Eigeninitiative gehören zu deiner Persönlichkeit');
	$job->text_requirements_set ('Sehr gutes Deutsch in Wort & Schrift');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['administration']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);

	/*$job = new job ('Marketing', 'Studentische Aushilfe, Content Marketing', 'Du unterstützt uns bei der Recherche, der Erstellung und dem Publishing von Content und lernst viele Online Marketing Insights.');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-marketing-student-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du bist nicht nur Aushilfe, sondern wirst Teil unseres Teams. Als Teil der Marketing-Abteilung findest du für unseren Content die ein oder andere pfiffige Formulierung und catchy Headlines.');
	$job->text_description_long_set ('Du bringst eine große Leidenschaft für Sprache und Content-Formen wie Blog und FAQ mit. Recherchetätigkeiten liegen dir ebenso. Eine große Portion Selbstständigkeit hilft auf jeden Fall. Den Rest bringen wir dir bei!');
	$job->text_description_long_set ('Als Teil unseres Marketing-Teams unterstützt du uns bei der Recherche relevanter Keywords sowie beim Erstellen von verschiedenen Content-Formaten wie Blogbeiträge und FAQ. Unser Content Management System lernst du ebenfalls sehr gut kennen.');
	$job->text_description_long_set ('Du lernst neben SEO-Basics auch Content Marketing Strategien kennen und kannst diese bald selbstständig umsetzen. Natürlich bekommst du eine Einarbeitung und immer Hilfe, wenn du sie benötigst.');
	$job->text_tasks_set ('Recherche relevanter Themen​');
	$job->text_tasks_set ('Recherche potenzieller Partner​');
	$job->text_tasks_set ('Recherche von Best Practices rundum Online Marketing');
	$job->text_tasks_set ('Erstellung von Blogbeiträgen & FAQ​');
	$job->text_tasks_set ('Publishing der Beiträge');
	$job->text_tasks_set ('Erstellung einfacher Grafiken');
	$job->text_requirements_set ('Leidenschaft für pfiffige Texte mit Qualität');
	$job->text_requirements_set ('Teamfähigkeit, Zuverlässigkeit, Strukturiertheit und Eigeninitiative gehören zu deiner Persönlichkeit');
	$job->text_requirements_set ('Sehr gutes Deutsch in Wort & Schrift');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit');
	$job->icon_set ($icons['clipboard']);
	$job->agenda_filename_set ('agenda-student');
	$job->statement_set (new job_statement ('/assets/images/photos/magdalena_lueders.jpg', 'Magdalena Lüders', 'Head of Marketing', 'Ich liebe den Platz für kreative Ideen, gemeinsame Diskussionen und Feinschliffe ebenso wie die Flexibilität und unser super sympathisches Team bei CallOne. '));
	$jobs->job_add ($job); */

	/*
	$job = new job ('IT & Technik', 'UX Designer*in ', 'Die Konzeption von UX Design basierend auf Research und Testing sind deine Leidenschaft? Du gehst darin auf, Wireframes für Websites und Oberflächen genau so zu entwerfen, dass sie für die optimale User Experience sorgen? Dann bist du als UX Designer*in bei uns genau richtig!');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-ux-designer-in-potsdam');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du wünschst dir Freiraum für deine Expertise und Ideen innherhalb eines eingespielten, sympathischen Teams? Gemeinsam mit unseren Product Ownern und Designern kannst du bei uns für eine richtig gute User Experience auf Web-Präsenzen und unseren Produktoberflächen sorgen. Auf Basis von Befragungen und Testings wirst du UX Designs konzipieren, die den Bedürfnissen der User entsprechen. Wir freuen uns auf dich!');
	$job->text_description_long_set ('Als UX Designer*in bei CallOne konzipierst du Nutzeroberflächen, die komplexe Inhalte möglichst nutzerfreundlich darstellen. Dank deiner Arbeit wird die CX unserer Kunden verbessert. Auf Basis von Datenerhebungen und Auswertungen erstellst du Design-Konzepte und Wireframes für unsere Websites und Produkte. Du bringst eine gute Portion Neugier und Kreativität mit sowie die Fähigkeit, dich mit neuen Ideen einzubringen.');
	$job->text_tasks_set ('Planung und Konzipierung von UX Design für die statischen, dynamischen und mobilen Webseiten der CallOne sowie für unsere Nutzeroberfläche');
	$job->text_tasks_set ('Zusammenarbeit mit Product Ownern, Entwicklern und Designern');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung in UX-Design, Mediendesign, Kommunikationsdesign oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Erfahrung in der Konzeption von detaillierten Prototypen mit bekannten Tools wie bspw. Figma');
	$job->text_requirements_set ('Praktische Erfahrungen mit user-zentrierten Designs sowie Einbeziehung entsprechender Methoden und Daten wie bspw. Customer Journeys, Informationsarchitektur, etc.');
	$job->text_requirements_set ('Erkennen von Nutzerbedürfnissen, Durchführung von Datenerhebungen zu Nutzerbedürfnissen');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie die Eigeninitiative, das ganze Team mit deinen Ideen voranzutreiben');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen. Das macht die Arbeit bei CallOne aus!'));
	$jobs->job_add ($job);
	*/

	/*
	$job = new job ('IT & Technik', 'UI Designer*in ', 'Die Erstellung von UI Design, das begeistert, ist deine Leidenschaft? Du gehst darin auf, Wireframes zum Leben zu erwecken und dabei die User Experience auf Websites und Oberflächen in den Mittelpunkt zu stellen? Dann bist du als UI Designer*in bei uns genau richtig!');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-ui-designer-in-potsdam');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du wünschst dir Freiraum für deine Expertise und Ideen innherhalb eines eingespielten, sympathischen Teams? Gemeinsam mit unseren Product Ownern und UX Designern kannst du bei uns für das beste user-zentrierte Design auf Web-Präsenzen und unseren Produktoberflächen sorgen. Auf Basis von UX Designs und Wireframes erstellst du die Designs und Grafiken, die den Bedürfnissen der User entsprechen und unseren Produkten Leben einhaucht. Wir freuen uns auf dich!');
	$job->text_description_long_set ('Als UI Designer*in bei CallOne designst du Nutzeroberflächen, die komplexe Inhalte möglichst nutzerfreundlich darstellen. Dank deiner Arbeit entstehen ansprechende Designs und eine individuelle Bildsprache. Du bringst eine gute Portion Neugier und Kreativität mit sowie die Fähigkeit, dich mit neuen Ideen einzubringen.');
	$job->text_tasks_set ('Erstellung von UI Design für die statischen, dynamischen und mobilen Webseiten der CallOne sowie für unsere Nutzeroberfläche');
	$job->text_tasks_set ('Zusammenarbeit mit Product Ownern, Entwicklern und UX-Designern');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung in (UI) Design, Mediendesign, Kommunikationsdesign oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Erfahrung in der Erstellung von detaillierten detaillierten, nutzerzentrierten Designs mit bekannten Tools wie bspw. Illustrator, Photoshop, InDesign o.ä.');
	$job->text_requirements_set ('Praktische Erfahrungen mit user-zentrierten Designs sowie Einbeziehung entsprechender Methoden und Daten wie bspw. Customer Journeys, Informationsarchitektur, etc. sowie in Zusammenarbeit mit UX Designern und Product Ownern.');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie kommunikative Fähigkeiten und Teamgeist zeichnen dich aus.');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen. Das macht die Arbeit bei CallOne aus!'));
	$jobs->job_add ($job);
	*/

	/*
	$job = new job ('IT & Technik', 'Webdesigner*in - onsite & remote', 'Du liebst es, aus Mockups lebendige Websites, Illustrationen und Grafiken entstehen zu lassen? Dann bist du bei uns genau richtig!');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-webdesigner-in-potsdam');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du liebst es, aus Mockups und Briefings lebendige Bildwelten entstehen zu lassen? Dann bist du bei uns genau richtig!​​');
	$job->text_description_long_set ('Als Webdesigner*in stellst du unsere Produktwelt sowie unsere DNA kreativ und zielgerichtet auf unseren Webpräsenzen dar. Du erstellst passende Illustrationen und Animationen für die Weiterentwicklung unserer Websites. Du erstellst lebendige Bild-Stories mit Emotion auf Basis einen Briefings oder Mockups. Außerdem bringst du eine gute Portion Neugier und Kreativität mit. Wenn du dich gerne mit neuen Ideen einbringst und als Teil eines Teams arbeitest, bist du bei uns genau richtig.');
	$job->text_tasks_set ('Planung, Entwicklung und technische Umsetzung von statischen, dynamischen und mobilen Webseiten der CallOne');
	$job->text_tasks_set ('Design webbasierter Benutzeroberflächen für unsere Kunden');
	$job->text_tasks_set ('Kreative Ideen für die Weiterentwicklung von Webseiten und/oder Produkten sowie der Benutzeroberflächen');
	$job->text_tasks_set ('Erstellen von lebendigen, bildhaften Stories auf Basis grober Briefings');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung in Web-Design, Mediendesign, Kommunikationsdesign oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Kreativität und ein besonders ausgeprägtes Gefühl für modernes und ansprechendes Design und Weblayout');
	$job->text_requirements_set ('Sicherer Umgang mit modernen Design Tools wie z.B. Figma, Photoshop, Illustrator');
	$job->text_requirements_set ('Erkennen von Nutzerbedürfnissen, Durchführung von Design Research und Ableiten nötiger Design-Anpassungen');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie die Eigeninitiative, das ganze Team mit deinen Ideen voranzutreiben');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen. Das macht die Arbeit bei CallOne aus!'));
	$jobs->job_add ($job);
	*/
	
	/*
	$job/ = new job ('Softwareentwicklung', 'Frontend Developer (w/m/d)', 'Du bist Javascript Experte (w/m/d) und hast Lust auf schnelle Entscheidungen und Remote-Work-Möglichkeiten?');
	$job->location_set ('Düsseldorf');
	$job->url_set ('/karriere/frontend-developer-duesseldorf');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Wir suchen einen Frontend Developer, der sich durch seine exzellenten Fähigkeiten in Javascript auszeichnet. Du wirst für die Umsetzung von anspruchsvollen Webanwendungen verantwortlich sein.');
	$job->text_description_long_set ('Als Frontend Developer arbeitest du gemeinsam an der Entwicklung von anspruchsvollen und innovativen Webanwendungen. Unsere Entwickler sind Experten in der Arbeit mit modernen Frontend-Technologien und Tools und setzen ihre Fähigkeiten ein, um die bestmögliche Benutzererfahrung zu schaffen. Durch die enge Zusammenarbeit mit anderen Teams stellen wir sicher, dass unsere Produkte den höchsten Qualitätsstandards entsprechen.');
	$job->text_description_long_set ('Von Browser basierter VoIP-Telefonie über grafische Routingansichten bis zu Dashboards, ist die Spanne der möglichen Aufgaben sehr breit. Deine Kenntnisse unterstützen uns, auch weiterhin am Zahn der Zeit zu bleiben und mit dir weiter zu wachsen.');
	$job->text_tasks_set ('Entwicklung von responsiven und benutzerfreundlichen Webanwendungen');
	$job->text_tasks_set ('Enge Zusammenarbeit mit weiteren Frontend-, sowie den Backend-Entwicklern');
	$job->text_tasks_set ('Entwicklung dynamischer Oberflächen, welche große Datenmengen variabel anzeigen können');
	$job->text_tasks_set ('Sicherstellung der Kompatibilität mit verschiedenen Browsern und Geräten');
	$job->text_tasks_set ('Optimierung der Leistung und Benutzererfahrung von Webanwendungen');
	$job->text_requirements_set ('Mindestens 2 Jahre Erfahrung in der Frontend-Entwicklung');
	$job->text_requirements_set ('Fundierte Kenntnisse in Vanilla Javascript');
	$job->text_requirements_set ('Erfahrung in der Arbeit mit REST APIs und Websockets, wünschenswert WebRTC Kenntnisse');
	$job->text_requirements_set ('Erfahrung in der Verwendung von Bootstrap für das Frontend-Design');
	$job->text_requirements_set ('Kenntnisse in PHP sind von Vorteil, aber nicht zwingend erforderlich');
	$job->text_requirements_set ('Erfahrung mit komplexen Weblösungen');
	$job->text_requirements_set ('Fließend Deutschkenntnise, wünschenswert gute Englischkenntnisse');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);
	*/

	$job = new job ('Softwareentwicklung', 'Frontend Entwickler I Frontend Developer (w/m/d) I 4-Tage-Woche und bis zu 100% remote möglich', 'Du bist Javascript Experte (w/m/d) und hast Lust auf schnelle Entscheidungen und Remote-Work-Möglichkeiten?');
	$job->location_set ('Düsseldorf');
	$job->url_set ('/karriere/frontend-developer-duesseldorf');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (w/m/d)');
	$job->text_intro_set ('Keine Lust auf lange Entscheidungswege, veraltete Arbeitsstrukturen und Anwesenheitspflicht? Du willst an Software-Lösungen arbeiten, die wirklich Mehrwert stiften und wünschst dir ein Umfeld, in dem du deine Ideen schnell und unbürokratisch umsetzen kannst? Du willst New Work nicht nur als Buzzword in einer Jobanzeige lesen, sondern den Job deinen Interessen und Bedürfnissen anpassen und dich auf Wunsch für eine 4-Tage-Woche, remote oder hybrid work entscheiden können? Dann lohnt es sich, jetzt weiterzulesen! ');
	$job->text_description_long_set ('Du bist genervt von 0815-LinkedIn-Nachrichten von Recruitern (w/m/d), die dir das Blaue vom Himmel versprechen und zu glauben wissen, was du willst? Wir auch! Die Wahrheit ist, wir wissen nicht, ob wir deinen Traumjob im Angebot haben, ob wie dein „perfect match“ sind und ob du genau der Entwickler oder die Entwicklerin bist, die wir gesucht haben. Aber wir würden uns freuen, es mit dir gemeinsam herausfinden!  ');
	$job->text_description_long_set ('Wie? In einem ehrlichen 10 bis 15 Minuten-Gespräch auf Augenhöhe, in dem es erst einmal nur um dich und deine Wünsche geht. Ohne Obstkorb- und Kicker-Blabla, ohne wilde Versprechen und hippe Marketing Aktionen, die letztendlich nichts mit dem eigentlichen Job zu tun haben.  ');
	$job->text_description_long_set ('Warum? Wir sind davon überzeugt, dass Mitarbeiter (w/m/d) langfristig nur glücklich und engagiert sind, wenn sie einen Arbeitgeber gefunden haben, bei dem sie ihre Interessen und Stärken voll ausleben können. Dazu zählen für uns nicht nur deine täglichen Aufgaben im Job, sondern auch ein Arbeitsumfeld, in dem du so sein kannst, wie du wirklich bist. Daher arbeiten wir nicht mit starren Job-Profilen, sondern mit Jobbausteinen, die wir basierenden auf deinen Stärken und Vorlieben gemeinsam zusammensetzen.');
	$job->text_description_long_set ('Gibt es gar keine Mindestvoraussetzungen? Doch! Du solltest Bock auf Frontend Entwicklung haben und Javascript beherrschen – alles weitere ist verhandelbar. =)');
	$job->text_description_long_set ('Wie funktioniert Job Crafting bei CallOne? Wir schauen bei einem kurzen Video-Telefonat gemeinsam, was dich inhaltlich reiz, bei welchen Aufgaben, du die Zeit vergisst, und in welchem Umfeld du ganz und gar du selbst sein kannst. Sollten wir dir nicht das passende Umfeld oder die passenden Aufgaben zu bieten haben, kommunizieren wir das ganz offen und transparent und empfehlen dir auf Wunsch gerne passendere Unternehmen innerhalb unseres Netzwerks. Denn uns geht es nicht darum Stellen schnell, sondern passgenau und somit langfristig zu besetzten.');
	$job->text_description_long_set ('Der Haken an der Sache? Schlechtesten Falls verschwendest du 10 Minuten deiner wertvollen Zeit. Bestenfalls resultiert diese Kaffeepause in einem Job, der den Titel „Traumjob“ wirklich verdient - bei uns oder einem Arbeitgeber aus unserem Netzwerk.');
	$job->text_description_long_set ('Klingt nach einer lohnenden Investition? Dann verabrede dich jetzt mit Marian.');
	$job->text_tasks_set ('Entwicklung von responsiven und benutzerfreundlichen Webanwendungen');
	$job->text_tasks_set ('Enge Zusammenarbeit mit weiteren Frontend-, sowie den Backend-Entwicklern');
	$job->text_tasks_set ('Entwicklung dynamischer Oberflächen, die große Datenmengen variabel anzeigen können');
	$job->text_tasks_set ('Sicherstellung der Kompatibilität mit verschiedenen Browsern und Geräten');
	$job->text_tasks_set ('Optimierung der Leistung und Benutzerfreundlichkeit unserer Webanwendungen');
	$job->text_tasks_set ('Und natürlich die enge Zusammenarbeit mit weiteren Frontend- und Backend-Entwicklern (w/m/d)');
	$job->text_requirements_set ('Du beherrschst Vanilla JavaScript im Schlaf!');
	$job->text_requirements_set ('Du hast Erfahrung in der Frontend-Entwicklung von komplexen Weblösungen?');
	$job->text_requirements_set ('Du denkst dich gut und gerne, in das Nutzerverhalten unserer KundInnen rein und hast Freude daran, unsere Webanwendungen entsprechend zu optimieren? ');
	$job->text_requirements_set ('Vielleicht hast du bereits mit APIs gearbeitet?');
	$job->text_requirements_set ('Vielleicht bringst du sogar nützliche Erfahrungen mit, um uns beim Wechsel hin zu Bootstrap zu unterstützen?');
	$job->text_requirements_set ('REST APIs, WebSockets, WebRTC, PHP - was auch immer du davon mitbringst, kannst du bei uns gut zum Einsatz bringen.');
	$job->text_requirements_set ('Du kannst dich gut und sicher auf Deutsch verständigen');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);

	/*
	$job = new job ('IT & Technik', 'IT-Systemkauffrau /-mann', 'Du hast ein breit aufgestelltes Wissen im IT-Bereich, um unsere Kunden im Alltag zu unterstützen?');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-it-systemkaufmann-frau-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);
	*/

	/*
	$job = new job ('IT & Technik', 'IT-Support', 'Du hast ein solides Arsenal technisches Wissen und kannst Partner, Kunden und IT-Mitarbeiter umfassend betreuen?');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-it-support-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);
	*/

	/*
	$job = new job ('IT & Technik', 'Fachinformatiker*in', 'Du bist Fachinformatiker*in mit Schwerpunkt Entwicklung oder Systemintegration und hast Lust uns mit deiner Expertise zu unterstützen?');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-fachinformatiker-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);
	*/

	/*$job = new job ('IT & Technik', 'Webdesigner*in', 'HTML und Grafikdesign sind dein tägliches Handwerk? Dann bist du bei uns genau richtig!');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/job-webdesigner-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
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
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->agenda_filename_set ('agenda-it-technik');
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);*/

	$job = new job ('IT & Technik', 'VoIP Plattform Engineer (w/m/d) I  4-Tage-Woche und 100% Remote möglich', 'Als VoIP Plattform Engineer sind Sie für die Betreuung und Weiterentwicklung unserer VoIP Plattform verantwortlich.');
	$job->location_set ('Kölln-Reisiek, 100% Remote');
	$job->url_set ('/karriere/voip-plattform-engineer-remote');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Als VoIP Plattform Engineer sind Sie für die Betreuung und Weiterentwicklung unserer VoIP Plattform verantwortlich.');
	$job->text_description_long_set ('Sie sind für das Monitoring der Plattform mit Hilfe von CheckMk zuständig und automatisieren Prozesse, um eine modulare und skalierbare VoIP Plattform aufzubauen. Als Mitglied unseres Teams sind Sie für den 3rd Level Support zuständig und unterstützen den technischen Support bei Kundenproblemen im Zusammenhang mit SIP und RTP. Ein gewisses Maß an Kundenkontakt wird erwartet.<br /><br />Wir bieten ein wettbewerbsfähiges Gehaltspaket und eine angenehme Arbeitsumgebung in einem dynamischen und schnelllebigen Unternehmen. Wenn Sie eine Leidenschaft für VoIP-Systeme haben und eine herausfordernde Position suchen, dann bewerben Sie sich jetzt als VoIP Plattform Engineer.');
	$job->text_tasks_set ('Betreuung und Weiterentwicklung der VoIP Plattform');
	$job->text_tasks_set ('Monitoring der VoIP Plattform mit Hilfe von CheckMk');
	$job->text_tasks_set ('Automatisierung von Prozessen');
	$job->text_tasks_set ('Aufbau einer modularen und skalierbaren VoIP Plattform');
	$job->text_tasks_set ('3rd Level Support, Unterstützung des technischen Supports bei Problem mit SIP und RTP der Kunden (Kundenkontakt wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit Debian');
	$job->text_requirements_set ('Kenntnisse mit Open Source VoIP Plattformen (Kamailio, Freeswitch und RTPEngine)');
	$job->text_requirements_set ('Kenntnisse in der Analyse von Netzwerkverkehr (Wireshark)');
	$job->text_requirements_set ('Kenntnisse mit CheckMk oder ähnlichen Monitoring Werkzeugen');
	$job->text_requirements_set ('Kenntnisse mit PHP und SQL (Wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit Firewall und Netzwerk (Wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit Automatisierungstechnik wie Ansible (Wünschenswert)');
	$job->text_requirements_set ('Berufsausbildung, Bachelor- oder Masterabschluss in Informatik oder einem verwandten Bereich');
	$job->text_requirements_set ('Erfahrung in der Entwicklung und Wartung von VoIP-Systemen');
	$job->text_requirements_set ('Erfahrung im 3rd Level Support');
	$job->text_requirements_set ('Ausgezeichnete Problemlösungsfähigkeiten und Fähigkeit, kritische Situationen zu handhaben');
	$job->text_requirements_set ('Ausgezeichnete mündliche und schriftliche Kommunikationsfähigkeiten');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen. Das macht die Arbeit bei CallOne aus!'));
	$jobs->job_add ($job);

	$job = new job ('IT & Technik', 'IT Infrastruktur Management I Serverinfrastruktur- und Storage Engineer (w/m/d) I I  4-Tage-Woche und Home Office möglich', 'Als Serverinfrastruktur- und Storage Engineer sind Sie für die Betreuung und Weiterentwicklung unserer Serverinfrastruktur und Storage Systeme verantwortlich.');
	$job->location_set ('Kölln-Reisiek, 100% Remote');
	$job->url_set ('/karriere/serverinfrastruktur-storage-engineer-remote');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Als Serverinfrastruktur- und Storage Engineer sind Sie für die Betreuung und Weiterentwicklung unserer Serverinfrastruktur und Storage Systeme verantwortlich.');
	$job->text_description_long_set ('Sie planen und wählen neue Rechenzentrums-Hardware aus und sind für das Monitoring mit CheckMk verantwortlich. Sie kümmern sich auch um die Datensicherung, Wiederherstellung und Testing. Bei Bedarf betreuen Sie auch die Netzwerkinfrastruktur und Datenbank.<br /><br />Wir bieten ein wettbewerbsfähiges Gehaltspaket und eine angenehme Arbeitsumgebung in einem dynamischen und schnelllebigen Unternehmen. Wenn Sie eine Leidenschaft für Serverinfrastrukturen und Storage Systeme haben und eine herausfordernde Position suchen, dann bewerben Sie sich jetzt als Serverinfrastruktur- und Storage Engineer.');
	$job->text_tasks_set ('Betreuung und Weiterentwicklung der Serverinfrastruktur und Storage Systeme');
	$job->text_tasks_set ('Betreuung und Weiterentwicklung der Netzwerkinfrastruktur / Datenbank (wünschenswert)');
	$job->text_tasks_set ('Planung und Auswahl neuer Rechenzentrums Hardware');
	$job->text_tasks_set ('Monitoring mit CheckMk');
	$job->text_tasks_set ('Datensicherung, Wiederherstellung und Testing');
	$job->text_requirements_set ('Kenntnisse mit Linux Debian');
	$job->text_requirements_set ('Kenntnisse mit Windows (Wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit Virtualisierung wie Proxmox (LXC / KVM) und ggf. Hyper-V');
	$job->text_requirements_set ('Kenntnisse mit Firewall und Netzwerk Technik (Wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit Datenbank Lösungen wie MariaDB / MySQL (wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit CheckMK oder ähnlichen Lösungen');
	$job->text_requirements_set ('Kenntnisse mit VoIP (Wünschenswert)');
	$job->text_requirements_set ('Kenntnisse mit PHP und SQL (Wünschenswert)');
	$job->text_requirements_set ('Berufsausbildung, Bachelor- oder Masterabschluss in Informatik oder einem verwandten Bereich');
	$job->text_requirements_set ('Erfahrung in der Betreuung und Weiterentwicklung von Serverinfrastrukturen und Storage Systemen');
	$job->text_requirements_set ('Erfahrung in der Auswahl und Planung von Rechenzentrums Hardware');
	$job->text_requirements_set ('Ausgezeichnete Problemlösungsfähigkeiten und Fähigkeit, kritische Situationen zu handhaben');
	$job->text_requirements_set ('Ausgezeichnete mündliche und schriftliche Kommunikationsfähigkeiten');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['developer']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen. Das macht die Arbeit bei CallOne aus!'));
	$jobs->job_add ($job);
		
	$job = new job ('Marketing', 'Produkt Marketing Manager (w/m/d) I I  4-Tage-Woche und bis zu 100% Remote möglich', 'Das kundenorientierte Marketing für unsere Produkte im B2B-Bereich fällt dir leicht? Deine Leidenschaft ist die Mitarbeit bei der Entwicklung neuer Produkte und Features und die Planung und Umsetzung daraus resultierender Marketing-Maßnahmen? Dann bist du als Produkt Marketing Manager*in bei uns genau richtig!');
	$job->location_set ('Potsdam');
	$job->url_set ('/karriere/produkt-marketing-manager-in-potsdam');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du wünschst dir Freiraum für deine Expertise und Ideen innherhalb eines eingespielten, sympathischen Teams? Gemeinsam mit unseren Product Ownern und unserem Marketing-Team kannst du bei uns für richtig gute Weiterentwicklung und Vermarktung unserer Produkte sorgen. Storytelling zu Produkten und Features, Briefings und Content-Erstellung für das Marketing-Team sowie enge Zusammenarbeit in der Analyse und Optimierung der bestehenden Anbindungen, Features und Produkte gehören zu deinem daily Business. Wir freuen uns auf dich!');
	$job->text_description_long_set ('Als Produkt Marketing Manager*in bei CallOne fungierst du als Schnittstelle zwischen unserem Team und unseren Kunden. Dank deiner Arbeit entstehen Produkte, Features und Anbindungen, die ideal auf die Wünsche unserer Kunden angepasst sind. Du bringst eine gute Portion Neugier und Kreativität mit sowie die Fähigkeit, dich mit neuen Ideen einzubringen.');
	$job->text_tasks_set ('Erarbeitung von Produktpositionierungen, -mehrwerten und Nutzenargumentationen für Marketing und Vertrieb');
	$job->text_tasks_set ('Unterstützung bei der Entwicklung neuer Produkte und Features');
	$job->text_tasks_set ('Planung und Umsetzung von Marketing- und Kommunikationsmaßnahmen bezüglich unserer Produkte');
	$job->text_tasks_set ('Content-Erstellung, Storytelling und Zuarbeit für Marketing-Inhalte');
	$job->text_tasks_set ('Analyse und Optimierung bestehender Produkte, Features und Anbindungen');
	$job->text_tasks_set ('Erstellung von Produkt- und Feature Mockups, Mitarbeit an Entwicklung von User Stories');
	$job->text_tasks_set ('Einholen von Team-Input und Kundenfeedback zu Produkten und Features sowie die Aufarbeitung von Kundenbefragungen für das Produktteam');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung in Produkt Design, Produktmarketing, Marketing oder vergleichbare Qualifikation');
	$job->text_requirements_set ('Erfahrung in der Konzipierung von kundenfeedbackbasierten Produktfeatures');
	$job->text_requirements_set ('Praktische Erfahrungen im B2B Marketing');
	$job->text_requirements_set ('Eigenständige und zuverlässige Arbeitsweise sowie kommunikative Fähigkeiten und Teamgeist zeichnen dich aus.');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['clipboard']);
	$job->statement_set (new job_statement ('/assets/images/photos/magdalena_lueders.jpg', 'Magdalena Lüders', 'Online Marketing Managerin', 'Ich liebe den Platz für kreative Ideen, gemeinsame Diskussionen und Feinschliffe ebenso wie die Flexibilität und unser super sympathisches Team bei CallOne. '));
	$jobs->job_add ($job);

// $job = new job ('Marketing', 'Head of Marketing', 'Du möchtest Teil eines jungen, dynamischen Teams sein und von flachen Hierarchien sowie großem Entwicklungspotential profitieren? Du behältst den Überblick über Marketing-Maßnahmen auf verschiedenen Kanälen? Dann bist du bei uns genau richtig!');
// 	$job->location_set ('100% Remote, Potsdam + weitere');
// 	$job->url_set ('/karriere/head-of-marketing');
// 	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
// 	$job->text_intro_set ('CallOne ist ein SaaS-Unternehmen, das sich mit der Frage beschäftigt, wie Firmen dem rasanten Wandel von Kundenservice gerecht werden können. Als deutsches SaaS-Unternehmen mit eigenentwickelter Cloud-Plattform liefern wir <b>mehr als 3.500 unserer Kunden</b> die Antwort für zukunftsweisende Kommunikations- und IT-Lösungen. Telefonie und Sprache stehen bei uns im Fokus und werden ergänzt von E-Mail, Chat und einem weitreichenden Angebot für Unternehmen.');
// 	$job->text_description_long_set ('Komm zu uns, wenn Du helfen willst, Telekommunikation in Deutschland zu transformieren, sodass Unternehmen kundenorientiert und zukunftsweisend mit Ihren Kunden interagieren können.<br>  

// Was uns stolz macht? Unsere Mentalität! Wir sind Pioniere, die Technologie und Kreativität erfolgreich miteinander vereinen und täglich weiterentwickeln – erfolgreich und profitabel <b>seit über 12 Jahren</b>. Seit diesem Jahr geht diese Erfolgsgeschichte in ein neues Kapitel. Mit einer erstmaligen <b>Finanzierung von 20 Millionen Euro</b> wollen wir nun die nächste Stufe zünden.<br>  

// Wachse mit uns und werde Teil eines exzellenten Teams. Wahlweise an einem unserer Standorte in <b>Potsdam, Elmshorn, Düsseldorf oder 100% remote</b> vom Ort deines Herzens.
// <br>
// <br>
// <b>DEINE ROLLE, DEIN ABENTEUER</b>
// <br>
// Du bist ein Marketing-Genie mit einem Startup-Mindset? Dann bist du bei uns richtig. Wir sind auf der Suche nach einem <b>Head of Marketing</b>. Wir befinden uns in einer aufregenden Wachstumsphase, bieten das vielleicht spannendste und gleichzeitig wichtigste Kommunikationstool für mittelständische Unternehmen, denn wir mischen die fade Telekommunikationslandschaft in Deutschland auf. Wir gestalten die Telekommunikation der Zukunft. Intuitiv, vernetzt und sicher aus der Cloud.  
// <br>
// Bei uns darfst du dich austoben und dein volles kreatives Talent nutzen. Mit Leichtigkeit kombinierst du strategisches und operatives Arbeiten. KPIs und Tech Start-Up sind dein Ding. Du kennst dich mit B2B-Marketing inklusive aller relevanten Channels bestens aus und kannst diese mit den richtigen Methoden und Optimierungsansätzen aufsetzen. 
// <br>
// Dein Team kannst du mit deinen Visionen und Ideen inspirieren und motivieren? Du atmest Startup-Atmosphäre und hast richtig Lust, die deutsche Business-Telekommunikation zu transformieren? Dann werde Teil unserer Erfolgsstory. Für diese Vision brauchen wir Dich und Deinen Tatendrang!');
// 	$job->text_tasks_set ('Du arbeitest sowohl strategisch als auch operativ an der Optimierung aller Marketing Maßnahmen in der gesamten Unternehmensgruppe');
// 	$job->text_tasks_set ('Du entwickelst und implementierst skalierbare Marketingprozesse sowie die Marketingstrategie für den deutschen und internationalen Markt.');
// 	$job->text_tasks_set ('Du bist im Lead für die Konzeption, Umsetzung, Kontrolle und Optimierung aller relevanten Marketingmaßnahmen im Online und Offline-Bereich');
// 	$job->text_tasks_set ('Zusammen mit deinem Marketing-Team verantwortest du die Bereiche Leadgenerierung, Weiterentwicklung der Brand, Content, Performance-Marketing und das CRM.');
// 	$job->text_tasks_set ('Du bildest die Schnittstelle zu anderen Abteilungen und setzt Projekte in enger Zusammenarbeit mit Sales-, Produkt- oder Customer Success um');
// 	$job->text_tasks_set ('Du verantwortest das Monitoring und Reporting aller relevanter Marketingaktivitäten und überblickst das Marketingbudget');
// 		$job->text_tasks_set ('Du entwickelst unsere Marketing-Onboarding-Prozesse, Workshops und Trainings weiter, dass Neuankömmlinge und bestehende Teammitglieder ihr volles Potenzial entfalten');
// 		$job->text_tasks_set ('Du führst und entwickelst ein Team von talentierten Marketing-Mitarbeiter*innen und schaffst ein Arbeitsumfeld, in der das Team Leistung bringen und Spaß haben kann.');
// 	$job->text_requirements_set ('Du hast mehr als 5 Jahre Marketingerfahrung in einem Software- oder Tech-Unternehmen');
// 	$job->text_requirements_set ('Du hast in einem schnell wachsenden Start-up-Unternehmen gearbeitet und bist in der Lage, in einem schnelllebigen Umfeld viele Aufgaben zu übernehmen');
// 	$job->text_requirements_set ('Deine Hands-on- und Teamplayer- Mentalität zeichnet Dich aus – Du bist ein*e Macher*in!');
// 	$job->text_requirements_set ('Du bist strukturiert und bringst Erfahrung im Projektmanagement und dem Handling von Agenturen mit ');
// 	$job->text_requirements_set ('Neben sehr guten analytischen Fähigkeiten und hoher Zahlenaffinität hast Du auch Spaß an kreativer und pragmatischer Arbeit');
// 	$job->text_requirements_set ('Du hast bereits mit CRM-Systemen gearbeitet');
// 	$job->text_requirements_set ('Proaktivität und Ownership zählen zu Deinen Kernprinzipien');
// 	$job->text_requirements_set ('Hervorragende zwischenmenschliche und kommunikative Fähigkeiten');
// $job->text_requirements_set ('Du hast bereits ein Team geführt');
// 	$job->text_requirements_set ('Für diese Position sind muttersprachlich vergleichbare Deutschkenntnisse zwingend erforderlich (Schreiben, Sprechen und Präsentieren)');
// 	$job->job_start_end_set ('Ab sofort / unbefristet');
// 	$job->job_worktime_set ('Vollzeit');
// 	$job->icon_set ($icons['clipboard']);
// 	$job->statement_set (new job_statement ('/assets/images/photos/magdalena_lueders.jpg', 'Magdalena Lüders', 'Online Marketing Managerin', 'Ich liebe den Platz für kreative Ideen, gemeinsame Diskussionen und Feinschliffe ebenso wie die Flexibilität und unser super sympathisches Team bei CallOne. '));
// 	$jobs->job_add ($job);

$job = new job ('Marketing', 'Performance Marketing Manager*in', 'Du möchtest Teil eines jungen, dynamischen Teams sein und von flachen Hierarchien sowie großem Entwicklungspotential profitieren? Du behältst den Überblick über Marketing-Maßnahmen auf verschiedenen Kanälen? Dann bist du bei uns genau richtig!');
	$job->location_set ('100% Remote, Potsdam + weitere');
	$job->url_set ('/karriere/performance-marketing-manager');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('CallOne ist ein SaaS-Unternehmen, das sich mit der Frage beschäftigt, wie Firmen dem rasanten Wandel von Kundenservice gerecht werden können. Als deutsches SaaS-Unternehmen mit eigenentwickelter Cloud-Plattform liefern wir <b>mehr als 3.500 unserer Kunden</b> die Antwort für zukunftsweisende Kommunikations- und IT-Lösungen. Telefonie und Sprache stehen bei uns im Fokus und werden ergänzt von E-Mail, Chat und einem weitreichenden Angebot für Unternehmen.');
	$job->text_description_long_set ('Komm zu uns, wenn Du helfen willst, Telekommunikation in Deutschland zu transformieren, sodass Unternehmen kundenorientiert und zukunftsweisend mit Ihren Kunden interagieren können.<br>  

Was uns stolz macht? Unsere Mentalität! Wir sind Pioniere, die Technologie und Kreativität erfolgreich miteinander vereinen und täglich weiterentwickeln – erfolgreich und profitabel <b>seit über 12 Jahren</b>. Seit diesem Jahr geht diese Erfolgsgeschichte in ein neues Kapitel. Mit einer erstmaligen <b>Finanzierung von 20 Millionen Euro</b> wollen wir nun die nächste Stufe zünden.<br>  

Wachse mit uns und werde Teil eines exzellenten Teams. Wahlweise an einem unserer Standorte in <b>Potsdam, Elmshorn, Düsseldorf oder 100% remote</b> vom Ort deines Herzens.
<br>
<br>
<b>DEINE ROLLE, DEIN ABENTEUER</b>
<br>
Du bist ein Marketing-Genie mit einem Startup-Mindset? Dann bist du bei uns richtig. Wir sind auf der Suche nach einem Performance Marketing Manager. Wir befinden uns in einer aufregenden Wachstumsphase, bieten das vielleicht spannendste und gleichzeitig wichtigste Kommunikationstool für mittelständische Unternehmen, denn wir mischen die fade Telekommunikationslandschaft in Deutschland auf. Wir gestalten die Telekommunikation der Zukunft. Intuitiv, vernetzt und sicher aus der Cloud.  

Du bist Owner unserer Paid-Search-Aktivitäten und managst die Performance und Skalierung unserer Paid-Search-Kanäle und trägst dadurch aktiv zur Planung und Entwicklung unserer SEM-Strategie bei. Mit Deinem analytischen Feingefühl sammelst und analysierst Du Daten und identifizierst Trends, um Deine KPIs und die User Journey zu optimieren. Dabei wirkst Du aktiv an der Planung und Entwicklung mit Deinem Team an unserer SEM-Strategie mit und leitest teamübergreifend Projekte mit Sales, Operations und Product, um neue Wachstumshacks und Chancen zu entdecken.');
	$job->text_tasks_set ('Du arbeitest sowohl strategisch als auch operativ an der Optimierung aller Marketingmaßnahmen in der gesamten Unternehmensgruppe');
	$job->text_tasks_set ('Du entwickelst und implementierst skalierbare Marketingprozesse sowie die Marketingstrategie für den deutschen und internationalen Markt.');
	$job->text_tasks_set ('Du bist im Lead für die Konzeption, Umsetzung, Kontrolle und Optimierung aller relevanten Marketingmaßnahmen im Online und Offline-Bereich');
	$job->text_tasks_set ('Zusammen mit deinem Marketing-Team verantwortest du die Bereiche Leadgenerierung, gemeinsame Weiterentwicklung des Brand, Content, Performance-Marketing.');
	$job->text_tasks_set ('Du bildest die Schnittstelle zu anderen Abteilungen und setzt Projekte in enger Zusammenarbeit mit Sales-, Produkt- oder Customer Success um');
	$job->text_tasks_set ('Du verantwortest das Monitoring und die stetige Optimierung der Paid-Search Kanäle');
		$job->text_tasks_set ('Die regelmäßige Durchführung von Trackings, Reportings und Analysen der Online-Marketing-Maßnahmen sowie das kontinuierliche Monitoring wichtiger KPIs mithilfe gängiger Analytics-Tools gehört auch zu Deinen Aufgaben');
		$job->text_tasks_set ('Du führst regelmäßige Reportings & Erfolgskontrollen durch und entwickelst diese weiter');
	$job->text_requirements_set ('Du hast in einem schnell wachsenden Start-up-Unternehmen gearbeitet und bist in der Lage, in einem schnelllebigen Umfeld viele Aufgaben zu übernehmen');
	$job->text_requirements_set ('Du bist zahlenorientiert und echte*r A/B-Test-Champion und suchst nach statistischer Signifikanz, um unsere Lead Generation KPIs zu optimieren');
	$job->text_requirements_set ('Deine Hands-on und Teamplayer Mentalität zeichnet Dich aus – Du bist ein*e Macher*in!');
	$job->text_requirements_set ('Webtracking ist kein Fremdwort für Dich, auch wenn Du kein Experte darin bist - Du hast ein Grundverständnis für Cookies, Tags und Trigger ');
	$job->text_requirements_set ('Du hast Erfahrungen mit Facebook Ads, Youtube Ads, Display Marketing oder anderen Kanälen.');
	$job->text_requirements_set ('Das Konzipieren und möglicherweise die Unterstützung beim Erstellen neuer Inhalte siehst Du als Teil deines Jobs');
	$job->text_requirements_set ('Du bist strukturiert und bringst Erfahrung im Projektmanagement und dem Handling von Agenturen mit ');
	$job->text_requirements_set ('Neben sehr guten analytischen Fähigkeiten und hoher Zahlenaffinität hast Du auch Spaß an kreativer und pragmatischer Arbeit');
    $job->text_requirements_set ('Proaktivität und Ownership zählen zu Deinen Kernprinzipien');
	$job->text_requirements_set ('Hervorragende zwischenmenschliche und kommunikative Fähigkeiten');
	$job->text_requirements_set ('Für diese Position sind Deutsch- und Englischkenntnisse zwingend erforderlich (Schreiben, Sprechen und Präsentieren)');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['clipboard']);
	$job->statement_set (new job_statement ('/assets/images/photos/magdalena_lueders.jpg', 'Magdalena Lüders', 'Online Marketing Managerin', 'Ich liebe den Platz für kreative Ideen, gemeinsame Diskussionen und Feinschliffe ebenso wie die Flexibilität und unser super sympathisches Team bei CallOne. '));
	$jobs->job_add ($job);

/*
$job = new job ('Management', 'Scrum Master', 'Du möchtest Teil eines jungen, dynamischen Teams sein und von flachen Hierarchien sowie großem Entwicklungspotential profitieren? Du behältst den Überblick über interne Abläufe und Strukturen? Dann bist du bei uns genau richtig!');
	$job->location_set ('100% Remote, Potsdam');
	$job->url_set ('/karriere/scrum-master-potsdam-remote');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Als <strong>Scrum Master</strong> bei CallOne übernimmst du unter anderem die Planung und Koordination von Features, Roadmaps, Mitarbeiterschulungen und vielen weiteren Themen. Verantwortung übernehmen gehört zu deinen Stärken? Dann ist der <strong>Scrum Master</strong> genau die richtige Position für dich! Neben der Ausarbeitung und Planung neuer Features gehört es ebenfalls zu deinen täglichen Aufgaben deinem Team den Rücken freizuhalten, indem du dich um die Priorisierung der anstehenden und offenen Tasks kümmerst.');
	$job->text_description_long_set ('Sei nicht nur Teil des Teams, sondern koordiniere es! Bei uns bist du ein wichtiger Dreh- & Angelpunkt der Planung und internen Prozesse. Sammel Feature-Requests, bereite sie auf, schätze deren Aufwand ab und plane deren Umsetzung mit dem gesamten CallOne-Team.<br />
<br />
Unsere Kunden und Mitarbeiter sind auf dein Know-how angewiesen. Anhand der Anforderungslisten erstellst du zielführende User-Stories und priorisierst, was, wann und wie am besten umgesetzt wird, um unsere Kunden glücklich zu machen und auch deinem eigenen Team den Rücken freizuhalten.<br />
<br />
Erarbeite Roadmaps und stelle diese regelmäßig in unseren internen Meetings vor. Unterstütze als <strong>Scrum Master</strong> unser Projektmanagement mit Beschreibungen für Angebote. Um zukünftige Prozesse zu optimieren, gilt es, die Abläufe immer wieder neu zu bewerten und dementsprechend zu verbessern, um dir und deinem Team den maximalen Komfort in Zukunft bieten zu können.');
	$job->text_tasks_set ('Du sammelst Feature Requests von Kunden und Mitarbeitern und bereitest diese für die Planung/Entwicklung auf.');
	$job->text_tasks_set ('Du erstellst anhand der Anforderungen maßgeschneiderte Userstories und stellst diese in regelmäßigen Product-Board Meetings vor.');
	$job->text_tasks_set ('Durch die Erstellung von Roadmaps koordinierst du dein Team und unterstützt den täglichen Ablauf aller Prozesse/Sprints.');
	$job->text_tasks_set ('Interne Release-Vorstellungen und Mitarbeiterschulungen zu Neuigkeiten gehört ebenfalls zu deinen Aufgaben.');
	$job->text_tasks_set ('Durch regelmäßige Reviews erwarten wir Optimierungen im Bereich Zeitmanagement, Präzision und Problembehandlung bei zukünftigen Planungen/Umsetzungen.');
	$job->text_tasks_set ('Kunden- und Mitarbeiterbefragungen sind für uns wichtig, um kontinuierlich den Entwicklungsprozess neuer Features zu optimieren.');
	$job->text_requirements_set ('Du bist in der Lage Verantwortung für dich und dein Team zu übernehmen - ein wahrer Master.');
	$job->text_requirements_set ('Du bringst technisches Verständnis mit, musst aber selbst nicht programmieren können.');
	$job->text_requirements_set ('Du siehst das große Ganze und behältst auch in komplexen Situationen einen kühlen Kopf und gute Übersicht.');
	$job->text_requirements_set ('Das Konzipieren siehst Du als Teil deines Jobs.');
	$job->text_requirements_set ('Du bist strukturiert und kannst gut zwischen Mitarbeitern vermitteln.');
    $job->text_requirements_set ('Proaktivität und Ownership zählen zu Deinen Kernprinzipien.');
	$job->text_requirements_set ('Hervorragende zwischenmenschliche und kommunikative Fähigkeiten.');
	$job->text_requirements_set ('Für diese Position sind Deutsch- und Englischkenntnisse zwingend erforderlich (Schreiben, Sprechen und Präsentieren)');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['clipboard']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);
*/

$job = new job ('Management', 'Projektmanager (w/m/d) mit technischem Verständnis I  4-Tage-Woche und Home Office möglich', 'Du möchtest Teil eines jungen, dynamischen Teams sein und von flachen Hierarchien sowie großem Entwicklungspotential profitieren? Du behältst den Überblick über interne Abläufe und Strukturen? Dann bist du bei uns genau richtig!');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/projektmanager-technisch-potsdam');
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Als <strong>Projektmanager mit technischem Verständnis</strong>, bist du in der Lage, effektiv zwischen verschiedenen Teams zu vermitteln. Du wirst eine wichtige Mentorenrolle einnehmen, um sicherzustellen, dass alle Teams auf dem gleichen Stand sind und dass die Entwicklung von neuen Funktionen reibungslos verläuft. Außerdem wirst du dafür verantwortlich sein, Anforderungen zu sammeln, Befragungen durchzuführen und nachgelagerte Prozesse zu managen, um sicherzustellen, dass alle Teams zusammenarbeiten, um unsere Produkte erfolgreich auf den Markt zu bringen.');
	$job->text_description_long_set ('Du spielst eine zentrale Rolle bei der Koordination von verschiedenen Teams. Deine Fähigkeit, zwischen verschiedenen Abteilungen und Gruppen zu vermitteln, wird es dir ermöglichen, effektiv zu kommunizieren und sicherzustellen, dass alle Beteiligten auf dem gleichen Wissensstand sind. Als Mentor wirst du eine wichtige Rolle spielen und sicherzustellen, dass alle Teams zusammenarbeiten, um unsere Produkte erfolgreich auf den Markt zu bringen.<br><br>Darüber hinaus wirst du auch dafür verantwortlich sein, Anforderungen zu sammeln und Befragungen durchzuführen, um sicherzustellen, dass alle Teams ihre Ziele erreichen und ihre Arbeit effektiv durchführen können. Du wirst auch nachgelagerte Prozesse managen und sicherstellen, dass die notwendigen Ressourcen vorhanden sind, damit alle Teams ihre Aufgaben erfolgreich erledigen können. Durch deine Fähigkeit, effektiv zu kommunizieren und zu koordinieren, wirst du sicherstellen, dass alle Aspekte des Projekts erfolgreich umgesetzt werden und unsere Produkte auf dem Markt erfolgreich positioniert werden.');
	$job->text_tasks_set ('Verantwortung für die Koordination der Zusammenarbeit zwischen verschiedenen Teams, einschließlich Entwicklungs-, Marketing- und Support-Teams.');
	$job->text_tasks_set ('Erhebung von Anforderungen und Durchführung von Befragungen, um sicherzustellen, dass alle Anforderungen und Bedürfnisse der Kunden erfüllt werden.');
	$job->text_tasks_set ('Verantwortlich für die Sicherstellung, dass die Funktionen termingerecht und innerhalb des Budgets umgesetzt werden.');
	$job->text_tasks_set ('Schulung der Mitarbeiter und des Marketingteams über neue Funktionen und Produkte.');
	$job->text_tasks_set ('Verwaltung von nachgelagerten Prozessen wie Freigaben, Tests, Qualitätssicherung, Kundensupport und Fehlerbehebung.');
	$job->text_tasks_set ('Entwicklung von Plänen zur Verbesserung der Zusammenarbeit und Prozessoptimierung.');
	$job->text_requirements_set ('Fundiertes technisches Verständnis, ohne selbst entwickeln zu können.');
	$job->text_requirements_set ('Fähigkeit, effektiv zwischen verschiedenen Teams zu vermitteln und eine Mentorenrolle zu übernehmen.');
	$job->text_requirements_set ('Ausgezeichnete organisatorische und kommunikative Fähigkeiten.');
	$job->text_requirements_set ('Erfahrung im Projektmanagement und in der Zusammenarbeit mit cross-funktionalen Teams.');
	$job->text_requirements_set ('Gute Kenntnisse in der Planung und Steuerung von Projekten.');
	$job->text_requirements_set ('Hohes Maß an Flexibilität und Belastbarkeit.');
	$job->text_requirements_set ('Optional bringst du Kenntnisse zur Ressourcenplanung mit');
	$job->text_requirements_set ('Optional bringst du Kenntnisse zu agilen Methoden, zb. mit Scrum mit');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Vollzeit');
	$job->icon_set ($icons['clipboard']);
	$job->statement_set (new job_statement ('/assets/images/photos/brian_miculcy.jpg', 'Brian Miculcy', 'Head of Software Development', 'Zukunftstechnologien nutzen und zusammen mit Kunden kreative Lösungen schaffen. Dabei jederzeit ein starkes Team hinter sich wissen.'));
	$jobs->job_add ($job);

	$job = new job ('Vertrieb', '(Senior) Sales Manager (w/m/d) I 4-Tage-Woche und Home Office möglich', 'Du bist ein*e Allrounder*in für digitale B2B-Sales-Kanäle und auch auf Messen fühlst du dich pudelwohl? Dann bist du bei uns goldrichtig!');
	$job->location_set ('Potsdam / Remote');
	$job->url_set ('/karriere/job-sales-manager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du bist ein*e Allrounder*in für digitale B2B-Sales-Kanäle und auch auf Messen u.ä. fühlst du dich pudelwohl? Zugleich liebst du die Nähe zum Kunden und hast Interesse daran, deine Abschlüsse auch als Projekt zu begleiten? Dann suchen wir genau dich!');
	$job->text_description_long_set ('Als (Senior) Sales Manager*in bei CallOne kümmerst du dich um unseren Lösungsvertrieb und scheust auch nicht davor zurück, das ein oder andere Erstgespräch zu führen. Ein wichtiger Bestandteil deiner Arbeit ist es, uns auf Messen u.ä. Veranstaltungen mit Herzblut zu repräsentieren und wichtige Kontakte zu knüpfen.');
	$job->text_tasks_set ('Lösungsvertrieb mit der Bereitschaft, das ein oder andere Erstgespräch zu führen');
	$job->text_tasks_set ('Repräsentation von CallOne auf Messen, wichtige Kontakte rundum offline Events knüpfen und pflegen (Vielleicht bringst du sogar schon ein Netzwerk rundum Messebau etc. mit?)');
	$job->text_tasks_set ('Durchführen von Produktdemos (online) als Aushängeschild für CallOne');
	$job->text_tasks_set ('Durchführung von Sales-/Marketingmaßnahmen auf verschiedenen online und offline Kanälen');
	$job->text_tasks_set ('Betreuung von Kunden vom Lead bis zum Bestandskunden sowie Weiterentwicklung des Sales-Prozesses');
	$job->text_tasks_set ('Betreuung der abgeschlossenen Kunden in Zusammenarbeit mit unseren Projektmanager*innen');
	$job->text_requirements_set ('Erfahrung im online und offline Sales – idealerweise im Bereich B2B');
	$job->text_requirements_set ('Erfahrung auf Messen u.ä. Events - idealerweise mit Netzwerk rundum Messebau u. Co.');
	$job->text_requirements_set ('Ein hohes Maß an Eigeninitiative und Hands-on-Mentalität');
	$job->text_requirements_set ('Sehr gutes Kommunikations- und Organisationsvermögen sowie Teamgeist');
	$job->text_requirements_set ('Ausgeprägte Lösungsorientierung und die Fähigkeit, Projekte sowie Events zu strukturieren und organisieren');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['screen']);
	$job->statement_set (new job_statement ('/assets/images/photos/bendig-sw.png', 'Björn Bendig', 'CEO', 'Bei CallOne arbeiten wir mit einem starken Team-Gefühl. Verkaufsprozesse und Abschlussquoten werden durch starken Zusammenhalt und einen tollen Team-Spirit ergänzt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);
	
	/*$job = new job ('Vertrieb', '(Senior) Marketing und PR-Manager*in', 'Du bist eine Allrounder*in für digitale B2B-Marketingkanäle und das SEO/SEA Umfeld ist dein Zuhause?');
	$job->location_set ('Remote');
	$job->url_set ('/karriere/job-marketing-manager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du bist eine Allrounder*in für digitale B2B-Marketingkanäle und das SEO/SEA Umfeld ist dein Zuhause? Zugleich liebst du die Nähe zum Kunden und hast eine schnelle technische Auffassungsgabe? Dann suchen wir genau dich!');
	$job->text_description_long_set ('Als Marketing- und PR-Manager*in bei CallOne – remote oder vor Ort in Potsdam – kümmerst du dich um unser gesamtes Digitalmarketing-Portfolio.');
	$job->text_description_long_set ('Von Content-Strategie und -planung bis hin zu Website-Konzeption und Personalmarketing bist du unser Marketing-Allround-Talent und hilfst uns dabei, den Grundstein für unser zukünftiges Wachstum zu legen.');
	$job->text_description_long_set ('Und wenn du Lust auf noch mehr Abwechslung hast, kannst du uns auch im operativen Geschäft unterstützen.');
	$job->text_tasks_set ('Content-Strategie, -Planung und -Erstellung');
	$job->text_tasks_set ('Blog- und Newsletter-Redaktion');
	$job->text_tasks_set ('Konzeptionelle Planung für digitale Inhalte (Webseite, Werbeanzeigen)');
	$job->text_tasks_set ('Erstellung von Landing Pages oder Webseiten mit No-Code Tools wie Figma, Webflow oder Power Point');
	$job->text_tasks_set ('Personalmarketing: Konzeption, Erstellungvon Stellenanzeigen, HR-Kampagnenplanung und -steuerung');
	$job->text_tasks_set ('SEO-Optimierung bestehender und neuer Inhalte');
	$job->text_tasks_set ('Erarbeitung und Vermarktung von Case Studies und Whitepapers');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Inhouse-Grafik und Webentwicklung sowie mit externen Dienstleister*innen (SEA, Texter*in)');
	$job->text_tasks_set ('Unterstützung bei Planung und Durchführung von Kundenevents');
	$job->text_tasks_set ('Unterstützung in der Produktentwicklung- und in der -vermarktung');
	$job->text_tasks_set ('Optional und nur bei Interesse: Unterstützung im Projektmanagement/Customer Success Management ');
	$job->text_requirements_set ('Erfahrung im digitalen Marketing – idealerweise im Bereich B2B');
	$job->text_requirements_set ('Kenntnisse von B2B-Marketing-Trends und -Tools in der IT-Branche');
	$job->text_requirements_set ('Ein hohes Maß an Eigeninitiative, um uns im digitalen B2B-Marketing voranzubringen');
	$job->text_requirements_set ('Sehr gutes Kommunikations- und Organisationsvermögen sowie Teamgeist');
	$job->text_requirements_set ('Ausgezeichnete Kommunikationsfähigkeiten in Deutsch und eine ausgeprägte Lösungsorientierung');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->agenda_filename_set ('agenda-projektmanager');
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);*/

	$job = new job ('Vertrieb', 'HR Manager i HR Generalist (w/m/d) I Schwerpunkt Recruiting und Employer Branding I  4-Tage-Woche und Home Office-Tage möglich', 'Du bist unser*e Ansprechpartner*in in Sachen Recruiting & Employer Branding.');
	$job->location_set ('Kölln-Reisiek / Remote');
	$job->url_set ('/karriere/job-hr-manager-in-'.$job->location_get());
	$job->quickinfo_set ($job->location_get().' · unbefristet · (m/w/d)');
	$job->text_intro_set ('Du bist unser*e Ansprechpartner*in in Sachen Recruiting & Employer Branding und hilfst uns dabei, Talente aus der Region zu finden und zu gewinnen. In enger Zusammenarbeit mit dem Team bringst du deine Ideen für den Aufbau unserer Arbeitgebermarke ein.');
	$job->text_description_long_set ('In dieser neu geschaffenen Stelle gestaltet du dir deinen Arbeitsbereich und unterstützt das Wachstum von CallOne von der Pole Position.');
	$job->text_description_long_set ('Hierbei kannst du deine Erfahrungen, idealerweise aus den Themenfeldern Personalmarketing, Social Media, Recruiting und/oder Marketing, wunderbar einsetzen.');
	$job->text_tasks_set ('Auf- und Ausbau einer starken Arbeitgebermarke');
	$job->text_tasks_set ('Erstellung einer Personalmarketingstrategie und Implementierung geeigneter Maßnahmen');
	$job->text_tasks_set ('Konzeption, Organisation und Planung von Event-Formaten für unsere Zielgruppen');
	$job->text_tasks_set ('Zusammenarbeit mit Hochschulen: Organisation von Sponsorings, Kooperationsmöglichkeiten, Workshops, Vorträgen an Hochschulen und Zusammenarbeit mit den Career Centern');
	$job->text_tasks_set ('Auswahl von und Teilnahme an Recruiting-Messen und -Veranstaltungen');
	$job->text_tasks_set ('Pflege der CallOne-Karriere-Seiten');
	$job->text_tasks_set ('Steuerung eines modernen End-to-End-Recruiting-Prozesses für alle Positionen (Erstellen & Veröffentlichen von Stellenanzeigen, Active Sourcing, Kommunikation, Interviews)');
	$job->text_tasks_set ('Enge Zusammenarbeit mit Inhouse-Grafik und Webentwicklung sowie mit externen Dienstleister*innen (SEA, Texter*in)');
	$job->text_tasks_set ('Erprobung neuer digitaler Recruiting-Kanäle');
	$job->text_tasks_set ('Mitwirkung an der Kommunikation über unsere Online-Kanäle sowie Unterstützung bei der Konzeption und Weiterentwicklung von Online-Kampagnen und sonstigen Aktivitäten');
	$job->text_tasks_set ('Teilnahme an regionalen Netzwerkveranstaltungen');
	$job->text_tasks_set ('Steuerung von externen Personaldienstleistern');
	$job->text_tasks_set ('Je nach Kapazität und Vorlieben ist es zusätzlich möglich, weitere persönliche Lieblingsthemen zu bearbeiten. So freuen wir uns z.B. auch über Menschen, die gerne Blog-Beiträge oder HR-relevante Pressetexte schreiben.');
	$job->text_requirements_set ('Abgeschlossenes Studium oder Ausbildung und erste einschlägige Berufserfahrungen');
	$job->text_requirements_set ('Kenntnis der Trends im Bereich Recruiting, Personalmarketing und Employer Branding in der IT-Branche');
	$job->text_requirements_set ('Sehr gutes Kommunikations- und Organisationsvermögen sowie Teamgeist');
	$job->text_requirements_set ('Positive Grundeinstellung und ausgeprägte Lösungsorientierung');
	$job->text_requirements_set ('Selbständige, eigenverantwortliche und sorgfältige Arbeitsweise');
	$job->text_requirements_set ('Gute Kenntnisse der gängigen MS-Office-Programme');
	$job->job_start_end_set ('Ab sofort / unbefristet');
	$job->job_worktime_set ('Teilzeit / Vollzeit');
	$job->icon_set ($icons['care']);
	$job->statement_set (new job_statement ('/assets/images/photos/stefanie_bendig.jpg', 'Stefanie Bendig', 'HR Department', 'Das Schöne an CallOne ist der starke Zusammenhalt. Strategien und Ziele werden gemeinsam in regelmäßigen Meetings festgelegt.'));
	$job->statement_set (new job_statement ('/assets/images/photos/jenny_radziejewski.jpg', 'Jenny Radziejewski', 'Customer Success Management', 'Die große Flexibilität, der enge Kontakt zum Kunden und vor allem der menschliche Umgang untereinander zeichnen meinen Arbeitsalltag bei CallOne aus.'));
	$jobs->job_add ($job);

	return $jobs;
}


// benefits
function jobs_benefits_load ()
{
	$jobs_benefits = array ();

	$jobs_benefit = new jobs_benefit ('Bonbons gefällig?');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/benefits.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/benefits-white.svg');
	$jobs_benefit->text_set ('30 Tage Urlaub, fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Schmankerl, die wir dir für deine gute Arbeit anbieten.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Wachse an dir');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/work-life-balance.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/work-life-balance-white.svg');
	$jobs_benefit->text_set ('Du gestaltest deinen Job, mit deiner Erfahrung, deinen Stärken, Ideen und Vorlieben. Wir fördern dich mit allem, was du dazu brauchst und entwerfen deinen perfekten Job, inklusive Arbeitsumfeld und Life-Balance.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Wir leben Innovation');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/onboarding.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/onboarding-white.svg');
	$jobs_benefit->text_set ('Wir gestalten und setzen um, was Sinn macht. Am liebsten, wenn es etwas noch nicht gibt. Unsere Produkte sind immer einen Herzschlag voraus, wir setzen die Maßstäbe im Bereich Kundenkommunikation.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Positiver Impact');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/impact.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/impact-white.svg');
	$jobs_benefit->text_set ('Mit deiner Arbeit hast du einen positiven Einfluss auf Millionen von Menschen. Unser Ansatz, Kundenservice neu zu definieren, gestaltet die Telekommunikationsindustrie maßgeblich mit. Dein Beitrag hat echte, sinnvolle Auswirkungen.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Kein Lari-Fari');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/goals.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/goals-white.svg');
	$jobs_benefit->text_set ('Was du tust, vergammelt nicht in einer Schublade, sondern kommt zum Einsatz. Mit Anspruch und neuen Herausforderungen wird dir nie langweilig. Deine Kolleg*innen sind immer für dich da, mit Inspiration, Motivation und positiven Vibes.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Coachings');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/weiterbildung.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/weiterbildung-white.svg');
	$jobs_benefit->text_set ('Dein Gehirn ist unser aller Gewinn. Deshalb spielen wir dir regelmäßig Updates auf, in Form von Konferenzen, Workshops, Kursen, Trainings, neuster Technik – was immer du brauchst, um deine grauen Zellen glücklich zu machen.');
	$jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Langfristigkeit');
	// $jobs_benefit->text_set ('Job-Hopping bedeutet Stress und immer nur einen kurzen Energieschub. Wir setzen auf langfristige Anstellungen, krisensichere und zukunftsfähige Jobs und die Perspektive, das Beste aus dir rauszuholen, damit du zufrieden bist.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Work-Life Balance');
	// $jobs_benefit->text_set ('Uns allen ist der Wert unserer Arbeit besonders wichtig. Wir wollen, dass unsere Arbeit einen Einfluss hat. Das bedeutet für uns: Fokussiertes, eﬀizientes Arbeiten, das sich an Ergebnissen orientiert. Aber auch pünktlich Feierabend machen zu können und am Wochenende frei zu haben. Du möchtest weniger als 40 Stunden pro Woche arbeiten? Du möchtest auch mal von zu Hause arbeiten können? - Lass uns hierzu ins Gespräch kommen! ');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Einatmen, ausatmen');
	// $jobs_benefit->text_set ('Statt im Betonklotz in Friedrichshain sitzen wir in der Potsdamer Innenstadt. Viel Nähe zur Natur in der Mittagspause und ein ruhiges, stressfreies Arbeitsklima sind Teil deiner Arbeitsumgebung.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Urlaub &amp; Gehalt');
	// $jobs_benefit->text_set ('30 Tage Urlaub im Jahr und ein überdurchschnittliches Gehalt für überdurchschnittliche Leistung. Wir liegen gern ein paar Stufen über dem Durchschnitt.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Struktur, kein Unsinn');
	// $jobs_benefit->text_set ('Hierarchien halten wir flach, unsere Strukturen sind transparent, die Kommunikationswege kurz und Wertschätzung hoch. Wir haben eine klare Vision, an der du mitarbeiten und mitentscheiden sollst.'); 
	// $jobs_benefits[] = $jobs_benefit;

	return $jobs_benefits;
}
?>
