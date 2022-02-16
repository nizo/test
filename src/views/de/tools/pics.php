<?php
// Images root folder
$images_folder = 'assets/images/';

// Directories to scan (sub-directories included) + Readable name for display
$directories = [
    'backgrounds_png' => 'Backgrounds PNG',
    'backgrounds_svg' => 'Backgrounds SVG',
    'icons_png' => 'Icons PNG',
    'icons_svg' => 'Icons SVG',
    'illus' => 'Illustrationen',
    'illus' => 'Illustrationen',
    'og' => 'OpenGraph Backgrounds',
    'photos' => 'Fotos',
    'screens' => 'Screen Illustrationen',
    'softphone' => 'Softphone Page',
];

// Only these file extensionsa re going to be displayed
$allowed_extensions = ['jpg', 'svg', 'png', 'jpeg', 'gif'];

// Get files recursively from given path
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
        --size: 100px;

        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        height: 100vh;
    }

    .pics--dark .pics__theme-toggle:after {
        content: ' ausschalten';
    }
    .pics--dark .pic {
        background-color: #000;
        border-color: #333;
    }
    .pics--dark .pics__right {
        background-color: #222;
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

    .pics__theme-toggle {
        cursor: pointer;
        background-color: #fff;
        border-radius: 100px;
        padding: .5em;
        margin-bottom: 1em;
        font-weight: bold;
    }
    .pics__theme-toggle:after {
        content: ' einschalten';
    }

    .pics__right {
        flex: 1;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        overflow-y: auto;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 1em;
        background-color: #fcfcfc;
    }

    .pic {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
        height: calc(1em + var(--size));
        padding: .5em;
        border: 1px solid #eee;
        margin: .5em;
        background-color: #fff;
    }
    .pic img {
        height: 100%;
    }
</style>

<div class="pics">
    <div class="pics__left">
        <div class="pics__size">
            <label for="size">Vorschaugröße</label>
            <input type="range" name="size" id="size" value="100" min="50" max="300" />
        </div>

        <div class="pics__theme-toggle">
            Dunkelmodus
        </div>

        <ul>
            <li><a href="/pics">Alle Bilder anzeigen</a></li>
            <?php
            // List available directories
            foreach ($directories as $key => $value) {
                echo '<li><a href="/pics?id='.$key.'">'.$value.'</a></li>';
            }
            ?>
        </ul>
    </div>

    <div class="pics__right">
        <?php
        // Check if a specific directory ID is requested and adjust $directories variable accordingly
        $requested_id = $_GET['id'];
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
                echo '<a href="'.$file.'" class="pic" target="_blank" title="'.$file.'">';
                echo '  <img src="'.$file.'" alt="" />';
                echo '</a>';
            }
        }
        ?>
    </div>
</div>

<script>
    // Change image preview size when slider is moved
    let size_slider = document.querySelector('input#size');
    let pics = document.querySelector('.pics');
    size_slider.addEventListener('input', e => {
        let value = e.currentTarget.value;
        pics.style.setProperty('--size', value + 'px');
    });

    // Toggle theme
    let theme_button = document.querySelector('.pics__theme-toggle');
    theme_button.addEventListener('click', e => {
        pics.classList.toggle('pics--dark');
    });
</script>