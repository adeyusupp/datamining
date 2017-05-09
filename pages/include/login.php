<?php
	include_once ('conf/con.php');

	if(isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];

		 // Check username
		    $query = $conn->prepare('SELECT * FROM user WHERE username = ?');
		    $query->bind_param('s', $user);
		    $query->execute();
		    $result=$query->get_result();
		    $jumrow=$result->num_rows;
		    if($jumrow > 0){
		    	$row=$result->fetch_array();
		        $user = $row['username'];
		        $hash = $row['hash'];
		        $name = $row['name'];
		        $email = $row['email'];
		        $lvl = $row['lvl'];
		        	$verif = password_verify($pass, $hash);
		        	if($verif == 1){
		        		echo 'Login Berhasil <br> Selamat Datang '.$user.' ';
		        		$_SESSION['name']=$name;
		        		$_SESSION['email']=$email;
		        	}else{
		        		echo '
		        		<div class="alert alert-danger">
	                    	<strong>Wrong Password </strong>, please try again !!
	                	</div>
		        		';
		        	}
		    }else {
		    	echo '
		        	<div class="alert alert-danger">
	                	Unregister Username
	                </div>
		        	';
		    }
	}
 ?>
				<form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <a href="sign-up.php">Register Now!</a>
                        </div>
                        <div class="col-xs-4">
                        	<input class="btn btn-block bg-pink waves-effect" type="submit" name="login" value="SIGN IN">
                        </div>
                    </div>
				</form>
