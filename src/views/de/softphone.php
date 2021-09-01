<?php
$product = new product ('Softphone', 'Die TEAMS Alternative | VoIP Telefon integriert in Ihren Lieblingsbrowser, nutzbar mit Ihrem Anbieter');
$product->image_set ('https://callone.de/assets/images/screens/Intro-softphone-desktop.png');
$product->reviews_load ();

$product->structured_data_get_code ();

$faqs = new faqs ();
$faqs->faq_add (
  'Was ist ein Softphone?',
  '<p>Ein Softphone ermöglicht es Ihnen statt über ein stationäres Endgerät, also z.B. ein Tischtelefon, bequem über den PC oder das Smartphone zu telefonieren. Letztendlich handelt es sich dabei normalerweise um eine Software, die Sie installieren. Die Benutzeroberfläche des Softphones ermöglicht Ihnen dann die gleichen Funktionen wie an einem regulären Telefon zu nutzen, z.B. Nummern eintippen, Wählen, Auflegen. Unsere Browser-Erweiterung integriert für Sie ein Softphone direkt in Ihren Browser. Nach Download der Erweiterung können Sie also ohne Installation eines zusätzlichen Programmes direkt im Browser telefonieren. Neben den regulären Telefoniefunktionen ermöglicht die Browsererweiterung noch weitere Möglichkeiten, wie z.B. Click-to-Dial. Sie können also Rufnummern auf jeder Webseite oder in Ihren webbasierten CRM-Tools anklicken und damit direkt einen Anruf auslösen.</p>'
);
$faqs->faq_add (
  'Wie kann das Softphone verwandt werden?​',
  '<p>In der Regel handelt es sich bei Softphones um Programme, die Sie herunterladen und auf Ihrem Computer oder mobilem Gerät installieren. Die CallOne Browser-Erweiterung können Sie sich einfach im App Store des Browsers Ihrer Wahl herunterladen ohne zusätzliche Programminstallationen. Somit können Sie jederzeit im Browser telefonieren. Sie aktivieren die Erweiterung in dem Sie die SIP-Daten Ihres Providers oder von CallOne in der Konfiguration eintragen.</p>'
);
$faqs->faq_add (
  'Für welches Betriebssystem ist das Softphone geeignet?​',
  '<p>Die CallOne Browsererweiterung ist prinzipiell für alle Betriebssysteme geeignet. Sie finden die Erweiterung in den App Stores von Google Chrome, Mozilla Firefox und Microsoft Edge.</p>'
);
$faqs->faq_add (
  'Kann ich meinen eigenen Provider mit dem Softphone verwenden?',
  '<p>Ja, Sie können die Erweiterung als Softphone mit Ihrem eigenen Provider oder auch mit CallOne Nebenstellen verwenden.</p>'
);
?>

<div class="wrapper lightgrey">
  <div class="content wide">
    <header class="main-header">
      <div class="text">
        <div class="browsers mobile-hidden">
          <div class="browsers__browser browsers__browser--chrome" data-browser="chrome"></div>
          <div class="browsers__browser browsers__browser--firefox" data-browser="firefox"></div>
          <div class="browsers__browser browsers__browser--edge" data-browser="edge"></div>
        </div>
        <h1 class="secondary">Softphone integriert in Ihren Lieblingsbrowser</h1>
        <p class="primary">Ein- und ausgehende Telefonate direkt im Browser auf Knopfdruck führen. Unser VoIP Telefon optional kombinierbar mit Ihrer Telefonanlage.</p>
        <div class="button-set mobile-hidden">
          <a class="button tertiary rounded" href="#installation" target="_blank">Kostenfrei installieren</a>
        </div>
      </div>
      <div class="media centered mobile-hidden">
        <img src="/assets/images/screens/Intro-softphone-desktop.png" alt="" />
      </div>
    </header>

    <p class="centered desktop-hidden margin-top-40">
      <img src="/assets/images/icons_svg/softphone-browser-circle.svg" alt="" />
    </p>

    <p class="centered desktop-hidden margin-top-40">
      <img src="/assets/images/screens/Intro-Softphone-mobil.png" alt="" />
    </p>

    <p class="centered mobile-hidden"><strong>Schnelleinstieg:</strong> Für was interessieren Sie sich?</p>

    <div class="button-set centered mobile-hidden">
      <a href="#funktionen" class="button small-rounded white-shadow button--anchor button--noletterspacing">Funktionen</a>
      <a href="#vergleich" class="button small-rounded white-shadow button--anchor button--noletterspacing">Vergleich zu MS Teams</a>
      <a href="#preise" class="button small-rounded white-shadow button--anchor button--noletterspacing">Preise</a>
      <a href="#installation" class="button small-rounded white-shadow button--anchor button--noletterspacing">Installation &amp; FAQ</a>
    </div>
  </div>
