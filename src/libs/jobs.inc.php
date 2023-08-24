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
	{	

		// replace german umlaute

		$url = strtr($url,[
			'ä' => 'ae',
			'ö' =>'oe',
			'ü' => 'ue'
		]);

		// Remove/replace unsafe characters

		$url = preg_replace(array('/[^a-z0-9-]/i', '/[ ]{2,}/', '/[ ]/'), array(' ', ' ', '-'), $url);

		// return in strtolower

		$this->url = '/karriere/' . strtolower ($url);
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

	
	return $jobs;
}


// benefits
function jobs_benefits_load ()
{
	$jobs_benefits = array ();
	
	$jobs_benefit = new jobs_benefit ('Die "Basics"');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/benefits.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/benefits-white.svg');
	$jobs_benefit->text_set ('30 Tage Urlaub, 4-Tage-Woche auf Wunsch, 100% Remote Work oder hybrides Arbeiten möglich, ein fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Angebote, die unsere CallOne´ler zu schätzen wissen.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Arbeit mit Sinn');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/impact.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/impact-white.svg');
	$jobs_benefit->text_set ('Mit deiner Arbeit hast du einen positiven Einfluss auf Millionen von Menschen. Unsere Lösungen sind immer einen Herzschlag voraus und setzen neue Standards im Kundenservice. So leistest du mit deiner Arbeit einen echten Mehrwert und trägst dazu bei, dass Service Hotlines ihrem Namen endlich wieder alle Ehre machen.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Teamwork');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/onboarding.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/onboarding-white.svg');
	$jobs_benefit->text_set ('Was wir an CallOne besonders lieben? Unsere Kollegen (w/m/d)! Wir halten einander den Rücken frei, nehmen uns selbst nicht zu ernst und können uns immer aufeinander verlassen. Egal ob remote oder an einem unserer drei Standorte, bei uns ist Team Work keine hohle Phrase!');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Job Crafting 4.0');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/work-life-balance.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/work-life-balance-white.svg');
	$jobs_benefit->text_set ('Du gestaltest deinen Job, mit deiner Erfahrung, deinen Stärken, Ideen und Vorlieben. Wir fördern dich mit allem, was du dafür brauchst, und entwerfen gemeinsamen den Job, der zu dir und deinem Leben passt.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Gemeinsam wachsen');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/weiterbildung.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/weiterbildung-white.svg');
	$jobs_benefit->text_set ('Dein Wissen ist unser aller Gewinn. Deshalb spielen wir dir regelmäßig Updates auf, in Form von Konferenzen, Workshops, Kursen, Trainings, neuster Technik – was immer du brauchst, um dich beruflich und persönlich weiterzuentwickeln.');
	$jobs_benefits[] = $jobs_benefit;

	$jobs_benefit = new jobs_benefit ('Kein Lari-Fari');
	$jobs_benefit->icon_set ('/assets/images/icons_svg/goals.svg');
	$jobs_benefit->alt_icon_set ('/assets/images/icons_svg/goals-white.svg');
	$jobs_benefit->text_set ('Was du tust, vergammelt nicht in einer Schublade, sondern kommt zum Einsatz. Auf unnötige Bürokratie und stundenlange Meetings haben wir keine Lust. Wir arbeiten fokussiert, hands-on und mit einem Blick fürs Wesentliche.');
	$jobs_benefits[] = $jobs_benefit;
	
	
	// $jobs_benefit = new jobs_benefit ('Die "Basics"');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/weiterbildung.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/weiterbildung-white.svg');
	// $jobs_benefit->text_set ('30 Tage Urlaub, 4-Tage-Woche auf Wunsch, 100% Remote Work oder hybrides Arbeiten möglich, ein fester Feierabend, ein Budget für deine Weiterentwicklung, Team-Events, E-Bike, Altersvorsorge und Gutscheine für Amazon & Co. sind einige der Angebote, die unsere CallOne´ler zu schätzen wissen.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Arbeit mit Sinn');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/benefits.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/benefits-white.svg');
	// $jobs_benefit->text_set ('Mit deiner Arbeit hast du einen positiven Einfluss auf Millionen von Menschen. Unsere Lösungen sind immer einen Herzschlag voraus und setzen neue Standards im Kundenservice. So leistest du mit deiner Arbeit einen echten Mehrwert und trägst dazu bei, dass Service Hotlines ihrem Namen endlich wieder alle Ehre machen.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Teamwork');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/work-life-balance.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/work-life-balance-white.svg');
	// $jobs_benefit->text_set ('Was wir an CallOne besonders lieben? Unsere Kollegen (w/m/d)! Wir halten einander den Rücken frei, nehmen uns selbst nicht zu ernst und können uns immer aufeinander verlassen. Egal ob remote oder an einem unserer drei Standorte, bei uns ist Team Work keine hohle Phrase!');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Job Crafting 4.0');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/onboarding.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/onboarding-white.svg');
	// $jobs_benefit->text_set ('Du gestaltest deinen Job, mit deiner Erfahrung, deinen Stärken, Ideen und Vorlieben. Wir fördern dich mit allem, was du dafür brauchst, und entwerfen gemeinsamen den Job, der zu dir und deinem Leben passt.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Gemeinsam wachsen');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/impact.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/impact-white.svg');
	// $jobs_benefit->text_set ('Dein Wissen ist unser aller Gewinn. Deshalb spielen wir dir regelmäßig Updates auf, in Form von Konferenzen, Workshops, Kursen, Trainings, neuster Technik – was immer du brauchst, um dich beruflich und persönlich weiterzuentwickeln.');
	// $jobs_benefits[] = $jobs_benefit;

	// $jobs_benefit = new jobs_benefit ('Kein Lari-Fari');
	// $jobs_benefit->icon_set ('/assets/images/icons_svg/goals.svg');
	// $jobs_benefit->alt_icon_set ('/assets/images/icons_svg/goals-white.svg');
	// $jobs_benefit->text_set ('Was du tust, vergammelt nicht in einer Schublade, sondern kommt zum Einsatz. Auf unnötige Bürokratie und stundenlange Meetings haben wir keine Lust. Wir arbeiten fokussiert, hands-on und mit einem Blick fürs Wesentliche.');
	// $jobs_benefits[] = $jobs_benefit;

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
