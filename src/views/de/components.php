<div class="components">

    <!-- Buttons -->
    <div class="components__item">
        <div class="components__docs">
            <h1>Buttons</h1>
            <p>We have multiple types of buttons and some modifiers that can change the overall behaviour of buttons.</p>
            <p><strong>Types:</strong></p>
            <ul>
                <li>Primary</li>
                <li>Secondary</li>
            </ul>
            <p><strong>Modifiers:</strong></p>
            <ul>
                <li>Centered</li>
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
            <p>Modals can be open via click on any kind of element. The clickable element has to have the data attribute "data-callonemodal" and its content has to be the name of the modal located in "/partials/modals/".</p>
        </div>
        <div class="components__preview">
            <div>
                <a href="#" class="btn btn--primary" data-callonemodal="contact">Click me to open Modal</a>
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
                <li>floating-form__row</li>
                <li>floating-form__col</li>
                <li>floating-form__field</li>
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

</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/github-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<script>hljs.highlightAll();</script>

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
    components.forEach(c => {
        let docs = c.querySelector('.components__docs');
        let preview = c.querySelector('.components__preview div');
        let pre = document.createElement('pre');
        let code = document.createElement('code');
        code.classList.add('language-html');
        let html = fixIndentation(preview);
        code.innerHTML = escapeHtml(html.innerHTML);
        pre.appendChild(code);
        docs.appendChild(pre);
    });
</script>