</div>

<div class="wrapper lightgrey-white no-margin-top mobile-hidden" id="funktionen">
  <div class="content wide">
    <h1 class="headline__icon">
      <img src="/assets/images/icons_svg/softphone-app-icon.svg" alt="" />
      <div>
        <span class="icon-callone">App</span>
        <span class="headline__text">Softphone</span>
      </div>
    </h1>

    <h2>
      Entfesseln Sie Ihre Telefonie!
      <span>Telefonieren Sie über den PC und nutzen Sie kostenlos unser Softphone mit Funktionen, die Sie lieben werden</span>
    </h2>

    <div class="tabset">
      <div class="tabset__links">
        <div class="tabset__link" data-tab="1">
          <span>Softphone</span>
          VoIP-Telefon im Browser
        </div>
        <div class="tabset__link" data-tab="2">
          <span>Click-to-Dial</span>
          Wählen mit einem Klick
        </div>
        <div class="tabset__link" data-tab="3">
          <span>Bring your own Provider</span>
          Funktioniert mit Ihrer VoIP-Telefonanlage
        </div>
      </div>
      <div class="tabset__tabs">
        <div class="tabset__tab" data-tab="1">
          <div class="tabset__video">
            <video>
              <source src="/assets/videos/softphone-webm/Softphone.webm" type="video/webm" />
              <source src="/assets/videos/softphone-mp4/Softphone.mp4" type="video/mp4" />
            </video>
          </div>
          <p class="centered">Das Herzstück unserer Softphone App ist unser integriertes VoIP-Telefon mit dem Sie ein- und ausgehende Telefonate führen können. Zusätzlich steht ein Dialpad und Browser-Notification für maximalen Komfort zur Verfügung.​</p>
          <div class="button-set centered">
            <a class="button tertiary rounded" href="#installation" target="_blank">Kostenfrei installieren</a>
          </div>
        </div>
        <div class="tabset__tab" data-tab="2">
          <div class="tabset__video">
            <video>
              <source src="/assets/videos/softphone-webm/Click-to-Dial.webm" type="video/webm" />
              <source src="/assets/videos/softphone-mp4/Click-to-Dial.mp4" type="video/mp4" />
            </video>
          </div>
          <p class="centered">Rufnummern werden im Browser erkannt und anwählbar mit nur einem Klick. Das Softphone verfügt über eine 1-Click-Funktion mit intelligenter Rufnummernerkennung.</p>
          <div class="button-set centered">
            <a class="button tertiary rounded" href="#installation" target="_blank">Kostenfrei installieren</a>
          </div>
        </div>
        <div class="tabset__tab" data-tab="3">
          <div class="tabset__video">
            <video>
              <source src="/assets/videos/softphone-webm/Own-Provider.webm" type="video/webm" />
              <source src="/assets/videos/softphone-mp4/Own-Provider.mp4" type="video/mp4" />
            </video>
          </div>
          <p class="centered">Flexibilität heißt bei CallOne: Sie können unsere Telefonanlage nutzen, müssen aber nicht! Wir bieten für zahlreiche VoIP-Anbieter eine nahtlose Integration in unser Softphone.</p>
          <div class="button-set centered">
            <a class="button tertiary rounded" href="#installation" target="_blank">Kostenfrei installieren</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper lightgrey mobile-hidden" id="vergleich">
  <div class="content wide">
    <h2>Direkter Produktvergleich</h2>
    <p>Welche Vorteile bietet das CallOne Softphone gegenüber einem vergleichbaren Lösungsansatz mit Microsoft Teams? Probieren Sie es jetzt mit der Schaltertaste aus!</p>

    <div class="compare">
      <div class="compare__header">
        <div class="compare__logo">
          <img src="/assets/images/softphone/comparison-softphone.svg" alt="" />
        </div>
        <div class="compare__switch">
          <input type="checkbox" id="compare-switch-1" value="1" checked />
          <label for="compare-switch-1"></label>
        </div>
        <div class="compare__logo">
          <img src="/assets/images/softphone/comparison-ms-teams.svg" alt="" />
        </div>
      </div>
      <div class="compare__content" data-compare="on">
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-lizenzkosten.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Lizenzkosten</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Inklusivleistung im Rahmen der CallOne Telefonanlage.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-integrationsaufwand.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Integrationsaufwand</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Einfache Installation und Nutzung innerhalb von wenigen Minuten durch den Admin oder User selbst​.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-lizenzkosten.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Datenschutzkonformität</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Deutsches Unternehmen, das Ihre Daten sicher und DS-GVO konform hostet.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-flexibilitaet.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Flexibilität</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Spezialanbieter für Unternehmenstelefonie mit persönlichem Ansprechpartner und Support.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-support.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Support</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/benefit-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Ein Ansprechpartner für all Ihre Belange. Softphone und Telefonie aus einer Hand.
            </div>
          </div>
        </div>
      </div>

      <div class="compare__content" data-compare="off">
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-lizenzkosten.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Lizenzkosten</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/attention-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Zusatzkosten oder entsprechender Vertrag notwendig.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-integrationsaufwand.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Integrationsaufwand</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/attention-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Einrichtung teilweise nur mit bestimmten Adminrechten. Powershell und zusätzliche Schritte notwendig.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-lizenzkosten.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Datenschutzkonformität</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/attention-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              US-Unternehmen, das nicht mehr auf Grundlage des Privacy Shield Daten von EU-Bürgern verarbeiten darf.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-flexibilitaet.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Flexibilität</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/attention-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Breites Portfolio, allerdings nicht spezialisiert auf Businesstelekommunikation.
            </div>
          </div>
        </div>
        <div class="compare__box">
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/icon-support.svg" alt="" />
            </div>
            <div class="compare__text">
              <h3>Support</h3>
            </div>
          </div>
          <div class="compare__info">
            <div class="compare__icon">
              <img src="/assets/images/icons_svg/attention-highlighter.svg" alt="" />
            </div>
            <div class="compare__text">
              Standard ist Selfservice mit Ticket oder Betreuung durch einen zusätzlichen IT-Systempartner.
            </div>
          </div>
        </div>
      </div>
    </div>

    <p class="centered footnote">*Microsoft Teams ist eine eingetragene und geschützte Marke.</p>
  </div>
