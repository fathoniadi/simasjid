<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Login | Schematics 2016</title>
	<?php include 'parts/header.php';?>
</head>
<body>
	<?php include "parts/navbar-index.php";?>

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4" id="reg-panel">
                    <div style="text-align:center; padding:0 2em">
                        <img src="assets/img/logo_crop.png" style="width:100px">
                        <h2><b>REGISTER</b></h2>
                        <p style="font-size:1.2em">Lorem ipusum dolor sit amet Schematics 2016! </p>
                        <hr>
                        <form id="form-register">
                            <input name="reg-email" id="reg-email" type="email" class="form-control" placeholder="Email" style="margin-bottom:0.5em" required autofocus>
                            <!-- <input type="text" class="form-control" placeholder="Full Name" style="margin-bottom:0.5em" required autofocus> -->
                            <input name="reg-pass" id="reg-pass" type="password" class="form-control" placeholder="Password" style="margin-bottom:0.5em" required autofocus>
                            <input name="reg-cpass" id="reg-cpass" type="password" class="form-control" placeholder="Re-type Your Password" style="margin-bottom:1em" required autofocus>
                            <div style="float:left;font-size:1.5em">
                                <span id="ang-1">2</span><span>+</span><span id="ang-2">3</span><span> =</span>
                            </div>
                            <input id="reg-cap" type="text" name="reg-cap" class="form-control pull-right" placeholder="Captcha" style="width: 75%;margin-bottom:1em;" required autofocus>
                            <button id="but-reg" type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">REGISTER</button>
                        </form>
                        <p style="margin-top:1em">Sudah punya akun? <a href="#!" id="log-trig"><b>LOGIN</b></a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4" id="log-panel">
                    <div style="text-align:center; padding:0 2em">
                        <img src="assets/img/logo_crop.png" style="width:100px">
                        <center><h2><b>LOGIN</b></h2></center>
                        <hr>
                        <input type="email" class="form-control" placeholder="Email" style="margin-bottom:0.5em" required autofocus>
                        <input type="password" class="form-control" placeholder="Password" style="margin-bottom:1em" required autofocus>
                        <button type="submit" style="width:100%; border:none" class="btn btn-lg btn-sch-color">LOGIN</button>
                        <p style="margin-top:1.5em; font-size:1.2em">Belum punya akun?</p>
                        <a href="#!" class="btn btn-sch-grey-inv" id="reg-trig">REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-reg" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding-top: 2em; padding-bottom: 2em">
                <div class="modal-body">
                    <center><h3><b>Terima kasih sudah mendaftar!</b></h2> <p>Kami akan mengirimkan email yang berisi link untuk melakukan verifikasi aku Schematicsmu! Harap mengecek email.</p></center>
                </div>
            </div>
        </div>
    </div>

    <?php include "parts/footer.php"; ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
    <script type="text/javascript">
        //$("#reg-panel").hide();
        $("#log-panel").hide();
        $("#reg-panel").show();
        /*$("#reg-trig").click(function(){
             $("#log-panel").hide();
             $("#reg-panel").show();
        });
        $("#log-trig").click(function(){
             $("#reg-panel").hide();
             $("#log-panel").show();
        });*/
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
    <script type="text/javascript">
        $(document).on('click','#but-reg', function(e)
        {
            e.preventDefault();
            var email = $('#reg-email').val();
            var pass = $('#reg-pass').val();
            var cpass = $('#reg-cpass').val();
            var captcha = $('#reg-cap').val();

            alert(email+' '+pass+' '+cpass+' '+captcha);
            $('#form-register').trigger('reset');
        });
    </script>
</body>

</html>
