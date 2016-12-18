<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#EDEDED; position:fixed;" role="navigation" id="navi">
         <div class="container">
            <div class="navbar-header" style="background-color: transparent;">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="nav navbar-brand" href="index.php"><i class="fa fa-info"></i> <span style="color: #515356">Sistem Informasi Masjid</span></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right" style="font-weight:bold">
                  <li><a class="nav-menu" style="color: #515356" href="index.html">HOME</a></li>
                  <li><a class="nav-menu" style="color: #515356" href="jadwalImam.html">JADWAL IMAM</a></li>
                  <li><a class="nav-menu" style="color: #515356" href="jadwalPengajian.html">JADWAL PENGAJIAN</a></li>
                  <li><a class="nav-menu" style="color: #515356" href="lihatKeuanganMasjid.html">INFAQ</a></li>
                  <li><a class="nav-menu" style="color: #515356" href="daftarDonatur.html">DAFTAR DONATUR TAKJIL</a></li>
                  <li><a class="nav-menu" style="color: #515356" href="pengumuman.html">PENGUMUMAN</a></li>
                  <?php if(!$this->session->Uu) { ?>
                     <li><a class="nav-menu" style="color: #515356" href="<?php echo base_url();?>auth/login">LOGIN</a></li>
                  <?php }
                     else {
                   ?>
                      <li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->session->Uu['namaPengurus']; ?></a>
                       <ul class="dropdown-menu">
                         <li><a href="<?php echo base_url()?>auth/logout">LOGOUT</a></li>
                       </ul>
                     </li>
                   <?php } ?>
               </ul>
            </div>
         </div>
      </nav>