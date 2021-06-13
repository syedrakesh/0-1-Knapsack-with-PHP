<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="./css/style.css">
	<meta charset="UTF-8">
	<title>0/1 Knapsack</title>
	</head>

	<body>
		<div class="content">
		
			<div class="Header over">
				<p>0/1 Knapsack</p>
			</div>
			
			<div class="KnapsackBody over">
				<div class="KnapIndex2 over">
					<?php
						session_start();
		
						$item = $_SESSION['item'];
						$capacity = $_SESSION['capacity'];

						$weight = array();
						$value = array();
							

						print "<form method=POST action=''>";

						for($i=0;$i<$item;$i++)
							{
								print "<table>";
								print "<tr>";
								print "<td>Weight : </td><td><input type=number name=weight$i required>
								</tr>
								</br>";
								print "<tr>";
								print "<td>Value : </td><td><input type=number name=value$i required></td>";
								print "</tr>";
								print "</table>";
							}
							
							print "<input type=submit name=submit value=Submit>";
							print "</form>";
							
							if(isset($_POST['weight0']) && isset($_POST['value0']))
							{
								for($i=0;$i<$item;$i++)
								{
									$weight[$i] = $_POST['weight'.$i];
									$value[$i] = $_POST['value'.$i];
								}
							}
							
							
						$knapsack[$item][$capacity];
						
						for($i = 0; $i <= $capacity; $i++)
						{
							$knapsack[0][i] = 0;
						}
						
						$backtrack = array();
						$backtrack[$item][$capacity];

						for ($i=1;$i<=$item;$i++)
						{
							for ($j=0;$j<=$capacity;$j++)
							{	
								
								if(($weight[$i-1] <= $j) && ($value[$i-1]+$knapsack[$i-1][$j-$weight[$i-1]] > $knapsack[$i-1][$j]))
								{
									$knapsack[$i][$j] = $value[$i-1] + $knapsack[$i-1][$j-$weight[$i-1]];
									$backtrack[$i][$j] = 1;
								}
								else
								{
									$knapsack[$i][$j] = $knapsack[$i-1][$j];
									$backtrack[$i][$j] = 0;
								}
								
							}
						}	
						
						$temp = $capacity;
						
						$_SESSION["backtrack"] = $backtrack;
						$_SESSION["temp"] = $temp;
						$_SESSION["weight"] = $weight;
						$_SESSION["value"] = $value;
						$_SESSION["knapsack"] = $knapsack;
						
						if(isset($_POST['submit']))
						{
							header('Location: result.php');
							exit;
						}
					?>
				</div>
			</div>
			
			<div class="Footer over">
				<p>Team : Pi</p>
			</div>
			
		</div>
	</body>
</html>