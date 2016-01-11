<?php
include('phpgraphlib.php');

$graph = new PHPGraphLib(450,500);

$data = array("Jan" => 100.1, "Feb" => 300.6, "Mar" => 110.0, "Apr" => 450.7,
    "May" => 400.6, "Jun" => 505.8, "Jul" => 280.5);

$graph->addData($data);
$graph->setBarColor('navy');
$graph->setupXAxis(20, 'blue');
$graph->setTitleColor('blue');
$graph->setGridColor('153,204,255');
$graph->setDataValues(true);
$graph->setDataValueColor('navy');
$graph->setDataFormat('degrees');
$graph->setGoalLine('300');
$graph->setGoalLineColor('red');
$graph->createGraph();
?>