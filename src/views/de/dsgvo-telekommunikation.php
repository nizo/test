<div class="section section--no-padding-bottom section--mobile-divider">
    <header class="hero">
        <div class="hero__image">
            <?= pictureTag(
                '/assets/images/illus/data-protection-header-illustration.svg',
                'Unternehmenstelefonie mit hohem Datenschutzstandard',
                465, 436
            ); ?>
        </div>
        <div class="hero__text">
            <h1>Zeigen Sie Ausfällen, Notfällen und Datenschutz&shy;problemen den Mittelfinger!</h1>

            <p class="bigtext">Wenn die Technik ausfällt, bezahlen Sie das mit viel Geld und viel kaltem Schweiß. Eine Stunde Ausfall kostet schnell mehrere tausend Euro. Und eine Datenschutzlücke? Nicht auszudenken. Deshalb sorgen wir dafür, dass Ihnen das nicht passiert.</p>

            <p>
                <a href="#" class="btn btn--primary mobile-hidden" data-openmodal="contact-sales">Sicherheitsberatung anfordern</a>
                <a href="#" class="btn btn--primary btn--full-width centered desktop-hidden" data-openmodal="contact-sales">Sicherheitsberatung anfordern</a>
            </p>
        </div>
    </header>

    <div class="anchors mobile-hidden">
        <div class="anchors__title">
            <strong>Schnelleinstieg:</strong> Für was interessieren Sie sich?
        </div>
        <div class="anchors__links">
            <a href="#ausfaelle-notfaelle">Ausfälle & Notfälle</a>
            <a href="#datenschutz">Datenschutz</a>
        </div>
    </div>
</div>

