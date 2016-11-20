<!DOCTYPE html>
<html class="no-js">
<head>
    <title>NLC | Schematics 2016</title>
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
            width:50%;
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
    <img src="assets/img/mascot/nlcmata.png" style="width:30%; bottom:0; position:absolute; left:35%">
    <div class="scrollreveal container" style="padding-top:56px; text-align:center">
        <div class="row">
            <div class="col-sm-4" style="text-align:right; margin-top:5em">
                <div style="font-size:8em;">
                        <span style="background-image:url(assets/img/pattern/pattyellow.png); background-size:cover; color:white; padding:0 0.2em;">
                            <b>NLC</b>
                        </span>
                </div>
                <div style="font-size:1.6em; letter-spacing:4px; line-height:1.4; margin-top:1em">
                    <span class="title-abrv">NATIONAL LOGIC</span><br>
                    <span class="title-abrv">COMPETITION</span>
                </div>
                <a href="#!" id="to-reg" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.2em; letter-spacing:2px">DAFTAR SEKARANG</a>
            </div>
            <div class="col-sm-8" style="text-align:left; margin-top:5em; margin-bottom:6.5em">
                <p style="font-size:1.3em; line-height:1.7; font-weight:300">National Logic Competition (NLC) merupakan sebuah kompetisi
                    logika nasional terbesar di Indonesia
                    yang menguji kemampuan berfikir logis dan analitis dalam
                    memecahkan masalah yang diberikan.
                    Di dalam kompetisi ini peserta akan diuji kemampuan logikanya,
                    sehingga peserta tidak perlu repot-repot belajar untuk menghafal
                    rumus - rumus dan teori-teori, cukup dengan hanya mengandalkan
                    kemampuan berpikir.
                    Ayo uji kemampuan logikamu dalam kompetisi ini!</p>
            </div>
        </div>
    </div>
</div>

<div style="position:relative; min-height:100vh; background-image:url(assets/img/pattern/pattyellow.png); background-size:cover; background-attachment:fixed">
    <div class="scrollreveal" style="position:absolute; top:4em; width:100%; text-align:center; font-size:2em; letter-spacing:8px; margin-bottom:1em; color:#fff">
        <b>TIMELINE NLC</b>
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
                    <p class="tl-desc">Pendaftaran peserta NLC secara online.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-knockout-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Babak Penyisihan NLC</b></h2>
                    <h4 class="tl-date"><b>2 Oktober 2016</b></h4>
                    <p class="tl-desc">Pada babak ini, setiap tim akan memperebutkan tiket untuk melaju ke perenambelas final baik dari penyisihan offline masing-masing region yang telah dipilih atupun dari penyisihan secara online.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-competition-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Babak Perenembelas dan Perdelapan Final NLC</b></h2>
                    <h4 class="tl-date"><b>15 Oktober 2016</b></h4>
                    <p class="tl-desc">Tim yang telah lolos pada tahap penyisian di setiap regional akan melanjutkan ke babak perenambelas dan perdelapan final yang akan diselenggarakan di Jurusan Teknik Infomatika ITS.</p>
                </div>
            </div>
            <div class="item">
                <div style="padding-left:20%; padding-right:20%">
                    <img src="assets/img/event/icon-competition-nlc.png" style="height:130px">
                    <h2 class="tl-title"><b>Babak Semifinal dan Final NLC</b></h2>
                    <h4 class="tl-date"><b>16 Oktober 2016</b></h4>
                    <p class="tl-desc">Tim yang telah lolos pada babak perdelapan final nlc akan kembali bertanding di babak semi final yang akan diadakan di Jurusan Teknik Informatika ITS guna memperebutkan kursi final. Selanjutnya, perebutan juara di babak final untuk NLC dan NPC juga diadakan di tempat dan hari yang sama.</p>
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
<!--
    <div style="width:100%; padding:5em 0; background-image:url(assets/img/dok/event.jpg); background-size:cover; color:white;">
        <div id="timeline">
            <div style="text-align:center; font-size:3em; letter-spacing:8px; margin-bottom:1em">TIMELINE NPC</div>
        </div>

        <div id="cd-timeline" class="cd-container">
            <div class="cd-timeline-block">
				<div class="cd-timeline-img" style="background:#e2be22"></div>
				<div class="cd-timeline-content" style="background:#fff; color:#e2be22">
                    <h3><b>PENDAFTARAN ONLINE</b></h3>
					<p style="font-size:1.7em; color:dimgrey">Pendaftaran peserta NLC dan NPC secara online.</p>
                    <span class="cd-date"><h3><b>1 Juli 2016 – 18 September 2016</b></h3></span>
				</div>
            </div>

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location" style="background:#e2be22">
				</div>

				<div class="cd-timeline-content" style="background:#fff; color:#e2be22">
                    <h3><b>BABAK PENYISIHAN NLC</b></h3>
                    <p style="font-size:1.7em; color:dimgrey">Pada babak ini, setiap tim akan memperebutkan tiket untuk melaju ke perenambelas final baik dari penyisihan offline masing-masing region yang telah dipilih atupun dari penyisihan secara online.</p>
                    <span class="cd-date"><h3><b>2 Oktober 2016</b></h3></span>
                </div>
			</div>


			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location" style="background:#e2be22">
				</div>
				<div class="cd-timeline-content" style="background:#fff; color:#e2be22">
                    <h3><b>BABAK PERENAMBELAS DAN PERDELAPAN FINAL NLC</b></h3>
					<p style="font-size:1.7em; color:dimgrey">Tim yang telah lolos pada tahap penyisian di setiap regional akan melanjutkan ke babak perenambelas dan perdelapan final yang akan diselenggarakan di Jurusan Teknik Infomatika ITS.</p>
                    <span class="cd-date"><h3><b>15 Oktober 2016</b></h3></span>
				</div>
			</div>

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location" style="background:#e2be22">
				</div>
				<div class="cd-timeline-content" style="background:#fff; color:#e2be22">
                    <h3><b>BABAK SEMI FINAL DAN FINAL NLC</b></h3>
					<p style="font-size:1.7em; color:dimgrey">Tim yang telah lolos pada babak perdelapan final nlc akan kembali bertanding di babak semi final yang akan diadakan di Jurusan Teknik Informatika ITS guna memperebutkan kursi final.
						Selanjutnya, perebutan juara di babak final untuk NLC dan NPC juga diadakan di tempat dan hari yang sama.
					</p>
                    <span class="cd-date"><h3><b>16 Oktober 2016</b></h3></span>
				</div>
			</div>

        </div>
    </div>
