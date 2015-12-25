<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.ghe{
		margin: 5px;
		padding: 10px;
	}

</style>
<body>

</body>
<table class="table">
	<?php 
	for ($i=0; $i <10 ; $i++) { 
		echo '<tr>';
		for ($j=0; $j <5 ; $j++) {
			if($j%2 == 0)
			echo '<td class="ghe">'.$i.'.'.$j.'</td>';
		}
		echo '</tr>';
	}
	 ?>
</table>
</html>