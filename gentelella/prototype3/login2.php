<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Login | Schematics 2016</title>
	<?php include 'parts/header.php';?>
    <link rel="stylesheet" href="assets/css/jquery.countdown.css" type="text/css">
    <style type="text/css">
        #countdown-content
        {
            margin: 0 auto;
            font-size: 1.2em;
            width:100%;
            margin-top: 1em;
        }

        @media only screen and (min-width : 993px) {
            #countdown-content
            {
                font-size: 1.5em;
                width:40%;
            }

        }
    </style>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.plugin.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>

    <script>
    $(function () {
        var regisDate = new Date();
        regisDate = new Date(regisDate.getFullYear(), 7 - 1, 1,7,0,0);
        $('#countdown').countdown({until: regisDate});
    });
    </script>
</head>
<body>
	<?php include "parts/navbar-index.php";?>

    <div id="particle" style="width:100%; height:100%; top:0; position:fixed; z-index:-1"></div>
    <div style="width:100%; min-height:100vh; padding-top:100px">
        <div class="container">
            <div class="row" style="">
                <div class="col-sm-12" id="log-panel" style="">
                    <div style="text-align:center; padding:0 2em;margin-top:10em">
                        <img src="assets/img/logo_crop.png" style="width:100px">
                        <center><h2><b>Comming Soon</b></h2></center>
                        <div id="countdown-content">
                            <div id="countdown"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "parts/footer.php"; ?>
    
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.particleground.js"></script>
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
