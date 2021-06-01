<div class="contactpage">
    <div class="contactpage__header">
        <h1>Kontaktieren Sie uns</h1>
        <h2>Setzen Sie sich mit uns in Verbindung und lassen Sie uns wissen, wie wir helfen können. Wir melden uns so schnell wie möglich!</h2>
    </div>
    <div class="contactpage__content">
        <h1>Was ist Ihre Kontakt-Motivation?</h1>

		<input type="checkbox" class="contactoption__checkbox" id="contactoption1" checked="checked" />
        <div class="contactoption">
            <label for="contactoption1" class="contactoption__header">
                <div class="contactoption__icon">
                    <img src="/assets/images/icons_svg/support-request-white.svg" alt="" class="contactoption--closed" />
                    <img src="/assets/images/icons_svg/support-request-black.svg" alt="" class="contactoption--open" />
                </div>
                <div class="contactoption__text">
                    <strong>Support-Anfrage</strong><br />
                    Sie sind CallOne Kunde und benötigen Support
                </div>
                <div class="contactoption__action">
                    <img src="/assets/images/icons_svg/dropdown-white.svg" class="contactoption--closed" alt="" />
                    <img src="/assets/images/icons_svg/dropdown-up-grey.svg" class="contactoption--open" alt="" />
                </div>
			</label>
            <div class="contactoption__content">
                <form>
					<div>
						<input type="text" name="name" placeholder=" " />
						<label>Ihr Name</label>
					</div>
					<div>
						<input type="email" name="email" placeholder=" " />
						<label>Geschäftliche E-Mail</label>
					</div>
					<div>
						<div class="customSelect">
							<div class="group">
								<div data-name="topic" id="topic" class="select-selected"></div>
								<label for="topic">Thema Ihrer Kontaktanfrage</label>
							</div>
							<div class="select-items select-hide">
								<div class="item">Thema 1</div>
								<div class="item">Thema 2</div>
							</div>
						</div>
					</div>
					<div>
						<textarea name="message" rows="5" placeholder=" "></textarea>
						<label>Ihre Nachricht an uns</label>
					</div>
				</form>
            </div>
        </div>

        <a href="/testen" class="contactoption">
            <div class="contactoption__header">
                <div class="contactoption__icon">
                    <img src="/assets/images/icons_svg/contact-sales-white.svg" alt="" />
                </div>
                <div class="contactoption__text">
                    <strong>Vertrieb kontaktieren</strong><br />
                    Demo-Termin vereinbaren, Anforderungen besprechen
                </div>
                <div class="contactoption__action">
                    <img src="/assets/images/icons_svg/forward-arrow.svg" alt="" />
                </div>
            </div>
        </a>
    </div>
</div>