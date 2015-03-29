<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ubah Data Alumni | SI Himpunan Alumni Amanatul Ummah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../../../assets/css/bootstrap-responsive.css" rel="stylesheet">
	
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		background: url(../../../assets/img/bg.jpg) no-repeat;
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
	<script src="../../../assets/js/jquery.js"></script>
	<script src="../../../assets/js/bootstrap-transition.js"></script>
    <script src="../../../assets/js/bootstrap-alert.js"></script>
    <script src="../../../assets/js/bootstrap-modal.js"></script>
    <script src="../../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../../assets/js/bootstrap-tab.js"></script>
    <script src="../../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../../assets/js/bootstrap-popover.js"></script>
    <script src="../../../assets/js/bootstrap-button.js"></script>
    <script src="../../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../../assets/js/bootstrap-typeahead.js"></script>
    

	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../../../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../../../assets/ico/favicon-himah.jpg">
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
            <a class="brand" href="../../home"> <img src="../../../assets/img/logo-himah.png" width="25px" height="25px"/> SI-HIMAH</a>
            <div class="nav-collapse navbar-responsive-collapse collapse">
              <ul class="nav">
                <li><a href="../../home"><i class="icon-home"></i> Beranda</a></li>
      
                <li><a href="../../pilihadmin/tentang"><i class="icon-bookmark"></i> Tentang</a></li>
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			
			<ul class="nav pull-right">
				
				
	
				<li>
					<div class="btn-group">
					<a href="" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $NamaLengkapAtas . " "; ?>(sebagai admin)</a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../../pilihadmin/ubahdataadmin"><i class="icon-pencil"></i> Mengubah Data Admin</a></li>
						<li><a href="../../pilihadmin/tambahakun"><i class="icon-pencil"></i> Menambah Akun</a></li>
						<li><a href="../../pilihadmin/ubahdataalumni"><i class="icon-pencil"></i> Mengubah Data Alumni</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Pengaturan</li>
						
						<li><a href="../../pilihadmin/ubahdataadmin"><i class="icon-lock"></i> Mengubah Password</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Akun</li>
						
						<li><a href="../../home/sign_out"><i class="icon-off"></i> Keluar</a></li>
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
			<center><h2>Mengubah Data Alumni</h2></center>
	  <center style="color:red;">&nbsp &nbsp * (wajib diisi)</center>
			<br>
			<!--center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
			<br>
			<center style="background-color:red; color:white;">&nbsp &nbsp tes</center>
			<br-->
			<?php
				if ($nama_lengkap_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_lengkap_kosong . "</center><br>";
				if ($jenis_kelamin_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $jenis_kelamin_kosong . "</center><br>";
				if ($nama_lembaga_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_lembaga_kosong . "</center><br>";
				if ($tahun_lulus_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $tahun_lulus_kosong . "</center><br>";
				if ($username_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $username_kosong . "</center><br>";
				if ($password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_kosong . "</center><br>";
				if ($ulangi_password_kosong) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $ulangi_password_kosong . "</center><br>";
				if ($nama_lembaga_tidak_terdaftar) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $nama_lembaga_tidak_terdaftar . "</center><br>";
				if ($format_email_salah) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $format_email_salah . "</center><br>";
				if ($username_sudah_ada) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $username_sudah_ada . "</center><br>";
				if ($password_dan_ulangi_password_tidak_sama) echo "<center style='background-color:red; color:white;'>&nbsp &nbsp " . $password_dan_ulangi_password_tidak_sama . "</center><br>";
			?>
	  <div class="span2" >
	  </div>
      <div class="span7">
          <form class="form-horizontal" name="login" action="../../pilihadmin/do_gantidataalumni" method="post">
          <div class="accordion" id="accordion2">
            
			<!--tidak terlihat-->
			<input name="alamatUsernameTujuan" type="hidden" value="<?php echo ($Username ? $Username : "");?>">
			
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
                            <label class="control-label" for="namaLengkap" style="text-align: left">Nama Lengkap <span style="color:red;">*</span></label>
                            <div class="controls">
                                <input name="namaLengkap" class="input-xlarge" type="text" id="namaLengkap" value="<?php echo ($NamaLengkap ? $NamaLengkap : "");?>" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <!-- Nama Panggilan -->
                        <div class="control-group">
                            <label class="control-label" for="namaPanggilan" style="text-align: left">Nama Panggilan</label>
                            <div class="controls">
                                <input name="namaPanggilan" class="input-xlarge" type="text" id="namaPanggilan" value="<?php echo ($NamaPanggilan ? $NamaPanggilan : "");?>" placeholder="Nama Panggilan">
                            </div>
                        </div>
                        
                        <!-- Jenis Kelamin -->
                        <div class="control-group">
                            <label class="control-label" for="inputJenisKelamin" style="text-align: left">Jenis Kelamin <span style="color:red;">*</span></label>
                            <div class="controls">                                
                                <label class="radio">
                                    <input name="inputJenisKelamin" type="radio" id="inputStatus2" value="L" <?php echo ($JenisKelamin=='L' ? "checked" : "");?>>Laki-laki
                                </label>
                                <label class="radio">
                                    <input name="inputJenisKelamin" type="radio" id="inputStatus3" value="P" <?php echo ($JenisKelamin=='P' ? "checked" : "");?>>Perempuan
                                </label>
                            </div>
                        </div>
                        
						<!--Tempat Tangga Lahir-->
						<div class="control-group">
                            <label class="control-label" for="inputTTL" style="text-align: left">Tempat-Tanggal Lahir</label>
                            <div class="controls">
                                <input name="inputTempatLahir" style="width:110px;" class="span3" type="text" id="inputTempat" value="<?php echo ($TempatLahir ? $TempatLahir : "");?>" placeholder="Tempat Lahir"> - 
                                <input name="inputTanggalLahir" style="width:145px;" class="span3" type="date" id="inputTempat" value="<?php echo ($TanggalLahir ? $TanggalLahir : "");?>" placeholder="Tanggal Lahir">
                            </div>
                        </div>
						
						<!--Nama Lembaga-->
						<div class="control-group">
						<label class="control-label" for="inputCabangLembaga" style="text-align: left">Nama Lembaga <span style="color:red;">*</span></label>
							<div class="controls"> 
							
								<select name="inputCabangLembaga">
										<option <?php echo ($Lembaga=='MA Unggulan Amanatul Ummah Surabaya' ? "selected" : "");?>>MA Unggulan Amanatul Ummah Surabaya	</option>
										<option <?php echo ($Lembaga=='MA Akselerasi Amanatul Ummah Surabaya' ? "selected" : "");?>>MA Akselerasi Amanatul Ummah Surabaya</option>
										<option <?php echo ($Lembaga=='SMA Unggulan Amanatul Ummah Surabaya' ? "selected" : "");?>>SMA Unggulan Amanatul Ummah Surabaya</option>
										<option <?php echo ($Lembaga=='MBI Amanatul Ummah Surabaya' ? "selected" : "");?>>MBI Amanatul Ummah Surabaya</option>
										<option <?php echo ($Lembaga=='MA Akselerasi Amanatul Ummah Pacet' ? "selected" : "");?>>MA Akselerasi Amanatul Ummah Pacet</option>
										<option <?php echo ($Lembaga=='MBI Amanatul Ummah Pacet' ? "selected" : "");?>>MBI Amanatul Ummah Pacet</option>
										<option <?php echo ($Lembaga=='SMA Berbasis Pesantren Amanatul Ummah Pacet' ? "selected" : "");?>>SMA Berbasis Pesantren Amanatul Ummah Pacet</option>
										<option <?php echo ($Lembaga=='SMA Bendungan Jati Hikmatul Amanah Pacet' ? "selected" : "");?>>SMA Bendungan Jati Hikmatul Amanah Pacet</option>
										
								</select>
							</div>
							
						</div>
						
						<!--Tahun Lulus-->
						<div class="control-group">
                            <label class="control-label" for="tahunLulus" style="text-align: left">Tahun Lulus <span style="color:red;">*</span></label>
                            <div class="controls">
                                <input name="tahunLulus" class="input-xlarge" type="text" id="tahunLulus" value="<?php echo ($TahunLulus ? $TahunLulus : "");?>" placeholder="Tahun Lulus">
                            </div>
                        </div>
						
						<!--Cabang-->
						<div class="control-group">
						<label class="control-label" for="inputCabang" style="text-align: left">Cabang PTN/PTS <span style="color:red;">*</span></label>
							<div class="controls"> 
							
								<select name="inputCabang">
										<option <?php echo ($Cabang=='Surabaya' ? "selected" : "");?>>Surabaya</option>
										<option <?php echo ($Cabang=='Sidoarjo' ? "selected" : "");?>>Sidoarjo</option>
										<option <?php echo ($Cabang=='Mojokerto' ? "selected" : "");?>>Mojokerto</option>
										<option <?php echo ($Cabang=='Malang' ? "selected" : "");?>>Malang</option>
										<option <?php echo ($Cabang=='Jember' ? "selected" : "");?>>Jember</option>
										<option <?php echo ($Cabang=='Madura' ? "selected" : "");?>>Madura</option>
										<option <?php echo ($Cabang=='Yogyakarta' ? "selected" : "");?>>Yogyakarta</option>
										<option <?php echo ($Cabang=='Semarang' ? "selected" : "");?>>Semarang</option>
										<option <?php echo ($Cabang=='Solo' ? "selected" : "");?>>Solo</option>
										<option <?php echo ($Cabang=='Jakarta' ? "selected" : "");?>>Jakarta</option>
										<option <?php echo ($Cabang=='Bogor' ? "selected" : "");?>>Bogor</option>
										<option <?php echo ($Cabang=='Bandung' ? "selected" : "");?>>Bandung</option>
										<option <?php echo ($Cabang=='Indramayu' ? "selected" : "");?>>Indramayu</option>
								</select>
							</div>
							
						</div>

						
						<!--Alamat Asal-->
						<div class="control-group">
                            <label class="control-label" for="inputAlamatAsal" style="text-align: left">Alamat Asal</label>
                            <div class="controls">
                                <textarea name="inputAlamatAsal" class="input-xlarge" rows="4" id="inputAlamatAsal" placeholder="Alamat Asal" required>
									<?php echo ($AlamatAsal ? $AlamatAsal : "");?>
								</textarea>
                            </div>
                        </div>
						
						<!--Alamat Sekarang-->
						<div class="control-group">
                            <label class="control-label" for="inputAlamatSekarang" style="text-align: left">Alamat Sekarang</label>
                            <div class="controls">
                                <textarea name="inputAlamatSekarang" class="input-xlarge" rows="4" id="inputAlamatSekarang" placeholder="Alamat Sekarang" required>
									<?php echo ($AlamatSekarang ? $AlamatSekarang : "");?>
								</textarea>
                            </div>
                        </div>
						
						<!-- No HP -->
                        <div class="control-group">
                            <label class="control-label" for="inputNoHP" style="text-align: left">Nomor Handphone</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">+62</span>
                                    <input name="inputNoHP" class="input-medium" class="span2" id="inputNoHP" type="text" value="<?php echo ($NoHP ? $NoHP : "");?>" placeholder="81234....." required>                                    
                                </div>
                            </div>
                        </div>						
                        <!-- Email -->
                        <div class="control-group">
                            <label class="control-label" for="inputEmail" style="text-align: left">Email</label>
                            <div class="controls">
                                <input name="inputEmail" class="input-xlarge" class="span3" type="email" id="inputEmail" value="<?php echo ($Email ? $Email : "");?>" placeholder="yourname@email.com" required>
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
                                <textarea name="inputKuliah" class="input-xlarge" rows="4" id="inputKuliah" placeholder="Kuliah">
									<?php echo ($TempatKuliah ? $TempatKuliah : "");?>
								</textarea>
                            </div>
                        </div>
						
                        <!-- Aktif Organisasi -->
                        <div class="control-group">
                            <label class="control-label" for="inputAktifOrganisasi" style="text-align: left">Aktif Organisasi</label>
                            <div class="controls">
                                <textarea name="inputAktifOrganisasi" class="input-xlarge" rows="4" id="inputAktifOrganisasi" placeholder="Aktif Organisasi">
									<?php echo ($Kesibukan ? $Kesibukan : "");?>
								</textarea>
                            </div>
                        </div>
						
						<!-- Bekerja -->
                        <div class="control-group">
                            <label class="control-label" for="inputBekerja" style="text-align: left">Bekerja</label>
                            <div class="controls">
                                <textarea name="inputBekerja" class="input-xlarge" rows="4" id="inputBekerja" placeholder="Bekerja">
									<?php echo ($TempatKerja ? $TempatKerja : "");?>
								</textarea>
                            </div>
                        </div>
						
                        <!-- Hobby -->
                        <div class="control-group">
                            <label class="control-label" for="inputHobi" style="text-align: left">Hobi</label>
                            <div class="controls">
                                <textarea name="inputHobi" class="input-xlarge" rows="3" id="inputHobi" placeholder="Hobi">
									<?php echo ($Hobi ? $Hobi : "");?>
								</textarea>
                            </div>
                        </div>
						
						<!--Prestasi-->
                        <div class="control-group">
                            <label class="control-label" for="inputPrestasi" style="text-align: left">Prestasi</label>
                            <div class="controls">
                                <textarea name="inputPrestasi" class="input-xlarge" rows="4" id="inputPrestasi" placeholder="Prestasi">
									<?php echo ($Prestasi ? $Prestasi : "");?>
								</textarea>
                            </div>
                        </div>
						
                        <!-- Cita-cita -->
                        <div class="control-group">
                            <label class="control-label" for="inputCita" style="text-align: left">Cita-cita</label>
                            <div class="controls">
                                 <textarea name="inputCita" class="input-xlarge" rows="3" id="inputCita" placeholder="Cita-cita">
									<?php echo ($Cita_Cita ? $Cita_Cita : "");?>
								 </textarea>
                            </div>
                        </div>							
                        <!-- Motto -->
                        <div class="control-group">   
                            <label class="control-label" for="inputMotto" style="text-align: left">Motto</label>
                            <div class="controls">
                                <textarea name="inputMotto" class="input-xlarge" rows="3" id="inputMotto" placeholder="Motto">
									<?php echo ($Motto ? $Motto : "");?>
								</textarea>
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
                                <input name="inputNamaOrangTua" class="input-xlarge" type="text" id="inputNamaOrangTua" value="<?php echo ($NamaOrtu ? $NamaOrtu : "");?>" placeholder="Nama Orang-Tua">
                            </div>
                        </div>
						
						<!--Pendidikan Terakhir-->
                        <div class="control-group">
                            <label class="control-label" for="pendidikanTerakhir" style="text-align: left">Pendidikan Terakhir</label>
                            <div class="controls">
                                <input name="inputPendidikanTerakhir" class="input-xlarge" type="text" id="inputPendidikanTerakhir" value="<?php echo ($PendidikanOrtu ? $PendidikanOrtu : "");?>" placeholder="Pendidikan Terakhir">
                            </div>
                        </div>	
						
						<!--Pekerjaan-->
                        <div class="control-group">
                            <label class="control-label" for="pekerjaan" style="text-align: left">Pekerjaan</label>
                            <div class="controls">
                                <input name="inputPekerjaan" class="input-xlarge" type="text" id="inputPekerjaan" value="<?php echo ($PekerjaanOrtu ? $PekerjaanOrtu : "");?>" placeholder="Pekerjaan">
                            </div>
                        </div>
                        		
						
                        <!-- Kontak Ortu -->
                        <div class="control-group">
                            <label class="control-label" for="inputKontakOrtu" style="text-align: left">Kontak Ortu</label>
                            <div class="controls">
                                <input name="inputKontakOrtu" class="input-xlarge" type="text" id="inputKontakOrtu" value="<?php echo ($KontakOrtu ? $KontakOrtu : "");?>" placeholder="Kontak Bapak/Ibu">
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
                                  <li class="active"><a href="#facebook"><img src="../../../assets/img/logo-fb.png" width="70px" height="70px"></a></li>
                                  <li><a href="#twitter"><img src="../../../assets/img/logo-twitter.png" width="70px" height="70px"></a></li>
                                  <li><a href="#blog"><img src="../../../assets/img/logo-blog.png" width="70px" height="70px"></a></li>
								 
                              </ul>
                              <div class="tab-content">
                                  <div class="tab-pane active" id="facebook">
                                      <blockquote><h3>Facebook</h3></blockquote>
                                      <div class="control-group">
                                          <label class="control-label" for="inputLinkFB">Link Profil Facebook</label>
                                          <div class="controls">
                                              <input name="inputLinkFB" type="text" id="inputLinkFB" placeholder="(ex: www.facebook.com/jabiralhayyan)" value="<?php echo ($Facebook ? $Facebook : "");?>">
                                          </div>
                                      </div>
                                  </div>
                                <div class="tab-pane" id="twitter">
                                      <blockquote><h3>Twitter</h3></blockquote>
                                      <div class="control-group">
                                          <label class="control-label" for="inputIDTwitter">ID Twitter</label>
                                          <div class="controls">
                                              <input name="inputIDTwitter" type="text" id="inputIDTwitter" placeholder="(ex : @JabirHayyan)" value="<?php echo ($Twitter ? $Twitter : "");?>">
                                          </div>
                                      </div>
                                </div>
                                <div class="tab-pane" id="blog">
                                      <blockquote><h3>Blog/Website</h3></blockquote>
                                      <div class="control-group">
                                         <label class="control-label" for="inputAlamatBlog">Alamat Website</label>
                                          <div class="controls">
                                              <input name="inputAlamatBlog" type="text" id="inputAlamatWebsite" placeholder="Alamat Blog/Website" value="<?php echo ($Blog ? $Blog : "");?>">
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
                      <i class="icon-tasks"></i><i class="icon-chevron-down pull-right"></i> USERNAME DAN PASSWORD
                  </a>
              </div>
                  <div id="collapseFive" class="accordion-body collapse">
                      <div class="accordion-inner">
						<div class="span6">
							
							<!--Username-->
							<div class="control-group">
								<label class="control-label" for="inputUsername" style="text-align: left">Username <span style="color:red;">*</span></label>
								<div class="controls">
									<input name="inputUsername" class="input-xlarge" type="text" id="inputUsername" value="<?php echo ($Username ? $Username : "");?>" placeholder="Username">
								</div>
							</div>
							 
							 <!--Password-->
							 <div class="control-group">
								<label class="control-label" for="inputPassword" style="text-align: left">Password <span style="color:red;">*</span></label>
								<div class="controls">
									<input name="inputPassword" class="input-xlarge" type="password" id="inputPassword" value="<?php echo ($Password ? $Password : "");?>" placeholder="Password">
								</div>
							</div>
							 
							 <!--Ulangi Password-->
							 <div class="control-group">
								<label class="control-label" for="inputUlangiPassword" style="text-align: left">Ulangi Password <span style="color:red;">*</span></label>
								<div class="controls">
									<input name="inputUlangiPassword" class="input-xlarge" type="password" id="inputUlangiPassword" value="" placeholder="Konfirmasi Password">
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
