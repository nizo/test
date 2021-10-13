<style>
.icons-wrapper {
    background-color: cadetblue;
}
.icons__icon {
    display: inline-block;
    padding: 5px;
}
</style>

<div class="icons-wrapper">
    <?php
    $iconsFolder = scandir($_SERVER['DOCUMENT_ROOT'].'/assets/images/icons_svg');
    foreach ($iconsFolder as $key => $value) {
        echo "<div class='icons__icon'><img src='/assets/images/icons_svg/".$value."' alt='' width='48' /></div>";
    }
    ?>
</div>