<div class="section section--white-light-green">
    <div class="section__content section__content--wide">
        <div class="content-box content-box--green-dataprotection content-box--big-padding content-box--border content-box--full-width" style="margin-bottom:var(--gutter-l)">
            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
                    <h3>Warum Sie hinsichtlich Ihrer Telefonie auf Nummer sicher gehen sollten:</h3>

                    <div class="carddeck carddeck--right" data-speed="4000">
                        <div class="carddeck__card">
                            <div class="number-card number-card--no-padding number-card--no-bg number-card--align-left">
                                <div class="number-card__number" style="--color:#86ed18">63%</div>
                                <p>der IT-Führungskräfte gaben an, dass sie eine Umsatzsteigerung ihres Unternehmens erwarten, wenn sie keine Ausfallzeiten erreichen.</p>
                                <p>Quelle: <a href="https://www.ibm.com/downloads/cas/GMVZLWRZ" target="_blank" class="inline-link">IBM</a></p>
                            </div>
                        </div>
                        <div class="carddeck__card">
                            <div class="number-card number-card--no-padding number-card--no-bg number-card--align-left">
                                <div class="number-card__number" style="--color:#86ed18">72%</div>
                                <p>der deutschen Unternehmen verzögert sich die digitale Transformation durch ungeplante Systemausfälle.</p>
                                <p>Quelle: <a href="https://ap-verlag.de/ausfaelle-der-it-infrastruktur-behindern-digitale-transformation-und-kosten-jede-firma-ueber-20-millionen-euro-im-jahr/33662/" target="_blank" class="inline-link">Manage IT</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="centered mobile-hidden">
            100% Erreichbarkeit schaffen nicht mal wir.<br class="mobile-hidden" />
            Aber 99,999%!
        </h2>

        <p class="bigtext centered mobile-hidden">
            Unangenehm, aber unumgänglich: 5 Minuten pro Jahr gibt es irgendein technisches Problem. Unser Job ist, dass es nicht zu Ihrem Problem wird – mit optimaler Infrastruktur und detailgenauer Planung.
        </p>

        <div class="tablist" id="ausfaelle-notfaelle">
            <div class="tablist__links">
                <div class="tablist__link" data-tab="1">
                    <?= pictureTag(
                        '/assets/images/icons_svg/reliability-icon.svg',
                        'Zuverlässige und sichere Unternehmenstelefonie',
                        48, 48
                    ); ?>
                    <strong>Ausfallsicherheit</strong>
                </div>
                <div class="tablist__link" data-tab="2">
                    <?= pictureTag(
                        '/assets/images/icons_svg/emergency-icon.svg',
                        'Unternehmenstelefonie mit Notfall-Optionen',
                        48, 48
                    ); ?>
                    <strong>Notfall-Optionen</strong>
                </div>
            </div>

            <div class="tablist__content" data-tab="1">
                <h3 class="centered mobile-left">
                    Ein Maßnahmen-Paket, mit dem wir fast <br />
                    jeden Ausfall verhindern können:
                    <br class="mobile-hidden" />
                    <br class="mobile-hidden" />
                </h3>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Georedundanz und ISP-Anbindung</h3>
                                <p class="bigtext">Ihre Datenbank, der Backup-Server und Vermittlungsstellen liegen in zertifizierten Hochsicherheitsrechenzentren, ausnahmslos in Deutschland.</p>
                            </div>
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/georedundancy-illustration.svg',
                                    'georedundante Systeme für Cloud Telefonanlage und Call Center Software',
                                    431, 352
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable1" />
                    <label for="expandable1"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Mehrfach angebunden an unterschiedliche Internet Service Provider</li>
                                <li>Unterschiedliche Brandabschnitte im ISO 27001 zertifizierten Rechenzentrum</li>
                                <li>Vom Hauptsystem losgelöste Backupserver, die bei Ausfällen optional genutzt werden können</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Hochverfügbarkeit nahe 100%
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Sicherheit und Planbarkeit
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Skalieren ohne Risiko
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/ddos-illustration.svg',
                                    'Premium DDoS Schutz für Ihre Cloud Telefonanlage und Callcenter Software',
                                    431, 352
                                ); ?>
                            </div>
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>DDoS-Premiumschutz</h3>
                                <p class="bigtext">Attacken auf den Server können übel werden. Cyberschutz von Link11 schützt Sie davor, dass Ihr Service durch böswilliges Eingreifen auf Ihre Cloud in die Knie geht.</p>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable2" />
                    <label for="expandable2"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>DDos (Distributed Denial of Service)-Attacken sind Cyberattacken, die eine Überlastsituation auf dem angegriffenen Webservern erzeugen.</li>
                                <li>Der eingesetzte DDoS-Schutz erfolgt durch intelligente KI-basierte Echtzeitfilter</li>
                                <li>Der (VoIP)-Datenverkehr wird dabei fortlaufend analysiert und mittels Border Gateway Protocol (BGP) geschützt</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Schutz Ihres Geschäfts
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Lösung für ein größer werdendes Problem
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Weltweit nutzbar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>State-of-the-Art Hardware</h3>
                                <p class="bigtext">Alle technischen Komponenten sind auf dem neusten Stand und entsprechen höchsten Sicherheitsstandards. Ständige Wartung gewährleistet beste Funktionalität.</p>
                            </div>
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/hardware-illustration.svg',
                                    'Modernste Hardware für Ihre Unternehmenstelefonie',
                                    472, 386
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable3" />
                    <label for="expandable3"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Redundantes IT-Konzept mit virtualisierten Maschinen</li>
                                <li>Wir nutzen ausschließlich namenhafte IT-Partner mit 24/7/365-Support und Austausch innerhalb weniger Stunden</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Keine oder nur minimale Ausfallzeit
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Schnellere Anwendungs- und Ressourcenbereitstellung
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Verbesserte Produktivität und Effizienz
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/backup-illustration.svg',
                                    'Backup für Ihre Businesstelefonie und Cloud Telefonanlage',
                                    431, 352
                                ); ?>
                            </div>
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Back it up</h3>
                                <p class="bigtext">Maximale Stabilität für Sie und das Gesamtsystem, gewährleistet durch die Verbindung verschiedener Backup-Technologien und redundanten, entkoppelten Systemen.</p>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable4" />
                    <label for="expandable4"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Kontinuierliche Datensicherung für Echtzeit-Wiederherstellung der Daten</li>
                                <li>Backup-Server, die im Falle einer Störung angesprochen werden können</li>
                                <li>Notfall-Routingkonzepte, die auch bei Datenbankausfall Ihre Erreichbarkeit sicherstellen</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Sicherheit, die sich auszahlt
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    DSGVO-Konformität
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Erreichbarkeit der Telefonie nahe 100%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Content for this tab -->
                <div class="fader fader--indicators-centered desktop-hidden">
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">Georedundanz und <br />ISP-Anbindung</h4>
                            <?= pictureTag(
                                '/assets/images/illus/georedundancy-illustration.svg',
                                'Geo-redundante Systeme für Ihre Businesstelefonie und Cloud Telefonanlage',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">DDoS-<br />Premiumschutz</h4>
                            <?= pictureTag(
                                '/assets/images/illus/ddos-illustration.svg',
                                'Premium DDoS Schutz für Ihre Cloud Telefonanlage und Callcenter Software',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">State-of-the-Art <br />Hardware</h4>
                            <?= pictureTag(
                                '/assets/images/illus/hardware-illustration.svg',
                                'Modernste Hardware für Ihre Unternehmenstelefonie',
                                472, 386
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered"><br />Back it up</h4>
                            <?= pictureTag(
                                '/assets/images/illus/backup-illustration.svg',
                                'Backup für Ihre Businesstelefonie und Cloud Telefonanlage',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tablist__content" data-tab="2">
                <h3 class="centered mobile-left">
                    Ein Maßnahmen-Paket, mit dem wir fast <br />
                    jeden Ausfall verhindern können:
                    <br class="mobile-hidden" />
                    <br class="mobile-hidden" />
                </h3>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Backup- & Notfall-Routing</h3>
                                <p class="bigtext">Automatisiert schreitet im Störungsfall unser Backup-Routing ein und Sie bleiben trotzdem immer erreichbar. Noch vielfältiger als Backup-Routings: Sie wählen aus einer Vielzahl an Notfall-Routings das richtige für Ihren Störungsfall.</p>
                            </div>
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/backup-routing-illustration.svg',
                                    'Backup Routing für Störung Ihrer Telefonanlage',
                                    431, 352
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable5" />
                    <label for="expandable5"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>CallOne Notfall-Routings werden vorkonfiguriert und ermöglichen einen Weiterbetrieb Ihrer Rufnummern bei uns</li>
                                <li>Ansagen oder Weiterleitungen sind weiterhin möglich auch wenn es bei uns einmal zu Störungen kommen sollte</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Frühzeige Planbarkeit
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Optimale Erreichbarkeit
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Flexible Ausweichmöglichkeiten
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/announcement-illustration.svg',
                                    'Sprachansagen für Ihre Callcenter Software und Cloud Telefonanlage',
                                    431, 352
                                ); ?>
                            </div>
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Störungsansagen</h3>
                                <p class="bigtext">Direkt und proaktiv zu kommunizieren, hilft Ihren Kunden am besten. Für automatisierte Sprachansagen in 12 Sprachen geben Sie Ihren Text ein, generieren die Ansage, implementieren sie im Routing und alles ist gut.</p>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable6" />
                    <label for="expandable6"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Ein Text-to-Speech (TTS-Ansagengenerator), der aus Ihren Texten Ansagen generiert</li>
                                <li>TTS-Ansagen können Sie innerhalb von Sekunden ins Routing einbinden und beispielsweise über Störungen informieren</li>
                                <li>TTS funktioniert bei CallOne auch über Schnittstellen, heißt Sie übergeben uns Text den wir dem Anrufer am Telefon vorspielen</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Gezielte Anruferinformationen
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Vermeidung von Anrufpeaks
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Individuelle, gezielte Kundenansprache
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Telefonische Routingänderungen</h3>
                                <p class="bigtext">Internet weg, Feueralarm, Stromausfall? Dann stellen Sie Ihr Routing mit einem einfachen Anruf um. Funktioniert auch ohne Notfall jederzeit.</p>
                            </div>
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/routing-change-illustration.svg',
                                    'Notfallrufnummern für Ihre Unternehmenstelefonie',
                                    431, 352
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable7" />
                    <label for="expandable7"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Wir schalten Notfallrufnummern für Sie und mit einem Anruf stellen Sie das Routing Ihrer Servicehotline auf Wartungsmodus oder Ihr ganz individuelles Notfallrouting</li>
                                <li>PIN-Abfragen sichern diesen Service gegen Missbrauch</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Schnelle Reaktion im Notfall
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Weltweit nutzbar
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Individuell umsetzbar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/emergency-call-illustration.svg',
                                    'Notfallanrufe für Ihre Cloud Telefonanlage und Cloud ACD',
                                    431, 352
                                ); ?>
                            </div>
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Notruf 110 & 112</h3>
                                <p class="bigtext">Wenn es hart auf hart kommt, muss alles funktionieren. Durch die optional mitgelieferte cloudbasierte Telefonanlage nutzen Sie im Notfall die zuverlässige, integrierte Notruffunktion.</p>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable8" />
                    <label for="expandable8"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>CallOne liefert echte Ortsrufnummern mit Notruffunktionen</li>
                                <li>Automatische Verteilung auf die korrekte Leitstelle</li>
                                <li>Nutzbar optimal im Filialbetrieb mit mehreren Niederlassungen</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Deutschlandweiter Service
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Arbeitsschutzgesetz-konform
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Inklusivleistung unserer Lösung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expandable mobile-hidden">
                    <div class="expandable__main">
                        <div class="co-grid">
                            <div class="co-grid__col co-grid__col--7-xs co-grid__col--vcentered">
                                <h3>Externe Callcenter-Einbindung</h3>
                                <p class="bigtext">In unsere Software sind externe Callcenter bereits optimal eingebunden. Nicht nur im Notfall sorgen Sie so für beständige Erreichbarkeit.</p>
                            </div>
                            <div class="co-grid__col co-grid__col--5-xs co-grid__col--vcentered">
                                <?= pictureTag(
                                    '/assets/images/illus/external-callcenter-illustration.svg',
                                    'Callcenter einbinden für Callcenter Software und Cloud Telefonanlage',
                                    431, 352
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" id="expandable9" />
                    <label for="expandable9"></label>
                    <div class="expandable__extra">
                        <div class="expandable__extra-left">
                            <h4 class="centered">Was ist es?</h4>

                            <ul class="list list--checkmarks-top bigtext">
                                <li>Einbindung erfolgt flexibel via PSTN oder SIP-Trunking oder Nutzung der CallOne Agentenmaske</li>
                                <li>Über- und Unterpriorisierungen im Zusammenspiel mit eigenen Agenten perfekt kombiniert</li>
                                <li>Steuerung auch mittels KPI-basiertem Routing möglich</li>
                            </ul>
                        </div>
                        <div class="expandable__extra-right">
                            <h4 class="centered">Was bringt mir das?</h4>

                            <div class="fader fader--no-header fader--centered centered bigtext">
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-1.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Optimales Zusammenspiel mit eigenen Agenten
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-2.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Transparenz durch umfangreiche Statistiken
                                </div>
                                <div class="fader__item">
                                    <?= pictureTag(
                                        '/assets/images/icons_svg/star-banner-3.svg',
                                        'Vorteile der CallOne Businesstelefonie',
                                        84, 84, [
                                            'style' => 'display:inline'
                                        ]
                                    ); ?><br />
                                    Flexible Steuerung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Content for this tab -->
                <div class="fader fader--indicators-centered desktop-hidden">
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">Backup- & <br />Notfall-Routing</h4>
                            <?= pictureTag(
                                '/assets/images/illus/backup-routing-illustration.svg',
                                'Backup Routing für Störung Ihrer Telefonanlage',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered"><br />Störungsansagen</h4>
                            <?= pictureTag(
                                '/assets/images/illus/announcement-illustration.svg',
                                'Sprachansagen für Ihre Callcenter Software und Cloud Telefonanlage',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">Telefonische <br />Routingänderungen</h4>
                            <?= pictureTag(
                                '/assets/images/illus/routing-change-illustration.svg',
                                'Notfallrufnummern für Ihre Unternehmenstelefonie',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">Notruf <br />110 & 112</h4>
                            <?= pictureTag(
                                '/assets/images/illus/emergency-call-illustration.svg',
                                'Notfallanrufe für Ihre Cloud Telefonanlage und Cloud ACD',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                    <div class="fader__item">
                        <div class="content-box content-box--white content-box--shadow">
                            <h4 class="centered">Externe <br />Callcenter-Einbindung</h4>
                            <?= pictureTag(
                                '/assets/images/illus/external-callcenter-illustration.svg',
                                'Callcenter einbinden für Callcenter Software und Cloud Telefonanlage',
                                431, 352
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="bigtext centered mobile-left">
            Wollen Sie mehr erfahren zu unseren Maßnahmen und <br />
            Funktionen hinsichtlich Ausfällen und Notfällen?<br />
            <br />
            <a href="#" class="btn btn--primary btn--centered mobile-hidden" data-openmodal="contact-sales">Erstgespräch buchen</a>
            <a href="#" class="btn btn--primary btn--full-width centered desktop-hidden" data-openmodal="contact-sales">Erstgespräch buchen</a>
        </p>
    </div>
</div>

<div class="section section--black" id="datenschutz">
    <div class="section__content section__content--wide">
        <p class="centered mobile-left">
            <?= pictureTag(
                '/assets/images/icons_svg/law-love-icon.svg',
                'Datenschutz Businesstelefonie',
                70, 70
            ); ?><br />
            <br />
        </p>

        <h2 class="centered mobile-left">
            Die Rechtsabteilung hat wegen <br />
            Ihres Datenschutzes angerufen. <br />
            Sie schicken Liebesgrüße.
        </h2>

        <p class="bigtext centered mobile-left">
            Es gibt kaum etwas Undurchsichtigeres als Gesetze. Und kaum etwas ist teurer und ärgerlicher, als sie zu verletzen. Deshalb ist Datenschutz in allen CallOne Produkten eingebaut. Komplett sorglos und rechtssicher, garantiert.
        </p>

        <!-- Desktop Contents -->
        <div class="content-box content-box--white-datenschutz content-box--full-width mobile-hidden">
            <div class="co-grid co-grid--no-margin-top co-grid--no-margin-bottom">
                <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
                    <p>
                        <?= pictureTag(
                            '/assets/images/icons_svg/dsvgo-icon.svg',
                            'Datenschutz DSGVO konforme Telefonanlage aus der Cloud',
                            100, 100
                        ); ?>
                    </p>
                    <h3>DSGVO-konform, bis ins Detail</h3>
                    <p class="bigtext">Kümmern Sie sich um Ihr Business, wir kümmern uns um den Rest. Auch den Datenschutz, und zwar in allen Belangen.</p>

                    <br />

                    <div class="carddeck carddeck--right carddeck--on-black">
                        <div class="carddeck__card">
                            <p class="bigtext">
                                <?= pictureTag(
                                    '/assets/images/icons_svg/vpn-icon.svg',
                                    'VPN Cloud Telefonanlage',
                                    50, 50, [
                                        'style' => 'vertical-align:middle'
                                    ]
                                ); ?> VPN
                            </p>
                            <p class="subtext">Direkte, vollständige Verschlüsselung der Datenverbindung zwischen Endgerät und Server.</p>
                        </div>
                        <div class="carddeck__card">
                            <p class="bigtext">
                                <?= pictureTag(
                                    '/assets/images/icons_svg/sip-icon.svg',
                                    'SIP Cloud Telefonanlage',
                                    50, 50, [
                                        'style' => 'vertical-align:middle'
                                    ]
                                ); ?> SIP
                            </p>
                            <p class="subtext">Sichere Übertragung Ihrer Gespräche mit SIP-Transport.</p>
                        </div>
                        <div class="carddeck__card">
                            <p class="bigtext">
                                <?= pictureTag(
                                    '/assets/images/icons_svg/srtp-icon.svg',
                                    'SRTP Cloud Telefonanlage',
                                    50, 50, [
                                        'style' => 'vertical-align:middle'
                                    ]
                                ); ?> SRTP
                            </p>
                            <p class="subtext">Supersichere End-to-End Verschlüsselung aller Ihrer gesprochenen Daten.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tablist tablist--on-black mobile-hidden">
            <div class="tablist__links">
                <div class="tablist__link" data-tab="1">
                    <strong>
                        Private Cloud
                        <span class="subtext">Ihre Cloud, auf unserem High-Security Server</span>
                    </strong>
                </div>
                <div class="tablist__link" data-tab="2">
                    <strong>
                        Interner Datenschutz
                        <span class="subtext">Pseudo-Anonymisierung als Zusatzoption</span>
                    </strong>
                </div>
            </div>

            <div class="tablist__content" data-tab="1">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/illus/private-cloud-illustration.svg',
                            'Private Cloud für Telefonanlage mit Datenschutz',
                            568, 532
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                        <h6>Mehr Kontrolle</h6>
                        <h3 style="margin-top:0">Private Cloud</h3>

                        <p class="bigtext">Alle größeren Projekte legen wir auf eine eigene Serverpartition. Damit haben Sie z.B. einen eigenen VoIP-Server und die volle Kontrolle, mit individuellen Wünschen und nahezu unbegrenztem Wachstum.</p>
                    </div>
                </div>
            </div>

            <div class="tablist__content" data-tab="2">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/illus/internal-dataprotection-illustration.svg',
                            'Interner Datenschutz und Datensicherheit für Ihre Cloud Telefonanlage',
                            570, 583
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--6-xs co-grid__col--vcentered">
                        <h6>Mehr Schutz</h6>
                        <h3 style="margin-top:0">Interner Datenschutz</h3>

                        <p class="bigtext">Personenbezogene Daten werden ausschließlich dort ausgewertet, wo sie wirklich essentiell sind. Unsere Zusatzoptionen der Pseudo-Anonymisierung für den internen Datenschutz machen jeden Personalrat glücklich.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Contents -->
        <div class="content-box content-box--white-on-black desktop-hidden">
            <p class="centered">
                <?= pictureTag(
                    '/assets/images/icons_svg/dsvgo-germany-icon-group.svg',
                    'Deutscher Datenschutz DSGVO für Ihre Cloud Telefonanlage und Businesstelefonie',
                    154, 77
                ); ?>
            </p>
            <h3 class="centered">DSGVO-konform, <br />bis ins Detail</h3>
        </div>

        <div class="content-box content-box--white desktop-hidden">
            <h6>Mehr Kontrolle</h6>
            <h4 style="margin-top:0">Private Cloud</h4>
            <?= pictureTag(
                '/assets/images/illus/private-cloud-mobile-illustration.svg',
                'Private Cloud für Sicherheit Ihrer Cloud Telefonanlage',
                325, 227
            ); ?>
        </div>

        <div class="content-box content-box--white desktop-hidden">
            <h6>Mehr Schutz</h6>
            <h4 style="margin-top:0">Interner Datenschutz</h4>
            <?= pictureTag(
                '/assets/images/illus/internal-dataprotection-mobile-illustration.svg',
                'Interne Datensicherheit und Datenschutz für sichere Cloud Telefonanlage',
                325, 215
            ); ?>
        </div>
    </div>
</div>

<div class="section section--black-grey section--wave-animation">
    <div class="section__content section__content--wide">
        <div class="co-grid">
            <div class="co-grid__col co-grid__col--12-xs co-grid__col--7-md">
                <div class="co-grid">
                    <div class="co-grid__col co-grid__col--vcentered">
                        <?= pictureTag(
                            '/assets/images/icons_svg/first-call-white.svg',
                            'Erstgespräch mit CallOne',
                            70, 70
                        ); ?>
                    </div>
                    <div class="co-grid__col co-grid__col--fill">
                        <h3>
                            Konsequenter Datenschutz lohnt sich <br />
                            allein schon für Ihre Zeit und Nerven. <br />
                            Auf ins unverbindliche Erstgespräch!
                        </h3>
                    </div>
                </div>
                <p class="mobile-centered">
                    <a href="#" class="btn btn--primary mobile-hidden" data-openmodal="contact-sales">Erstgespräch buchen</a>
                    <a href="#" class="btn btn--primary btn--full-width desktop-hidden" data-openmodal="contact-sales">Erstgespräch buchen</a>
                </p>
            </div>
        </div>
    </div>
</div>