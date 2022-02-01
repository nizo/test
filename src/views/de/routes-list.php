<style>
    table {
        min-width: 100%;
    }
    th, td {
        padding: 2px 5px;
    }
    th {
        background-color: lime;
        color: #000;
    }
    tr:nth-of-type(odd) td {
        background: #ccc;
    }
    tr:nth-of-type(even) td {
        background: #eee;
    }
</style>

<table>
    <tr>
        <th>#</th>
        <th>URI</th>
        <th>Status</th>
    </tr>
    <tbody>
        <?php
        $routes = Router::get_sorted('uri', 'asc');
        foreach ($routes as $key => $route) {
            echo "<tr>";
            echo "<td>".($key + 1)."</td>";
            echo "<td>";
            foreach ($route as $key => $value) {
                echo "<strong>".$key.":</strong> ".$value."<br />";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>