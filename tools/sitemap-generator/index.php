<?php
$time_start = microtime(true); 

class structure
{
	private $items;

	function __construct ()
	{	$this->items = array ();
	}

	function item_add ($id, $name)
	{
		foreach ($this->items as $item)
		{	if ($item->id_get() == $id)
				return $item;
		}

		$item = new item ($id, $name);
		$this->items[] = $item;
		return $item;
	}

	function item_remove ($id)
	{
		foreach ($this->items as $key => $item)
		{	if ($item->id_get() == $id)
				unset ($this->items[$key]);
		}
	}

	function item_get_by_id ($id)
	{
		foreach ($this->items as $item)
		{	if ($item->id_get() == $id)
				return $item;
		}

		return null;
	}

	function items_get ()
	{	return $this->items;
	}
}

class item
{
	private $id;
	private $done;
	private $name;
	private $links_prev;
	private $links_next;
	
	function __construct ($id, $name)
	{
		$this->id = $id;
		$this->done = false;
		$this->name = $name;
		$this->links_prev = [];
		$this->links_next = [];
	}

	function done_set ($done)
	{	$this->done = $done;
	}

	function done_get ()
	{	return $this->done;
	}

	function id_get ()
	{	return $this->id;
	}

	function link_prev_add ($destination_item, $link_description)
	{
		foreach ($this->links_prev as $link)
		{
			if (($link->destination_item_get() == $destination_item) &&
				($link->link_description_get() == $link_description))
				return $link;
		}

		$link = new link ($destination_item, $link_description);
		$this->links_prev[] = $link;
		return $link;
	}

	function link_next_add ($destination_item, $link_description)
	{
		foreach ($this->links_next as $link)
		{
			if (($link->destination_item_get() == $destination_item) &&
				($link->link_description_get() == $link_description))
				return $link;
		}

		$link = new link ($destination_item, $link_description);
		$this->links_next[] = $link;
		return $link;
	}

	function links_prev_get ()
	{	return $this->links_prev;
	}

	function links_next_get ()
	{	return $this->links_next;
	}

	function name_get ()
	{	return $this->name;
	}

	function name_set ($name)
	{	$this->name = $name;
	}
}

class link
{
	private $destination_item;
	private $link_description;

	function __construct ($destination_item, $link_description)
	{	$this->destination_item = $destination_item;
		$this->link_description = $link_description;
	}

	function destination_item_get ()
	{	return $this->destination_item;
	}

	function link_description_get ()
	{	return $this->link_description;		
	}
}

class Parser
{
    private $excludeLinks = ['#', 'tel:', 'mailto:', '\"', '/blog', '/faq'];
	private $excludeClasses = ['navbar', 'main-footer', 'modal'];
    private $doc;
    private $url;

    function __construct($url)
	{
        $this->url = $url;
        $this->doc = new DOMDocument();
        @$this->doc->loadHTMLFile($this->url);
		$this->exclude_dom_parts();
    }

	function exclude_dom_parts ()
	{
		$xpath = new DOMXPath ($this->doc);
		foreach ($this->excludeClasses as $excludeClass)
		{
			// echo "Removing class '".$excludeClass."' form DOM...".PHP_EOL;
			foreach ($xpath->query ('//*[contains(attribute::class, "'.$excludeClass.'")]') as $e )
			{
				// Delete this node
				$e->parentNode->removeChild($e);
			}
		}
	}

    function get_page_title ()
	{
        if (!empty($this->doc->getElementsByTagName('title')[0]->textContent))
            return $this->doc->getElementsByTagName('title')[0]->textContent;
        return null;
    }

    function get_page_links ()
	{
        $links = $this->doc->getElementsByTagName('a');
        $returnLinks = [];
		
        foreach ($links as $link)
        {
            foreach ($link->attributes as $a)
            {
				// Skip if attribute name is not href
                if ($a->name != 'href')
                    continue;
				
				// Remove leading DOMAIN and trailing anchor if present
                $url = $this->remove_anchor(str_replace(DOMAIN, '', $a->value));

                $skip = false;
				// Skip if URL starts with something in the exclude array
                foreach ($this->excludeLinks as $skipString)
                {
                    if (substr($url, 0, strlen($skipString)) === $skipString)
					{
                        $skip = true;
						break;
					}
                }

				// Skip if URL starts with http but not our DOMAIN
                if ((substr($url, 0, strlen('http')) === 'http') && 
                    (substr($url, 0, strlen(DOMAIN)) !== DOMAIN))
                    $skip = true;
				
				// Skip if file has file extension
				if ($this->has_file_extension($url))
					$skip = true;
				
                if (!$skip && !empty($url))
                    $returnLinks[] = $url;
            }
        }

        return $returnLinks;
    }

