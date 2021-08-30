<?php
class product
{
	private $name;
	private $description;
	private $image;
	private $sku_id;
	private $reviews;

	function __construct ($name, $description)
	{
		$this->name			= $name;
		$this->description	= $description;
		$this->image		= null;
		$this->sku_id		= preg_replace ('/[^0-9]/', '', md5 ($this->name));
		$this->reviews		= array ();
	}

	function name_get ()
	{	return $this->name;
	}

	function description_get ()
	{	return $this->description;
	}

	function image_get ()
	{	return $this->image;
	}

	function image_set ($image)
	{	$this->image = $image;
	}

	function sku_id_get ()
	{	return $this->sku_id;
	}

	function review_add ($review)
	{	$this->reviews[] = $review;
	}

	function reviews_load ()
	{
		$review = new review ('2021-06-08', null, 'Юсуп Адамович', 5);
		$review->text_set ('👍👍👍👍👍');
		$this->review_add ($review);

		$review = new review ('2021-01-10', 'BUNZL Healthcare', null, 5);
		$review->text_set ('Mit CallOne als Partner an unserer Seite, konnten wir eine durchdachte und clevere digitale Telefonie etablieren. Die Selbstadministration der Telefonie gepaart mit Unterstützung aus dem CallOne-Projektmanagement, versetzt uns in die Lage unentwegt und eigenständig Anpassungen vorzunehmen und flexibel auf spontane Situationen zu reagieren. Die Möglichkeiten der statistischen Auswertbarkeit sind extrem tief und für viele Unternehmenszwecke nützlich. Tolle Basis zur Weiterentwicklung des Unternehmens. Intuitiv, logisch und smart.');
		$this->review_add ($review);

		$review = new review ('2019-05-01', 'Snipes', 'Dennis Voth', 5);
		$review->text_set ('Mit CallOne können wir unseren europaweiten Kundenservice an zentraler Stelle schnell und einfach steuern und mit Hilfe von zahlreichen Statistiken analysieren und optimieren.');
		$this->review_add ($review);

		$review = new review ('2019-04-04', 'Check24', 'Dr. Rainer Klipp', 5);
		$review->text_set ('Für uns als Marktführer im Bereich Preisvergleich ist eine ausgewachsene Callcenter-Software, wie sie CallOne anbietet unabdingbar für unser weiteres schnelles Wachstum.');
		$this->review_add ($review);
		
		$review = new review ('2019-03-27', 'apo-discounter.de', 'Dennis Voth', 5);
		$review->text_set ('Wir setzen in allen Bereichen auf Schnelligkeit, Kompetenz und modernste Technik. So können wir unsere Kunden von unserem Service begeistern und genauso hat uns auch CallOne begeistert!');
		$this->review_add ($review);

		$review = new review ('2016-07-11', null, 'Sebastian Merkhoffer', 5);
		$review->text_set ('Alles top!');
		$this->review_add ($review);

		$review = new review ('2016-02-13', null, 'Babett Schultze', 5);
		$review->text_set ('Hervorragender Kontakt und Betreuung. Super Lösung für Kundenservice mit rundum-Features und persönlichen Einstellungen für die genauen Vorstellungen einer jeden Firma anstatt Standartpakete. Wenn es mal Rückfragen oder Wünsche zu veränderungen der Einstellungen gab, wurde diese innerhalb einer Stunde gelöst und übernommen, besser geht es nicht. Alle Einstellungen kann der Admin aber auch selber verwalten und den eigenen Firmenbedürfnissen anpassen. Super Produkt und exzellenter Service. Ich bin überdurchschnittlich zufrieden.');
		$this->review_add ($review);

		$review = new review ('2015-09-17', null, 'Sylvia Hilscher', 5);
		$review->text_set ('Perfekte Service Center Lösung. Die Benutzeroberfläche ist angenehm und leicht zu bedienen. Besonders im Bereich Statistiken werden umfassende Möglichkeiten zur Verfügung gestellt. Zudem wird ein sehr guter Kundenservice geboten. Es findet eine persönliche und sehr kompetente Betreuung statt. Es werden viele verschiedene Serviceleistungen angeboten und unsere Anforderungen werden umgehend umgesetzt. Nur zu empfehlen!');
		$this->review_add ($review);

		$review = new review ('2015-08-20', 'navabi', 'Leonie Theißen', 5);
		$review->text_set ('Seit ein paar Monaten läuft unser gesamter telefonischer Kundensupport über CallOne. Uns war in erster Linie wichtig, eine Lösung zu erhalten, die beim täglichen Arbeiten intuitiv zu bedienen ist und speziell auf unsere Bedürfnisse zugeschnitten – und genau das haben wir erhalten. Unser persönlicher Ansprechpartner geht auf alle Anfragen sofort und individuell ein und findet immer die bestmögliche Lösung für uns.');
		$this->review_add ($review);

		$review = new review ('2015-08-16', 'TCI Rechtsanwälte', 'Stephan Schmidt', 5);
		$review->text_set ('Wir vertrauen der CallOne bereits seit längerer Zeit in Sachen Telefonanlage, Konferenzrufnummern und allem, was zu moderner Kommunikation dazu gehört. Die Mitarbeiter reagieren auch auf ungewöhnliche Anforderung sehr schnell und finden unkompliziert Lösungen. So wünscht man sich das von seinem Dienstleister.');
		$this->review_add ($review);

		$review = new review ('2015-07-30', 'Flaconi GmbH', null, 5);
		$review->text_set ('Wir arbeiten seit über einem Jahr mit CallOne zusammen und sind sehr zufrieden. Wir haben seit Beginn der Zusammenarbeit einen Ansprechpartner, der umgehend, zuverlässig und freundlich auf unsere Anliegen eingeht. Auch wurden wir von Anfang an sehr gut beraten, um unseren Service optimieren zu können. Deshalb bekommt CallOne unsere uneingeschränkte Empfehlung!');
		$this->review_add ($review);

		$review = new review ('2015-07-12', null, 'Felix Schmidt', 5);
		$review->text_set ('CallOne zu integrieren war die absolut richtige Entscheidung. Die CallCenter-Lösung hat es geschafft unseren Kundendienst auf ein ganz neues Level zu heben und Prozesse stark zu vereinfach. Das CallOne-Team macht einen super Job in der Beratung und Betreuung. Vielen Dank!');
		$this->review_add ($review);

		$review = new review ('2015-06-29', null, 'Ingo Vigneron', 5);
		$review->text_set ('Wir haben CallOne in diesem Jahr neu für uns entdeckt. Nach einem ersten gemeinsamen Projekt haben wir unsere Callcenter Dienste für drei Länder auf CallOne umgestellt. Weitere werden folgen, denn wir haben einen persönlichen Ansprechpartner der konsequent und flexibel auf unseren Bedarf eingeht. Für uns ist das ein großer Vorteil. Vom Home-Office bis zum Hauptstandort können wir europaweit alles zentral steuern und auswerten, natürlich rund um die Uhr und auch von Unterwegs. Danke für die gute Zusammenarbeit!');
		$this->review_add ($review);

		$review = new review ('2015-06-18', null, 'Holger Lerch', 5);
		$review->text_set ('.....vom ersten Telefonat bis zur Einrichtung bei uns: EIN Ansprechpartner, der sogar meine persönlichen Einstellungen begleitet hat. Komplett runde Lösung - gerade beim Support. Vielen Dank!');
		$this->review_add ($review);

		$review = new review ('2015-06-02', null, 'Tim Vogt', 5);
		$review->text_set ('CallOne verfügt über ein engagiertes und kompetentes Team mit großer Expertise im Bereich virtuelle Telefonanlagen, Anrufsteuerung und Mehrwertdienste - Tolle Zusammenarbeit, die Spaß macht. Jederzeit gerne wieder.');
		$this->review_add ($review);

		$review = new review ('2015-05-25', null, 'Tu-Binh Dang', 5);
		$review->text_set ('Mit Hilfe von dem engagierten und kompetenten CallOne Team (Service und Technik) wurden Lösungen schnell gefunden und erfolgreich umgesetzt. Vielen Dank hier nochmal für die tolle Zusammenarbeit! Fazit: Sehr gute CallCenter-Lösung + super Kundenbetreuung. 100% Weiterempfehlung!');
		$this->review_add ($review);

		$review = new review ('2015-04-20', null, 'Arek Radziejewski', 5);
		$review->text_set ('Optimale CallCenter-Lösung! Int. Hotline-Nr.-Auswahl, Admin-Bereich selbsterklärend und intuitive Bedienung, weltweit 24/7 online verfügbare Funktionen! Top-Service+ Beratung und transparente Kostenkontrolle! Sehr Empfehlenswert! Individuelle Bespieglung der Warteschleife (wir haben eine Radiospot als mp3 eingebunden). Dank CallOne konnten wir eine int. Kampagne reibungslos umsetzen und unsere Hotliner waren für die Endkunden optimal verfügbar/ erreichbar! Danke CallOne!');
		$this->review_add ($review);

		$review = new review ('2015-03-27', null, 'Wytze Kempenaar', 5);
		$review->text_set ('Komplette Lösung. Top Service! Innovativ!');
		$this->review_add ($review);
	}

