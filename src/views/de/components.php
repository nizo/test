<div class="components">
    <h1>CallOne Components</h1>

    <!-- Table of Contents -->
    <div class="components__toc">
        <div class="components__toc-button">
            <span></span>
        </div>
    </div>

    <!-- Buttons -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Buttons</h1>
            <p>We have multiple types of buttons and some modifiers that can change the overall behaviour of buttons.</p>
            <p><strong>Types:</strong></p>
            <ul>
                <li>Primary <code>.btn--primary</code></li>
                <li>Secondary <code>.btn--secondary</code></li>
            </ul>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li>Centered <code>.btn--centered</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="btn btn--primary">Button Primary</a>
                <a href="#" class="btn btn--secondary">Button Secondary</a>
                <a href="#" class="btn btn--primary btn--centered">Centered</a>
            </div>
        </div>
    </div>

    <!-- Card Link -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Card Link</h1>
            <p>A link styled as a card with icons, title and subtitle.</p>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="card-link">
                    <span class="card-link__icons">
                        <img src="/assets/images/logo/logo-icon-green.svg" alt="" />
                        <img src="/assets/images/icons_svg/recommendations.svg" alt="" />
                    </span>
                    <h2 class="card-link__title">Anbieter für Flatrate-Businesstelefonie</h2>
                    <span class="card-link__subtitle">Unsere Empfehlungsliste</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Custom Select / Dropdown -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Custom Select / Dropdown</h1>
            <p>Custom selects are simply normal html select elements with the data attribute "data-callone-select". The first option has to have an empty value and is used as the label that is displayed when nothing is selected.</p>
            <p><strong>Selector:</strong></p>
            <ul>
                <li><code>data-callone-select</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <select name="topic" data-callone-select>
                    <option value="">This is the label</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2 with super looooong label, that will not fit within the field</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Floating Form -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Floating Form</h1>
            <p>Floating forms are form elements that contain labels that "float" when the corresponding input is focused/filled.</p>
            <p><strong>Elements:</strong></p>
            <ul>
                <li>Row <code>.floating-form__row</code></li>
                <li>Column <code>.floating-form__col</code></li>
                <li>Form Field <code>.floating-form__field</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <form action="#" method="post" class="floating-form">
                    <div class="floating-form__row">
                        <div class="floating-form__col">
                            <div class="floating-form__field">
                                <input type="text" name="name" placeholder=" " required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="floating-form__col">
                            <div class="floating-form__field">
                                <input type="text" name="name" placeholder=" " required />
                                <label>E-Mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="floating-form__select">
                        <select name="topic" data-callone-select>
                            <option value="">Choose topic</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                        </select>
                    </div>
                    <div class="floating-form__field">
                        <textarea name="message" rows="5" placeholder=" "></textarea>
                        <label>Message</label>
                    </div>
                    <button class="floating-form__submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Infinity Scroller -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Infinity Scroller</h1>
            <p>The infinity scroller is a special element that scrolls its contents, as the name suggests, infinitely. Both directions are possible. Default direction is scrolling upwards, it can be reversed by setting the data attribute "data-reversed". To make sure the scroller can be displayed it has to get a size by setting the data attribute "data-height".</p>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li>Set height <code>data-height</code></li>
                <li>Reverse direction <code>data-reversed</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <div class="scroller fadeOut-lightgrey-2" data-height="680">
                    <div class="scroller-belt">
                        <div class="scroller-content">
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-phone">Anruf</div>
                                </div>
                                <p>Text zu Anrufen (TTS)</p>
                            </div>
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-phone">Anruf</div>
                                </div>
                                <p>Spracherkennung (Call Transcription)</p>
                            </div>
                            <div class="feature-box">
                                <div class="feature-box__icons">
                                    <div class="icon-callone">Feature</div>
                                    <div class="icon-sms">SMS &amp; Chat</div>
                                </div>
                                <p>SMS Notification</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal via Click -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Modal via Click</h1>
            <p>A modal can be created by adding <code>data-openmodal</code> to a button. Also create a <code>.callone-modal</code> element with <code>data-modal</code> having the same value to have them connected. There are other options below to make it a single modal or with steps.</p>
            <p>If no modal is specified in HTML, a modal file has to be placed inside <code>/partials/modals/[NAME].html</code>. [NAME] has to be the same identifier as placed in <code>data-openmodal</code> of the button.</p>
            <p><strong>Modal Button:</strong></p>
            <ul>
                <li><code>data-modal="name"</code>: the identifier of the modal</li>
            </ul>
            <p><strong>Modal:</strong></p>
            <ul>
                <li><code>data-model="name"</code>: Identifier Name</li>
                <li><code>data-canceltext="Schließen"</code>: Text that is displayed as the close button (default: Schließen)</li>
                <li><code>data-title="title"</code>: The title that will be displayed for modals without steps</li>
                <li><code>data-subtitle="title"</code>: The subtitle that will be displayed for modals without steps</li>
            </ul>
            <p><strong>Modal Steps:</strong></p>
            <ul>
                <li><code>.callone-modal__step</code>: Wrapper of each step inside the <code>.callone-modal</code> block</li>
                <li><code>data-step-id="1"</code>: Required, use incrementing numbers starting from 1</li>
                <li><code>data-step-indicator="1/5"</code>: Used as the title if no <code>data-steptitle</code> is provided, also used to calculate and display the step indicators (dots).</li>
                <li><code>data-steptitle="title"</code>: Title displayed for this specific step, if not provided the step number is shown instead</li>
                <li><code>.callone-modal__nextstep</code>: Class that has to be added to a button inside a step to link to the next step, also needs <code>data-next-step="2"</code> to work properly. The number has to be the step ID.</li>
                <li><code>data-prev-step="1"</code>: Specifies the previous step to display when back button is clicked</li>
            </ul>
            <p><strong>Forms in Modals:</strong></p>
            <ul>
                <li><code>data-step-callback="functionName"</code>: Callback Function to call when form is submitted</li>
                <li><code>data-next-step="1"</code>: Next step ID when form is successfully submittedv</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="btn btn--primary" data-openmodal="contact-sales">Contact Sales Modal</a>

                <a href="#" class="btn btn--primary" data-openmodal="modal-with-steps">Rmeote modal width steps</a>
                
                <a href="#" class="btn btn--primary" data-openmodal="steps">Modal with steps</a>
                
                <div class="callone-modal" data-modal="steps" data-canceltext="Exit" data-title="Hello World" data-subtitle="Lorem Ipsum">
                    <div class="callone-modal__step" data-step-id="1" data-steptitle="Step 1" data-step-indicator="1/3">
                        Step 1
                        <a href="#" class="btn btn--primary callone-modal__nextstep" data-next-step="2">Weiter</a>
                    </div>
                    <div class="callone-modal__step" data-step-id="2" data-canceltext="Abbrechen" data-steptitle="Step 2" data-step-indicator="2/3" data-prev-step="1">
                        Step 2
                        <a href="#" class="btn btn--primary callone-modal__nextstep" data-next-step="3">Step 3</a>
                        <a href="#" class="btn btn--primary callone-modal__nextstep" data-next-step="4">Step 4</a>
                    </div>
                    <div class="callone-modal__step" data-step-id="3" data-step-indicator="3/3" data-prev-step="2">
                        Step 3
                    </div>
                    <div class="callone-modal__step" data-step-id="4" data-step-indicator="3/3" data-prev-step="2">
                        Step 4
                    </div>
                </div>
                
                <a href="#" class="btn btn--primary" data-openmodal="nosteps">Modal without steps</a>
                
                <div class="callone-modal" data-modal="nosteps" datacanceltext="Zu machen" data-title="Headline" data-subtitle="Subheadline">
                    Hello World
                </div>
            </div>
        </div>
    </div>

    <!-- Range Slider -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Range Slider</h1>
            <p>The range slider is a simple input range element with some additional attributes. The slider is then initialized in javascript.</p>
            <p><strong>Attributes:</strong></p>
            <ul>
                <li><code>data-callone-range</code>: Used to target element with javascript</li>
                <li><code>data-output="#selector"</code>: Selector of input type text element to display current value</li>
                <li><code>data-width="480"</code>: Desired initial width</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <input type="range" min="0" max="100" step="1" value="25" data-callone-range data-output="#outputId" data-width="480" />
                <input type="text" id="outputId" />
            </div>
        </div>
    </div>

    <!-- Step Slider -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Step Slider</h1>
            <p>Slider for multiple steps.</p>
        </div>
        <div class="components__preview">
            <div>
                <div class="step-slider">
                    <div class="step-slider__steps">
                        <div class="step-slider__step step-slider__step--active">
                            <h2>Besprechung Ihrer Anforderungen</h2>
                            <p>Lassen Sie uns kurz über Ihre Anforderungen sprechen. Wir nehmen uns Zeit und beraten Sie ehrlich.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Demo Zugang</h2>
                            <p>Sie bekommen einen komplett funktionalen Demo-Zugang und wir zeigen Ihnen, was die Telefonanlage kann.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Analyse</h2>
                            <p>Wir machen kostenfrei eine Verkehrsmessung, analysieren Ihr System, Ihre Strukturen, Ihren Traffic.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Live-Session &amp; Lösungen</h2>
                            <p>Aus den Ergebnissen setzen wir Ihre Telefonanlage so auf, als wären Sie bereits Kunde bei uns. Das ist unser Investment in Sie.</p>
                        </div>
                        <div class="step-slider__step">
                            <h2>Testen &amp; Finetuning</h2>
                            <p>Sie testen und prüfen ohne Risiko oder Kosten, wir stehen Ihnen mit Antworten zur Seite. Dann entscheiden Sie, ob wir Sie überzeugen konnten.</p>
                        </div>
                    </div>
                    <div class="step-slider__slider">
                        <div class="step-slider__range">
                            <div class="step-slider__handle"></div>
                        </div>
                    </div>
                    <div class="step-slider__hint">
                        <div class="step-slider__hint-left">
                            Erste Kontaktaufnahme
                        </div>
                        <div class="step-slider__hint-center">
                            <strong>Hinweis:</strong> Ziehen Sie den Schieberegler über den Zeitstrahl um alle Schritte zu sehen.
                        </div>
                        <div class="step-slider__hint-right">
                            Ihre Entscheidung
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/github-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<!-- <script>hljs.highlightAll();</script> -->

