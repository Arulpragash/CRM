<?php
include('phpgraphlib.php');

$graph = new PHPGraphLib(500,350);

$data = array("sunday" => .032, "monday" => .028, "tuesday" => .021, "wednesday" => .033,
    "thursday" => .034, "friday" => .031, "saturday" => .036);

$graph->addData($data);
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>