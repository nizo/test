<style>
    table {
        position: relative;
        min-width: 100%;
        font-size: 14px;
    }
    table thead th {
        position: sticky;
        top: 0;
    }
    table a {
        color: blue;
        white-space: nowrap;
    }
    table th, table td {
        vertical-align: top;
        padding: 10px;
    }
    th {
        background-color: #86ed18;
        color: #000;
    }
    table tr:nth-of-type(odd) td {
        background: #ccc;
    }
    table tr:nth-of-type(even) td {
        background: #eee;
    }
</style>

<?php
$routes_tmp = Router::get_sorted('uri', 'asc');
$routes = []; // Build new routes array for correct count
foreach ($routes_tmp as $route) {
    if ($route->sitemap_include)
        $routes[] = $route;
}
?>

<div class="section">
    <div class="section__content centered">
        <h1>Number of Routes: <?= count($routes) ?></h1>

        <div class="btn-set btn-set--centered">
            <a href="#" class="btn btn--border-black copy-routes">Copy All Routes</a>
            <a href="https://www.bulkseotools.com/bulk-w3c-validator.php" class="btn btn--border-black" target="_blank">Bluck W3C Check</a>
        </div>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>URI</th>
            <th>Title</th>
            <th>Meta-Title</th>
            <th>Meta-Description</th>
            <th>OpenGraph Title</th>
            <th>OpenGraph Image Text <a href="#" title="Zwei Unterstriche (__) erzwingen einen Umbruch">(?)</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $properties_to_display = [
            'uri',
            'title',
            'meta_title',
            'meta_description',
            'og_title',
            'og_image_text'
        ];
        foreach ($routes as $key => $route) {
            echo "<tr>";
            foreach ($route as $key => $value) {
                if (!in_array($key, $properties_to_display))
                    continue;
                
                echo "<td>";
                echo $key === 'uri' ? '<a href="'.DOMAIN.$value.'" target="_blank" class="route">'.$value.'</a>' : $value;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<script>
    let copyButton = document.querySelector('.copy-routes');
    let routes = Array.from(document.querySelectorAll('.route'));
    let routesList = '';
    routes.forEach(route => routesList += 'https://www.callone.de' + route.textContent + '\n');

    copyButton.addEventListener('click', e => {
        if (!navigator || !navigator.clipboard)
            return;
        navigator.clipboard.writeText(routesList);
        let button = e.currentTarget;
        let originalText = button.textContent;
        button.textContent = 'Routes Copied!';
        setTimeout(() => {
            button.textContent = originalText;
        }, 1000);
    });
</script>