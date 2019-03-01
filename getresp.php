<?php

	
	
		$con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"cake_order");
		
		//include(db.php);
		
		$query = $_GET['q'];
	
	?>
	<table align="center" bordercolor="black" border="1">
		
		<tbody>
		<?php
	$sql=mysqli_query($con,"SELECT * FROM package WHERE package_name LIKE '%$query%'");
	$count=1;
while($result=mysqli_fetch_assoc($sql))
{
		?>		
						<table  >
							<tr align="center">
							   <td><img  style="height:316px; width:900px; border-radius:4px;" src="uploads/<?php echo $result['img'];?>"</img></td>
							</tr>
							<tr>
								 <td>
								 Name:<?php echo $result['package_name'];?></br>
								 Price:<?php echo $result['package_price'];?>tk</br>
								 <a href="login.php">ORDER</a>
								 </td>
							</tr>
							<br>
						</table>
					
					<?php
	$count++;
//echo "<div>".$result['name']."</div>";
}
?>
</tbody>
</table>