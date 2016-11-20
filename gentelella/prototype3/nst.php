<!DOCTYPE html>
<html class="no-js">
<head>
    <title>NST | Schematics 2016</title>
    <?php include 'parts/header.php';?>
    <script src="../prototype/schematicsevent/assets/js/vertical-timeline/modernizr.js"></script>

    <style>
        .title-abrv {
            color:white;
            background-color:#000;
            padding:0.2em 0.5em;
            line-height:1.5;
        }
        .event-doc {
            width:20%;
            margin: 0;
        }

        @media only screen and (min-width : 993px) {
            .event-doc {
                width:20%;
                margin: 0;
            }
        }

        .event-doc-href {
            transition:0.15s;
        }
        .event-doc-href:hover {
            opacity: 0.7;
            transition:0.15s;
        }
    </style>
</head>
<body>
<?php include "parts/navbar-index.php";?>

<div id="particle" style="height:100vh; width:100%; position:absolute; top:0"></div>

<div style="width:100%; min-height:100vh; position:relative;">
    <img src="assets/img/mascot/nstmata.png" style="width:37%; bottom:0; position:absolute; left:35%">
    <div class="scrollreveal container" style="padding-top:56px; text-align:center">
        <div class="row">
            <div class="col-sm-4" style="text-align:right; margin-top:5em">
                <div style="font-size:8em;">
                        <span style="background-image:url(assets/img/pattern/patgreen.png); background-size:cover; color:white; padding:0 0.2em;">
                            <b>NST</b>
                        </span>
                </div>
                <div style="font-size:1.6em; letter-spacing:4px; line-height:1.4; margin-top:1em">
                    <span class="title-abrv">NATIONAL</span><br>
                    <span class="title-abrv">SEMINAR</span><br>
                    <span class="title-abrv">OF TECHNOLOGY</span>
                </div>
                <a href="#!" id="to-reg" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.2em; letter-spacing:2px">BELI TIKET SEKARANG</a>
            </div>
            <div class="col-sm-8" style="text-align:left; margin-top:5em; margin-bottom:10em">
                <p style="font-size:1.3em; line-height:1.7; font-weight:300">National Seminar of Technology (NST) merupakan
                    salah satu rangkaian acara schematics 2016
                    berupa seminar teknologi dan expo yang akan dibuka secara
                    umum dan diisi oleh pembicara – pembicara berkompeten di
                    bidang teknologi. NST ditujukan
                    untuk memberikan pengetahuan Teknologi Informasi saat ini,
                    serta sebagai upaya untuk turut membantu dan memajukan
                    Industri Teknologi di Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>

<div style="position:relative; min-height:100vh; background-image:url(assets/img/pattern/patgreen.png); background-size:cover; background-attachment:fixed">
    <div class="scrollreveal" style="position:absolute; top:4em; width:100%; text-align:center; font-size:2em; letter-spacing:8px; margin-bottom:1em; color:#fff">
        <b>TIMELINE NST</b>
    </div>
    <div id="myCarousel" class="carousel slide scrollreveal" data-ride="carousel" style="min-height:100vh">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="top:17em; text-align:center; color:#fff">
            <div class="item active">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/tiket.png" style="height:130px">
                    <h2 class="tl-title"><b>Tiket Online Presale 2</b></h2>
                    <h4 class="tl-date"><b>( - )</b></h4>
                    <p class="tl-desc">Pembelian tiket NST secara online</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/tiket.png" style="height:130px">
                    <h2 class="tl-title"><b>Tiket Online Presale 1</b></h2>
                    <h4 class="tl-date"><b>( - )</b></h4>
                    <p class="tl-desc">Pembelian tiket NST secara online</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/nst.png" style="height:130px">
                    <h2 class="tl-title"><b>NST</b></h2>
                    <h4 class="tl-date"><b>9 Oktober 2016</b></h4>
                    <p class="tl-desc">Berlangsungnya acara NST</p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="reg-button" class="scrollreveal" style="width:100%; text-align:center; padding-top:8em; padding-bottom:4em">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="border-right:solid 1px #d3d3d3; margin-bottom:3em">
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em">
                    <b>Tema</b>
                </div>
                <!--            <hr style="width:10%; border-width:4px">-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                    <i>"Business on the Internet “How Technology Bursts Our Business”</i>
                </h4>

                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em; margin-top: 1em">
                    <b>Tujuan</b>
                </div>
                <!--            <hr style="width:10%; border-width:4px">-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                   <ol>
                       <li type="square">Memberi pandangan ke masyarakat akan majunya teknologi internet saat ini serta peluang yang bisa dimanfaatkan dalam mengembangkan usaha atau bisnis mandiri.</li>
                       <li type="square">Memberikan kiat-kiat pemanfaatan internet untuk mengembangkan usaha.</li>
                       <li type="square">Mengenalkan budaya pemasaran usaha via internet saat ini, sehingga memacu semangat masyarakat untuk mengembangkan usahanya.</li>
                   </ol>
                </h4>
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em;">
                    <b>Sasaran</b>
                </div>
                <!--            <hr style="width:10%; border-width:4px">-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                    <ol>
                        <li type="square">Masyarakat umum.</li>
                    </ol>
                </h4>
            </div>
            <div class="col-sm-6" style="margin-bottom:3em">
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em">
                    <b>Harga Tiket*</b>
                </div>
                <!--                <h2><b>Jadi, Tunggu Apa Lagi?</b></h2>-->
                <!--                <a href="#!" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.5em">DAFTAR SEKARANG</a>-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: center">
                    -
