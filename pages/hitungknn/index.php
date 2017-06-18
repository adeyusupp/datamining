<?php
require_once('../conf/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Hitung KNN | </title>
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
                    <li class="active">
                        <a href="./">
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
            <!-- Nilai K-->
            <?php
                    if(isset($_POST['hitung'])){
                        //deklarasi variabel
                        $nama2=$_POST['nama'];
                        $jursmk=$_POST['jursmk'];
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
                        
                        //proses perhitungan distance
                        $query = $conn->query("SELECT * FROM dtraining,jursmk WHERE dtraining.jurusan='$jursmk' AND dtraining.jurusan=jursmk.id_jursmk");                
                        while($row=$query->fetch_array()){
                            $nama=$row['nama'];
                            $hasil=$row['hasil'];
                            $nsm1=$row['sm1'];
                            $nsm2=$row['sm2'];
                            $nsm3=$row['sm3'];
                            $nsm4=$row['sm4'];
                            $nsm5=$row['sm5'];
                            $nsm6=$row['sm6'];
                            $nind=$row['bindo'];
                            $ning=$row['bing'];
                            $nmtk=$row['mat'];
                            $nkom=$row['komp'];

                            $msm1=(($sm1 - $nsm1));                            
                            $psm1=pow($msm1, 2);
                            $msm2=(($sm2 - $nsm2));                            
                            $psm2=pow($msm2, 2);
                            $msm3=(($sm3 - $nsm3));                            
                            $psm3=pow($msm3, 2);
                            $msm4=(($sm4 - $nsm4));                            
                            $psm4=pow($msm4, 2);
                            $msm5=(($sm5 - $nsm5));                            
                            $psm5=pow($msm5, 2);
                            $msm6=(($sm6 - $nsm6));                            
                            $psm6=pow($msm6, 2);
                            $mind=(($ind - $nind));                            
                            $pind=pow($mind, 2);
                            $ming=(($ing - $ning));                            
                            $ping=pow($ming, 2);
                            $mmtk=(($mtk - $nmtk));                            
                            $pmtk=pow($mmtk, 2);
                            $mkom=(($kom - $nkom));                            
                            $pkom=pow($mkom, 2);

                            $ptot=($psm1+$psm2+$psm3+$psm4+$psm5+$psm6+$pind+$ping+$pmtk+$pkom);
                            $atot=sqrt($ptot);
                            //memasukan data yang sudah dihtung distancenya kedalam temporary1
                            $SQL = $conn->prepare('INSERT INTO tmp1(nama,distance,hasil) VALUES(?,?,?)');
                            $SQL->bind_param('sds',$nama,$atot,$hasil);
                            $SQL->execute();                      
                        }
                        $query1 = $conn->query("SELECT k FROM setting");                
                        $row1=$query1->fetch_array();
                        $k=$row1['k'];
                        //mengurutkan distace dari nilai terkcil dan diambil sebanyak nilai k
                        $query2 = $conn->query("SELECT * FROM tmp1 ORDER BY distance asc limit 0 , $k");                
                        while($row2=$query2->fetch_array()){
                        $distance=$row2['distance'];
                        $hasil=$row2['hasil'];
                        //Memasukan data yang sudah disortir ke temporary2
                        $SQL1 = $conn->prepare('INSERT INTO tmp2(distance,hasil) VALUES(?,?)');
                        $SQL1->bind_param('ds',$distance,$hasil);
                        $SQL1->execute();  
                        }   
                            //Menghitung hasil jurusan terbanyak dengan distance terkecil
                            $query3 = $conn->query("SELECT hasil, count(hasil) as max from tmp2 group by hasil having count(hasil)=(select max(mycount) as lol from ( select hasil , count(hasil) as mycount from tmp2 group by hasil)as t)");                
                            while($row3=$query3->fetch_array()){
                                $hasil2=$row3['hasil'];                                
                            }                        
                        //get data jurusan SMK
                        $query4 = $conn->query("SELECT * FROM jursmk WHERE id_jursmk='$jursmk'");                
                        $row4=$query4->fetch_array();
                        $jursmk2=$row4['jurusan_smk'];      
                        //get data jurusan UNIVERSITAS
                        $query5 = $conn->query("SELECT * FROM juruniv WHERE id_juruniv='$hasil2'");                
                        $row5=$query5->fetch_array();
                        $juruniv2=$row5['jurusan_univ'];         
                    ?>
            <!-- Hasil Perhitungan-->
            <div class="row clearfix">                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Hasil Perhitungan
                            </h2> 
                            <small>Hasil perhitungan dari algoritma KNN</small>                                                   
                        </div>
                        <div class="body">
                            <div class="form-horizontal">
                            <form method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama2; ?>">
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
                                                <input disabled type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $jursmk2; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password_2">Prediksi Jurusan Di Universitas</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input disabled type="text" class="form-control" placeholder="Prediksi Jurusan Di Universitas" name="nama" value="<?php echo $juruniv2; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hasil Perhitungan -->
                    <?php 
                        //hapus data temporary
                        $SQL2 = $conn->prepare('DELETE FROM tmp1');
                        $SQL2->execute();
                        $SQL3 = $conn->prepare('DELETE FROM tmp2');
                        $SQL3->execute();                    
                    }                         
                    ?>
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                    
                    <div class="card">
                        <div class="header">
                            <h2>
                                Hitung KNN                                
                            </h2>
                            <small>Masukan informasi dasar untuk perhitungan.</small>
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
                                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
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
                                                        $query6=$conn->query("SELECT * FROM jursmk");                
                                                        while($row6=$query6->fetch_array()){
                                                            echo'<option value="'.$row6['id_jursmk'].'">'.$row6['jurusan_smk'].'</option>';
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
                                <input name="hitung" type="submit" class="btn btn-primary m-t-15 waves-effect" value="Hitung">
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