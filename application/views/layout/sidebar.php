<div class="profile">
  <div class="profile_pic">
    <img src="<?php echo base_url();?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Selamat Datang,</span>
    <h2><?php echo $this->session->Uu['namaPengurus']?></h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section" style="height: 88vh">
	<?php if($this->session->Uu['role']=="Ketua") {?>
	<h3>Ketua</h3>
	<ul class="nav side-menu">
	  <li><a href="<?php echo base_url();?>ControllerPengurusMasjid"><i class="fa fa-sitemap"></i> Pengurus Masjid</a></li>
	  <li><a href="mengelolaImam.html"><i class="fa fa-user"></i> Data Imam</a></li>
	  <li><a href="donaturTakjil.html"><i class="fa fa-cutlery"></i> Donatur Takjil</a></li>
	  <li><a href="laporanRekapKeuangan.html" ><i class="fa fa-money"></i> Rekap Keuangan</a></li>
	  <li><a href="laporanInventaris.html"><i class="fa fa-wrench"></i> Inventaris</a></li>
	  <li><a href="laporanZakat.html"><i class="fa fa-life-ring"></i> Laporan Zakat</a></li>
	  <li><a href="laporanQurban.html"><i class="fa fa-paw"></i> Laporan Qurban</a></li>
	</ul>
	<?php } ?>
	<?php if($this->session->Uu['role']=="Bendahara") {?>
	<h3>Bendahara</h3>
    <ul class="nav side-menu">
      <li><a href="donaturTakjil.html"><i class="fa fa-cutlery"></i> Donatur Takjil</a></li>
      <li><a href="mengelolaKeuangan.html"><i class="fa fa-money"></i> Laporan Keuangan</a>
      </li>
    </ul>
	<?php } ?>  
	<?php if($this->session->Uu['role']=="Sekertaris") {?>
	<h3>Sekretaris</h3>
    <ul class="nav side-menu">
      <li><a href="donaturTakjil.html"><i class="fa fa-cutlery"></i>Donatur Takjil</a></li>
      <li><a href="mengelolaPengumuman.html"><i class="fa fa-info"></i>Mengelola Pengumuman</a></li>
      <li><a href="mengelolaPenerimaZakat.html"><i class="fa fa-group"></i>Mengelola Penerima Zakat</a></li>
      <li><a href="mengelolaPemberiZakat.html"><i class="fa fa-user"></i>Mengelola Pemberi Zakat</a></li>
      <li><a href="mengelolaPenerimaQurban.html" ><i class="fa fa-group"></i>Mengelola Penerima Qurban</a></li>
      <li><a href="mengelolaPemberiQurban.html"><i class="fa fa-user"></i>Mengelola Pemberi Qurban</a></li>
      <li><a href="mengelolaInventaris.html"><i class="fa fa-wrench"></i>Mengelola Inventaris</a></li>
      <li><a href="mengelolaJadwalPengajian.html"><i class="fa fa-calendar"></i>Mengelola Jadwal Pengajian</a></li>
    </ul>
	<?php } ?>    
	</div>
</div>