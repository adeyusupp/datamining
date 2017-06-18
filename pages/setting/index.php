<?php
require_once('../conf/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Setting | </title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
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
                    <li>
                        <a href="../dtraining">
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
                    <li class="active">
                        <a href="./">
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
            <!-- Nilai K-->
            <div class="row clearfix">                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Nilai K
                            </h2> 
                            <small>Update nilai K</small>                                                   
                        </div>
                        <div class="body">
                            <?php
                            //Show data from table setting
                            $query = $conn->query("SELECT * FROM setting");                
                            $row=$query->fetch_array();    
                            $k2=$row['k'];
                            //update data K
                            if(isset($_POST['update'])){
                                $k=$_POST['k'];
                                $SQL=$conn->prepare("UPDATE setting SET k='$k'");
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
                                       echo'<meta http-equiv="refresh" content="0">';   
                                    } 
                            }
                            ?>
                            <form id="add_data" method="POST">                                              
                                <div class="form-group form-float">
                                    <div class="form-line">
                                         <input name="k" type="number" class="form-control" max="19" min="3" step="2" value="<?php echo $k2; ?>" required>
                                         <label class="form-label">Nilai K</label>
                                    </div>
                                </div>
                                <input name="update" type="submit" class="btn btn-primary m-t-15 waves-effect" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Nilai K -->
            <div class="row clearfix">
                <!-- Table Data Jurusan SMK -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Jurusan SMK
                            </h2>
                            <div class="header-button">
                            <button type="button" class="btn bg-blue waves-effect m-r-20" data-toggle="modal" data-target="#addsmk">Tambah Data</button>                            
                            </div>                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jurusan</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    $query = $conn->prepare('SELECT * FROM jursmk');
                                    $query->execute();
                                    $result=$query->get_result();
                                        while($row=$result->fetch_array()){
                                           echo '
                                           <tr id="smk'.$row['id_jursmk'].'">
                                            <td>'.$no++.'</td>
                                            <td id="jursmk'.$row['id_jursmk'].'">'.$row['jurusan_smk'].'</td>
                                            <input id="jur'.$row['id_jursmk'].'" type="hidden"  value="'.$row['jurusan_smk'].'">                                           
                                            <td>
                                                <button onclick="EditJurSmk('.$row['id_jursmk'].')" type="button" class="smk btn btn-success btn-xs waves-effect" data-toggle="modal" data-target="#editsmk"><i class="material-icons">edit</i></button>&nbsp;                                                
                                                <button onclick="DeleteJurSmk('.$row['id_jursmk'].')" class="smk btn btn-danger btn-xs waves-effect"><i class="material-icons">delete</i></button>
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
                <!-- #END# Table Data Jurusan SMK -->  
                <!-- Table Data Jurusan Universitas -->  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Jurusan Universitas
                            </h2>
                            <div class="header-button">
                                <button type="button" class="btn bg-blue waves-effect m-r-20" data-toggle="modal" data-target="#adduniv">Tambah Data</button>                            
                            </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jurusan</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    $query = $conn->prepare('SELECT * FROM juruniv');
                                    $query->execute();
                                    $result=$query->get_result();
                                        while($row=$result->fetch_array()){
                                           echo '
                                           <tr id="univ'.$row['id_juruniv'].'">
                                            <td>'.$no++.'</td>
                                            <td id="juruniv'.$row['id_juruniv'].'">'.$row['jurusan_univ'].'</td>  
                                            <input id="jurunv'.$row['id_juruniv'].'" type="hidden"  value="'.$row['jurusan_univ'].'">                                           
                                            <td>
                                            <button onclick="EditJurUniv('.$row['id_juruniv'].')" type="button" class="smk btn btn-success btn-xs waves-effect" data-toggle="modal" data-target="#edituniv"><i class="material-icons">edit</i></button>&nbsp; 
                                            <button onclick="DeleteJurUniv('.$row['id_juruniv'].')" class="smk btn btn-danger btn-xs waves-effect"><i class="material-icons">delete</i></button>
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
            <!-- #END# Table Data Jurusan Universitas -->  
            <!-- Modal Edit Jurusan SMK -->      
            <div class="modal fade" id="editsmk" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data Jurusan SMK</h4>
                            <div class="header-button">
                                <button type="button" class="close" data-dismiss="modal"><i class="material-icons">close</i></button>                            
                            </div>
                        </div>
                        <div class="modal-body">                                            
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">control_point</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="hidden" name="id_jursmk">
                                        <input type="text" class="form-control" name="jursmk" placeholder="Jurusan SMK" required>
                                    </div>
                                </div>
                                <button onclick="UpdateJurSmk()" class="btn btn-block btn-lg bg-pink waves-effect">Simpan</button>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- #END# Modal Edit Jurusan SMK -->   
            <!-- Modal Edit Jurusan Univ -->      
            <div class="modal fade" id="edituniv" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data Jurusan SMK</h4>
                            <div class="header-button">
                                <button type="button" class="close" data-dismiss="modal"><i class="material-icons">close</i></button>                            
                            </div>
                        </div>
                        <div class="modal-body">                                        
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">control_point</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="hidden" name="id_juruniv">
                                        <input type="text" class="form-control" name="juruniv" placeholder="Jurusan Universitas" required>
                                    </div>
                                </div>
                                <button onclick="UpdateJurUniv()" class="btn btn-block btn-lg bg-pink waves-effect">Simpan</button>
                        </div>                     
                    </div>
                </div>
            </div>
            <!-- #END# Modal Edit Jurusan Univ -->   
            <!-- Modal Tambah Jurusan SMK -->      
            <div class="modal fade" id="addsmk" tabindex="-1" role="dialog">
                <?php 
                if(isset($_POST['simpansmk'])){
                    $jursmk=$_POST['jursmk'];

                    $SQL = $conn->prepare('INSERT INTO jursmk(jurusan_smk) VALUES(?)');
                    $SQL->bind_param('s',$jursmk);
                    $SQL->execute();
                    
                    echo'<meta http-equiv="refresh" content="0">';  
                }
                ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data Jurusan SMK</h4>
                            <div class="header-button">
                                <button type="button" class="close" data-dismiss="modal"><i class="material-icons">close</i></button>                            
                            </div>
                        </div>
                        <div class="modal-body">
                            <form id="add_data" method="POST">                                              
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">control_point</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jursmk" placeholder="Jurusan SMK" required>
                                    </div>
                                </div>
                                    <input type="submit" class="btn btn-block btn-lg bg-pink waves-effect" value="Simpan" name="simpansmk">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- #END# Modal Tambah Jurusan SMK --> 
            <!-- Modal Tambah Jurusan Universitas --> 
            <div class="modal fade" id="adduniv" tabindex="-1" role="dialog">
                <?php 
                if(isset($_POST['simpanuniv'])){
                    $juruniv=$_POST['juruniv'];

                    $SQL = $conn->prepare('INSERT INTO juruniv(jurusan_univ) VALUES(?)');
                    $SQL->bind_param('s',$juruniv);
                    $SQL->execute();
                    
                    echo'<meta http-equiv="refresh" content="0">';  
                }
                ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data Jurusan Universitas</h4>
                            <div class="header-button">
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"><i class="material-icons">close</i></button>                            
                            </div>
                        </div>
                        <div class="modal-body">
                            <form id="add_data" method="POST">                                              
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">control_point</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="juruniv" placeholder="Jurusan Universitas" autofocus required>
                                    </div>
                                </div>                               
                                    <input type="submit" class="btn btn-block btn-lg bg-pink waves-effect" value="Simpan" name="simpanuniv">                                                                    
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- #END# Modal Tambah Jurusan Universitas -->
            
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

     <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="../../js/pages/ui/modals.js"></script>
    <script src="../../js/pages/examples/add-training.js"></script>
    <script src="../../js/ajaxfunc.js"></script>

     <!-- Jquery Validation Plugin-->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <script src="../../plugins/jquery-validation/localization/messages_id.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>