<?php
include('phpgraphlib.php');

$graph = new PHPGraphLib(480,300);

$data = array("Sunday"=>145, "Monday"=>102, "Tuesday"=>123, "Wednesday"=>137,
    "Thursday"=>149, "Friday"=>99, "Saturday"=>88);

$graph->setBackgroundColor("black");
$graph->addData($data);
$graph->setBarColor('255,255,204');
$graph->setTitle('This Week Sell of $Item');
$graph->setTitleColor('yellow');
$graph->setupYAxis(12, 'yellow');
$graph->setupXAxis(20, 'yellow');
$graph->setGrid(false);
$graph->setGradient('silver', 'gray');
$graph->setBarOutlineColor('white');
$graph->setTextColor('white');
$graph->setDataPoints(true);
$graph->setDataPointColor('yellow');
$graph->setLine(true);
$graph->setLineColor('yellow');
$graph->createGraph();
?>