	function remove_anchor($url)
	{
		$re = '/#.*$/m';
		$subst = '';
		if (preg_match($re, $url))
			$url = preg_replace($re, $subst, $url);
		return $url;
	}

	function has_file_extension($url)
	{
		$re = '/\..*$/m';
		preg_match($re, $url, $matches);
		if (count($matches))
			return true;
		return false;
	}
}

function walk_links ($structure, $current_item, $space)
{
    if ($current_item->done_get ())
        return;
    $current_item->done_set (true);
    echo $space."Parsing: ".$current_item->id_get ().PHP_EOL;
    $parser = new Parser (DOMAIN.$current_item->id_get ());
    $current_item->name_set ($parser->get_page_title ());
    foreach ($parser->get_page_links () as $url)
    {
		$new_item = $structure->item_get_by_id ($url);
		if (empty ($new_item))
			$new_item = $structure->item_add ($url, null);
		$current_item->link_next_add ($new_item, null);
		walk_links ($structure, $new_item, $space.'  ');
    }
}

function yed_header ()
{
	$xml = [];

	$xml[] = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';
	$xml[] =  '<graphml xmlns="http://graphml.graphdrawing.org/xmlns" '
			 .'xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" '
			 .'xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" '
			 .'xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" '
			 .'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" '
			 .'xmlns:y="http://www.yworks.com/xml/graphml" '
			 .'xmlns:yed="http://www.yworks.com/xml/yed/3" '
			 .'xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">';

	$xml[] = '  <key for="node" id="d0" yfiles.type="nodegraphics"/>';
	$xml[] = '  <key for="edge" id="d1" yfiles.type="edgegraphics"/>';
	$xml[] = '  <key attr.name="description" attr.type="string" for="node" id="d2"/>';
	$xml[] = '  <key attr.name="description" attr.type="string" for="edge" id="d3"/>';

	$xml[] = '  <graph edgedefault="directed" id="G">';

	return $xml;
}

function yed_footer ()
{
	$xml = [];

	$xml[] = "  ".'</graph>';
	$xml[] = '</graphml>';

	return $xml;
}

function yed_node_create ($key, $id, $name)
{
	$info_text  = '<html>';
	$info_text .= '<b>'.$name.'</b>';
	$info_text .= '</html>';
	
	$width_name = strlen ($name) * 9;

	$width = 0;
	if ($width_name > $width)
		$width = $width_name;

	$height = 20 * 3;	// 20px * 3 Lines

	$info_text = xml_prepare ($info_text);

	$color_background = '#C0C0C0';
	$color_border = '#000000';
	$color_info_text = '#000000';

	$xml = [];

	$xml[] = '    <node id="'.$key.'">';
	$xml[] = '      <data key="d2"><![CDATA['.$id.']]></data>';
	$xml[] = '      <data key="d0">';
	$xml[] = '        <y:ShapeNode>';

	$xml[] = '          <y:Geometry height="'.$height.'" width="'.$width.'"/>';

	$xml[] = '          <y:Fill color="'.$color_background.'"'.(empty ($color_background) ? ' hasColor="false" ' : ' ').'transparent="false"/>';
	
	$xml[] = '          <y:BorderStyle color="'.$color_border.'"'.(empty ($color_border) ? ' hasColor="false" ' : ' ').'raised="false" type="line" width="1.0"/>';

	//$xml[] = '          <y:NodeLabel alignment="center" autoSizePolicy="node_width" borderDistance="0.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" horizontalTextPosition="center" iconTextGap="4" modelName="sides" modelPosition="n" textColor="#666666" verticalTextPosition="bottom" visible="true">'.$id.'</y:NodeLabel>';
	$xml[] = '          <y:NodeLabel alignment="center" autoSizePolicy="node_size" fontFamily="Dialog" fontSize="8" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="'.$color_info_text.'" verticalTextPosition="top" visible="'.(empty ($color_info_text) ? 'false' : 'true').'">'.$id.'</y:NodeLabel>';
	$xml[] = '          <y:NodeLabel alignment="center" autoSizePolicy="node_size" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="'.$color_info_text.'" verticalTextPosition="top" visible="'.(empty ($color_info_text) ? 'false' : 'true').'">'.$info_text.'</y:NodeLabel>';
	$xml[] = '          <y:Shape type="roundrectangle"/>';
	if (!empty ($color_background))
		$xml[] = '          <y:DropShadow color="#DDDDDD" offsetX="3" offsetY="3"/>';

	$xml[] = '        </y:ShapeNode>';
	$xml[] = '      </data>';
	$xml[] = '    </node>';

	return $xml;
}

