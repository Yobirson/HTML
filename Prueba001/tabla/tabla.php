<table width="350" bgcolor="#80fff2">
	<form action="" method="POST">
        </tr>
	</form>
        <tr>
        	<td width="9%">X</td>
            <td width="9%" bgcolor="#2ad4b5">1</td>
            <td width="9%" bgcolor="#2ad4b5">2</td>
            <td width="9%" bgcolor="#2ad4b5">3</td>
            <td width="9%" bgcolor="#2ad4b5">4</td>
            <td width="9%" bgcolor="#2ad4b5">5</td>
            <td width="9%" bgcolor="#2ad4b5">6</td>
        </tr>       
 
        <?php
 
			$numero = 1;
			$total = $data1*$data2;
			for($i = 1; $i < 7; $i++){
				echo "<tr>";
					echo "<td width='10%' bgcolor='#2ad4b5'>".$i."</td>";
					for($j = 1; $j <= 6; $j++){
						if((($numero * $j) == $total) and ($numero == $data2)){
							echo "<td width='00%' style='color:red;'>".$numero * $j."</td>";  
						} else {
							echo "<td width='00%'>".$numero * $j."</td>";  		
						}
					}		
					$numero++;			
				echo "</tr>";
			}	
 
		?>       
        </table>