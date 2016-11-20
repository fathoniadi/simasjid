<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Dashboard | Schematics 2016</title>
	<?php include 'parts/header.php';?>
</head>
<body>
	<?php include "parts/navbar-index.php";?>

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:70px">
        <div class="container">
            <center><h1><span class="glyphicon glyphicon-user"></span> <b>Dashboard</b></h2></center>
            <hr>
            <div class="row">
                <div class="col-sm-12" style="margin-bottom:1em; text-align:center">
                    <h3>Halo, <b>Andi Ersaldy Raisha Pakki!</b></h3>
                </div>
                <div class="col-sm-6">
                    <div style="width:100%; margin-bottom:1em; padding:1em; border:solid 1px lightgrey; background-color:#fff; min-height:320px">
                        <h4><b>Data Akun</b> <a class="pull-right" data-toggle="modal" data-target="#modal-akun" href="#modal-akun">ubah</a></h4>
                        <hr>
                        <p><b>Email:</b> ini.emailnya@uhuy.com</p>
                        <p><b>Nama Lengkap:</b> Andi Ersaldy Raisha Pakki</p>
                        <p><b>Password:</b> *******</p>
                        <p><b>Alamat:</b> JL. Tj Jati I Krembangan Selatan</p>
                        <p><b>Telepon:</b> 087887061221</p>
                        <p><b>Sekolah Asal:</b> SMAN 78 Papua</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="width:100%; margin-bottom:1em; padding:1em; border:solid 1px lightgrey; background-color:#fff; min-height:320px">
                        <h4><b>Data Event</b></h4>
                        <hr>
                        <p><b>Event: <span style="color:#e2be22">NLC</span></b></p>
                        <p><b>Status: <span style="color:#c84429">Belum melakukan pembayaran</span></b></p>
                        <div class="row" style="text-align:center; font-size:0.8em; margin-top:3em">
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:green" class="glyphicon glyphicon-ok"></span><br>Daftar Event
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Pembayaran
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Konfirmasi Panitia
                            </div>
                            <div class="col-xs-3">
                                <span style="font-size:2.4em; color:#c84429" class="glyphicon glyphicon-minus"></span><br>Pendaftaran Berhasil
                            </div>
                        </div>
                        <button data-toggle="modal" data-target="#modal-konf" class="btn btn-sch-color" style="margin-top:2em; width:100%">KONFIRMASI PEMBAYARAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modal-akun" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    EDIT AKUN DISINI TONG
                </div>
            </div>
        </div>
    </div>
    
    <div id="modal-konf" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <center><h3><b>Konfirmasi Pembayaran</b></h3><hr></center>
                    <select class="form-control" style="margin-bottom:0.5em">
                        <option disabled selected>ATM</option>
                        <option>Mandiri</option>
                        <option>BCA</option>
                        <option>BNI</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Nomor Rekening" style="margin-bottom:0.5em" required autofocus>
                    <input type="text" class="form-control" placeholder="Atas Nama" style="margin-bottom:0.5em" required autofocus>
                    <input type="number" class="form-control" placeholder="Jumlah Transfer" style="margin-bottom:1em; width:100%" required autofocus>
                    <label for="bukti">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="bukti">
                    <button type="submit" class="btn btn-sch-grey" style="width:100%; margin-bottom:1em; margin-top:2em">KONFIRMASI</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "parts/footer.php"; ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script type="text/javascript">
        $("#navi").css('background-color','transparent');
        $("#navi").css('border','none');
        $(".dropdown-toggle").css('background-color','transparent');
        $(window).scroll(function() {
            var x = $(window).scrollTop();
            if (x == 0) {
              $("#navi").css('background-color','transparent');
              $("#navi").css('border','none');
              $(".dropdown-toggle").css('background-color','transparent');
            } else {
              $("#navi").css('background-color','white');
              $("#navi").css('border','');
              $(".dropdown-toggle").css('background-color','');
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            window.sr = ScrollReveal({ duration: 900 }).reveal('.scrollreveal');   
        });
    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            particleground(document.getElementById('particle'), {
                dotColor: 'rgba(0,0,0,0.08)',
                lineColor: 'rgba(0,0,0,0.08)'
            });
        }, false);
    </script>
</body>

</html>
