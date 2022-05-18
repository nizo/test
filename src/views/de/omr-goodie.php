<?php
$faqs = new faqs ();
$faqs->faq_add (
  'Was bietet CallOne?',
  '<p>CallOne bietet Ihnen eine Telefonielösung für das gesamte Unternehmen. Dabei richten wir uns speziell an Ihre Sales- und Service-Abteilungen und bieten für diese eine ausgereifte Callcenter-Software mit weitreichenden Apps und APIs.</p>'
);
$faqs->faq_add (
  'Was kostet CallOne?',
  '<p>Wir bieten Pakete, die genau auf die Anforderungen unserer Kunden zugeschnitten sind. Dabei richten wir uns insbesondere an Unternehmen, die eine individuelle Lösung benötigen und eine persönliche Betreuung zu schätzen wissen.</p><p>Konkret startet unsere Telefonanlage bei 5 UserInnen und 99,00 EUR. Näheres erfährst du bei unserem Vertriebsteam!</p>'
);
$faqs->faq_add (
  'Welches Goodie erhalte ich als OMR-HörerIn?',
  '<p>Als OMR-HörerIn erlassen wir dir die Bereitstellunggebühren unserer Telefonanlage. Damit sparst du bis zu 499,00 EUR!</p>'
);
$faqs->faq_add (
  'Wie schnell können wir starten?',
  '<p>Ein Start ist in wenigen Schritten möglich. Wir schalten einen persönlichen Zugang zur Anlage und es kann losgehen! Persönliche AnsprechpartnerInnen stehen jederzeit zur Konfiguration des Routings zur Verfügung.</p>'
);
?>

<div class="wrapper lightgrey no-gutter-bottom">
  <div class="content wide no-gutter-bottom">
    <header class="main-header main-header--alignEnd">
      <div class="text" style="padding-bottom:210px">
        <h1>Bereit für richtig guten Kundenservice?</h1>
        <p class="primary">CallOne bietet passgenaue Cloud-Callcenter-Lösungen für Ihren Kundenservice oder Salesabteilungen</p>
        <ul class="list approved-list approved-list--black big-list">
          <li>Grenzenlose Telefonie aus der deutschen Cloud</li>
          <li>Eine Plattform für das gesamte Unternehmen</li>
          <li>Fertige Apps und offene Schnittstellen</li>
        </ul>
        <div class="button-set padding-top-20">
          <a href="#offer" class="button tertiary rounded">Unverbindlich testen</a>
        </div>
      </div>
      <div class="media centered">
        <a href="https://omr.com/de/podcast/">
          <?= pictureTag(
              '/assets/images/photos/philipp-scaled-up2@3x.png',
              'OMR',
              560, 705, [
                'style' => 'display:block'
              ]
          ); ?>
        </a>
      </div>
    </header>
  </div>
</div>

<div class="section section--black">
  <div class="section__content section__content--narrow centered">
    <?= pictureTag(
        '/assets/images/logo/CallOne-OMR-logo.svg',
        'CallOne und OMR',
        330, 52
    ); ?>
    <h2>Angebot für OMR-Fans</h2>
    <p>Exklusiv für OMR Hörer bieten wir unsere Lösung <strong>ohne einmalige Bereitstellungskosten</strong> an. Interessenten schalten wir direkt Rufnummern und alle Features zum  unverbindlichen Test frei.</p>

    <p class="centered">
      <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Kostenlose Demo buchen</a>
    </p>

    <p class="centered">Unternehmen denen Telefonberatung am Herzen liegt, vertrauen auf <strong>CallOne Lösungen</strong></p>

    <div class="logos">
      <?= pictureTag(
          '/assets/images/client-logos/bett-white.png',
          'Kunde Bett1.de',
          140, 28
      ); ?>
      <?= pictureTag(
        '/assets/images/client-logos/check24-logo.svg',
        'Kunde Check24',
        140, 28
      ); ?>
      <?= pictureTag(
          '/assets/images/client-logos/snipes2-logo.svg',
          'Unser Kunde Snipes',
          99, 28
      ); ?>
      <?= pictureTag(
          '/assets/images/client-logos/logo-sodastream.svg',
          'Unser Kunde SodaStream',
          194, 24
      ); ?>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="content wide">
    <h2>Qualität und Flexibilität die sich bemerkbar machen</h2>

    <div class="grid centered">
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/sound-quality.svg',
            'Kristallklare Sprachqualität',
            50, 49
          ); ?>
        </div>
        <h3>Kristallklare Sprachqualität</h3>
        <p>Wir setzen auf Businessrouten, dass heißt keine Gesprächsaussetzer und beste Qualität für Deine Telefonate.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/server-location.svg',
            'Serverstandort Deutschland',
            50, 51
          ); ?>
        </div>
        <h3>Höchste Sicherheitsstandards</h3>
        <p>Die Server stehen in Hochsicherheitsrechenzentren in Deutschland. Verschlüsslung ist hier Standard.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/realtime-statistics.svg',
            'Echtzeitstatistiken',
            51, 50
          ); ?>
        </div>
        <h3>Echtzeitstatistiken</h3>
        <p>Wir liefern alles Daten, damit Du an den großen Stellscharauben drehen kannst: Personal & Effizienz.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/homeoffice.svg',
            'Homeoffice',
            50, 50
          ); ?>
        </div>
        <h3>Homeoffice</h3>
        <p>Du entscheidest wie Du telefonierst: Über den Browser, Softphone integriert in Deinem Tool oder klassich mit einem IP-Telefon.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/apps.svg',
            'Apps',
            50, 50
          ); ?>
        </div>
        <h3>Apps</h3>
        <p>CallOne liefert fertige Anbindungen für die relevanten CRM und Ticketinglösungen wie Salesforce, Pipedrive Hubspot, Zendesk.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <?= pictureTag(
            '/assets/images/icons_svg/apis.svg',
            'Schnittstellen',
            50, 50
          ); ?>
        </div>
        <h3>Schnittstellen</h3>
        <p>Unser Steckenpferd: Willst Du intelligent routen oder Rohdaten nutzen, eine SMS versenden oder Dein eigenes ERP anbinden.</p>
      </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="content narrow">
    <h2>Fragen und Antworten</h2>

    <?php
    $faqs->structured_data_get_code ();
    $faqs->html_get_code ();
    ?>
  </div>
