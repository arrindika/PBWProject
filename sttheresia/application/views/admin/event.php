<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Edit Page</title>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Upcoming Events Page <small>Manage Your Upcoming Events</small></h1>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>admin/home">Dashboard</a></li>
          <li class="active">Page : Upcoming Events Page</li>
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

            <!-- Website Overview -->
            <?php
                if(!isset($eventEdit)){
                    echo "
                    <div id='add-event' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Tambah Data Kegiatan</h3>
                      </div>
                      <div class='panel-body'>
                        <form action='submitevent' method='post'>
                          <div class='form-group'>
                            <label>Nama Event</label>
                            <input type='text' name='eventTitle' class='form-control' placeholder='Nama Event' value=''>
                          </div>
                          <div class='form-group'>
                            <label>Keterangan Event</label>
                            <textarea name='eventBody' class='form-control' placeholder='Keterangan atau Penjelasan tentang Event'></textarea>
                          </div>
                          <div class='form-group'>
                              <label>Tanggal Kegiatan</label>
                              <input class='form-control' name='eventDate' id='date' type='date'>
                          </div>
                          <div class='form-group'>
                              <label>Waktu Pelaksanaan Kegiatan</label>
                              <input class='form-control' name='eventTime' id='time' type='time'>
                          </div>
                          <div class='form-group'>
                            <label>Lokasi Kegiatan</label>
                            <input type='text' name='eventLocation' class='form-control' placeholder='Lokasi Kegiatan atau Event' value=''>
                          </div>
                          <input type='submit' class='btn btn-default' value='Submit'>
                        </form>
                      </div>
                      </div>
                    ";
                }else{
                    $date = date("Y-m-d", strtotime($eventEdit->eventDate));
                    $time = date("H:i", strtotime($eventEdit->eventTime));
                    echo "
                    <div id='edit-event' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Edit Data Kegiatan</h3>
                      </div>
                      <div class='panel-body'>
                        <form action='editevent' method='post'>
                            <input hidden type='text' name='id' value='$eventEdit->id'></input>
                          <div class='form-group'>
                            <label>News Title</label>
                            <input type='text' name='eventTitle' class='form-control' placeholder='Page Title' value='$eventEdit->eventTitle'>
                          </div>
                          <div class='form-group'>
                            <label>News Body</label>
                            <textarea name='eventBody' class='form-control' placeholder='Page Body'>$eventEdit->eventBody</textarea>
                          </div>
                          <!-- <div class='checkbox'>
                            <label>
                              <input type='checkbox' checked> Published
                            </label>
                          </div> -->
                          <div class='form-group'>
                              <label>Events Date</label>
                              <input class='form-control' name='eventDate' type='date' value='$date'>
                          </div>
                          <div class='form-group'>
                              <label>Events Time</label>
                              <input class='form-control' name='eventTime' type='time' value='$time'>
                          </div>
                          <div class='form-group'>
                            <label>Event Location</label>
                            <input type='text' name='eventLocation' class='form-control' placeholder='Event Location' value='$eventEdit->eventLocation'>
                          </div>
                          <input type='submit' class='btn btn-default' value='Submit'>
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
                  <br>
                  <table class="table table-striped table-hover">
                        <tr>
                          <th>Nama Kegiatan</th>
                          <th>Tanggal Pelaksanaan</th>
                          <th>Waktu Pelaksanaan</th>
                          <th>Tempat Kegiatan</th>
                          <th></th>
                          <th></th>
                        </tr>
                        </form>
                        <?php
                            $editID = NULL;
    						if (isset($events)) {
    							foreach ($events as $event) {
    								// $eventMonth = date('F', strtotime($event->eventDate));
    								// $eventDay = date('d', strtotime($event->eventDate));
                                    $eventTime = date("H:i", strtotime($event->eventTime));
    								echo "
                                    <tr>
                                        <td>$event->eventTitle</td>
                                        <td>$event->eventDate</td>
                                        <td>$eventTime</td>
                                        <td>$event->eventLocation</td>
                                        <form action='event' method='post'>
                                            <input hidden type='text' name='edit-id' value='$event->id'>
                                            <td><input type='submit' class='btn btn-primary' value='Edit'></td>
                                        </form>
                                        <form action='delete' method='post'>
                                            <input hidden type='text' name='edit-id' value='$event->id'>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
  </body>
</html>
