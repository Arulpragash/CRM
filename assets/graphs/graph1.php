<?php

// require($_SERVER['DOCUMENT_ROOT'] . '/y/includes/config.php');

include("phpgraphlib.php");

$graph=new PHPGraphLib(500,700);

$dataArray=array();

$sql="SELECT purchase_date, SUM(totalcost) AS 'tot' FROM item_purchase GROUP BY purchase_date";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if($result){
    while($row = mysql_fetch_assoc($result)){
        $purchaseDate=$row["purchase_date"];
        $sum=$row["tot"];
        $dataArray[$purchaseDate]=$sum;
    }
}
$graph->addData($dataArray);
$graph->setGradient("lime", "blue");
$graph->setBarOutlineColor("black");
$graph->createGraph();

?>