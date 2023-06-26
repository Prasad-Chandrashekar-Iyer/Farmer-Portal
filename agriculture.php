<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
$aVar = mysqli_connect('localhost','root','','jpgraph');

$query = mysqli_query($aVar ,"SELECT * FROM agriculture");

$datas = array();

   while($row = mysqli_fetch_array($query)){
   	$Central_Government_Subsidies = $row['Amount'];
   	$datas[] = $Central_Government_Subsidies;
   	
   }



// Create the graph. These two calls are always required
$graph = new Graph(800,350,'auto');
$graph->SetScale("textint");
$graph->SetMargin(60, 4, 4, 20);

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0, 20000,40000,60000,80000,100000), array(0,20000,40000,60000,80000,100000));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('Fertilizer','Credit','Crop Insurance','Price Support'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($datas);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetFillGradient("#4B0082","white",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(45);
$graph->title->Set("Analysis of Subsidies");

// Display the graph
$graph->Stroke();


?>