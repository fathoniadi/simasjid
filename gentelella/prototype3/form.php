<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Pendaftaran Event | Schematics 2016</title>
	<?php include 'parts/header.php';?>
</head>
<body>
	<?php include "parts/navbar-index.php";?>

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div style="text-align:center">
                        <img src="assets/img/logo_crop.png" style="width:70px">
                        <h3><b>FORMULIR PENDAFTARAN EVENT</b></h3>
                        <select class="form-control" id="event-select">
                            <option disabled selected>Event yang Diikuti</option>
                            <option value="1">National Logic Competition (NLC)</option>
                            <option value="2">National Programming Contecst (NPC)</option>
                            <option disabled>COMING SOON -- National Seminar of Technology (NST)</option>
                            <option disabled>COMING SOON -- Revolutionary Entertainment Expo With Various Arts (REEVA)</option>
                        </select>
                        <hr>
                    </div>
                </div>
                <div id="form-nlc">
                    <div class="col-sm-6">
                            <p><b>Data Event</b></p>
                            <input type="text" class="form-control" placeholder="Nama Tim" style="margin-bottom:0.5em" required autofocus>
                            <select class="form-control" style="margin-bottom:1.5em; width:49.5%; float:left; margin-right:0.01%">
                                <option disabled selected>Daerah Penyisihan</option>
                                <option disabled><b>-- Jawa Timur --</b></option>
                                <option>Surabaya</option>
                                <option>Madiun</option>
                                <option>Banyuwangi</option>
                                <option disabled><b>-- Jawa Tengah --</b></option>
                                <option>Solo</option>
                                <option>Semarang</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Nama Sekolah Asal" style="margin-bottom:1.5em; width:49.5%; float:right; margin-left:0.01%" required autofocus>

                            <p><b>Ketua Tim</b></p>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
                            <input type="text" class="form-control form-kiri" placeholder="Nomor Telepon" style="margin-bottom:0.5em" required autofocus>
                            <input type="text" class="form-control form-kanan" placeholder="Email" style="margin-bottom:1.5em" required autofocus>
                    </div>
                    <div class="col-sm-6">
                        <p><b>Anggota 1</b></p>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" style="margin-bottom:1.5em" required autofocus>

                        <p><b>Anggota 2</b></p>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" style="margin-bottom:1.5em" required autofocus>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:2em">
                        <button class="btn btn-lg btn-sch-color" style="width:100%">DAFTAR</button>
                    </div>
                </div>
                <div id="form-npc">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" style="margin-bottom:0.5em" required autofocus>
                        <input type="text" class="form-control" placeholder="Nama Sekolah Asal" style="margin-bottom:0.5em" required autofocus>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" style="margin-bottom:0.5em" required autofocus>
                        <input type="text" class="form-control" placeholder="Facebook" style="margin-bottom:0.5em" required autofocus>
                        <input type="email" class="form-control" placeholder="Email" style="margin-bottom:1.5em" required autofocus>
                        <button class="btn btn-lg btn-sch-color" style="width:100%">DAFTAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "parts/footer.php"; ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
    <script type="text/javascript">
        $("#form-nlc").hide();
        $("#form-npc").hide();
        $('#event-select').change(function(){
            if($(this).val() == 1){
                $("#form-npc").hide();
                $("#form-nlc").show();
            }
            else if($(this).val() == 2){
                $("#form-nlc").hide();
                $("#form-npc").show();
            }
        });

    </script>
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
        document.addEventListener('DOMContentLoaded', function () {
            particleground(document.getElementById('particle'), {
                dotColor: 'rgba(0,0,0,0.08)',
                lineColor: 'rgba(0,0,0,0.08)'
            });
        }, false);
    </script>
</body>

</html>