	function reviews_get ()
	{	return $this->reviews;
	}

	function structured_data_get_raw ()
	{
		$data = [];

		$brand = [];
		$brand['@type'] = 'Brand';
		$brand['name'] = 'CallOne GmbH';
		$data['brand'] = $brand;
	
		$data['@context']		= 'http://schema.org/';
		$data['@type']			= 'Product';
		$data['name']			= $this->name_get ();
		$data['description']	= $this->description_get ();
		if (!empty ($this->image_get()))
			$data['image']		= $this->image_get();
		$data['sku']			= $this->sku_id_get();
		$data['mpn']			= $this->name_get();

		$aggregate_rating = [];
		$aggregate_rating['@type']			= 'AggregateRating';
		$aggregate_rating['ratingValue'] 	= (empty ($this->reviews_get()) ? 0 : 5);
		$aggregate_rating['reviewCount']	= count ($this->reviews_get());
		$data['aggregateRating'] = $aggregate_rating;

		if (!empty ($this->reviews_get()))
		{
			$reviews = [];

			foreach ($this->reviews_get () as $review_tmp)
			{
				$review = [];

				$review['@type']			= 'Review';
				$review['datePublished']	= $review_tmp->date_get ();

				if (!empty ($review_tmp->company_get ()))
				{
					$organization = [];
					$organization['@type']	= 'Organization';
					$organization['name']	= $review_tmp->company_get ();
					$review['author'] = $organization;
				}

				if (!empty ($review_tmp->author_get ()))
				{
					$person = [];
					$person['@type']	= 'Person';
					$person['name']		= $review_tmp->author_get ();
					$review['author'] = $person;
				}

				if (!empty ($review_tmp->text_get ()))
					$review['reviewBody']	= $review_tmp->text_get ();

				$review_rating = [];
				$review_rating['@type'] = 'Rating';
				$review_rating['ratingValue'] = $review_tmp->rating_get ();
				$review['reviewRating'] = $review_rating;

				$reviews[] = $review;
			}

			$data['review'] = $reviews;
		}

		return $data;
	}

	function structured_data_get_code ()
	{
		echo '<script type="application/ld+json">';
		echo json_encode ($this->structured_data_get_raw ());
		echo '</script>';
	}
}

class review
{
	private $date;
	private $company;
	private $author;
	private $rating;
	private $text;

	function __construct ($date, $company, $author, $rating)
	{
		$this->date		= $date;
		$this->company	= $company;
		$this->author	= $author;
		$this->rating	= $rating;
		$this->text		= null;
	}

	function date_get ()
	{	return $this->date;
	}

	function company_get ()
	{	return $this->company;
	}

	function author_get ()
	{	return $this->author;
	}

	function rating_get ()
	{	return $this->rating;
	}

	function text_set ($text)
	{	$this->text = $text;
	}

	function text_get ()
	{	return $this->text;
	}
}
?>