<?php
	for($i = 0; $i < 5; $i++) {
		for($j = 0; $j < 5; $j++) {
			$matriz_principal[$i][$j] = rand(10,99);
		}
	}
?>

<table>
	<?php
		echo "MATRIZ GERADA";
		for($i = 0; $i < 5; $i++) {
			echo '<tr>';
			for($j = 0; $j < 5; $j++) {
				echo "<td>[{$matriz_principal[$i][$j]}]</td>";
			}
			echo '</tr>';
		}
	?>
</table>

<br/><br/>

<table>
	<?php
		echo "MATRIZ NÚMEROS PARES";
		for($i = 0; $i < 5; $i++) {
			echo '<tr>';
			for($j = 0; $j < 5; $j++) {
				if($matriz_principal[$i][$j] % 2 == 0)
					echo "<td>[{$matriz_principal[$i][$j]}]</td>";
				else
					echo "<td>[&nbsp&nbsp]</td>";
			}
			echo '</tr>';
		}
	?>
</table>

<br/><br/>

<table>
	<?php
	 echo "MATRIZ NÚMEROS IMPARES";
		for($i = 0; $i < 5; $i++) {
			echo '<tr>';
			for($j = 0; $j < 5; $j++) {
				if($matriz_principal[$i][$j] % 2 != 0)
					echo "<td>[{$matriz_principal[$i][$j]}]</td>";
				else
					echo "<td>[&nbsp&nbsp]</td>";
			}
			echo '</tr>';
		}
	?>
</table>
