<?php 
	session_start();
	
	$db = mysqli_connect("localhost", "root", "", "cake_order");
	if (isset($_POST['login_btn'])) 
{
		$username = $_POST['username'];
		$password =$_POST['password'];
	
		$sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) 
	{
			while($row=mysqli_fetch_assoc($result))
		{
			//$dbusername=$row['username'];
			//$dbpassword=$row['password'];
			$dbtype=$row['type'];
		
				if($username && $password )
				{ 
					session_start();
					$_SESSION['sess_user']=$username;
					
					if ($dbtype==1)
					{
						header("Location: admin/home_admin.php");
					}
					else
					{
						header("Location: user/home_user.php");
					}
			
						
			    }
				else
				{
					echo "<script>
					alert('Username & Password do not match!!');
					window.location.href='login.php';
					</script>";
					//echo "Username & Password do not match";
				}
		}
		}

			else{
				echo "<script>
					alert('Invalid Username & Password!!');
					window.location.href='login.php';
					</script>";
				//echo "Invalid Username & Password";
			}
			//echo "<br/>".$user."<br/>".$pass;
		}
	?>


