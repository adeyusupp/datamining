<?php
require_once('conf/conn.php');
session_start();

$user_check = $_SESSION['username'];
    $query = $conn->prepare('SELECT * FROM user WHERE username = ?');
    $query->bind_param('s', $user_check);
    $query->execute();
    $result=$query->get_result();
	  $jumrow=$result->num_rows;
	    if($jumrow > 0){
	    	$row=$result->fetch_array();
	        $name = $row['name'];
	        $email = $row['email'];
    	}
    $query1 = $conn->prepare('SELECT * FROM dtraining');
    $query1->execute();
    $result1=$query1->get_result();
	$jumdtrain=$result1->num_rows;

    $query2 = $conn->prepare('SELECT * FROM dtest');
    $query2->execute();
    $result2=$query2->get_result();
	$jumdtest=$result2->num_rows;
	    
	if(!isset($_SESSION['username'])){
      header('Location: sign-in');
   }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | <?php echo $title ?></title>
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

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
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
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "$name"; ?></div>
                    <div class="email"><?php echo "$email"; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dtraining">
                            <i class="material-icons">layers</i>
                            <span>Data Training</span>
                        </a>
                    </li>
                    <li>
                        <a href="dtest">
                            <i class="material-icons">layers</i>
                            <span>Data Test</span>
                        </a>
                    </li>
                    <li>
                        <a href="hitungknn">
                            <i class="material-icons">poll</i>
                            <span>Hitung KNN</span>
                        </a>
                    </li>
                    <li>
                        <a href="setting">
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
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment_turned_in</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Data Training</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumdtrain; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Data Test</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $jumdtest; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #END# Widgets -->
        </div>
        <!-- Table Data Training-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Jumlah Siswa Setiap Jurusan
                            </h2>                
                            <small>Data jumlah siswa setiap jurusan berdasarkan jurusan smk dan jurusan pada universitas</small>                  
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jurusan SMK</th>
                                        <th>Jurusan Universitas</th>
                                        <th>Jumlah Siswa</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    $no = 1;
                                    $query = $conn->prepare('SELECT jurusan_smk , jurusan_univ , COUNT(hasil) AS count FROM dtraining,jursmk,juruniv WHERE (dtraining.jurusan=jursmk.id_jursmk) AND (dtraining.hasil=juruniv.id_juruniv) GROUP BY jurusan, hasil;');
                                    $query->execute();
                                    $result=$query->get_result();
                                        while($row=$result->fetch_array()){
                                           echo '
                                            <tr">
                                                <td>'.$no++.'</td>
                                                <td>'.$row['jurusan_smk'].'</td>
                                                <td>'.$row['jurusan_univ'].'</td>
                                                <td>'.$row['count'].'</td>                                   
                                            </tr>
                                           ';
                                        }
                                ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Table Data Training -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../plugins/jquery-countto/jquery.countTo.js"></script>
    
    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    
    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>
    <script src="../js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>