-->

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
                        <li>Peserta National Logic Competition adalah siswa aktif/ belum lulus, dengan jenjang pendidikan maksimal SMA/SMK/Sederajat.</li>
                        <li>Peserta merupakan sebuah tim yang terdiri dari 1 (satu) hingga 3 (tiga) orang yang pada saat pendaftaran bersekolah di sekolah yang sama.</li>
                        <li>Setiap peserta hanya boleh terdaftar dalam satu tim.</li>
                        <li>Peserta mendaftar secara online di website Schematics 2016 www.schematics.its.ac.id atau bisa secara offline melalui panitia Schematics 2016 secara langsung serta melunasi biaya pendaftaran sebesar Rp 150.000,00 per tim.</li>
                        <li>Setiap sekolah boleh mengirimkan lebih dari satu tim.</li>
                    </ol>
                </h4>
            </div>
            <div class="col-sm-6" style="margin-bottom:3em">
                <div style="font-size:2em; letter-spacing:3px; margin-bottom:1em">
                    <b>Hadiah dan Penghargaan</b>
                </div>
                <p>Total Hadiah Rp 18.000.000,00</p>
<!--                <h2><b>Jadi, Tunggu Apa Lagi?</b></h2>-->
<!--                <a href="#!" class="btn btn-sch-color" style="margin-top:1.5em; font-size:1.5em">DAFTAR SEKARANG</a>-->
                <h4 style="font-weight:300; line-height:1.3em; text-align: left">
                <ol>
                    <li type="square">Juara 1 : Rp 7.500.000 + Sertifikat + Trofi + Piala Bergilir + Diterima di Teknik Informatika*</li>
                    <li type="square">Juara 2 : Rp 4.500.000 + Sertifikat + Trofi</li>
                    <li type="square">Juara 3 : Rp 3.000.000 + Sertifikat + Trofi</li>
                    <li type="square">Juara Harapan I : Rp 1.000.000 + Sertifikat + Trofi</li>
                    <li type="square">Juara Harapan II : Rp 1.000.000 + Sertifikat + Trofi</li>
                    <li type="square">Juara Harapan III : Rp 1.000.000 + Sertifikat + Trofi</li>
                </ol>
                    </h4>
                <p><i>*Diterima di Teknik Informatika ITS melalui jalur SNMPTN tahun 2017 berlaku untuk peserta yang duduk di kelas 12 saat lomba berlangsung dan lulus UN</i></p>
            </div>
        </div>
    </div>
</div>

<div style="width:100%">
    <a data-toggle="modal" href="#modal-doc" onclick="getPhoto(1)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc1.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(2)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc2.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(3)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc3.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(4)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc4.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(5)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc5.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(6)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc6.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(7)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc7.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(8)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc8.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(9)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc9.JPG" class="event-doc"></a><a data-toggle="modal" href="#modal-doc" onclick="getPhoto(10)" class="event-doc-href"><img src="assets/img/dok/nlc/nlc10.JPG" class="event-doc"></a>
</div>

<div id="modal-doc" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="padding-top: 2em; padding-bottom: 2em">
            <div class="modal-body">
                <img src="assets/img/dok/nlc/nlc1.JPG" style="width:100%" id="doc-photo">
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
        var link = "assets/img/dok/nlc/nlc" + x + ".JPG"
        foto.src = link;
    }
</script>

</body>
</html>