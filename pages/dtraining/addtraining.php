<?php
require_once('../conf/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Data Training | <?php echo $title ?></title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />

    <script type="text/javascript">
	/* ========== UPPSERCASE ==========*/
	function hBesar(huruf) {
   		var kata = document.getElementById(huruf.id);
   		kata.value= kata.value.toUpperCase();
	}
	/* ========== UPPERCASE END ==========*/
    </script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Tunggu Sebentar...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index">Sistem Data Mining Dengan Algoritma KNN</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$name"; ?></div>
                    <div class="email"><?php echo "$email"; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./">
                            <i class="material-icons">layers</i>
                            <span>Data Training</span>
                        </a>
                    </li>
                    <li>
                        <a href="../dtest">
                            <i class="material-icons">layers</i>
                            <span>Data Test</span>
                        </a>
                    </li>
                    <li>
                        <a href="../hitungknn">
                            <i class="material-icons">poll</i>
                            <span>Hitung KNN</span>
                        </a>
                    </li>
                    <li>
                        <a href="../setting">
                            <i class="material-icons">settings</i>
                            <span>Setting</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">AdeYusupPermana</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.31.5.17
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

   <section class="content">
        <div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    if(isset($_POST['simpan'])){
                        //deklarasi variabel
                        $nama=$_POST['nama'];
                        $jursmk=$_POST['jursmk'];
                        $juruniv=$_POST['juruniv'];
                        $sm1=$_POST['sm1'];
                        $sm2=$_POST['sm2'];
                        $sm3=$_POST['sm3'];
                        $sm4=$_POST['sm4'];
                        $sm5=$_POST['sm5'];
                        $sm6=$_POST['sm6'];
                        $ind=$_POST['ind'];
                        $ing=$_POST['ing'];
                        $mtk=$_POST['mtk'];
                        $kom=$_POST['kom'];

                        $SQL = $conn->prepare('INSERT INTO dtraining(nama,sm1,sm2,sm3,sm4,sm5,sm6,bindo,bing,mat,komp,jurusan,hasil) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)');
                        $SQL->bind_param('siiiiiiiiiiss',$nama,$sm1,$sm2,$sm3,$sm4,$sm5,$sm6,$ind,$ing,$mtk,$kom,$jursmk,$juruniv);
                        $SQL->execute();
                        
                        if(!$SQL){
                            $msg=$conn->error;
                            echo '
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Data Gagal Disimpan '.$msg.', Silakan Ulangi.
                                </div>
                            ';
                        }else{
                            echo '
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Data Berhasil Disipan.
                                </div>
                            ';
                        }
                    } 
                    ?>
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data Training
                                <small>Input baru yang akan disimpan sebagai data training</small>
                            </h2>
                        </div>
                        <div class="body">
                            <form id="add_data" method="POST">
                                <div class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="nama" onkeyup="hBesar(this)" onkeydown="hBesar(this)" onkeypress="hBesar(this)" type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Jurusan SMK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <select name="jursmk" class="form-control show-tick" required>
                                                    <option value="">-- Please select --</option>
                                                    <?php
                                                        $query = $conn->query("SELECT * FROM jursmk");                
                                                        while($row=$query->fetch_array()){
                                                            echo'<option value="'.$row['id_jursmk'].'">'.$row['jurusan_smk'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Jurusan Universitas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="juruniv" class="form-control show-tick" required>
                                                    <option value="">-- Please select --</option>
                                                    <?php 
                                                    $query = $conn->query("SELECT * FROM juruniv");                
                                                    while($row=$query->fetch_array()){
                                                        echo'<option value="'.$row['id_juruniv'].'">'.$row['jurusan_univ'].'</option>';
                                                    }    
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr></hr>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <h2 class="card-inside-title">Rata - Rata Nilai Semester</h2>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm1" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 1</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm2" type="number"  class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 2</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm3" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 3</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm4" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 4</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm5" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 5</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="sm6" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Semester 6</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 class="card-inside-title">Nilai Ujian Nasional</h2>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="ind" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Bahasa Indonesia</label>
                                            </div>
                                        </div>                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="ing" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Bahasa Inggris</label>
                                            </div>
                                        </div>                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="mtk" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Matematika</label>
                                            </div>
                                        </div>                                        
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="kom" type="number" class="form-control" max="100" min="0" required>
                                                <label class="form-label">Kompetensi</label>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <input name="simpan" type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">
                                <input type="reset" class="btn btn-warning m-t-15 waves-effect" value="Reset Form">
                                <a href="./" class="btn btn-danger m-t-15 waves-effect">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->
        </div>
    </section>

     <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

     <!-- Jquery Validation Plugin-->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <script src="../../plugins/jquery-validation/localization/messages_id.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/ui/dialogs.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script src="../../js/pages/examples/add-training.js"></script>
    
</body>

</html>