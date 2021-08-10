<?php
session_start();
$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="appointment-booking" data-title="Termin buchen">
    <!-- Step: Termin wählen -->
    <div class="callone-modal__step callone-modal__step--no-padding" data-step-id="1" data-next-step="2" data-steptitle="Termin buchen" data-step-indicator="1/2" data-no-footer="true" data-canceltext="Abbrechen">
        <?php
        $weeks = [];
        $monday = strtotime(date('o-\WW'));
        $weeks[] = [
            $monday,
            strtotime('next tuesday', $monday),
            strtotime('next wednesday', $monday),
            strtotime('next thursday', $monday),
            strtotime('next friday', $monday)
        ];
        $nextMonday = strtotime('next monday');
        $weeks[] = [
            $nextMonday,
            strtotime('next tuesday', $nextMonday),
            strtotime('next wednesday', $nextMonday),
            strtotime('next thursday', $nextMonday),
            strtotime('next friday', $nextMonday)
        ]
        ?>

        <div class="calendar">
            <?php
            foreach ($weeks as $w) {
                ?>
                <div class="calendar__week">
                    <?php
                    foreach ($w as $d) {
                        $extraClass = "";
                        $today = strtotime("today"); // today
                        $past = false;
                        if ($d < $today) {
                            $extraClass = " calendar__day--past";
                            $past = true;
                        }
                        ?>
                        <div class="calendar__day<?= $extraClass; ?>">
                            <div class="calendar__day-header">
                                <h3>
                                    <?php
                                    $dayName = date("D", $d);
                                    switch (date("N", $d)) {
                                        case 1:
                                            $dayName = "Mo";
                                            break;
                                        case 2:
                                            $dayName = "Di";
                                            break;
                                        case 3:
                                            $dayName = "Mi";
                                            break;
                                        case 4:
                                            $dayName = "Do";
                                            break;
                                        case 5:
                                            $dayName = "Fr";
                                            break;
                                    }
                                    echo $dayName;
                                    ?>
                                    <br />
                                    <span><?= date("d", $d); ?></span>
                                </h3>
                                
                                <p>Ab 14:00 Uhr</p>
                            </div>
                            <div class="calendar__day-times">
                                <?php
                                if (!$past) {
                                    $isToday = date($d) == $today;
                                    for ($i = 14; $i <= 17; $i++) {
                                        if (!$isToday || ($isToday && date("H") < $i)) {
                                            $timestamp = $d + ($i * 3600);
                                            $date = date("d.m.Y", $d).", ".$i.":00 - ".($i + 1).":00";
                                            echo "<div class='calendar__time callone-modal__nextstep' data-date='".$timestamp."'>";
                                            echo $i.":00 - ".($i + 1).":00<br />";
                                            echo "<span>Buchen</span>";
                                            echo "</div>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="calendar__day-footer">
                                Bis 18:00 Uhr
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>

        <input type="hidden" value="" name="chosenAppointment" />
    </div>

    <div class="callone-modal__step" data-step-id="2" data-next-step="3" data-prev-step="1" data-step-indicator="2/2" data-canceltext="Abbrechen" data-next-button-text="Jetzt Zeitslot buchen" data-next-button-classes="btn--full-width,btn--arrow-right">
        <h2 class="centered contactperson">Wie können wir dich kontaktieren?</h2>

        <p class="centered">Lass uns wissen, wer du bist, damit wir den Termin auf deinen Namen buchen können.</p>

        <div class="alertbox alertbox--hint appointment-output">
            Ihr Termin
        </div>

        <form action="#" method="post" class="floating-form appointment-booking-form" data-step-callback="submitBooking">
            <div class="floating-form__error">
                <h2>Etwas ist schief gelaufen</h2>
                <p>Bitte versuchen Sie es erneut.</p>
            </div>

            <div class="floating-form__row">
                <div class="floating-form__col">
                    <div class="floating-form__field">
                        <input type="text" name="name" placeholder=" " required="required" />
                        <label>Ihr Name *</label>
                    </div>
                    <div class="floating-form__field">
                        <input type="text" name="phone" placeholder=" " required="required" />
                        <label>Telefonnummer *</label>
                    </div>
                    <div class="floating-form__field">
                        <input type="text" name="email" placeholder=" " required="required" />
                        <label>E-Mail *</label>
                    </div>
                </div>
                <div class="floating-form__col">
                    <div class="floating-form__privacy-toggle">
                        <input type="checkbox" id="privacy-booking" required="required" />
                        <label for="privacy-booking">
                        Ich habe die <a href="/datenschutz" target="_blank">Datenschutzbestimmungen</a> gelesen.
                        </label>
                    </div>
                </div>
            </div>

            <div class="floating-form__loader"></div>

            <input type="submit" id="submit-booking" hidden />
        </form>
    </div>

    <div class="callone-modal__step" data-step-id="3" data-step-title="Bestätigung" data-no-back="true">
        <h2 class="centered">Super, wir sind kontaktiert!</h2>
        <div class="alertbox alertbox--hint appointment-output">
            Ihr Termin
        </div>
        <p class="centered">Wir haben deine Nachricht erhalten und werden uns in dem Zeitraum des ausgewählten Termins bei dir melden.</p>
        <p class="centered">
            <img src="/assets/images/illus/customer-service-hero-illustration.svg" alt="" style="max-width: 50%;" />
        </p>
    </div>

    <script>
        let times = document.querySelectorAll('.calendar__time');
        let chosenAppointment = document.querySelector('[name="chosenAppointment"]');
        let appointmentOutput = document.querySelectorAll('.appointment-output');
        chosenAppointment.value = '';
        times.forEach(t => {
            t.classList.remove('calendar__time--selected');
            t.addEventListener('click', e => {
                // Deselect currently selected time
                times.forEach(x => {
                    if (x != t)
                        x.classList.remove('calendar__time--selected')
                });
                t.classList.add('calendar__time--selected');

                // Add chosen day/time to input hidden field
                if (t.classList.contains('calendar__time--selected')) {
                    chosenAppointment.value = e.currentTarget.dataset.date;
                } else {
                    chosenAppointment.value = '';
                }

                // Add appointment to output box on step 2 and confirmation
                if (chosenAppointment.value != '') {
                    let date = new Date(chosenAppointment.value * 1000);
                    appointmentOutput.forEach(o => {
                        let weekdays = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
                        let dayName = weekdays[date.getDay()];
                        let day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate();
                        let month = date.getMonth() < 10 ? '0' + date.getMonth() : date.getMonth();
                        let hours = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
                        let minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
                        o.innerHTML = dayName + ', ' + day + '.' + month + '.' + date.getFullYear() + '<br /><small>' + hours + ':' + minutes + ' - ' + parseInt(hours + 1) + ':' + minutes + '</small>';
                    });
                }
            });
        });

        const thisModal = document.getElementById('<?= $uniqueID; ?>');
        let modalData = {};
        if (thisModal.dataset.modaldata)
            modalData = JSON.parse(atob(thisModal.dataset.modaldata));

        // Set Contact Person name
        if (modalData.contactperson)
            document.querySelector('.contactperson').innerHTML = "Wie kann <span class='person-name'>" + modalData.contactperson + "</span> dich kontaktieren?";
            document.querySelector('.callone-modal__steptitle').textContent = 'Kennenlerntermin mit ' + modalData.contactperson + ' buchen';
    
        window.submitBooking = function(e, cb) {
            console.log("Submit Booking");
            const form = document.querySelector('.appointment-booking-form');
            const formLoader = form.querySelector('.floating-form__loader');
            const formSubmit = form.querySelector('input[type="submit"]');
            const formSubmitLabel = thisModal.querySelector('label[for="submit-booking"]');
            const formError = form.querySelector('.floating-form__error');
            const formErrorHeadline = formError.querySelector('h2');
            const formErrorText = formError.querySelector('p');
            formError.classList.remove('floating-form__error--active') // Display error message
    
            formLoader.classList.add('floating-form__loader--active');
            formSubmit.disabled = true;
            formSubmitLabel.classList.add('floating-form__label--disabled');
    
            // Prepare form data
            let path = JSON.parse('<?= json_encode($_SESSION['userRoute']) ?>');
            var formFields = new FormData();
            formFields.set('type', 8);
            for (var i = 0; i < path.length; i++) {
                formFields.append('path[]', path[i]);
            }

            let appointmentStart = chosenAppointment.value;
            let appointmentEnd = appointmentStart + 3600;

            formFields.set('slot_timestamp_start', appointmentStart);
            formFields.set('slot_timestamp_end', appointmentEnd);
            formFields.set('employee_name', modalData.contactperson);
            formFields.set('candidate_name', form.querySelector('input[name="name"]').value);
            formFields.set('candidate_phonenumber', form.querySelector('input[name="phone"]').value);
            formFields.set('candidate_email', form.querySelector('input[name="email"]').value);
    
            // AJAX Request
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState != XMLHttpRequest.DONE)
                    return;
                formLoader.classList.remove('floating-form__loader--active');
                formSubmit.disabled = false;
                formSubmitLabel.classList.remove('floating-form__label--disabled');
                if (this.status == 200) {
                    // Backend sent response, evaluate
                    const response = JSON.parse(this.responseText);
                    if (response.success) {
                        // Success
                        cb();
                    } else {
                        console.error(response);
                        formErrorHeadline.textContent = 'Etwas ist schiefgelaufen...';
                        let missingInput = "";
                        switch (response.error) {
                            case "issue":
                                missingInput = "Bitte wählen Sie eine Herausforderung aus.";
                                break;
                            case "name":
                                missingInput = "Bitte geben Sie Ihren Namen ein.";
                                break;
                            case "position":
                                missingInput = "Bitte teilen Sie uns mit von welcher Abteilung Sie der Ansprechpartner sind.";
                                break;
                            case "company":
                                missingInput = "Bitte geben Sie Ihre Firma an.";
                                break;
                            case "phonenumber":
                                missingInput = "Bitte geben Sie eine Telefonnummer an.";
                                break;
                            case "email":
                                missingInput = "Bitte geben Sie eine E-Mail Adresse an.";
                                break;
                        }
                        formErrorText.textContent = 'Beim absenden des Formulars ist etwas schiefgelaufen, bitte versuchen Sie es erneut. ' + missingInput; // Change error message to display
                        formError.classList.add('floating-form__error--active') // Display error message
                    }
                } else {
                    // Backend not available
                    console.error('Backend not available.');
                    formErrorHeadline.textContent = 'Es tut uns leid...';
                    formErrorText.textContent = 'Der Server ist zurzeit leider nicht erreichbar. Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.'; // Change error message to display
                    formError.classList.add('floating-form__error--active') // Display error message
                }
            };
            xhttp.open('POST', 'https://connect.callone.io/backend/contact.php');
            xhttp.send(formFields);
        }
    </script>
</div>