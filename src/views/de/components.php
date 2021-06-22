<div class="components">
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

    <!-- Modal via Click -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Modal via Click</h1>
            <p>Modals can be open via click on any kind of element. The clickable element has to have the data attribute <code>data-callonemodal</code> and its content has to be the name of the modal located in <code>/partials/modals/</code>.</p>
            <ul>
                <li><code>data-model</code>: Identifier Name</li>
                <li><code>data-canceltext</code>: Text that is displayed as the close button (default: Schließen)</li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="btn btn--primary" data-openmodal="contact">Click me to open Modal</a>

                <div class="callone-modal" data-modal="contact" data-canceltext="Exit" data-title="Hello World" data-subtitle="Lorem Ipsum">
                    <div class="callone-modal__step" data-steptitle="Step 1">
                        Step 1
                        <a href="#" class="btn btn--primary callone-modal__nextstep">Weiter</a>
                    </div>
                    <div class="callone-modal__step" data-steptitle="Step 2">
                        Step 2
                    </div>
                </div>
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
                    <button class="floating-form__submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Custom Select / Dropdown -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Custom Select / Dropdown</h1>
            <p>Custom selects are simply normal html select elements with the data attribute "data-calloneSelect". The first option has to have an empty value and is used as the label that is displayed when nothing is selected.</p>
            <p><strong>Selector:</strong></p>
            <ul>
                <li><code>data-calloneSelect</code></li>
            </ul>
        </div>
        <div class="components__preview">
            <div>
                <select name="topic" data-calloneselect>
                    <option value="">This is the label</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
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