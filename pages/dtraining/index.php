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

    <!-- Sweetalert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/mystyle.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
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
                            <li><a href="../logout"><i class="material-icons">input</i>Sign Out</a></li>
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
            <!-- Table Data Training-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Training
                            </h2>  
                            <div class="header-button">
                                <a class="btn bg-blue waves-effect" href="addtraining">Tambah Data</a>
                            </div>                                     
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2" width="80px">Name</th>
                                        <td colspan="6" align="center"><strong>Rata - Rata Nilai Per Semster</strong></td>
                                        <td colspan="4" align="center"><strong>Nilai UN**</strong></td>
                                        <th rowspan="2">Jurusan SMK</th>
                                        <th rowspan="2">Hasil</th>
                                        <th rowspan="2" width="50px">Option</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    $query = $conn->prepare('SELECT * FROM dtraining,jursmk,juruniv WHERE dtraining.jurusan=jursmk.id_jursmk AND dtraining.hasil=juruniv.id_juruniv ORDER BY id desc');
                                    $query->execute();
                                    $result=$query->get_result();
                                        while($row=$result->fetch_array()){
                                           echo '
                                           <tr id="dtrain'.$row['id'].'">
                                            <td>'.$no++.'</td>
                                            <td>'.$row['nama'].'</td>
                                            <td>'.$row['sm1'].'</td>
                                            <td>'.$row['sm2'].'</td>
                                            <td>'.$row['sm3'].'</td>
                                            <td>'.$row['sm4'].'</td>
                                            <td>'.$row['sm5'].'</td>
                                            <td>'.$row['sm6'].'</td>
                                            <td>'.$row['bindo'].'</td>
                                            <td>'.$row['bing'].'</td>
                                            <td>'.$row['mat'].'</td>
                                            <td>'.$row['komp'].'</td>                                            
                                            <td>'.$row['jurusan_smk'].'</td>                                            
                                            <td>'.$row['jurusan_univ'].'</td>
                                            <td>
                                            <a href="etraining?id='.$row['id'].'" class="btn btn-success btn-xs waves-effect"><i class="material-icons">edit</i></a>&nbsp;                                          
                                            <button onclick="DeleteDtrain('.$row['id'].')" class="btn btn-danger btn-xs waves-effect"><i class="material-icons">delete</i></button>
                                            </td>
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="../../js/ajaxfunc.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>