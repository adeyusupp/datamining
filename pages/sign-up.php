<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | </title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
    <script>
    function cekUser(varName) {
		
		// Deklarasi semua variabel
		var message = document.getElementById('pesan');
		var badColor = "#F44336";
		var vColor = "#66cc66";

        $.ajax({
      			url: "check_username.php",
      			type: 'POST',
      			data: 'unameKirim='+varName,
      			success: function(result){
                	if(result > 0){
                        message.style.color = badColor;
        				message.innerHTML = "Username not available."
                        $('#form').removeClass('form-line').addClass('form-line focused error');
        				return false;
                 	}else{
						message.style.color = vColor;
        				message.innerHTML = "Username tersedia."
        				return false;
                	}
              	}
     		});
    }
    </script>
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Sistem<b> Data Mining</b></a>
            <small>Sistem penunjang keputusan</small>
        </div>
        <div class="card">
            <div class="body">
                <?php
                    include_once ('conf/conn.php');
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
                                    <strong>Well done!</strong> You successfully register in this website please <strong><a href='sign-in'>Login Here !</strong></a>
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
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required autofocus>
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
                        <div id="form" class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" onkeypress="cekUser(this.value);" onkeydown="cekUser(this.value);" onkeyup="cekUser(this.value);"  required autofocus>
                        </div>
                        <label id="pesan" class="error"></label>
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
                        <a href="sign-in">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-up.js"></script>
</body>
</html>