</div>

<div class="wrapper darkgrey padding-top-80 padding-bottom-80">
  <div class="content wide">
    <div class="omr-badge">
      <div class="omr-badge__icon">
        <?= pictureTag(
          '/assets/images/icons_svg/podcast-goodie.svg',
          'Podcast Goodie',
          50, 52
        ); ?>
      </div>
      <div class="omr-badge__text">
        <strong>Sie hören den OMR Podcast?</strong><br />
        Dann bieten wir Ihnen unsere Telefonanlage exklusiv ohne einmalige Bereitstellungskosten an!
      </div>
      <div class="omr-badge__button">
        <a href="#offer" class="button tertiary rounded">Zum Angebot</a>
      </div>
    </div>

    <div class="grid centered">
      <div class="col-3 card card--transparent">
        <div class="card__image">
          <?= pictureTag(
            '/assets/images/icons_svg/Customer-Support-White.svg',
            'Kundenservice CallOne',
            64, 64
          ); ?>
        </div>
        <h3>Kundenservice</h3>
        <p>Das „Mach-meine-Kunden-glücklich-Paket“ steuert Anrufe intelligent, optimiert Ihre Erreichbarkeit und macht Ihr Callcenter viel effizienter.</p>
        <p>
          <br/>
          <a href="/callcenter-software" class="button transparent-border rounded">Mehr erfahren <span class="button__icon arrow icon-jump-forward"></span></a>
        </p>
      </div>
      <div class="col-3 card card--transparent">
        <div class="card__image">
          <?= pictureTag(
            '/assets/images/icons_svg/Sales-White.svg',
            'Sales CallOne',
            65, 64
          ); ?>
        </div>
        <h3>Sales</h3>
        <p>Mehr Durchblick bringt mehr Leads und qualitativ bessere Abschlüsse. Sie verbinden CallOne mit den besten Vertriebstools, einfach per Knopfdruck.</p>
        <p>
          <a href="/sales-solutions" class="button transparent-border rounded">Mehr erfahren <span class="button__icon arrow icon-jump-forward"></span></a>
        </p>
      </div>
      <div class="col-3 card card--transparent">
        <div class="card__image">
          <?= pictureTag(
            '/assets/images/icons_svg/Helpdesk-White.svg',
            'Helpdesk Anbindung',
            64, 64
          ); ?>
        </div>
        <h3>IT-Helpdesk</h3>
        <p>Organisierter und produktiver werden, Geschäftsprozesse optimieren. Mit CallOnes IT-Helpdesk lösen Sie Anfragen kompetent und transparent.</p>
        <p>
          <br/>
          <a href="/it-helpdesk-solutions" class="button transparent-border rounded">Mehr erfahren <span class="button__icon arrow icon-jump-forward"></span></a>
        </p>
      </div>
    </div>
  </div>
</div>