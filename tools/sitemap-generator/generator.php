<?php
require_once('../../src/libs/router.inc.php');
define('VIEWS', '../../src/views/de/');
$routes = Router::get_routes();
$time_start = microtime(true); 

class Parser {
    private $file;
    private $dom;
    private $links;
    private $exclude_links = ['#', 'mailto:', 'tel:'];

    function __construct($file) {
        $this->file = $file;
        $this->dom = new DOMDocument();
        @$this->dom->loadHTMLFile($file);
        $this->links = $this->find_links();
    }

    private function find_links() {
        $links = $this->dom->getElementsByTagName('a');
        $links = $this->filter_links($links);
        return $links;
    }

    private function filter_links($links) {
        $new_links = [];

        foreach ($links as $key => $link) {
            $skip = false;

            foreach ($link->attributes as $attribute) {
                if ($attribute->name != 'href')
                    continue;
                
                // Skip link if starts with something from exclude array
                foreach ($this->exclude_links as $exclude) {
                    if (substr($attribute->value, 0, strlen($exclude)) == $exclude)
                        $skip = true;
                }
            }

            if (!$skip)
                $new_links[] = $link;
        }

        return $new_links;
    }

    public function get_links() {
        return $this->links;
    }
}

foreach ($routes as $route) {
    $parser = new Parser(VIEWS.$route->view);
    $links = $parser->get_links();

    foreach ($links as $link) {
        foreach ($link->attributes as $attribute) {
            if ($attribute->name != 'href')
                continue;
            print_r($attribute->value.PHP_EOL);
        }
    }
}

// Display runtime in seconds
$time_end = microtime(true);
$execution_time = $time_end - $time_start;
echo PHP_EOL;
echo "\e[90mScript runtime: \e[93m".round($execution_time, 2)."s\e[39m".PHP_EOL;
echo PHP_EOL;
?>