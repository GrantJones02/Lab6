<table align="center" border='1' width="100%">
<?php
// filename : multiplication_table.php
$num = 100;
$name = $_POST["name"]; 
echo "Name: " . $name . "<br>"; 
for($i = 1; $i <= 100; $i++)
{	
    echo "<tr>";
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = ($i * $j);
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}
?>
</table>