<script>    
    function escapeHtml(unsafe) {
        return unsafe
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    function fixIndentation(html) {
        var lines = html.innerHTML.split('\n');

        if (lines[0] === '')
            lines.shift();

        var matches;
        var indentation = (matches = /^[\s\t]+/.exec(lines[0])) !== null ? matches[0] : null;
        if (!!indentation) {
            lines = lines.map(function(line) {
                line = line.replace(indentation, '')
                return line.replace(/\t/g, '    ')
            });

            html.innerHTML = lines.join('\n').trim();
        }

        return html;
    }
    
    let components = document.querySelectorAll('.components__item');
    let toc = document.querySelector('.components__toc');
    let tocButton = document.querySelector('.components__toc-button');
    let tocList = document.createElement('ul');
    components.forEach(c => {
        let docs = c.querySelector('.components__docs');
        let preview = c.querySelector('.components__preview div');
        let pre = document.createElement('pre');
        let code = document.createElement('code');

        // Create demo code snippet
        code.classList.add('language-html');
        let html = fixIndentation(preview);
        code.innerHTML = escapeHtml(html.innerHTML);
        pre.appendChild(code);

        // Add code button
        let codeButton = document.createElement('div');
        codeButton.classList.add('components__code-button');
        codeButton.classList.add('btn');
        codeButton.classList.add('btn--primary');
        codeButton.textContent = 'Show Code Snippet';
        codeButton.addEventListener('click', e => {
            let codePopup = document.createElement('div');
            codePopup.classList.add('components__code-popup');
            codePopup.appendChild(pre);
            let codePopupClose = document.createElement('div');
            codePopupClose.classList.add('components__code-button--close');
            codePopup.appendChild(codePopupClose);
            document.body.appendChild(codePopup);
            hljs.highlightAll();
            codePopupClose.addEventListener('click', e => {
                codePopup.remove();
            });
            codePopup.addEventListener('click', e => {
                if (e.target == codePopup) {
                    codePopup.remove();
                }
            });
        });
        docs.appendChild(codeButton);

        // Fill TOC
        let tocListItem = document.createElement('li');
        let headline = docs.querySelector('h1');
        let link = encodeURI(headline.textContent);
        tocListItem.textContent = headline.textContent;
        tocListItem.dataset.link = link;
        c.dataset.link = link;
        tocList.appendChild(tocListItem);
        tocListItem.addEventListener('click', e => {
            let scrollPos = document.querySelector('.components__item[data-link="'+e.target.dataset.link+'"]').offsetTop;
            window.scroll({
                top: scrollPos,
                behavior: 'smooth'
            });
        });
    });
    toc.appendChild(tocList);
    tocButton.addEventListener('click', e => {
        toc.classList.toggle('components__toc--open');
    });
</script>