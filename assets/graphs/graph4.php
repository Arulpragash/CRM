<?php
include('phpgraphlib.php');
include('phpgraphlib_pie.php');

$graph = new PHPGraphLibPie(500,300);

$data = array("Apple" => 6.3, "Sunlight" => 4.5,"Coca-cola" => 2.8, "Rich Cake" => 2.7, "Milo" => 1.4);

$graph->addData($data);
$graph->setLabelTextColor('50,50,50');
$graph->setLegendTextColor('50,50,50');
$graph->createGraph();
?>