<?php
$colors = [[
    'name' => 'CallOne Grün',
    'code' => '#86ED18',
    'transparent' => false
], [
    'name' => 'CallOne Grün 2',
    'code' => '#AAEA39',
    'transparent' => false
], [
    'name' => 'Hellgrün',
    'code' => '#EDF2E2',
    'transparent' => false
], [
    'name' => 'Dunkelgrün',
    'code' => '#4CAF50',
    'transparent' => false
], [
    'name' => 'Rot',
    'code' => '#FF7762',
    'transparent' => false
], [
    'name' => 'Blau',
    'code' => '#6682E8',
    'transparent' => false
], [
    'name' => 'Hellgrau',
    'code' => '#333434',
    'transparent' => false
], [
    'name' => 'Dunkelgrau',
    'code' => '#333232',
    'transparent' => false
], [
    'name' => 'Grau 1',
    'code' => '#949FAF',
    'transparent' => false
], [
    'name' => 'Grau 1',
    'code' => '#F9F9F9',
    'transparent' => false
], [
    'name' => 'Grau (trans)',
    'code' => 'rgba(0,0,0,.05)',
    'transparent' => true
]];
?>

<div class="section">
    <div class="section__content section__content--narrow">
        <div class="tool-colors">
            <?php
            foreach ($colors as $color) {
                echo '<div class="tool-colors__color'.($color['transparent'] ? ' tool-colors__color--transparent' : '').'" style="--color:'.$color['code'].'">';
                echo '<span>'.$color['name'].'<br />';
                echo $color['code'].'</span>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>