<!--                    <ol>-->
<!--                        <li> - </li>-->
<!--                        <li> - </li>-->
<!--                        <li> - </li>-->
<!--                    </ol>-->
                </h4>
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em; margin-top:1em;">
                    <b>Pembicara*</b>
                </div>
                <!--                <h2><b>Jadi, Tunggu Apa Lagi?</b></h2>-->
                <!--                <a href="#!" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.5em">DAFTAR SEKARANG</a>-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: center">
                    -
                </h4>

                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em; margin-top:1em;">
                    <b>Tempat*</b>
                </div>
                <!--                <h2><b>Jadi, Tunggu Apa Lagi?</b></h2>-->
                <!--                <a href="#!" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.5em">DAFTAR SEKARANG</a>-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: center">
                    -
                </h4>
                <p><i>*keterangan menyusul</i></p>
            </div>
        </div>
    </div>
</div>

<div style="width:100%">
    <a data-toggle="modal" href="#modal-doc" onclick="getPhoto(1)" class="event-doc-href"><img src="assets/img/dok/nst/nst1.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(2)" class="event-doc-href"><img src="assets/img/dok/nst/nst2.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(3)" class="event-doc-href"><img src="assets/img/dok/nst/nst3.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(4)" class="event-doc-href"><img src="assets/img/dok/nst/nst4.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(5)" class="event-doc-href"><img src="assets/img/dok/nst/nst5.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(6)" class="event-doc-href"><img src="assets/img/dok/nst/nst6.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(7)" class="event-doc-href"><img src="assets/img/dok/nst/nst7.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(8)" class="event-doc-href"><img src="assets/img/dok/nst/nst8.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(9)" class="event-doc-href"><img src="assets/img/dok/nst/nst9.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(10)" class="event-doc-href"><img src="assets/img/dok/nst/nst10.JPG" class="event-doc"></a>
</div>

<div id="modal-doc" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="padding-top: 2em; padding-bottom: 2em">
            <div class="modal-body">
                <img src="assets/img/dok/nst/nst1.JPG" style="width:100%" id="doc-photo">
            </div>
        </div>
    </div>
</div>

<?php include "parts/footer.php"; ?>

<script src="../prototype/schematicsevent/assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-scrollto.js"></script>
<script src="../prototype/schematicsevent/assets/js/bootstrap.min.js"></script>
<script src="../prototype/schematicsevent/assets/js/jquery.particleground.js"></script>
<script src="../prototype/schematicsevent/assets/js/scrollreveal.min.js"></script>
<script src="assets/js/navbar.js"></script>
<script>
    $('#to-reg').click(function(){
        $('#reg-button').ScrollTo();
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
<script>
    function getPhoto(x){
        var foto = document.getElementById('doc-photo');
        var link = "assets/img/dok/nst/nst" + x + ".JPG"
        foto.src = link;
    }
</script>

</body>
</html>