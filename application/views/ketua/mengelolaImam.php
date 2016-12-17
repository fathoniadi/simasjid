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
            <div class="sidebar-footer hidden-small">
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
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php echo $navbar; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mengelola Imam Masjid</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Imam Masjid</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tambahImamMasjid" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tambah Imam</a>
                        </li>
                        <li role="presentation" class=""><a href="#tambahJadwalImam" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Tambah Jadwal Imam</a>
                        </li>
                        <li role="presentation" class=""><a href="#editImamMasjid" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit</a>
                        <li role="presentation" class=""><a href="#editJadwalImam" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit Jadwal Imam</a>
                        </li>
                        <li role="presentation" class=""><a href="#hapusImamMasjid" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Delete</a>
                        <li role="presentation" class=""><a href="#hapusJadwalImam" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Delete Jadwal Imam</a>
                        </li>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tambahImamMasjid" aria-labelledby="home-tab">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Telp <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
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
                        <div role="tabpanel" class="tab-pane fade" id="tambahJadwalImam" aria-labelledby="home-tab">
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
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Acara </label>
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
                        <div role="tabpanel" class="tab-pane fade" id="editJadwalImam" aria-labelledby="profile-tab">
                          <table id="datatableEdit" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Acara</th>
                                <th>Imam</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>


                            <tbody>
                              <tr id="data1">
                                <td>28 November 2016</td>
                                <td>17.43</td>
                                <td>Sholat Magrib</td>
                                <td>M. Hanif</td>
                                <td><a href="updateJadwalImam.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr>
                              <tr id="data2">
                                <td>29 November 2016</td>
                                <td>11.27</td>
                                <td>Sholat Dzuhur</td>
                                <td>Hamrizal</td>
                                <td><a href="updateJadwalImam.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="editImamMasjid" aria-labelledby="profile-tab">
                          <table id="datatableEdit" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>


                            <tbody>
                              <tr id="data1">
                                <td>M. Hanif</td>
                                <td>089789372618</td>
                                <td>Jalan Keputih Gg. I/1</td>
                                <td><a href="updateImamMasjid.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr>
                              <tr id="data2">
                                <td>Hamrizal</td>
                                <td>085737429182</td>
                                <td>Jalan Keputih Gg. I/4</td>
                                <td><a href="updateImamMasjid.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="hapusImamMasjid" aria-labelledby="profile-tab">
                          <table id="datatableDelete" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr id="data1">
                                <td>M. Hanif         </td>
                                <td>089789372618</td>
                                <td>Jalan Keputih Gg. I/1</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr>
                               <tr id="data2">
                                <td>Hamrizal</td>
                                <td>085737429182</td>
                                <td>Jalan Keputih Gg. I/4</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="hapusJadwalImam" aria-labelledby="profile-tab">
                          <table id="datatableDelete" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Acara</th>
                                <th>Imam</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr id="data1">
                                <td>28 November 2016</td>
                                <td>17.43</td>
                                <td>Sholat Magrib</td>
                                <td>M. Hanif</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr>
                               <tr id="data2">
                                <td>29 November 2016</td>
                                <td>11.27</td>
                                <td>Sholat Dzuhur</td>
                                <td>Hamrizal</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php echo $footer; ?>



    <!-- PNotify -->
    <script>
      $(document).ready(function() {
        /*new PNotify({
          title: "PNotify",
          type: "info",
          text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
          nonblock: {
              nonblock: true
          },
          addclass: 'dark',
          styling: 'bootstrap3',
          hide: false,
          before_close: function(PNotify) {
            PNotify.update({
              title: PNotify.options.title + " - Enjoy your Stay",
              before_close: null
            });

            PNotify.queueRemove();

            return false;
          }
        });*/

      });
    </script>
    <!-- /PNotify -->
    <script>
      $(document).ready(function() {
        
        $('#datatableEdit').dataTable();
        $('#datatableDelete').dataTable();
        /*$('#sidebar-menu').load('sidebar-ketua.html');*/
      });
    </script>
    <script>
      $(document).on('click', '.delete-but', function(e){
        e.preventDefault();
        var tableDelete = $('#datatableDelete').DataTable();
        var tableEdit= $('#datatableEdit').DataTable();
        var id = $(this).closest("tr").attr('id');
        console.log(id);
            
         swal({
          title: "Apa anda yakin?",
          text: "Data yang terhapus tidak bisa dikembalikan",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",   
          confirmButtonText: "Ya, hapus!",   
          closeOnConfirm: false }, 
          function(){   
            swal("Terhapus!", "Data sudah terhapus", "success");
            tableDelete.row($(this).closest("tr").get(0)).remove().draw( false );
            tableEdit.row('#'+id).remove().draw( false );

          });
      });
    </script>
    <!-- Custom Notification -->
    
  </body>
</html>