<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Beranda | SI Himpunan Alumni Amanatul Ummah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		background: url(../assets/img/bg.jpg) no-repeat;
		background-size: 300% 300%;
		background-position: center top;
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
		
      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
	  .logo{
		width : 290px;
		height : 290px;
	  }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }
	  
	  

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon-himah.jpg">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="berandaadmin.php"> <img src="../assets/img/logo-himah.png" width="25px" height="25px"/> SI-HIMAH</a>
            <div class="nav-collapse  navbar-responsive-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="berandaadmin.php"><i class="icon-home icon-white"></i> Beranda</a></li>
 
                <li><a href="tentangadmin.php"> <i class="icon-bookmark"> </i> Tentang</a></li
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				
				<li>
					<div class="btn-group">
					<a href="#" class="btn btn-primary"><i class="icon-user icon-white"></i> Admin</a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
					
						<li><a href="ubahdataadmin.php"><i class="icon-pencil"></i> Mengubah Data Admin</a></li>
						<li><a href="caridataalumni.php"><i class="icon-pencil"></i> Mengubah Data Alumni</a></li>
						<li><a href="tambahakun.php"><i class="icon-pencil"></i> Menambah Akun</a></li>
						
						
						<li class="divider"></li>
						<li class="nav-header">Pengaturan</li>
						
						<li><a href="ubahdataadmin.php"><i class="icon-lock"></i> Mengubah Password</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Akun</li>
						
						<li><a href="#"><i class="icon-off"></i> Keluar</a></li>
					</ul>
					</div>
				</li>
				
				
				
				
			 </ul>
				
			</div><!--/.nav-collapse -->
		  
		  
        </div>
      </div>
	 </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <center>
		  <h3>Selamat Datang di Sistem Informasi </h3>
		  <h3>Himpunan Alumni Amanatul Ummah (SI-HIMAH)</h3>
		  
			<a><img class="logo" src="../assets/img/logo-himah.png"> </a>
		  </center>
        </div>
			
		<div class="row-fluid">
        <!--<div class="span2"></div>-->
        <div class="span4">
          <p><a class="btn btn-large btn-block btn-primary" href="ubahdataadmin.php">Mengubah Data Admin</a></p>
          <p>Menu ini digunakan untuk mengubah data pribadi setiap admin agar data yang tersimpan menjadi data yang valid dan update.</p>
        </div>
		<div class="span4">
          <p><a class="btn btn-large btn-block btn-primary" href="tambahakun.php">Menambah Akun</a></p>
          <p>Menu ini digunakan untuk membuat akun alumni yang baru, agar data setiap alumni dapat disimpan di sistem ini.</p>
        </div>
		
	   <div class="span4">
          <p><a class="btn btn-large btn-block btn-primary" href="caridataalumni.php">Mengubah Data Alumni</a></p>
          <p>Menu ini digunakan untuk mengelola data alumni. Admin dapat mengubah data alumni dan juga menghapus data alumni yang tidak sesuai.</p>
       </div>
	   <!--<div class="span2"></div>-->
      </div>
	</div>

    </div>

    <div id="footer">
      <div class="container">
	  <br><br>
        <p class="text-right"> <a href="http://www.facebook.com/himah.pusat" target="_blank"> <img src="../assets/img/logo-fb.png" width="30px" height="30px" class="img-rounded"> Himah Pusat &nbsp</a> 
		
		
		<a href="http://www.twitter.com/himahpusat" target="_blank"> <img src="../assets/img/logo-twitter.png" width="30px" height="30px" class="img-rounded"> @himahpusat </a> </p>
		
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; Manajemen Proyek Perangkat Lunak (D) 2015</h5></center>
		</div>
		
		
      </div>
	 
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
