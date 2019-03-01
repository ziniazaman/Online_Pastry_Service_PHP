<?php 
		$package_id=$_GET['package_id'];
		include ('db.php');

				$sql = $con,"DELETE FROM package WHERE package_id='".$package_id."'";
				
				$result=mysqli_query($sql);
				
				$sql2 = $con,"DELETE FROM  item WHERE package_id='".$package_id."'";
				
				$result2=mysqli_query($sql2);
				
				$sql3 = $con,"DELETE FROM day WHERE package_id='".$package_id."'";
				
				$result3=mysqli_query($sql3);
				header('location:admin_package.php');
			
			 
?>