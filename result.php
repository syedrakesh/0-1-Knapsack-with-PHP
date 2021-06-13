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
				<div class="KnapIndex3 over">
					<?php
						session_start();
						
						$item = $_SESSION['item'];
						$capacity = $_SESSION['capacity'];
						$backtrack = $_SESSION['backtrack'];
						$temp = $_SESSION['temp'];
						$weight = $_SESSION['weight'];
						$value = $_SESSION['value'];
						$knapsack = $_SESSION['knapsack'];
						
						function result($item,$capacity,$backtrack,$temp,$weight,$value,$knapsack)
						{
							for($m=$item;$m>=1;$m--)
							{
								if($backtrack[$m][$temp]==1)
								{
									echo "<h1  style=font-size:30px;font-family:cursive;text-align:center;margin:0px;padding:0px;>Item : ".$m."  Weight : ".$weight[$m-1]."  Value : ".$value[$m-1]."</h1>";
									echo "</br>";
									$temp -= $weight[$m-1];
									$count = 1;
								}
							}
							if($count==1)
							{
								echo "<h1 style=font-size:30px;font-family:cursive;text-align:center;margin:0px;padding:0px;>Maximum Profit : ".$knapsack[$item][$capacity]."</h1>";
							}else
							{
								echo "<h1 style=font-size:30px;font-family:cursive;text-align:center;margin:0px;padding:0px;color:red;>Knapsack Not Possible!</h1>";
								echo "</br>";
								echo "</br>";
								echo "</br>";
								echo "<img src=./image/sad.gif alt=Sad style=display:block;margin-left:auto;margin-right:auto;height:100px;weight:100px;>";
							}
						}
						
						echo result($item,$capacity,$backtrack,$temp,$weight,$value,$knapsack);
						
						session_destroy();
					?>
				</div>
			</div>
			
			<div class="Footer over">
				<p>Team : Pi</p>
			</div>
			
		</div>
	</body>
</html>