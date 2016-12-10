<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sistem Informasi Masjid</title>
       <?php echo $header; ?>
      <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body>
      <?php echo $navbar; ?>
      <!-- HEADLINE -->
      <section style="margin-top: 3em">
      <div style="height:100vh; background-image:url(<?php echo base_url();?>assets/images/islamic-art.jpg); background-attachment: fixed; background-size:cover; color:white">
          <div style="position: relative; top: 50%; text-align: center">
            <h1>Selamat Datang</h1>
             
          </div>
      </div>
         <!-- RECENT POSTS -->
         <!-- BLOG POSTS -->
         <div style="background-color:#F7F7F7; padding:4em 4em">
            <div class="container" style="margin: 0 auto" >
               <div class="">
                  <div class="col-sm-12">
                     <div class="col-sm-12" style="background-color:white; padding: 1.5em; margin-bottom:1em; height: 100vh">
                        <div class="col-sm-6">
                          <img src="<?php echo base_url();?>assets/images/masjid.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                          <h1 style="color:black">Masjid Baitul Muttaqin</h1>
                           <p style="color: black">
                              Address: Jalan Nomer 25, Jl. Keputih Gg. III No.23, Kota SBY, Jawa Timur 60111. Phone: (031) 5931318.
                           </p>
                        </div>
                     </div>
                     
                  </div>
                  
            </div>
         </div>
      </section>
      
      
     <!-- jQuery -->
      <?php echo $footer; ?>

    
   </body>
</html>