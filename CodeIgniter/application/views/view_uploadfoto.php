
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Upload Foto | SI Himpunan Alumni Amanatul Ummah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		background: url(../../assets/img/bg.jpg) no-repeat;
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
		width : 300px;
		height : 300px;
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
    
	
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>

	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../../assets/ico/favicon-himah.jpg">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="beranda.php"> <img src="../../assets/img/logo-himah.png" width="25px" height="25px"/> SI-HIMAH</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="../home"><i class="icon-home"></i> Beranda</a></li>
                <li><a href="profil"><i class="icon-user"></i> Profil</a></li>
                <li><a href="tentang"><i class="icon-bookmark"></i> Tentang</a></li
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				
				<li>
					<form class="form-search nav" method="post" action="carialumni">
						<div class=" navbar-search input-prepend">
						<button type="submit" class="btn"><i class="icon-search"></i></button>
						<input type="text" class="search-query span2" placeholder="Mencari Data Alumni" name="inputNama" id="inputNama">
						</div>
					</form>
				</li>
				
	
				<li>
					<div class="btn-group">
					<a href="profile.html" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $NamaLengkap; ?></a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="ubahdatapribadi.php"><i class="icon-pencil"></i> Mengubah Data</a></li>
						
						<li class="active"><a href="uploadfoto"><i class="icon-camera"></i> Upload Foto</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Pengaturan</li>
						
						<li><a href="ubahdatapribadi.php"><i class="icon-lock"></i> Mengubah Password</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Akun</li>
						
						<li><a href="#"><i class="icon-off"></i> Keluar</a></li>
					</ul>
					</div>
				</li>
			
			  </ul>
				
			</div> <!--/.nav-collapse -->
		  
		  
        </div>
      </div>
		</div>

	<!--Upload Foto-->
	<div class="container">
			<?php 
			if($status == 1)
			{
				echo '<center><h4>Gambar berhasil diunggah</h4></center>';
			}
			else if($status == 2)
			{
				echo '<center><h4>Maaf terdapat kesalahan ketika mengunggah gambar</h4></center>';
			}
			else if($status == 3)
			{
				echo '<center><h4>Silakan pilih gambar yang akan diunggah</h4></center>';
			}
			else if($status == 4)
			{
				echo '<center><h4>Ukuran gambar terlalu besar</h4></center>';
			}
			else if($status == 5)
			{
				echo '<center><h4>Format file gambar tidak tepat</h4></center>';
			}
			?>
			<center><h2>Upload Foto</h2></center>
			<br>
		<div class="row">
			<div class="span12">
				<ul class="nav nav-list bs-docs-sidenav">
					<li>
						<center><img src="
						<?php 
						if($link == ''){
							echo "../../assets/img/default-foto.png";	
						}
						else
						{
							echo $link;
						}
						?>" width="200px" height="200px" class="img-polaroid">
							<h4>Unggah Foto :</h4>
							<p style="font-size: 16px; color: #003bb3"><i class="icon-ok"></i> Ukuran max 300 kB <br>
							<i class="icon-ok"></i> Tipe file : jpg. jpeg, png</p></center>
					<form class="form-search" action="uploadfoto" method="post" enctype="multipart/form-data">
						<center>
							<input type="file" name="fileToUpload" id="fileToUpload"><br>
							<button class="btn btn-primary" type="submit" data-loading-text="Loading..." name="submit">Unggah</button>
						</center>
					</form>
					</li>
				</ul>       
			</div>
		</div>
	</div>
	
	</div>

    <div id="footer">
      <div class="container">
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3"> Copyright &copy; Manajemen Proyek Perangkat Lunak (D) 2015</h5></center>
		</div>
      </div>
    </div>

  </body>
</html>