</div>

<div class="wrapper background-black no-margin-top" id="preise">
  <div class="content narrow">
    <h2>Preise</h2>
    <p class="mobile-left">Das CallOne Softphone ist die perfekte Erweiterung für Ihre Businesstelefonie. Es funktioniert sowohl mit Ihrem existierenden VoIP-Carrier als auch mit der CallOne Telefonie-Welt. Wie möchten Sie das Softphone nutzen?</p>

    <div class="pricetoggle">
      <div class="pricetoggle__sticky">
        <div class="pricetoggle__stickybuttons">
          <div class="pricetoggle__stickybutton" data-pricebox="1">
            Eigenen Provider<br />
            verbinden
          </div>
          <div class="pricetoggle__stickybutton" data-pricebox="2">
            Softphone mit<br />
            VoIP-Telefonanlage
          </div>
        </div>
      </div>

      <div class="pricetoggle__buttons">
        <div class="pricetoggle__button" data-pricebox="1">
          <img src="/assets/images/icons_svg/eigener-provider.svg" alt="" />
          <h3>Eigenen Provider verbinden</h3>
        </div>
        <div class="pricetoggle__button" data-pricebox="2">
          <img src="/assets/images/icons_svg/callone-telefonanlage.svg" alt="" />
          <h3>Softphone mit VoIP-Telefonanlage</h3>
        </div>
      </div>

      <div class="mobile-hidden">
        <div class="pricetoggle__content" data-pricebox="1">
          <h2>Ruckzuck verbinden und aus dem Browser lostelefonieren</h2>
          <p>Das Softphone mit den Grundfunktionen für Telefonie und Click-to-Dial können Sie stets kostenfrei nutzen. Zukünftige Features für noch angenehmere Business-Telefonie können Sie für einen Aufpreis dazubuchen.</p>

          <img src="/assets/images/softphone/SIP-visualization.svg" alt="" />

          <div class="pricetoggle__whitebox">
            <div class="grid flex vcenter">
              <div class="col-2">
                <span class="headline-tag" data-tag="Basic">Softphone</span><br />
                mit eigenem SIP-Provider
              </div>
              <div class="col-2">
                <span class="headline-free">kostenfrei</span>
              </div>
            </div>

            <ul>
              <li>Dialpad</li>
              <li>Click-to-Call (Nummern von Websites ins Telefon wählen)</li>
            </ul>

            <div class="button-set">
              <a class="button button--block button--fullwidth tertiary rounded" href="#installation" target="_blank">Kostenfrei installieren</a>
            </div>
          </div>
        </div>

        <div class="pricetoggle__content" data-pricebox="2">
          <h2>Holen Sie das Beste aus Ihrer Businesstelefonie heraus!</h2>
          <p>CallOne ist der Spezialist, wenn es um hochwertige moderne Telekommunikation geht, die sich nahtlos in Ihre IT-Infrastruktur einpasst.</p>

          <div class="grid centered">
            <div class="col-3">
              <img src="/assets/images/icons_svg/icon-spezialist.svg" alt="" />
              <p class="secondary">Spezialist für<br />Business Telefonie</p>
            </div>
            <div class="col-3">
              <img src="/assets/images/icons_svg/icon-ansprechpartner.svg" alt="" />
              <p class="secondary">Persönlicher<br />Ansprechpartner</p>
            </div>
            <div class="col-3">
              <img src="/assets/images/icons_svg/icon-datenschutz.svg" alt="" />
              <p class="secondary">Deutscher<br />Datenschutz-Standard</p>
            </div>
          </div>

          <div class="pricetoggle__whitebox">
            <div class="usercalc">
              <div class="usercalc__form">
                <p><strong>Wie viele Nutzer-Accounts brauchen Sie?</strong></p>

                <div class="usercalc__box">
                  <div class="usercalc__header">
                    <div class="usercalc__icon">
                      <img src="/assets/images/icons_svg/voip-telefonanlage.svg" alt="" />
                    </div>
                    <div class="usercalc__title">
                      <strong>Telefonanlage</strong><br />
                      Für das gesamte Unternehmen
                    </div>
                  </div>

                  <div class="usercalc__slider">
                    <div class="prerange"></div>
                    <input type="range" min="25" value="25" max="500" />
                  </div>

                  <div class="usercalc__grid">
                    <div class="usercalc__col">
                      <input type="text" class="usercalc__users" value="25" /><span>Nutzer</span>
                    </div>
                    <div class="usercalc__col">
                      <span class="usercalc__price">9,90 &euro;</span>
                      <span>
                        pro Nutzer<br />
                        pro Monat
                      </span>
                    </div>
                  </div>

                  <p class="small">
                    <strong>Hinweis:</strong> Preise zzgl. optionaler Einrichtung durch CallOne und einmaliger Aktivierung von 99,00 €. CallOne richtet sich an den Bedarf und die Herausforderungen mittelständischer Unternehmen. Unsere Lösungen sind erfahrungsgemäß zu umfassend für Unternehmen unter 25 Mitarbeitenden.
                  </p>
                </div>

                <p>
                  <strong>Legen Sie Wert auf hervorragenden Kundenservice?</strong><br />
                  CallOne liefert eine Callcenter-Software, die keine Wünsche offen lässt. Sie bietet umfangreiche Funktionen von Rückruf- über Warteschleifen-Management, Anbindungen an CRM-Systeme, Gesprächsaufzeichnungen bis hin zu Statistiken.
                </p>

                <input type="checkbox" id="callcenter-software" />
                <label class="usercalc__box" for="callcenter-software">
                  <div class="usercalc__header">
                    <div class="usercalc__icon">
                      <img src="/assets/images/icons_svg/callcenter-software.svg" alt="" />
                    </div>
                    <div class="usercalc__title">
                      <strong>Callcenter-Software</strong><br />
                      Für Sales und Service
                    </div>
                    <div class="usercalc__checkbox"></div>
                  </div>
                </label>

                <div class="button-set">
                  <a class="button button--block button--fullwidth tertiary black2 rounded usercalc__submit" href="#" target="_blank">Preise ansehen</a>
                </div>
              </div>

              <div class="usercalc__result">
                <div class="usercalc__back usercalc__submit">
                  <span></span> Schritt zurück
                </div>

                <div class="usercalc__grid">
                  <div class="usercalc__col usercalc__headline usercalc__headline--tag">
                    <span data-tag="Pro">Softphone</span>
                    mit CallOne Telefonanlage
                  </div>
                  <div class="usercalc__col usercalc__total">
                    Preis pro Monat*
                    <span></span>
                  </div>
                </div>

                <ul>
                  <li>Dialpad</li>
                  <li>Click-to-Dial (Nummern von Websites ins Telefon wählen)</li>
                  <li>Rufnummern-Portierung</li>
                  <li>Bis zu zehn Endgeräte je User gleichzeitig</li>
                  <li>Deutscher Datenschutz-Standard</li>
                </ul>

                <p class="subtext">* Gesamtpreis für alle Nebenstellen zzgl. Nutzung</p>

                <hr>

                <div class="usercalc__callcenter">
                  <div class="usercalc__grid">
                    <div class="usercalc__col usercalc__headline">
                      <span>Callcenter-Software</span>
                      für Sales und Service
                    </div>
                    <div class="usercalc__col">
                      <div class="usercalc__col usercalc__total2">
                        ab monatlich**
                        <span>99,00 &euro;</span>
                      </div>
                    </div>
                  </div>

                  <ul>
                    <li>Warteschleifenmanagement</li>
                  </ul>

                  <p class="subtext">** Projektspezifisch zzgl. Plattformnutzung</p>

                  <hr>
                </div>

                <div class="usercalc__subheadline">
                  Kontakt zum CallOne Vertrieb
                </div>

                <form class="usercalc__contact">
                  <div>
                    <label for="form_name">Vorname und Nachname (Pflicht)</label>
                    <input type="text" name="name" id="form_name" placeholder="Max Mustermann" required />
                  </div>
                  <div>
                    <label for="form_company">Unternehmen bzw. Organisation (Pflicht)</label>
                    <input type="text" name="company" id="form_company" placeholder="Muster AG" required />
                  </div>
                  <div>
                    <label for="form_mail">Geschäfts-Email (Pflicht)</label>
                    <input type="email" name="mail" id="form_mail" placeholder="beispiel@muster.ag" required />
                  </div>
                  <div>
                    <label for="form_comment">Anmerkungen (Optional)</label>
                    <textarea name="comment" id="form_comment" rows="3" placeholder="Ihre Nachricht an uns&hellip;"></textarea>
                  </div>
                  <div>
                    <button type="submit" class="button tertiary rounded button--fullwidth">Anfrage absenden</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile boxes -->
      <div class="desktop-hidden">
        <div class="pricetoggle__content" data-pricebox="1">
          <div class="pricetoggle__whitebox">
            <h2 class="tag-behind" data-tag="Basic">Softphone</h2>
            <p>Die Grundfunktionen für Telefonie und Click-to-Dial können Sie stets <strong>kostenfrei</strong> nutzen, wenn Sie es mit Ihrem eigenen Provider verbinden.</p>
            <p>Die Browser-Erweiterung wird nicht für mobile Browser unterstützt. Installationslinks finden Sie auf der Desktop-Version dieser Seite.</p>
          </div>  
        </div>

        <div class="pricetoggle__content" data-pricebox="2">
          <div class="pricetoggle__whitebox">
            <h2 class="tag-behind" data-tag="Pro">Softphone</h2>
            <p>Die CallOne Telefonanlage zusammen mit erweiterten Softphone Funktionen richtet sich an den Bedarf und die Herausforderungen mittelständischer Unternehmen. Preise beginnen ab <strong>9,99 €</strong> für 25 Nutzer, zzgl Einrichtungs- und Aktivierungskosten.</p>
            <h2>Kontakt zum CallOne Vertrieb</h2>
            <form class="usercalc__contact">
              <div>
                <label for="form_name_mobile">Vorname und Nachname (Pflicht)</label>
                <input type="text" name="name" id="form_name_mobile" placeholder="Max Mustermann" required />
              </div>
              <div>
                <label for="form_company_mobile">Unternehmen bzw. Organisation (Pflicht)</label>
                <input type="text" name="company" id="form_company_mobile" placeholder="Muster AG" required />
              </div>
              <div>
                <label for="form_mail_mobile">Geschäfts-Email (Pflicht)</label>
                <input type="email" name="mail" id="form_mail_mobile" placeholder="beispiel@muster.ag" required />
              </div>
              <div>
                <label for="form_comment_mobile">Anmerkungen (Optional)</label>
                <textarea name="comment" id="form_comment_mobile" rows="3" placeholder="Ihre Nachricht an uns&hellip;"></textarea>
              </div>
              <div>
                <button type="submit" class="button tertiary rounded button--fullwidth">Anfrage absenden</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper lightgrey-2-white no-padding-bottom no-margin-top mobile-hidden" id="installation">
  <div class="content wide">
    <div class="installation">
      <div class="installation__header">
        <div class="installation__logo">
          <img src="/assets/images/icons_svg/softphone-app-icon.svg" alt="" />
        </div>
        <div class="installation__title">
          <span class="headline-tag">App</span><br />
          Softphone
        </div>
        <div class="installation__rating">
          <span>&starf;&starf;&starf;&starf;&starf;</span><br />
          Hervorragende Bewertung<br />
          im <a href="#">Google Chrome Store</a>.
        </div>
      </div>
      <div class="installation__content">
        <h3>Schritte für Installation</h3>
        <h1>In zwei Minuten eingerichtet</h1>

        <div class="installation__grid">
          <div class="installation__col">
            <img src="/assets/images/icons_svg/icon-download-extension.svg" alt="" />
            1. Browser App<br />herunterladen
          </div>
          <div class="installation__col">
            <img src="/assets/images/icons_svg/icon-authorization.svg" alt="" />
            2. Zugangsdaten<br />eintragen
          </div>
          <div class="installation__col">
            <img src="/assets/images/icons_svg/icon-softphone-use.svg" alt="" />
            3. Los<br />telefonieren
          </div>
        </div>

        <h2>Wählen Sie den Browser zur Installation</h2>

        <div class="installation__browsers">
          <a href="#" class="installation__browser" data-browser="chrome">
            <div><img src="/assets/images/icons_png/google-chrome.png" alt="" /></div>
            Google<br />Chrome
          </a>
          <a href="#" class="installation__browser" data-browser="firefox">
            <div><img src="/assets/images/icons_png/mozilla-firefox.png" alt="" /></div>
            Mozilla<br />Firefox
          </a>
          <a href="#" class="installation__browser" data-browser="edge">
            <div><img src="/assets/images/icons_svg/edge-logo.svg" alt="" /></div>
            Microsoft<br />Edge
          </a>
        </div>

        <div class="button-set centered">
          <a href="https://chrome.google.com/webstore/detail/callone-voip-softphone/cedionilkklbngbmlnipangpipeficfo" target="_blank" class="button tertiary rounded installation__button" data-browser="chrome">
            Zum Chrome Store <span class="button__icon icon-jump-forward"></span>
          </a>
          <a href="https://addons.mozilla.org/de/firefox/addon/callone/" class="button tertiary rounded installation__button" target="_blank" data-browser="firefox">
            Zum Firefox Add-On <span class="button__icon icon-jump-forward"></span>
          </a>
          <a href="https://microsoftedge.microsoft.com/addons/detail/callone-voip-softphone/jeollcclhnpejdihkhengipjejjjjfbm" target="_blank" class="button tertiary rounded installation__button" data-browser="edge">
            Zum Edge Add-On <span class="button__icon icon-jump-forward"></span>
          </a>
        </div>
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