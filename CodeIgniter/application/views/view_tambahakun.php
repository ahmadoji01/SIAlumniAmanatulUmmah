<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tambah Akun | SI Himpunan Alumni Amanatul Ummah</title>
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
    <!--Javascript-->
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
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="berandaadmin.php"> <img src="../assets/img/logo-himah.png" width="25px" height="25px"/> SI-HIMAH</a>
            <div class="nav-collapse navbar-responsive-collapse collapse">
              <ul class="nav">
                <li><a href="berandaadmin.php"><i class="icon-home"></i> Beranda</a></li>
             
                <li><a href="tentangadmin.php"><i class="icon-bookmark"></i> Tentang</a></li
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			
			<ul class="nav pull-right">
			
				<li>
					<div class="btn-group">
					<a href="profile.html" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $NamaLengkap . " "; ?>(sebagai admin)</a>
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

      <!-- Mengubah Data Pribadi -->
      <div class="container">
			<center><h2>Menambah Akun</h2></center>
	  <div class="span2" >
	  </div>
      <div class="span7">
          <form class="form-horizontal" name="login" action="update_db.php" method="POST">
          <div class="accordion" id="accordion2">
            
			<!--Informasi Umum-->
			<div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> INFORMASI UMUM
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="span6">
                        <!-- Nama Lengkap -->
                        <div class="control-group">
                            <label class="control-label" for="namaLengkap" style="text-align: left">Nama Lengkap</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="namaLengkap" name="namaLengkap" value="" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <!-- Nama Panggilan -->
                        <div class="control-group">
                            <label class="control-label" for="namaPanggilan" style="text-align: left">Nama Panggilan</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="namaPanggilan" name="namaPanggilan" value="" placeholder="Nama Panggilan">
                            </div>
                        </div>
                        
                        <!-- Jenis Kelamin -->
                        <div class="control-group">
                            <label class="control-label" for="inputJenisKelamin" style="text-align: left">Jenis Kelamin</label>
                            <div class="controls">                                
                                <label class="radio">
                                    <input type="radio" name="inputJenisKelamin" id="inputStatus2" value="1"checked>Laki-laki
                                </label>
                                <label class="radio">
                                    <input type="radio" name="inputJenisKelamin" id="inputStatus3" value="2">Perempuan
                                </label>
                            </div>
                        </div>
                        
						<!--Tempat Tangga Lahir-->
						<div class="control-group">
                            <label class="control-label" for="inputTTL" style="text-align: left">Tempat-Tanggal Lahir</label>
                            <div class="controls">
                                <input  style="width:110px;" class="span3" type="text" id="inputTempat" name="inputTempatLahir" value="" placeholder="Tempat Lahir"> - 
                                <input  style="width:145px;" class="span3" type="date" id="inputTempat" name="inputTanggalLahir" value="" placeholder="Tanggal Lahir">
                            </div>
                        </div>
						
						<!--Nama Lembaga-->
						<div class="control-group">
						<label class="control-label" for="inputCabang" style="text-align: left">Nama Lembaga</label>
							<div class="controls"> 
							
								<select>
										<option>MA Unggulan Amanatul Ummah Surabaya	</option>
										<option>MA Akselerasi Amanatul Ummah Surabaya</option>
										<option>SMA Unggulan Amanatul Ummah Surabaya</option>
										<option>MBI Amanatul Ummah Surabaya</option>
										<option>MA Akselerasi Amanatul Ummah Pacet</option>
										<option>MBI Amanatul Ummah Pacet</option>
										<option>SMA Berbasis Pesantren Amanatul Ummah Pacet</option>
										<option>SMA Bendungan Jati Hikmatul Amanah Pacet</option>
										
								</select>
							</div>
							
						</div>
						
						<!--Tahun Lulus-->
						<div class="control-group">
                            <label class="control-label" for="tahunLulus" style="text-align: left">Tahun Lulus</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="tahunLulus" name="tahunLulus" value="" placeholder="Tahun Lulus">
                            </div>
                        </div>
						
						<!--Cabang-->
						<div class="control-group">
						<label class="control-label" for="inputCabang" style="text-align: left">Cabang PTN/PTS</label>
							<div class="controls"> 
							
								<select>
										<option>Surabaya</option>
										<option>Sidoarjo</option>
										<option>Mojokerto</option>
										<option>Malang</option>
										<option>Jember</option>
										<option>Madura</option>
										<option>Yogyakarta</option>
										<option>Semarang</option>
										<option>Solo</option>
										<option>Jakarta</option>
										<option>Bogor</option>
										<option>Bandung</option>
										<option>Indramayu</option>
								</select>
							</div>
							
						</div>
						
		
						<!--Alamat Asal-->
						<div class="control-group">
                            <label class="control-label" for="inputAlamatAsal" style="text-align: left">Alamat Asal</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputAlamatAsal" name="inputAlamatAsal" placeholder="Alamat Asal" required> </textarea>
                            </div>
                        </div>
						
						<!--Alamat Sekarang-->
						<div class="control-group">
                            <label class="control-label" for="inputAlamatSekarang" style="text-align: left">Alamat Sekarang</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputAlamatSekarang" name="inputAlamatSekarang" placeholder="Alamat Sekarang" required> </textarea>
                            </div>
                        </div>
						
						<!-- No HP + Provider -->
                        <div class="control-group">
                            <label class="control-label" for="inputNoHP" style="text-align: left">Nomor Handphone</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">+62</span>
                                    <input class="input-medium" class="span2" id="inputNoHP" name="inputNoHP" type="text" value="" placeholder="81234....." required>                                    
                                </div>
                                <input style="width:80px;" class="input-small" id="inputOperator" name="inputOperator" type="text" value="" placeholder="Operator" required><em>*wajib diisi</em>
                            </div>
                        </div>						
                        <!-- Email -->
                        <div class="control-group">
                            <label class="control-label" for="inputEmail" style="text-align: left">Email</label>
                            <div class="controls">
                                <input class="input-xlarge" class="span3" type="email" id="inputEmail" name="inputEmail" value="" placeholder="yourname@email.com" required>
                            </div>
                        </div>
			
				  </div>
				  </div>
      </div>
	  
	  <!--Informasi Lanjut-->
	  <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> INFORMASI LANJUTAN
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="span6">
                        
						<!--Kuliah-->
						<div class="control-group">
                            <label class="control-label" for="inputKuliah" style="text-align: left">Kuliah<br><em>*Teknik Informatika - ITS</em></label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputKuliah" name="inputKuliah" placeholder="Kuliah"> </textarea>
                            </div>
                        </div>
						
                        <!-- Aktif Organisasi -->
                        <div class="control-group">
                            <label class="control-label" for="inputAktifOrganisasi" style="text-align: left">Aktif Organisasi</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputAktifOrganisasi" name="inputAlamatAsal" placeholder="Aktif Organisasi"> </textarea>
                            </div>
                        </div>
						
						<!-- Bekerja -->
                        <div class="control-group">
                            <label class="control-label" for="inputBekerja" style="text-align: left">Bekerja</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputBekerja" name="inputBekerja" placeholder="Bekerja"> </textarea>
                            </div>
                        </div>
						
                        <!-- Hobby -->
                        <div class="control-group">
                            <label class="control-label" for="inputHobi" style="text-align: left">Hobi</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="3" id="inputHobi" name="inputHobi" placeholder="Hobi"> </textarea>
                            </div>
                        </div>
						
						<!--Prestasi-->
                        <div class="control-group">
                            <label class="control-label" for="inputPrestasi" style="text-align: left">Prestasi</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="4" id="inputPrestasi" name="inputPrestasi" placeholder="Prestasi"> </textarea>
                            </div>
                        </div>
						
                        <!-- Cita-cita -->
                        <div class="control-group">
                            <label class="control-label" for="inputCita" style="text-align: left">Cita-cita</label>
                            <div class="controls">
                                 <textarea class="input-xlarge" rows="3" id="inputCita" name="inputCita" placeholder="Cita-cita"> </textarea>
                            </div>
                        </div>							
                        <!-- Motto -->
                        <div class="control-group">   
                            <label class="control-label" for="inputMotto" style="text-align: left">Motto</label>
                            <div class="controls">
                                <textarea class="input-xlarge" rows="3" id="inputMotto" name="inputMotto" placeholder="Motto"> </textarea>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
	
	<!--Informasi Orang-Tua -->
		   <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                 <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> INFORMASI ORANG-TUA
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="span6">
                        
						<!-- Nama Orang-Tua -->
                        <div class="control-group">
                            <label class="control-label" for="namaOrangTua" style="text-align: left">Nama Orang-Tua</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="inputNamaOrangTua" name="inputNamaOrangTua" value="" placeholder="Nama Orang-Tua">
                            </div>
                        </div>
						
						<!--Pendidikan Terakhir-->
                        <div class="control-group">
                            <label class="control-label" for="pendidikanTerakhir" style="text-align: left">Pendidikan Terakhir</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="inputPendidikanTerakhir" name="inputPendidikanTerakhir" value="" placeholder="Pendidikan Terakhir">
                            </div>
                        </div>	
						
						<!--Pekerjaan-->
                        <div class="control-group">
                            <label class="control-label" for="pekerjaan" style="text-align: left">Pekerjaan</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="inputPekerjaan" name="inputPekerjaan" value="" placeholder="Pekerjaan">
                            </div>
                        </div>
                        		
						
                        <!-- Kontak Ortu -->
                        <div class="control-group">
                            <label class="control-label" for="inputKontakOrtu" style="text-align: left">Kontak Ortu</label>
                            <div class="controls">
                                <input class="input-xlarge" type="text" id="inputKontakOrtu" name="inputKontakOrtu" value="" placeholder="Kontak Bapak/Ibu">
                            </div>
                        </div>
                     
                    </div>
                </div>
              </div>
            </div>
	
	<!--Sosial Media-->
	<div class="accordion-group">
              <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                      <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> SOSIAL MEDIA
                  </a>
              </div>
                  <div id="collapseFour" class="accordion-body collapse">
                      <div class="accordion-inner">
                          <div class="tabbable tabs-left">
                              <ul class="nav nav-tabs" id="myTab">
                                  <li class="active"><a href="#facebook"><img src="../assets/img/logo-fb.png" width="70px" height="70px"></a></li>
                                  <li><a href="#twitter"><img src="../assets/img/logo-twitter.png" width="70px" height="70px"></a></li>
                                  <li><a href="#blog"><img src="../assets/img/logo-blog.png" width="70px" height="70px"></a></li>
								 
                              </ul>
                              <div class="tab-content">
                                  <div class="tab-pane active" id="facebook">
                                      <blockquote><h3>Facebook</h3></blockquote>
                                      <div class="control-group">
                                          <label class="control-label" for="inputNamaProfil">Nama Profil</label>
                                          <div class="controls">
                                              <input type="text" id="inputNamaProfil" name="inputNamaProfil" placeholder="Nama Profil Facebook" value="">
                                          </div>
                                      </div>
                                      <div class="control-group">
                                          <label class="control-label" for="inputLinkFB">Link Profil Facebook</label>
                                          <div class="controls">
                                              <input type="text" id="inputLinkFB" name="inputLinkFB" placeholder="Link Profil Facebook" value="">
                                          </div>
                                      </div>
                                  </div>
                                <div class="tab-pane" id="twitter">
                                      <blockquote><h3>Twitter</h3></blockquote>
                                      <div class="control-group">
                                          <label class="control-label" for="inputIDTwitter">ID Twitter</label>
                                          <div class="controls">
                                              <input type="text" id="inputIDTwitter" name="inputIDTwitter" placeholder="ID Twitter (ex : @namatwitter" value="">
                                          </div>
                                      </div>
                                      <div class="control-group">
                                          <label class="control-label" for="inputLinkTwitter">Link Profil Twitter</label>
                                          <div class="controls">
                                              <input type="text" id="inputLinkTwitter" name="inputLinkTwitter" placeholder="Link Profil Twitter" value="">
                                          </div>
                                      </div>
                                </div>
                                <div class="tab-pane" id="blog">
                                      <blockquote><h3>Blog/Website</h3></blockquote>
                                      <div class="control-group">
                                         <label class="control-label" for="inputAlamatBlog">Alamat Website</label>
                                          <div class="controls">
                                              <input type="text" id="inputAlamatWebsite" name="inputAlamatBlog" placeholder="Alamat Blog/Website" value="">
                                          </div>
                                      </div>
                                </div>
                              </div>
                          </div>  
                      </div>
                  </div>
              </div>
     
	 <!--Ganti Username dan Password-->
		 <div class="accordion-group">
              <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                      <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> GANTI USERNAME DAN PASSWORD
                  </a>
              </div>
                  <div id="collapseFive" class="accordion-body collapse">
                      <div class="accordion-inner">
						<div class="span6">
							
							<!--Ganti Username-->
							<div class="control-group">
								<label class="control-label" for="inputUsername" style="text-align: left">Username</label>
								<div class="controls">
									<input class="input-xlarge" type="text" id="inputUsername" name="inputUsername" value="" placeholder="Username">
								</div>
							</div>
							 
							 <!--Password Lama-->
							 <div class="control-group">
								<label class="control-label" for="inputPasswordLama" style="text-align: left">Password Lama</label>
								<div class="controls">
									<input class="input-xlarge" type="password" id="inputPassword" name="inputPasswordLama" value="" placeholder="Password Lama">
								</div>
							</div>
							 
							 <!--Password Baru-->
							 <div class="control-group">
								<label class="control-label" for="inputPasswordBaru" style="text-align: left">Password Baru</label>
								<div class="controls">
									<input class="input-xlarge" type="password" id="inputPasswordBaru" name="inputPasswordBaru" value="" placeholder="Password Baru">
								</div>
							</div>
							 
							 
							 <!--Ulangi Password Baru-->
							 <div class="control-group">
								<label class="control-label" for="inputUlangiPasswordBaru" style="text-align: left">Ulangi Password Baru</label>
								<div class="controls">
									<input class="input-xlarge" type="password" id="inputUlangiPasswordBaru" name="inputUlangiPasswordBaru" value="" placeholder="Konfirmasi Password">
								</div>
							</div>
							
						
						</div>
						
					   </div>
				  </div>
		</div>
		 
		
		 
		 
		 </div>
		</div>
		<center>
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
        </center>
       <div id="push"></div>
		</div>
	   </form>
	    </div>
	</div>
		<script>
			$('#myTab a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
			})
		</script>
			<br>
    <div id="footer">
      <div class="container">
			<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; Manajemen Proyek Perangkat Lunak (D) 2015</h5></center>
		</div>
      </div>
    </div>

  </body>
</html>
