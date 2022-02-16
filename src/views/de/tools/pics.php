<?php
$images_folder = 'assets/images/';
$directories = [
    'backgrounds_png' => 'Backgrounds PNG',
    'backgrounds_svg' => 'Backgrounds SVG',
    'illus' => 'Illustrationen',
    'og' => 'OpenGraph Backgrounds',
    'photos' => 'Fotos',
    'screens' => 'Screen Illustrationen',
    'softphone' => 'Softphone Page',
];
$allowed_extensions = ['jpg', 'svg', 'png', 'jpeg'];

function get_files_recursively($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = $dir.DIRECTORY_SEPARATOR.$value;
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != '.' && $value != '..') {
            get_files_recursively($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}
?>

<style>
    .pics {
        --size: 10%;

        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        height: 100vh;
    }

    .pics__left {
        flex: 0 0 300px;
        background-color: #edf2e2;
        padding: 1em;
    }

    .pics__left ul {
        list-style: none;
    }

    .pics__left ul li + li {
        border-top: 2px solid rgba(0, 0, 0, 0.1);
    }

    .pics__left ul li a {
        display: block;
        padding: .5em 0;
        color: #000;
    }

    .pics__size {
        font-weight: bold;
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 100px;
        padding: .5em;
        margin-bottom: 1em;
    }

    .pics__size input {
        flex: 1;
        margin-left: 1em;
    }

    .pics__right {
        flex: 1;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        overflow-y: auto;
        justify-content: space-evenly;
        align-items: flex-start;
        padding: 1em;
        background-color: #fcfcfc;
    }

    .pic {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 0 0 calc(var(--size) - 1em);
        aspect-ratio: 1/1;
        padding: .5em;
        border: 1px solid #eee;
        margin: .5em;
        background-color: #fff;
    }
    .pic img {
        max-width: 100%;
        max-height: 100%;
    }
</style>

<div class="pics">
    <div class="pics__left">
        <div class="pics__size">
            <label for="size">Vorschaugröße</label>
            <input type="range" name="size" id="size" value="10" min="5" max="50" />
        </div>

        <ul>
            <li><a href="/pics">Alle Bilder anzeigen</a></li>
            <?php
            foreach ($directories as $key => $value) {
                echo '<li><a href="/pics?id='.$key.'">'.$value.'</a></li>';
            }
            ?>
        </ul>
    </div>

    <div class="pics__right">
        <?php
        $requested_id = htmlspecialchars($_GET['id']);
        if (array_key_exists($requested_id, $directories)) {
            $directories = [
                $requested_id => $directories[$requested_id]
            ];
        }

        foreach ($directories as $key => $value) {
            $files = get_files_recursively($images_folder.$key);
            foreach ($files as $file) {
                $pathinfo = pathinfo($file);
                if (is_dir($images_folder.$key.'/'.$file) || !in_array($pathinfo['extension'], $allowed_extensions))
                    continue;
                echo '<a href="'.$file.'" class="pic" download>';
                echo '  <img src="'.$file.'" alt="" title="'.$file.'" />';
                echo '</a>';
            }
        }
        ?>
    </div>
</div>

<script>
    let size_slider = document.querySelector('input#size');
    let pics = document.querySelector('.pics');
    size_slider.addEventListener('input', e => {
        let value = e.currentTarget.value;
        pics.style.setProperty('--size', value + '%');
    });
</script>