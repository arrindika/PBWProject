<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Teachers Page</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

      <?php
          include ('header_admin.php');
      ?>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Teachers Page <small>Manage Teacher's Data</small></h1>
          </div>
          <div class="col-md-2">
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>admin/home">Dashboard</a></li>
            <li class="active">Page : Teachers Page</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php
                include ('left_dashboard.php');
            ?>

          </div>
          <div class="col-md-9">

            <!-- <div id='add-event' class='panel panel-default'>
                <div class='panel-heading main-color-bg'>
                  <h3 class='panel-title'>Add Teachers</h3>
                </div>
                <div class='panel-body'>
                    <form action='submitdataguru' method='post'>
                    <div class='form-group col-md-6'>
                      <label>Nama</label>
                      <input type='text' name='nama' class='form-control' placeholder='Page Title' value=''>
                    </div>
                    <div class='form-group col-md-6'>
                      <label>NIP</label>
                      <input type='text' name='nip' class='form-control' placeholder='NIP Guru. Kosongkan jika tidak ada' value=''>
                    </div>
                    <div class='form-group col-md-6'>
                        <label>Tanggal Lahir</label>
                        <input class='form-control' name='tanggal_lahir' id='date' type='date'>
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Jenis Kelamin</label>
                      <select class='form-control' name="jenis_kelamin">
                          <option value="" selected>Pilih...</option>
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Ijazah Pendidikan</label>
                      <input type='text' name='pendidikan_ijazah' class='form-control' placeholder='Ijazah Pendidikan' value=''>
                    </div>
                    <div class='form-group col-md-6'>
                        <label>Tahun Lulus</label>
                        <input class='form-control' name='pendidikan_tahun' id='date' type=date>
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Pendidikan Tingkat</label>
                      <input type='text' name='pendidikan_tingkat' class='form-control' placeholder='Pendidikan Tingkat' value=''>
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Pendidikan Jurusan</label>
                      <input type='text' name='pendidikan_jurusan' class='form-control' placeholder='Pendidikan Jurusan' value=''>
                    </div>
                    <div class='form-group col-md-6'>
                        <label>Mulai Kerja</label>
                        <input class='form-control' name='mulai_kerja' id='date' type='date'>
                    </div>
                    <div class='form-group col-md-9'>
                        <input type='submit' class='btn btn-default' value='Submit'>
                    </div>

                  </form>
                </div>
            </div> -->

            <!-- Website Overview -->
            <?php
                if(!isset($dataguruEdit)){
                    echo "
                    <div id='add-event' class='panel panel-default'>
                        <div class='panel-heading main-color-bg'>
                          <h3 class='panel-title'>Add Teachers</h3>
                        </div>
                        <div class='panel-body'>
                            <form action='submitDataGuru' method='post'>
                            <div class='form-group col-md-6'>
                              <label>Nama</label>
                              <input type='text' name='nama' class='form-control' placeholder='Page Title' value=''>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>NIP</label>
                              <input type='text' name='nip' class='form-control' placeholder='NIP Guru. Kosongkan jika tidak ada' value=''>
                            </div>
                            <div class='form-group col-md-6'>
                                <label>Tanggal Lahir</label>
                                <input class='form-control' name='tanggal_lahir' id='date' type='date'>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Jenis Kelamin</label>
                              <select class='form-control' name='jenis_kelamin'>
                                  <option value='' selected>Pilih...</option>
                                  <option value='L'>L</option>
                                  <option value='P'>P</option>
                                </select>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Ijazah Pendidikan</label>
                              <input type='text' name='pendidikan_ijazah' class='form-control' placeholder='Ijazah Pendidikan' value=''>
                            </div>
                            <div class='form-group col-md-6'>
                                <label>Tahun Lulus</label>
                                <input class='form-control' name='pendidikan_tahun' id='date' type=date>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Pendidikan Tingkat</label>
                              <input type='text' name='pendidikan_tingkat' class='form-control' placeholder='Pendidikan Tingkat' value=''>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Pendidikan Jurusan</label>
                              <input type='text' name='pendidikan_jurusan' class='form-control' placeholder='Pendidikan Jurusan' value=''>
                            </div>
                            <div class='form-group col-md-6'>
                                <label>Mulai Kerja</label>
                                <input class='form-control' name='mulai_kerja' id='date' type='date'>
                            </div>
                            <div class='form-group col-md-9'>
                                <input type='submit' class='btn btn-default' value='Submit'>
                            </div>

                          </form>
                        </div>
                    </div>
                    ";
                }else{
                    // $date = date("Y-m-d", strtotime($dataguruEdit->eventDateTime));
                    // $time = date("H:i:s", strtotime($dataguruEdit->eventDateTime));
                    // $dateTime = $date."T".$time;
                    $l = "";
                    $p = "";
                    if($dataguruEdit->jenis_kelamin=='L'){
                        $l = "selected";
                    }else{
                        $p = "selected";
                    }
                    $tanggallahir = date('Y-m-d', strtotime($dataguruEdit->tanggal_lahir));
                    $pendidikantahun = date('Y-m-d', strtotime($dataguruEdit->pendidikan_tahun));
                    $mulaikerja = date('Y-m-d', strtotime($dataguruEdit->mulai_kerja));
                    echo "
                    <div id='edit-event' class='panel panel-default'>
                        <div class='panel-heading main-color-bg'>
                          <h3 class='panel-title'>Edit Teachers</h3>
                        </div>
                        <div class='panel-body'>
                            <form action='editDataGuru' method='post'>
                            <input hidden type='text' name='id' value='$dataguruEdit->id'></input>
                            <div class='form-group col-md-6'>
                              <label>Nama</label>
                              <input type='text' name='nama' class='form-control' placeholder='Page Title' value='$dataguruEdit->nama'>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>NIP</label>
                              <input type='text' name='nip' class='form-control' placeholder='NIP Guru. Kosongkan jika tidak ada' value='$dataguruEdit->nip'>
                            </div>
                            <div class='form-group'>
                                <label>Events Date</label>
                                <input class='form-control' name='tanggal_lahir' type='date' value='$tanggallahir'>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Jenis Kelamin</label>
                              <select class='form-control' name='jenis_kelamin'>
                                  <option value='L' $l>L</option>
                                  <option value='P' $p>P</option>
                                </select>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Ijazah Pendidikan</label>
                              <input type='text' name='pendidikan_ijazah' class='form-control' placeholder='Ijazah Pendidikan' value='$dataguruEdit->pendidikan_ijazah'>
                            </div>
                            <div class='form-group'>
                                <label>Events Date</label>
                                <input class='form-control' name='tanggal_lahir' type='date' value='$pendidikantahun'>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Pendidikan Tingkat</label>
                              <input type='text' name='pendidikan_tingkat' class='form-control' placeholder='Pendidikan Tingkat' value='$dataguruEdit->pendidikan_tingkat'>
                            </div>
                            <div class='form-group col-md-6'>
                              <label>Pendidikan Jurusan</label>
                              <input type='text' name='pendidikan_jurusan' class='form-control' placeholder='Pendidikan Jurusan' value='$dataguruEdit->pendidikan_jurusan'>
                            </div>
                            <div class='form-group col-md-6'>
                                <label>Mulai Kerja</label>
                                <input class='form-control' name='mulai_kerja' type='date' value='$mulaikerja'>
                            </div>
                            <div class='form-group col-md-9'>
                                <input type='submit' class='btn btn-default' value='Submit'>
                            </div>

                          </form>
                        </div>
                    </div>
                    ";
                }
             ?>


              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Events</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Users...">
                        </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover">
                        <tr>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th></th>
                          <th></th>
                        </tr>
                        </form>
                        <?php
                            $editID = NULL;
    						if (isset($teachersdata)) {
    							foreach ($teachersdata as $teacherdata) {
    								$tanggallahir = date('Y-m-d', strtotime($teacherdata->tanggal_lahir));
    								echo "
                                    <tr>
                                        <td>$teacherdata->nama</td>
                                        <td>$teacherdata->jenis_kelamin</td>
                                        <td>$teacherdata->tanggal_lahir</td>
                                        <form action='teachers' method='post'>
                                            <input hidden type='text' name='edit-id' value='$teacherdata->id'>
                                            <td><input type='submit' class='btn btn-primary' value='Edit'></td>
                                        </form>
                                        <form action='deleteDataGuru' method='post'>
                                            <input hidden type='text' name='edit-id' value='$teacherdata->id'>
                                            <td><input type='submit' class='btn btn-danger' value='Delete'></td>
                                        </form>
                                    </tr>
    								";
    							}
    						}
    					?>
                        </tr>
                      </table>
                </div>
                </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>SMPK ST THERESIA KUPANG, &copy; 2018</p>
    </footer>

    <!-- Modals -->



  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript">
            $( "#datepicker" ).datepicker({dateFormat: 'yy'});
      </script>
  </body>
</html>
