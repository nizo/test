<?php
session_start();
$uniqueID = uniqid();
?>

<div class="callone-modal" id="<?= $uniqueID; ?>" data-modal="10s-application" data-title="10 Sekunden Bewerbung">
    <div class="callone-modal__step" data-step-id="1" data-next-step="2" data-step-indicator="1/3">
        Hello World
    </div>
</div>

<script>
    console.log('10 Sekunden Bewerbung Modal');
</script>