<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Masjid</title>

   <?php $header; ?>
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
                    <h2>Update Jadwal Imam, M. Hanif</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Waktu <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan Sholat </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Imam<span class="required">*</span>
                          </label>
                          <div class="col-md-8 col-sm-8 col-xs-8">
                           <!--  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                          <select id="dateDonation">
                              <option value="">Pilih Nama Imam</option>
                              <option value="M. Hanif">M. Hanif</option>
                              <option value="Hamrizal">Hamrizal</option>
                          </select>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
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

       <?php echo $footer;?>

    <!-- Flot -->
    <!-- <script>
      $(document).ready(function() {
        $('#sidebar-menu').load('sidebar-ketua.html');
        $('#datatablePemberiQurban').dataTable({"searching": false,"bLengthChange": false});
        $('#datatablePenerimaQurban').dataTable({"searching": false,"bLengthChange": false});
        
      });

      $(document).on('change','#qurbanYear', function(){
        var qurbanYear = $(this).val();
        if(!qurbanYear) $('#laporanQurban').css('display','none');
        else {
          $('#laporanQurban').css('display','inline-block');
        $('#qurbanYearValue').html(qurbanYear);
        }
      })
    </script> -->
  </body>
</html>