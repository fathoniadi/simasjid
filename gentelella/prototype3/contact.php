<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Contact Us | Schematics 2016</title>
	<?php include 'parts/header.php';?>
</head>
<body>
	<?php include "parts/navbar-index.php";?>

    <div style="min-height:100vh; background-image:url(assets/img/dok/npc/npc1.JPG); background-size:cover; color:white">
        <div class="container" style="padding-top:80px; padding-bottom:40px">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <h1 style="margin-bottom:1.2em"><b>Contact Us</b></h1>
                        
                        <div class="col-sm-5">
                            <div style="width:100%; padding:1em; background-color:rgba(255,255,255,0.7); text-align:left; color:rgb(80,80,80); margin-bottom:2em">
                                <div class="col-sm-12"><h4 style="margin-bottom:1em"><b>Leave Us A Message</b></h4></div>
                                <div class="col-sm-12" style="margin-bottom:1em">
                                    <input style="width:48%; float:left" type="text" name="cu-name" class="form-control" placeholder="Full Name" required autofocus>
                                    <input style="width:48%; float:right" type="email" name="cu-email" class="form-control" placeholder="Email" required autofocus>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:1em">
                                    <input style="width:48%; float:left" type="text" name="cu-hp" class="form-control" placeholder="Phone Number" required autofocus>
                                    <select style="width:48%; float:right" class="form-control" id="inputEvent" name="cu-event">
                                      <option selected disabled>Event Participated</option>
                                      <option value="nlc">NLC</option>
                                      <option value="npc">NPC</option>
                                      <option value="nst">NST</option>
                                      <option value="reeva">REEVA</option>
                                      <option value="-">Not Participating</option>
                                    </select>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:1em">
                                   <input type="text" name="cu-subj" id="inputSubj" class="form-control" placeholder="Message Title" required autofocus>
                                </div>
                                <div class="col-sm-12" style="margin-bottom:1em">
                                   <textarea name="cu-text" class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                   <button class="btn btn-sch-color btn-block" type="submit">SEND</button>
                                </div>
                                .
                            </div>
                        </div>
                        
                        <div class="col-sm-7">
                            <div class="col-sm-12"><h4 style=""><b>Visit Us</b></h4></div>
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:290px;width:90%;'><div id='gmap_canvas' style='height:440px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://termsandcondiitionssample.com">terms and conditions generator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-7.279551002960509,112.7987782682617),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.279551002960509,112.7987782682617)});infowindow = new google.maps.InfoWindow({content:'<strong>Teknik Informatika ITS</strong><br>Jl. Teknik Kimia,Keputih,Sukolilo,Kota SBY, Jawa Timur<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>                            
                            
                            <div class="col-sm-12"><h4 style=""><b>Get In Touch With Us</b></h4></div>
                            <a href="https://www.facebook.com/schematicshmtc" target="_blank"><img class="socmeds" src="assets/img/socmeds/fb.png"></a>
                            <a href="https://www.instagram.com/schematics.its" target="_blank"><img class="socmeds" src="assets/img/socmeds/ig.png"></a>
                            <a href="https://twitter.com/schematics_its" target="_blank"><img class="socmeds" src="assets/img/socmeds/twitter.png"></a>
                            <a href="https://ask.fm/schematics_its" target="_blank"><img class="socmeds" src="assets/img/socmeds/ask.png"></a>
                            <a href="http://line.me/ti/p/%40QIE3078Y" target="_blank"><img class="socmeds" src="assets/img/socmeds/line.png"></a>
                        </div>
                        
                    </center>
                </div>
            </div>
        </div>
    </div>

    <?php include "parts/footer.php"; ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        if($(document).width()<=768)
        {
          $('.dropdown-li').css('color','white'); 
        }
        else 
        {
          $('.dropdown-li').css('color','');
        }
        $("#navi").css('background-color','transparent');
        $("#navi").css('border','none');
        $(".dropdown-toggle").css('color','white');
        $(".nav-menu").css('color','white');
        $(".dropdown-toggle").css('background-color','transparent');
        $(".nav-logo").attr('src','assets/img/logo-white.png');
        $(window).scroll(function() {
            var x = $(window).scrollTop();
            if (x == 0) {
              $("#navi").css('background-color','transparent');
              $("#navi").css('border','none');
              $(".dropdown-toggle").css('color','white');
              $(".nav-menu").css('color','white');
              $(".dropdown-toggle").css('background-color','transparent');
              $(".nav-logo").attr('src','assets/img/logo-white.png');
              if($(document).width()<768)
              {
                $('.dropdown-li').css('color','white');
                
              }
              else 
              {
                $('.dropdown-li').css('color','');
              }
            } else {
              $("#navi").css('background-color','white');
              $("#navi").css('border','');
              $(".dropdown-toggle").css('color','');
              $(".nav-menu").css('color','');
              $(".dropdown-toggle").css('background-color','');
              $(".nav-logo").attr('src','assets/img/logo.png');
              $('.dropdown-li').css('color','');
            }
        });
    </script>
</body>

</html>
