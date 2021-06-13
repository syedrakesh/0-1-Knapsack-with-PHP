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
				<div class="KnapIndex1 over">
					<?php
						print "<form method=POST action=input_store.php>";
						print "<table>";
						print "<tr>";
						print "<td>Enter Item Number : </td><td><input type=number name=item required></td>";
						print "</tr>";
						print "<td>Enter Capacity : </td><td><input type=number name=capacity required></td>";
						print "</tr>";
						print "</table>";
						print "<input type=submit name=submit value=Submit>";
						print "</form>";
					?>
				</div>
			</div>
			
			<div class="Footer over">
				<p>Team : Pi</p>
			</div>
			
		</div>
	</body>
</html>