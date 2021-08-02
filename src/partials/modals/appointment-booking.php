<?php
session_start();
$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="appointment-booking" data-title="Termin buchen">
    <!-- Step: Termin wählen -->
    <div class="callone-modal__step callone-modal__step--no-padding" data-step-id="1" data-next-step="2" data-steptitle="Termin buchen" data-step-indicator="1/2">
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
                                            echo "<div class='calendar__time'>";
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
    </div>

    <script>
        // Todo
    </script>
</div>