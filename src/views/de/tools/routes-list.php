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
$properties_to_display =
[
    'uri'               => 'URI',
    'menu_position'     => 'Menu',
    'title'             => 'Title',
    'meta_description'  => 'Meta-Description',
    'og_title'          => 'OpenGraph Title',
    'og_image_text'     => 'OpenGraph Image Text <a href="#" title="Zwei Unterstriche (__) erzwingen einen Umbruch">(?)</a>'
];

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
            <a href="https://www.bulkseotools.com/bulk-w3c-validator.php" class="btn btn--border-black" target="_blank">Bulk W3C Check</a>
        </div>
    </div>
</div>

<table>
    <thead>
        <tr>
            <?php
            foreach ($properties_to_display as $title)
                echo '<th>'.$title.'</th>';
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($routes as $route)
        {
            echo "<tr>";
            foreach ($properties_to_display as $property => $title)
            {
                if (!empty ($route->$property))
                {
                    echo "<td>";
                    if ($key === 'uri')
                            echo '<a href="'.DOMAIN.$route->$property.'" target="_blank" class="route">'.$route->$property.'</a>';
                    else    echo $route->$property;
                    echo "</td>";  
                }
                else echo '<td></td>';
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