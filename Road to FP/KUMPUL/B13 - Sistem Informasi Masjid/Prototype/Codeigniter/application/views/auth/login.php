<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Masjid</title>

    <!-- Bootstrap -->
    <?php echo $header; ?>
  </head>

  <body class="login">
    <div>
      

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo base_url(); ?>index.php/auth/doLogin">
              <h1>Login Pengurus</h1>
              <?php if($this->session->meslog){ ?>
                <div style="background-color: red; text-align: left;color:white; padding: 1em; margin-bottom: 1em">
                  <p style="word-wrap:break-word;">
                  <?php
                      echo $this->session->meslog;
                      $this->session->unset_userdata('meslog');
                  ?>
                  </p>
                </div>
              <?php } ?>
              <div>
                <input type="text" class="form-control" name="idPengurus" placeholder="ID"  />
              </div>
              <div>
                <input type="password" class="form-control" name="passwordPengurus" placeholder="Password"  />
              </div>
              <div>
                <button class="btn btn-default submit" >Log in</button>
              </div>

              <div class="clearfix"></div>

                  <h1><i class="fa fa-info"></i> Sistem Informasi Masjid</h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>