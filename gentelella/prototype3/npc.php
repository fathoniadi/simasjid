<!DOCTYPE html>
<html class="no-js">
<head>
    <title>NPC | Schematics 2016</title>
    <?php include 'parts/header.php';?>
    <script src="assets/js/vertical-timeline/modernizr.js"></script>

    <style>
        .title-abrv {
            color:white;
            background-color:#000;
            padding:0.2em 0.5em;
            line-height:1.5;
        }
        .event-doc {
            width:25%;
            margin: 0;
        }

        @media only screen and (min-width : 993px) {
            .event-doc {
                width:25%;
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
    <img src="assets/img/mascot/npcmata.png" style="width:35%; bottom:0; position:absolute; left:35%">
    <div class="scrollreveal container" style="padding-top:56px; text-align:center">
        <div class="row">
            <div class="col-sm-4" style="text-align:right; margin-top:5em">
                <div style="font-size:8em;">
                        <span style="background-image:url(assets/img/pattern/pattred.png); background-size:cover; color:white; padding:0 0.2em;">
                            <b>NPC</b>
                        </span>
                </div>
                <div style="font-size:1.6em; letter-spacing:4px; line-height:1.4; margin-top:1em">
                    <span class="title-abrv">NATIONAL</span><br>
                    <span class="title-abrv">PROGRAMMING</span><br>
                    <span class="title-abrv">CONTEST</span>
                </div>
                <a href="#!" id="to-reg" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.2em; letter-spacing:2px">DAFTAR SEKARANG</a>
            </div>
            <div class="col-sm-8" style="text-align:left; margin-top:5em; margin-bottom:12em">
                <p style="font-size:1.3em; line-height:1.7; font-weight:300">National Programming Contest (NPC) merupakan
                    sebuah kompetisi pemrograman tingkat nasional dengan standar
                    kompetisi tingkat Internasional yang menguji kemampuan berfikir logika
                    serta kemampuan algoritma dan pemrograman dalam
                    memecahkan masalah yang diberikan. Dalam NPC peserta akan
                    ditantang untuk menyelesaikan suatu permasalahan dengan membuat
                    suatu program komputer. Bahasa pemrograman yang digunakan adalah
                    Pascal (ekstensi file *.pas) atau C (ekstensi file *.c).</p>
            </div>
        </div>
    </div>
</div>

<div style="position:relative; min-height:100vh; background-image:url(assets/img/pattern/pattred.png); background-size:cover; background-attachment:fixed">
    <div class="scrollreveal" style="position:absolute; top:4em; width:100%; text-align:center; font-size:2em; letter-spacing:8px; margin-bottom:1em; color:#fff">
        <b>TIMELINE NPC</b>
    </div>
    <div id="myCarousel" class="carousel slide scrollreveal" data-ride="carousel" style="min-height:100vh">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="top:17em; text-align:center; color:#fff">
            <div class="item active">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-regis-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Pendaftaran Online</b></h2>
                    <h4 class="tl-date"><b>1 Juli 2016 – 18 September 2016</b></h4>
                    <p class="tl-desc">Pendaftaran peserta NPC secara online.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-knockout-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Warming Up NPC</b></h2>
                    <h4 class="tl-date"><b>23 September 2016</b></h4>
                    <p class="tl-desc">Sebelum berlaga di kompetisi sesungguhnya, NPC mengadakan pemanasan terlebih dahulu untuk para peserta yang dilakukan secara online.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-competition-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Babak Penyisihan NPC</b></h2>
                    <h4 class="tl-date"><b>25 September 2016</b></h4>
                    <p class="tl-desc">Pada babak ini peserta akan melalui penyisihan yang akan diadakan secara online untuk memperebutkan tiket menuju final NPC yang akan diadakan di Jurusan Teknik Informatika ITS.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-competition-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Babak Final NPC</b></h2>
                    <h4 class="tl-date"><b>16 Oktober 2016</b></h4>
                    <p class="tl-desc">Perebutan juara di babak final NPC diadakan di Jurusan Teknik Informatika ITS</p>
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
                    <b>Syarat dan Ketentuan</b>
                </div>
                <!--            <hr style="width:10%; border-width:4px">-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                    <ol>
                        <li>Peserta National Programming Contest adalah siswa aktif/ belum lulus, dengan jenjang pendidikan maksimal SMA/SMK/MA/SMP/MTs/sederajat.1.	Peserta National Programming Contest adalah siswa aktif/ belum lulus, dengan jenjang pendidikan maksimal SMA/SMK/MA/SMP/MTs/sederajat.</li>
                        <li>Peserta mendaftar secara online di website Schematics 2016 www.schematics.its.ac.id atau bisa secara offline melalui panitia Schematics 2016 secara langsung serta melunasi biaya pendaftaran sebesar Rp 50.000,00.</li>
                        <li>Setiap sekolah boleh mengirimkan lebih dari satu peserta.</li>
                    </ol>
                </h4>
            </div>
            <div class="col-sm-6" style="margin-bottom:3em">
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em">
                    <b>Hadiah dan Penghargaan</b>
                </div>
                <p>Total Hadiah Rp 7.000.000,00</p>
                <!--                <h2><b>Jadi, Tunggu Apa Lagi?</b></h2>-->
                <!--                <a href="#!" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.5em">DAFTAR SEKARANG</a>-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                    <ol>
                        <li type="square">Juara 1 : Rp 3.000.000 + Sertifikat + Trofi + Piala Bergilir + Diterima di Teknik Informatika*</li>
                        <li type="square">Juara 2 : Rp 2.000.000 + Sertifikat + Trofi</li>
                        <li type="square">Juara 3 : Rp 1.000.000 + Sertifikat + Trofi</li>
                        <li type="square">Juara Harapan I : Rp 500.000 + Sertifikat + Trofi</li>
                        <li type="square">Juara Harapan II : Rp 500.000 + Sertifikat + Trofi</li>
                    </ol>
                </h4>
                <p><i>*Diterima di Teknik Informatika ITS melalui jalur SNMPTN tahun 2017 berlaku untuk peserta yang duduk di kelas 12 saat lomba berlangsung dan lulus UN</i></p>
            </div>
        </div>
    </div>
</div>

<div style="width:100%">
    <a data-toggle="modal" href="#modal-doc" onclick="getPhoto(1)" class="event-doc-href"><img src="assets/img/dok/npc/npc1.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(2)" class="event-doc-href"><img src="assets/img/dok/npc/npc2.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(3)" class="event-doc-href"><img src="assets/img/dok/npc/npc3.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(4)" class="event-doc-href"><img src="assets/img/dok/npc/npc4.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(5)" class="event-doc-href"><img src="assets/img/dok/npc/npc5.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(6)" class="event-doc-href"><img src="assets/img/dok/npc/npc6.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(7)" class="event-doc-href"><img src="assets/img/dok/npc/npc7.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(8)" class="event-doc-href"><img src="assets/img/dok/npc/npc8.JPG" class="event-doc"></a>
</div>

<div id="modal-doc" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="padding-top: 2em; padding-bottom: 2em">
            <div class="modal-body">
                <img src="assets/img/dok/npc/npc1.JPG" style="width:100%" id="doc-photo">
            </div>
        </div>
    </div>
</div>

<?php include "parts/footer.php"; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-scrollto.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.particleground.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
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
        var link = "assets/img/dok/npc/npc" + x + ".JPG"
        foto.src = link;
    }
</script>

</body>
</html>