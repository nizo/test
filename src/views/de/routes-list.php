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
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>URI</th>
            <th>Title</th>
            <th>Meta-Title</th>
            <th>Meta-Description</th>
            <th>Meta-Keywords</th>
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
            'meta_keywords',
            'og_title',
            'og_image_text'
        ];
        foreach ($routes as $key => $route) {
            echo "<tr>";
            foreach ($route as $key => $value) {
                if (!in_array($key, $properties_to_display))
                    continue;
                
                echo "<td>";
                echo $key === 'uri' ? '<a href="'.DOMAIN.$value.'" target="_blank">'.$value.'</a>' : $value;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>