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
          <img src="/assets/images/photos/philipp-scaled-up2@3x.png" alt="" style="display:block;" />
        </a>
      </div>
    </header>
  </div>
</div>

<div class="wrapper background no-margin-top padding-bottom-80">
  <div class="content wide">
    <form action="#" class="form omr-form js-form">
      <a id="offer"></a>
      <input type="hidden" name="type" value="2">
      <input type="hidden" name="path" value='<?= json_encode($_SESSION['userRoute']) ?>'>

      <img src="/assets/images/logo/CallOne-OMR-logo.svg" alt="" />
      <h2>Angebot für OMR-Fans</h2>
      <p>Exklusiv für OMR Hörer bieten wir unsere Lösung <strong>ohne einmalige Bereitstellungskosten</strong> an. Interessenten schalten wir direkt Rufnummern und alle Features zum  unverbindlichen Test frei.</p>

      <input type="text" name="name" id="name" placeholder="Name" />
      <input type="text" name="company" id="company" placeholder="Firma" />

      <div class="customSelect">
        <div class="group">
            <div id="position" class="select-selected"></div>
            <label for="position" class="">Ich bin Ansprechpartner von</label>
            <label for="position" class="mobile">Abteilung</label> 
        </div>
        <div class="select-items select-hide">
          <div class="item">IT</div>
          <div class="item">Kundenservice</div>
          <div class="item">Sales</div>
          <div class="item">Geschäftsführung</div>
          <div class="item">Sonstiges</div>
        </div>
      </div>
      
      <input type="email" name="email" id="email" placeholder="Geschäfts-E-Mail" />
      <input type="text" ame="phonenumber" id="phonenumber" placeholder="Geschäfts-Rufnummer" />

      <button type="submit" class="button tertiary rounded submit">Kostenlose Demo buchen</button>
    </form>

    <div class="formSuccess">
      <h3>Vielen Dank für Ihre Anfrage!</h3>
      <p>Wir nehmen uns Ihrer Anfrage schnellstmöglich an und melden uns bei Ihnen in Kürze. Wenn Sie nicht warten wollen, kontaktieren Sie uns doch einfach per Telefon unter <a href="tel:+493092033500">+49 (0) 30-920 33 500</a>. Wir freuen uns auf Ihren Anruf.</p>
      <p>Sie erhalten demnächst eine E-Mail zur Bestätigung Ihrer Anfrage bei uns. Dort finden Sie auch nochmal alle weiteren Kontaktinformationen.</p>
      <p>Wir sind für Sie da.<br><strong>Ihr CallOne-Team</strong></p>
    </div>
    <div class="formFail">
      <h3>Ihre Anfrage konnte nicht gesendet werden!</h3>
      <p>Es ist leider ein Fehler beim übertragen der Daten aufgetreten! Bitte versuchen Sie es später noch einmal.</p>
      <p>Alternativ können Sie uns auch gerne telefonisch kontaktieren unter <a href="tel:+493092033500" title="Rufen Sie uns an! Wir beraten Sie gerne.">+49 (0) 30-920 33 500</a></p>
      <p><strong>Ihr CallOne-Team</strong></p>
    </div>

    <p class="centered">Unternehmen denen Telefonberatung am Herzen liegt, vertrauen auf <strong>CallOne Lösungen</strong></p>

    <?php getLogoParade([   
                          ['data' => 'bett-white.png', 'alt' => 'Kunde Bett1.de', 'cssClass' => 'partnerLogo small'],
                          ['data' => 'check24-logo.svg', 'alt' => 'Kunde Check24', 'cssClass' => 'partnerLogo small'],
                          ['data' => 'sixt-logo.svg', 'alt' => 'Kunde Sixt', 'cssClass' => 'partnerLogo invert small'],
                          ['data' => 'snipes2-logo.svg', 'alt' => 'Unser Kunde Snipes', 'cssClass' => 'partnerLogo invert small'],
                          ['data' => 'logo-sodastream.svg', 'alt' => 'Unser Kunde SodaStream', 'cssClass' => 'partnerLogo invert small']
    ], null, 'startpage'); ?>
  </div>
</div>

