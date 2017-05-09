<?php
	include_once ('conf/con.php');
	if(isset($_POST['save'])){
		$username = $_POST['username'];
		$pass = $_POST['password'];
        $name = $_POST['name'];
        $email = $_POST['email'];
		$lvl = 1;

		//hash password
		$options = ['cost ==> 10'];
		$hash = password_hash($pass, PASSWORD_BCRYPT, $options);

		//insert data ke tabel user
		$SQL = $conn->prepare('INSERT INTO user(username,hash,name,email,lvl) VALUES(?,?,?,?,?)');
	    $SQL->bind_param('ssssi',$username,$hash,$name,$email,$lvl);
	    $SQL->execute();

	  	//cek error
	    if(!$SQL){
    	   	echo $conn->error;
            echo "
                <div class='alert alert-danger'>
                     <strong>OMG!</strong> There is something wrong with your registration please try again.
                </div>
        ";
	  	}else{
            echo "
                <div class='alert alert-success'>
                    <strong>Well done!</strong> You successfully register in this website please <strong><a href='sign-in.php'>Login Here !</strong></a>
                </div>
            ";
        }
	}
 ?>

 <form id="sign_up" method="POST">
                    <div class="msg">Register new account</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Complete Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>

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
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <input class="btn btn-block btn-lg bg-pink waves-effect" type="submit" value="SIGN UP" name="save">
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
                </form>