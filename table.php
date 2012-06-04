<?php
	
	function getTable($rows=3, $cols=3, $color='yellow')
	{
		$border_table = '1';
		$tr_bgcolor = $color;
		$td_bgcolor = $color;
		echo "<table border=$border_table>";
		for($cnt_row = 1; $cnt_row <= $rows; $cnt_row++)
		{
			if ($cnt_row == 1)
				echo "<tr bgcolor=$tr_bgcolor>";
			else
				echo "<tr>";
			for($cnt_col = 1; $cnt_col <= $cols; $cnt_col++)
			{
				if ($cnt_col == 1)
					echo "<td bgcolor=$td_bgcolor>";
				else
					echo "<td>";
					
				if($cnt_col == 1 or $cnt_row ==1 )
				{
					echo "<strong>";
					echo $cnt_col*$cnt_row;
					echo "</strong>";
				}
				else
					echo $cnt_col*$cnt_row;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	
	getTable();
	getTable(5);
	getTable(7,7);
	
?>