<div class="wrapper">
  <div class="content wide">
    <h2>Qualität und Flexibilität die sich bemerkbar machen</h2>

    <div class="grid centered">
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/sound-quality.svg" alt="Kristallklare Sprachqualität" />
        </div>
        <h3>Kristallklare Sprachqualität</h3>
        <p>Wir setzen auf Businessrouten, dass heißt keine Gesprächsaussetzer und beste Qualität für Deine Telefonate.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/server-location.svg" alt="Serverstandort Deutschland" />
        </div>
        <h3>Höchste Sicherheitsstandards</h3>
        <p>Die Server stehen in Hochsicherheitsrechenzentren in Deutschland. Verschlüsslung ist hier Standard.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/realtime-statistics.svg" alt="Echtzeitstatistiken" />
        </div>
        <h3>Echtzeitstatistiken</h3>
        <p>Wir liefern alles Daten, damit Du an den großen Stellscharauben drehen kannst: Personal & Effizienz.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/homeoffice.svg" alt="Homeoffice" />
        </div>
        <h3>Homeoffice</h3>
        <p>Du entscheidest wie Du telefonierst: Über den Browser, Softphone integriert in Deinem Tool oder klassich mit einem IP-Telefon.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/apps.svg" alt="Apps" />
        </div>
        <h3>Apps</h3>
        <p>CallOne liefert fertige Anbindungen für die relevanten CRM und Ticketinglösungen wie Salesforce, Pipedrive Hubspot, Zendesk.</p>
      </div>
      <div class="col-3 card" style="--c:transparent">
        <div class="card__image card__image--small">
          <img src="/assets/images/icons_svg/apis.svg" alt="Schnittstellen" />
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

    <div class="toggle-box">
      <input type="checkbox" id="faq-1" />
      <label for="faq-1">Was bietet CallOne?</label>
      <div class="toggle-box__content">
        <p>CallOne bietet Ihnen eine Telefonielösung für das gesamte Unternehmen. Dabei richten wir uns speziell an Ihre Sales- und Service-Abteilungen und bieten für diese eine ausgereifte Callcenter-Software mit weitreichenden Apps und APIs.</p>
      </div>
    </div>
    <div class="toggle-box">
      <input type="checkbox" id="faq-2" />
      <label for="faq-2">Was kostet CallOne?</label>
      <div class="toggle-box__content">
        <p>Wir bieten Pakete, die genau auf die Anforderungen unserer Kunden zugeschnitten sind. Dabei richten wir uns insbesondere an Unternehmen, die eine individuelle Lösung benötigen und eine persönliche Betreuung zu schätzen wissen.</p>
        <p>Konkret startet unsere Telefonanlage bei 5 UserInnen und 99,00 EUR. Näheres erfährst du bei unserem Vertriebsteam!</p>
      </div>
    </div>
    <div class="toggle-box">
      <input type="checkbox" id="faq-3" />
      <label for="faq-3">Welches Goodie erhalte ich als OMR-HörerIn?</label>
      <div class="toggle-box__content">
        <p>Als OMR-HörerIn erlassen wir dir die Bereitstellunggebühren unserer Telefonanlage. Damit sparst du bis zu 499,00 EUR!</p>
      </div>
    </div>
    <div class="toggle-box">
      <input type="checkbox" id="faq-4" />
      <label for="faq-4">Wie schnell können wir starten?</label>
      <div class="toggle-box__content">
        <p>Ein Start ist in wenigen Schritten möglich. Wir schalten einen persönlichen Zugang zur Anlage und es kann losgehen! Persönliche AnsprechpartnerInnen stehen jederzeit zur Konfiguration des Routings zur Verfügung.</p>
      </div>
    </div>
  </div>
</div>

<div class="wrapper darkgrey padding-top-80 padding-bottom-80">
  <div class="content wide">
    <div class="omr-badge">
      <div class="omr-badge__icon">
        <img src="/assets/images/icons_svg/podcast-goodie.svg" alt="" />
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
          <img src="/assets/images/icons_svg/Customer-Support-White.svg" alt="" />
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
          <img src="/assets/images/icons_svg/Sales-White.svg" alt="" />
        </div>
        <h3>Sales</h3>
        <p>Mehr Durchblick bringt mehr Leads und qualitativ bessere Abschlüsse. Sie verbinden CallOne mit den besten Vertriebstools, einfach per Knopfdruck.</p>
        <p>
          <a href="/sales-solutions" class="button transparent-border rounded">Mehr erfahren <span class="button__icon arrow icon-jump-forward"></span></a>
        </p>
      </div>
      <div class="col-3 card card--transparent">
        <div class="card__image">
          <img src="/assets/images/icons_svg/Helpdesk-White.svg" alt="" />
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