<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		form{
			text-align: center;
			width: 80%;
		}
		img{
			height: 200px;
			width: 200px;
		}
	
	</style>
</head>
<body>
	<br><br>
	
	<div class="container">
		<center>
		<div class="alert alert-success" role="alert">
  			<h3>Login to Proceed</h3>
			</div>
			</center>

			<div class="row">
			<div class="col-4">
					<img src="https://cdn.pixabay.com/photo/2015/12/08/19/08/castle-1083570__340.png" class="img-fluid">
			</div>
			
			
			<div class="col">
				<center>

					<form action="" method="post">
                       <div class="form-group">
                           <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                                <label for="">Password</label>
                                 <input type="password" class="form-control" name="password">
                             </div>
                      
                       <div class="form-group">
                       	<br>
                           <input type="submit" class="btn btn-success" name="login" value="Login">
                       </div>
                   </form>

                   <?php

			if (isset($_POST['login'])) {
			
				$email = $_POST['email'];
				$role= 'user';
				$password = $_POST['password'];

				echo "$role";
				echo "<br>";

				require('connection.php');
				$sql = "SELECT * FROM users WHERE email = ?  AND role=?" ;

				if ($stmt = mysqli_prepare($con,$sql)) {
					
					mysqli_stmt_bind_param($stmt,"ss",$param_email, $param_role);
					$param_email = $email;
					$param_role= $role;
					mysqli_execute($stmt);

					$result = mysqli_stmt_get_result($stmt);

					if ($result) {
					$rows = mysqli_num_rows($result);
					if ($rows>0) {
						$record = mysqli_fetch_assoc($result);
						$status=$password==$record['password'];


						//$status = password_verify($password, $record['password']);
						if ($status) {
							echo "Successfully Logined In.Welcome ".$record['name'];
							header('location:index.php');

							session_start();
							$_SESSION['name']=$record['name'];
							$_SESSION['email'] = $record['email'];
							$_SESSION['role'] = $record['role'];

						}else{
							echo "<h6 style='color:red'>Ooops! your detials didn't match our record, check and try again</h6>";
						}
						
						
					}else{
						echo "<h6 style='color:red'>Ooops! your detials didn't match our record, check and try again</h6>";
					}

					}else{
						echo "Something is wrong ".mysqli_error($cnn);
					}

				}else{
					echo "Something is wrong ".mysqli_error($con);
				}

				
				

			}

			?>
			</center>

				
			</div>
		</div>
		
	</div>
</body>


</html>