function yed_edge_create ($key_from, $key_to, $description, $color)
{
	$description = xml_prepare ($description);

	
	$color_line = '#000000';
	switch ($color) {
		case 1:
			$color_line = '#FF0000';
		case 0:
		default:
			$color_line = '#000000';
	}
	$color_text = '#000000';
	$color_background = '#ffffff';


	$xml = array ();

	$xml[] = '    <edge id="'.$key_from.'-'.$key_to.'_'.xml_prepare ($description).'" source="'.$key_from.'" target="'.$key_to.'">';
	$xml[] = '      <data key="d1">';
	$xml[] = '        <y:PolyLineEdge>';
	$xml[] = '          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>';
	$xml[] = '          <y:LineStyle color="'.$color_line.'"'.(empty ($color_line) ? ' hasColor="false" ' : ' ').'type="line" width="1.0"/>';
	$xml[] = '          <y:Arrows source="none" target="standard"/>';
	if (!empty ($description))
		$xml[] = '          <y:EdgeLabel alignment="center" backgroundColor="'.$color_background.'" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="10" fontStyle="plain" hasBackgroundColor="'.(empty ($color_background) ? 'false' : 'true').'" hasLineColor="'.(empty ($color_text) ? 'false' : 'true').'" horizontalTextPosition="center" iconTextGap="4" lineColor="'.$color_text.'" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="'.$color_text.'" verticalTextPosition="bottom" visible="true">'.$description.'</y:EdgeLabel>';
	$xml[] = '          <y:BendStyle smoothed="true"/>';
	$xml[] = '        </y:PolyLineEdge>';
	$xml[] = '      </data>';
	$xml[] = '    </edge>';

	return $xml;
}

function xml_prepare ($text)
{
	// replace characters for valid xml
	$text = str_replace ('&', '&amp;', $text);
	$text = str_replace ('<', '&lt;', $text);
	$text = str_replace ('>', '&gt;', $text);

	return $text;
}

// Get arguments
if ($argc < 2)
{	echo 'Usage: '.$argv[0].' <output_file>'.PHP_EOL;
	exit (1);
}
$output_file = $argv[1];

// Start program
define ('DOMAIN', 'https://www.callone.de');
$structure = new structure ();
$current_item = $structure->item_add ('/', null);
walk_links ($structure, $current_item, '');

// Build graph
$graph = [];
$graph = array_merge ($graph, yed_header());

// Add items to graph
foreach ($structure->items_get () as $item)
{
	$graph = array_merge ($graph, yed_node_create ($item->id_get(), $item->id_get(), $item->name_get()));
}

// Add edges to graph
foreach ($structure->items_get() as $item)
{
	if (empty ($item->links_next_get()))
		continue;
	
	foreach ($item->links_next_get() as $link)
	{
		$item_destination = $link->destination_item_get();
		$link_description = $link->link_description_get();

		$color = 0;
		
		// find recursion
		// if (!empty ($item_destination->links_next_get()))
		// {
		// 	foreach ($item_destination->links_next_get() as $item_destination_link)
		// 	{
		// 		if ($item_destination_link->destination_item_get() != $item)
		// 			continue;
		// 		$color = -1;
		// 		$link_description = 'KREISROUTING!';
		// 		break;
		// 	}
		// }

		// if (($link_description == 'BACKUPROUTING') ||
		// 	($link_description == 'OVERRIDEROUTING') ||
		// 	($link_description == 'DEAKTIVIERT'))
		// 	$color = -2;
		
		$graph = array_merge ($graph, yed_edge_create ($item->id_get(), $item_destination->id_get(), $link_description, $color));
	}
}

// Save graph
$graph = array_merge ($graph, yed_footer());
file_put_contents ($output_file, implode (PHP_EOL, $graph));

// Display runtime in seconds
$time_end = microtime(true);
$execution_time = $time_end - $time_start;
echo "Script runtime: ".round($execution_time, 2)."s".PHP_EOL;
?>