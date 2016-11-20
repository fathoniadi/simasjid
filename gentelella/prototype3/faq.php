<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>FAQ | Schematics 2016</title>      
		
		<?php include "parts/header.php"; ?>
	
		<link rel="stylesheet" href="assets/css/faq.css?v=1.0">
        
        <style type="text/css">

			body {
			 padding-top:50px;
			}

			#masthead { 
			 min-height:200px;
			}

			#masthead h1 {
			 font-size: 30px;
			 line-height: 1;
			 padding-top:20px;
			}

			#masthead .well {
			 margin-top:8%;
			}

			@media screen and (min-width: 768px) {
			  #masthead h1 {
				font-size: 50px;
			  }
			}


			.affix-top,.affix{
			 position: static;
			}

			@media (min-width: 979px) {
			  #sidebar.affix-top {
				position: static;
				margin-top:30px;
				width:228px;
			  }
			  
			  #sidebar.affix {
				position: fixed;
				top:70px;
				width:228px;
			  }
			}

			#sidebar li.active {
			  border:0 #eee solid;
			  border-right-width:5px;
			}

        </style>
		
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			 $("a").click(function(){
				 $("a").removeClass("active");
			  	 $(this).addClass("active");
			});
		});
	</script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$(".faq-answers").hide();
		$('.faq-questions').on('click', function() {
			$parent_box = $(this).closest('.question-container');
			$parent_box.siblings().find('.faq-answers').slideUp();
			$parent_box.find('.faq-answers').slideToggle(300, 'swing');
		});
	});
	</script>
	
    </head>
    
    
    <body>
    <?php include "parts/navbar-index.php"; ?>
	<!--judul-->
    
        <div id="particle" style="width:100%; height:100vh; top:0; position:fixed; z-index:-1"></div>
    
	<div id="masthead">  
        <div class="container faq-header">
            <div class="row">
                <div class="col-md-12">
                    <h1><b>Frequently Asked Questions</b></h1>
                </div>
            </div> 
        </div><!--/container-->
    </div><!--/masthead-->

	<!--faq-->
	<div class="container">
		<div class="row">
		  <!--left-->
		  <div class="col-md-3" id="leftCol">
			<ul class="nav nav-stacked list-group faq-menu" id="sidebar">
			  <a class="nlc" href="#nlc"><li class="list-group-item">NLC</li></a>
			  <a class="npc" href="#npc"><li class="list-group-item">NPC</li></a>
			  <a class="nst" href="#nst"><li class="list-group-item">NST</li></a>
			  <a class="reeva" href="#reeva"><li class="list-group-item">REEVA</li></a>
			  <a href="https://ask.fm/schematics_its" target="_blank" class="btn btn-sch-grey-inv">FOR ANOTHER QUESTION</a>
			</ul>
		  </div><!--/left-->
		  
		  <!--right-->
		  <div class="col-sm-6 col-md-9 faq-answers-container">
			<div id="nlc" class="faq-event-container">
				<div class="faq-title event-nlc">| NLC </div>
				<div class="question-container">
                    <div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Tim untuk NLC boleh beda angkatan nggak, Kak?</a> </div>
					<div id="answer" class="faq-answers">
						Boleh dong, yang penting masih dalam satu sekolah
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Tim untuk NLC boleh beda angkatan nggak, Kak?</a> </div>
					<div id="answer" class="faq-answers">
						Boleh dong, yang penting masih dalam satu sekolah
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kak, tempat penyisihannya nanti di mana? (offline)</a> </div>
					<div id="answer" class="faq-answers">
						Tunggu kabar dari kami, ya. Pasti akan kami umumkan lokasi penyisihannya kok.
					</div>
				</div>
				<div class="question-container">
                    <div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">NLC ini lombanya nggak ada fisika kimia atau biologi gitu kah?</a> </div>
					<div id="answer" class="faq-answers">
						Tidak ada :) NLC lombanya full logika dan matematika saja
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kak, kalau tim kami tidak lolos penyisihan NLC tetap dapat sertifikatkah?</a> </div>
					<div id="answer" class="faq-answers">
						Tentu tetap dapat, dong. Sertifikatnya kelas nasional lho ;)
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kak, kalau saya daftar online, berarti lombanya juga online kan?</a> </div>
					<div id="answer" class="faq-answers">
						Belum tentu, kok. Itu tergantung di mana kamu mengisi tempat penyisihannya.
						Jadi, kamu tetap bisa memilih tempat offline maupun online
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kak, ikutan NLC online dapat sertifikat juga nggak?</a> </div>
					<div id="answer" class="faq-answers">
						Tentu dapat juga, dong ;)
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kak, kalau juara 1 ini yang dapet free pass semua anak dalam satu tim atau ketua timnya saja?</a> </div>
					<div id="answer" class="faq-answers">
						Semua yang ada di dalam tim doong, yang berhak mendapat free pass S1 Teknik Informatika ITS ;)
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Ini nama timnya diisi apa ya, Kak?</a> </div>
					<div id="answer" class="faq-answers">
						Wah, terserah kamu mau nama timnya apa hehe. Yang terpenting jangan ada tanda apostrof ('), ya.
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nlc faq-questions"><a style="color:#404040" href="#!">Kalau kita mau tahu soal-soal logika di mana, Kak?</a> </div>
					<div id="answer" class="faq-answers">
						Kamu bisa lihat di sosmed kita (terutama official account LINE Schematics, jangan lupa add ya!), banyak soal-soal yang di-post di situ, kok. Kalau merasa kurang, coba cari di internet ;)
					</div>
				</div>
			</div>
			
			<div id="npc" class="faq-event-container">
				<div class="faq-title event-npc">| NPC </div>
				<div class="question-container">
                    <div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Kak, aku tertarik sama lomba NPC tapi aku belum pernah belajar programming sama sekali gimana dong?</a> </div>
					<div id="answer" class="faq-answers">
						Tenang aja, dari panitia akan menyediakan tutorial online dan modul modul dasar untuk pemrogramman, jadi kamu bisa belajar dari awal kok
					</div>
				</div>
				<div class="question-container">
                    <div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Kak, ini penyisihan NPC nggak ada yang offline, ya?</a> </div>
					<div id="answer" class="faq-answers">
						Penyisihan NPC online semua, jadi bisa kamu kerjakan dari mana saja asalkan terkoneksi dengan internet
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Kak, untuk final NPC diadakan secara online jugakah?</a> </div>
					<div id="answer" class="faq-answers">
						Tidak, final NPC akan dilaksanakan live coding di Teknik Informatika ITS Surabaya ;) Seru, kan?
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Kak, bahasa pemrograman yang dipakai apa ya?</a> </div>
					<div id="answer" class="faq-answers">
						Bisa bahasa C/C++ atau Pascal
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Oya Kak, ini yang juara dapat free pass langsung ke Teknik Informatika ITS?</a> </div>
					<div id="answer" class="faq-answers">
						Iya, kalau berhasil meraih juara 1 akan mendapat free pass masuk S1 Teknik Informatika ITS
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-npc faq-questions"><a style="color:#404040" href="#!">Kalau saya nggak lolos penyisihan bakal tetap dapat sertifikat nggak?</a> </div>
					<div id="answer" class="faq-answers">
						Tetap dapet tenang aja, sertifikatnya kelas nasional lho. Makanya jangan ragu untuk ikutan NPC Schematics 2016 :)
					</div>
				</div>

			</div>
			
			<div id="nst" class="faq-event-container">
				<div class="faq-title event-nst">| NST </div>
				<div class="question-container">
                    <div id="quest" class="event-nst faq-questions"><a style="color:#404040" href="#!">NST itu cuma seminar aja ya, Kak?</a> </div>
					<div id="answer" class="faq-answers">
						Eits, jangan salah. NST adalah salah satu acara dari Schematics 2016 dengan isi acaranya adalah seminar bertaraf nasional dan IT Expo
					</div>
				</div>
				<div class="question-container">
                    <div id="quest" class="event-nst faq-questions"><a style="color:#404040" href="#!">Kalau gitu, pesertanya dapat sertifikat nggak?</a> </div>
					<div id="answer" class="faq-answers">
						Pasti dapat, dong ;)
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-nst faq-questions"><a style="color:#404040" href="#!">Apa bedanya NST dengan seminar-seminar lain?</a> </div>
					<div id="answer" class="faq-answers">
						NST adalah seminar yang mengusung tema-tema tentang teknologi masa kini. Jadi, kamu bisa semakin up to date, deh ;) Pembicaranya juga didatangkan dari pakarnya langsung. Selain itu, di NST kamu juga bisa berkunjung ke IT Expo karya mahasiswa Teknik Informatika ITS
					</div>
				</div>
			</div>
			
			<div id="reeva" class="faq-event-container">
				<div class="faq-title event-reeva">| REEVA </div>
				<div class="question-container">
                    <div id="quest" class="event-reeva faq-questions"><a style="color:#404040" href="#!">REEVA itu apa sih?</a></div>
					<div id="answer" class="faq-answers">
						“Revolutionary Entertainment and Expo with Various Arts”
						Sebagai puncak acara dalam rangkaian kegiatan Schematics 2016.
					</div>
				</div>
				<div class="question-container">
                    <div id="quest" class="event-reeva faq-questions"><a style="color:#404040" href="#!">Di REEVA ada apa aja memangnya? </a></div>
					<div id="answer" class="faq-answers">
						Pada REEVA kali ini terdapat expo yang akan diisi oleh karya mahasiswa Teknik Informatika ITS, komunitas, stall makanan dan sponsor. Sebagai puncak acara dari rangkaian Schematics 2016, REEVA akan menghadirkan artis ibukota dan juga band dari mahasiswa Teknik Informatika
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-reeva faq-questions"><a style="color:#404040" href="#!">Kapan REEVA 2016 akan dilaksanakan?</a></div>
					<div id="answer" class="faq-answers">
						Nah, REEVA bakal diadakan pada
						Hari/Tanggal​: Sabtu, 22 Oktober 2016
						Tempat​: Tempat Parkir Delta Plaza
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-reeva faq-questions"><a style="color:#404040" href="#!">Tahun ini guest star-nya siapa, sih?</a></div>
					<div id="answer" class="faq-answers">
						Penasaran, ya? Masih dirahasiakan dan akan diinfokan secepatnya. Ikuti terus info dari kita, ya!
					</div>
				</div>
				<div class="question-container">
					<div id="quest" class="event-reeva faq-questions"><a style="color:#404040" href="#!">Harga tiket REEVA berapa dan bisa dibeli di mana?</a></div>
					<div id="answer" class="faq-answers">
						Harga tiket dan ticket box masih belum bisa kami beritahu. Pokoknya, pantengin terus sosial media Schematics ITS ;)
					</div>
				</div>
			</div>
		</div>
		</div><!--/row-->
	</div><!--/container-->
	
	
	<script type='text/javascript' src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$(document).ready(function() {
            /* activate sidebar */
			$('#sidebar').affix({
			  offset: {
				top: 185
			  }
			});

			/* activate scrollspy menu */
			var $body   = $(document.body);
			var navHeight = $('.navbar').outerHeight(true) + 10;

			$body.scrollspy({
				target: '#leftCol',
				offset: navHeight
			});

			/* smooth scrolling sections */
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top - 100
					}, 1000);
					return false;
				  }
				}
			});
					
					});
        
        </script>
        <script src="<?php echo base_url();?>assets/js/jquery.particleground.js"></script>
         <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                particleground(document.getElementById('particle'), {
                    dotColor: 'rgba(0,0,0,0.08)',
                    lineColor: 'rgba(0,0,0,0.08)'
                });
            }, false);
        </script>
        <script type="text/javascript">
            $("#navi").css('background-color','transparent');
            $("#navi").css('border','none');;
            $(".dropdown-toggle").css('background-color','transparent');
            $(window).scroll(function() {
                var x = $(window).scrollTop();
                if (x == 0) {
                  $("#navi").css('background-color','transparent');
                  $("#navi").css('border','none');;
                  $(".dropdown-toggle").css('background-color','transparent');
                } else {
                  $("#navi").css('background-color','white');
                  $("#navi").css('border','');
                  $(".dropdown-toggle").css('color','');
                  $(".dropdown-toggle").css('background-color','');
                  $(".nav-logo").attr('src','assets/img/logo.png');
                }
            });
        </script>
        
   <?php include "parts/footer.php"; ?>
        
    </body>
</html>