<style>
.icons-wrapper {
    display: flex;
    flex-wrap: wrap;
    background-color: cadetblue;
}
.icons__icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60px;
    height: 60px;
    padding: 5px;
}
.icons__icon img {
    max-width: 100%;
    max-height: 100%;
}
</style>

<p>Click icon to copy name to clipboard.</p>

<div class="icons-wrapper">
    <?php
    $exlude_files = ['.', '..'];
    $folder = $_SERVER['DOCUMENT_ROOT'].'/assets/images/icons_svg';
    $icons = scandir($folder);
    foreach ($icons as $key => $value) {
        if (in_array($value, $exlude_files) || is_dir($folder.'/'.$value))
            continue;
        echo "<div class='icons__icon'><img src='/assets/images/icons_svg/".$value."' alt='".$value."' width='48' /></div>";
    }
    ?>
</div>

<script>
    let icons = document.querySelectorAll('.icons__icon');
    icons.forEach(icon => {
        icon.addEventListener('click', e => {
            let img = e.currentTarget.querySelector('img');
            let name = img.getAttribute('alt');
            var data = [new ClipboardItem({ "text/plain": new Blob([name], { type: "text/plain" }) })];
            navigator.clipboard.write(data);
        });
    });
</script>