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
            <!-- <div class="sidebar-footer hidden-small">
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Mengelola Pengurus Masjid</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Pengurus Masjid</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tambahPengurus" id="tambahPengurusData" role="tab" data-toggle="tab" aria-expanded="true">Tambah</a>
                        </li>
                        <li role="presentation" class=""><a href="#editPengurus" role="tab" id="updatePengurus" data-toggle="tab" aria-expanded="false">Edit</a>
                        </li>
                        <li role="presentation" class=""><a href="#hapusPengurus" role="tab" id="deletePengurus" data-toggle="tab" aria-expanded="false">Delete</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tambahPengurus" aria-labelledby="home-tab">
                        <?php if($this->session->meslog) { ?>
                          <div class="" style="background-color: red; margin: 0 auto; padding: 0.5em; width:50%; ;margin-bottom: 1em; color: white; font-weight: bold">
                              <p style="word-wrap:break-word;font-weight: bold;">
                              <?php
                                  echo $this->session->meslog;
                                  $this->session->unset_userdata('meslog');
                              ?>
                              </p>
                          </div>
                          <?php }?>
                          <div class="clearfix"></div>
                          <form id="demo-form2" method="POST" action="<?php echo base_url()?>ControllerPengurusMasjid/addPengurusMasjid" data-parsley-validate class="form-horizontal form-label-left">
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jabatan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <select class="form-control
                                 col-md-7 col-xs-12" name="jabatanPengurus"><option value="Sekertaris">Sekertaris</option>
                                 <option value="Ketua">Ketua</option>
                                 <option value="Bendahara">Bendahara</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="namaPengurus"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Telp <span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="noTelpPengurus">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class=" form-control col-md-7 col-xs-12"  type="text" name="alamatPengurus">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="passwordPengurus" class=" form-control col-md-7 col-xs-12"  type="password">
                              </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="reset" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>

                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="editPengurus" aria-labelledby="profile-tab">
                          <table id="datatableEdit" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>ID Pengurus</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="dataTablesEditBody">
                              <!-- <tr id="data1">
                                <td>Ketua</td>
                                <td>M. Naim</td>
                                <td>089738271638</td>
                                <td>Jalan Keputih Gg. II/15 </td>
                                <td><a href="updatePengurusMasjid.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr>
                              <tr id="data2">
                                <td>Sekretaris</td>
                                <td>M. Irfak</td>
                                <td>081237182937</td>
                                <td>Jalan Keputih Gg. I/10A</td>
                                <td><a href="updatePengurusMasjid.html"><button class="btn btn-info btn-sm" type="">Edit</button></a></td>
                              </tr> -->
                           </tbody>
                          </table>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="hapusPengurus" aria-labelledby="profile-tab">
                          <table id="datatableDelete" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>ID Pengurus</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody class="dataTablesDeleteBody">
                              <!-- <tr id="data1">
                                <td>Ketua</td>
                                <td>M. Naim</td>
                                <td>089738271638</td>
                                <td>Jalan Keputih Gg. II/15</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr>
                               <tr id="data2">
                                <td>Sekretaris</td>
                                <td>M. Irfak</td>
                                <td>081237182937</td>
                                <td>Jalan Keputih Gg. I/10A</td>
                                <td><button class="delete-but btn btn-danger btn-sm" type="">Delete</button></td>
                              </tr> -->
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
        <form hidden id="formUpdateMengelola" action="<?php echo base_url();?>ControllerPengurusMasjid/isianEditPengurusMasjidById/" method="POST">
        <input type="text" name="id_pengurus" id="id_pengurus">
        <input type="text" name="jabatan" id="jabatan">
        <input type="text" name="nama_pengurus" id="nama_pengurus">
        <input type="text" name="no_telp_pengurus" id="no_telp_pengurus">
        <input type="text" name="alamat_pengurus" id="alamat_pengurus">
          
        </form>
        <!-- /page content -->

        <!-- footer content -->
        <?php echo $footer; ?>


    <!-- PNotify -->
    <script>
      $(document).ready(function() {
          <?php if($this->session->messageTambahSukses)
                {
                  $this->session->unset_userdata('messageTambahSukses');
          ?>
                  swal("Sukses", "Sukses menambahkan data ke database", "success");
          <?php
                }
                if($this->session->messageTambahGagal)
                {
                  $this->session->unset_userdata('messageTambahGagal');
          ?> 
                  swal("Gagal", "Gagal menambahkan data ke database", "error");
          <?php } ?>  

          <?php if($this->session->messageUpdateSukses)
                {
                  $this->session->unset_userdata('messageUpdateSukses');
          ?>
                  swal("Sukses", "Sukses mengubah data", "success");
          <?php
                }
                if($this->session->messageUpdateGagal)
                {
                  $this->session->unset_userdata('messageUpdateGagal');
          ?> 
                  swal("Gagal", "Gagal mengubah data atau tidak ada perubahan pada data", "error");
          <?php } ?>  

      });
      $(document).on('click','#updatePengurus', function()
      {
            console.log("Update");
            $.ajax({
            type:'GET',
            url:'<?php echo base_url();?>ControllerPengurusMasjid/getAllPengurusMasjid',
            dataType:'JSON',
            //traditional: true,
            success:function(response){
                        //console.log(response);

                        var length = response.length;

                        for(i=0;i<length;i++)
                        {
                            var record = "<tr id='data"+response[i].id_pengurus+"'>\
                            <td>"+response[i].id_pengurus+"</td>\n\
                            <td>"+response[i].jabatan+"</td>\n\
                            <td>"+response[i].nama_pengurus+"</td>\n\
                            <td>"+response[i].no_telp_pengurus+"</td>\n\
                            <td>"+response[i].alamat_pengurus+"</td>\n\
                            <td><button class='edit-but btn btn-info btn-sm' type=''>Edit</button></td>\n\
                            </tr>";

                           if(i==0) $(".dataTablesEditBody").html(record);
                           else $(".dataTablesEditBody").append(record);

                        }
                    },
            error: function(response){
                        console.log("Gagal");
                }
            });  
      });

      $(document).on('click', '.edit-but', function(e){

          var tableEdit= $('#datatableEdit').DataTable();
          var rowData = [];
          var action = $("#formUpdateMengelola").attr("action");
          var editId = $(this).closest("tr").attr('id');
            $("#"+editId).find("td").each(function(){
              rowData.push($(this).html());
          });


          $("#id_pengurus").attr('value',rowData[0]);
          $("#jabatan").attr('value',rowData[1]);
          $("#nama_pengurus").attr('value',rowData[2]);
          $("#no_telp_pengurus").attr('value',rowData[3]);
          $("#alamat_pengurus").attr('value',rowData[4]);
          $("#formUpdateMengelola").attr("action",action+rowData[0]);
          $("#formUpdateMengelola").submit();



      });

      $(document).on('click','#deletePengurus', function()
      {
            console.log("Delete");
            $.ajax({
            type:'GET',
            url:'<?php echo base_url();?>ControllerPengurusMasjid/getAllPengurusMasjid',
            dataType:'JSON',
            //traditional: true,
            success:function(response){
                        console.log(response);

                        var length = response.length;

                        for(i=0;i<length;i++)
                        {
                            var record = "<tr id='data"+response[i].id_pengurus+"'>\
                            <td>"+response[i].id_pengurus+"</td>\n\
                            <td>"+response[i].jabatan+"</td>\n\
                            <td>"+response[i].nama_pengurus+"</td>\n\
                            <td>"+response[i].no_telp_pengurus+"</td>\n\
                            <td>"+response[i].alamat_pengurus+"</td>\n\
                            <td><button class='delete-but btn btn-danger btn-sm' type=''>Delete</button></td>\n\
                            </tr>";

                           if(i==0) $(".dataTablesDeleteBody").html(record);
                           else $(".dataTablesDeleteBody").append(record);

                        }
                    },
            error: function(response){
                        console.log("Gagal");
                }
            });  
      });
    </script>
    <!-- /PNotify -->
    <script>
      $(document).ready(function() {
        
        $('#datatableEdit').dataTable({"searching": false,"bLengthChange": false});
        $('#datatableDelete').dataTable({"searching": false,"bLengthChange": false});
        /*$('#sidebar-menu').load('sidebar-ketua.html');*/
      });
    </script>
    <script>
      $(document).on('click', '.delete-but', function(e){
        e.preventDefault();
       /* var tableDelete = $('#datatableDelete').DataTable();
        var tableEdit= $('#datatableEdit').DataTable();*/
        var id = $(this).closest("tr").attr('id');
        var idPengurus = id.split('data')[1];

        var ajax  = function(id, idPengurus)
        {

            var data = 
            $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>ControllerPengurusMasjid/deletePengurusMasjidById',
            data:'idPengurus='+idPengurus,
            //traditional: true,
            success:function(response){
                         swal("Terhapus!", "Data sudah terhapus", "success");
                         $("#"+id).remove();
                         console.log(id);
                    },
            error: function(response){
                        console.log("Gagal");
                }
            });
        }
            
         swal({
          title: "Apa anda yakin?",
          text: "Data yang terhapus tidak bisa dikembalikan",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",   
          confirmButtonText: "Ya, hapus!",   
          closeOnConfirm: false }, 
          function(){   
            ajax(id, idPengurus);
          });
      });
    </script>
    <!-- Custom Notification -->
    
  </body>
</html>