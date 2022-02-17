<?php
// Root folders
$folder_images = 'assets/images/';
$folder_videos = 'assets/videos/';

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
$allowed_extensions = ['jpg', 'svg', 'png', 'jpeg', 'gif', 'mp4', 'webm'];
$video_extensions = ['webm', 'mp4'];

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
    .assets {
        --size: 100px;

        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        height: 100vh;
        background-color: #fcfcfc;
    }

    .assets--dark .assets__theme-toggle:after {
        content: ' ausschalten';
    }
    .assets--dark .asset {
        background-color: #000;
        border-color: #333;
    }
    .assets--dark {
        background-color: #222;
    }

    .assets__left {
        overflow-y: auto;
        flex: 0 0 300px;
        background-color: #edf2e2;
        padding: 1em;
    }

    .assets__left ul {
        list-style: none;
    }

    .assets__left ul li + li {
        border-top: 2px solid rgba(0, 0, 0, 0.1);
    }

    .assets__left ul li a {
        display: block;
        padding: .5em 0;
        color: #000;
    }

    .assets__left, .assets__right {
        --scrollbarBG: transparent;
        --thumbBG: #ccc;
        scrollbar-width: thin;
        scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }
    .assets__left::-webkit-scrollbar, .assets__right::-webkit-scrollbar {
        width: 6px;
    }
    .assets__left::-webkit-scrollbar-track, .assets__right::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
    }
    .assets__left::-webkit-scrollbar-thumb, .assets__right::-webkit-scrollbar-thumb {
        background-color: var(--thumbBG) ;
        border-radius: 6px;
        border: 3px solid var(--scrollbarBG);
    }

    .assets__size {
        font-weight: bold;
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 100px;
        padding: .5em;
        margin-bottom: 1em;
    }

    .assets__size input {
        flex: 1;
        width: 100%;
        margin-left: 1em;
    }

    .assets__theme-toggle {
        cursor: pointer;
        background-color: #fff;
        border-radius: 100px;
        padding: .5em;
        margin-bottom: 1em;
        font-weight: bold;
    }
    .assets__theme-toggle:after {
        content: ' einschalten';
    }

    .assets__right {
        flex: 1;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        overflow-y: auto;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 1em;
        align-self: flex-start;
        max-height: 100vh;
    }

    .asset {
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
    .asset::before, .asset::after {
        position: absolute;
        line-height: 1;
        padding: .25em;
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;
        font-size: 12px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 100%;
    }
    .asset[data-size]::before {
        content: attr(data-size);
        top: 0;
        right: 0;
    }
    .asset::after {
        content: attr(title);
        bottom: 0;
        left: 0;
        width: 100%;
    }
    .asset img {
        height: 100%;
    }
    .asset video {
        height: 100%;
    }
    .asset__play {
        padding: 0 1em;
    }
    .asset__play::before {
        content: "";
        display: block;
        border-left: calc(var(--size) / 4) solid #86ed18;
        border-top: calc(var(--size) / 4) solid transparent;
        border-bottom: calc(var(--size) / 4) solid transparent;
    }
</style>

<div class="assets">
    <div class="assets__left">
        <div class="assets__size">
            <label for="size">Vorschaugröße</label>
            <input type="range" name="size" id="size" value="100" min="50" max="300" />
        </div>

        <div class="assets__theme-toggle">
            Dunkelmodus
        </div>

        <ul>
            <?php
            // List available directories
            foreach ($directories as $key => $value) {
                echo '<li><a href="/tools/assets?id='.$key.'">'.$value.'</a></li>';
            }
            ?>
            <li><a href="/tools/assets?id=videos">Videos</a></li>
        </ul>
    </div>

    <div class="assets__right">
        <?php
        // Check if a specific directory ID is requested and adjust $directories variable accordingly
        $requested_id = isset($_GET['id']) ? $_GET['id'] : null;
        $show_videos = false;
        
        // Prepopulate files with all images/videos
        $files = [];

        if (array_key_exists($requested_id, $directories)) {
            // Overwrite files variable with requested image subfolder
            $files = get_files_recursively($folder_images.$requested_id);
        } else if ($requested_id == 'videos') {
            // Overwrite files variable with video folder
            $files = get_files_recursively($folder_videos);
        }

        foreach ($files as $file) {
            $pathinfo = pathinfo($file);
            $file_name = $pathinfo['basename'];
            $file_extension = $pathinfo['extension'];
            $size = getimagesize($file);

            // Skip if not a file or not an allowed file extension
            if (is_dir($file) || !in_array($file_extension, $allowed_extensions))
                continue;

            echo '<a href="/'.$file.'" class="asset" target="_blank" title="'.$file_name.'"'.($size ? ' data-size="'.$size[0].'×'.$size[1].'"' : '').'>';
            if (in_array($file_extension, $video_extensions)) {
                echo '<span class="asset__play"></span>';
            } else {
                echo '<img src="/'.$file.'" alt="" />';
            }
            echo '</a>';
        }
        ?>
    </div>
</div>

<script>
    // Change image preview size when slider is moved
    let size_slider = document.querySelector('input#size');
    let assets = document.querySelector('.assets');
    size_slider.addEventListener('input', e => {
        let value = e.currentTarget.value;
        assets.style.setProperty('--size', value + 'px');
    });

    // Toggle theme
    let theme_button = document.querySelector('.assets__theme-toggle');
    theme_button.addEventListener('click', e => {
        assets.classList.toggle('assets--dark');
    });
</script>