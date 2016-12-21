<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Masjid</title>
    <?php echo $header; ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-info"></i> <span>SI MASJID</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php echo $sidebar; ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       <?php echo $navbar; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Pengurus Masjid, <?php echo $nama_pengurus; ?> (<?php echo $jabatan;?>)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if(isset($mesErr))
                      {
                      ?>    
                    <div class="" style="background-color: red; margin: 0 auto; padding: 0.5em; width:50%; ;margin-bottom: 1em; color: white; font-weight: bold">
                              <p style="word-wrap:break-word;font-weight: bold;">
                                <?php echo $mesErr; ?>
                              </p>
                    </div>
                    <?php } ?>
                    <br />
                    <form method="POST" action="<?php echo base_url();?>ControllerPengurusMasjid/updatePengurusMasjidById" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="text" name="idPengurus" value="<?php echo $id_pengurus;?>" hidden>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control
                                 col-md-7 col-xs-12" name="jabatanPengurus">
                                 <option <?php if($jabatan=="Sekertaris") echo "Selected"; ?> value="Sekertaris">Sekertaris</option>
                                 <option <?php if($jabatan=="Ketua") echo "Selected"; ?> value="Ketua">Ketua</option>
                                 <option <?php if($jabatan=="Bendahara") echo "Selected"; ?> value="Bendahara">Bendahara</option>
                                </select>
                          </div>
                        </div>
                        <div class="form-group">

                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="<?php echo $nama_pengurus; ?>" type="text" name="namaPengurus"  class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Telp</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="<?php echo $no_telp_pengurus;?>" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="noTelpPengurus">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="<?php echo $alamat_pengurus; ?>" id="birthday" class="date-picker form-control col-md-7 col-xs-12"  type="text" name="alamatPengurus">
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button onclick="location.reload()" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>

                      </form>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       <?php echo $footer; ?>

  </body>
</html>