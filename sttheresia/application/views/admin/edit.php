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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Upcoming Events Page <small>Manage Your Upcoming News</small></h1>
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

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">

            <!-- Website Overview -->
            <?php
                if(!isset($eventEdit)){
                    echo "
                    <div id='add-event' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Add Events</h3>
                      </div>
                      <div class='panel-body'>
                        <form action='submitevent' method='post'>
                          <div class='form-group'>
                            <label>News Title</label>
                            <input type='text' name='eventTitle' class='form-control' placeholder='Page Title' value=''>
                          </div>
                          <div class='form-group'>
                            <label>News Body</label>
                            <textarea name='eventBody' class='form-control' placeholder='Page Body'></textarea>
                          </div>
                          <!-- <div class='checkbox'>
                            <label>
                              <input type='checkbox' checked> Published
                            </label>
                          </div> -->
                          <div class='form-group'>
                              <label>Events Date</label>
                              <!--<input class='form-control' name='eventDateTime' id='date' type='date'>-->
                              <input id='time' class='form-control' name='eventDateTime' type='datetime-local'>
                          </div>
                          <div class='form-group'>
                            <label>Event Location</label>
                            <input type='text' name='eventLocation' class='form-control' placeholder='Event Location' value=''>
                          </div>
                          <input type='submit' class='btn btn-default' value='Submit'>
                        </form>
                      </div>
                      </div>
                    ";
                }else{
                    $date = date("Y-m-d", strtotime($eventEdit->eventDateTime));
                    $time = date("H:i:s", strtotime($eventEdit->eventDateTime));
                    $dateTime = $date."T".$time;
                    echo "
                    <div id='edit-event' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Edit Events</h3>
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
                              <input class='form-control' name='eventDateTime' type='datetime-local' value='$dateTime'>
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
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Users...">
                        </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover">
                        <tr>
                          <th>Title</th>
                          <th>Date</th>
                          <th>Location</th>
                          <th></th>
                          <th></th>
                        </tr>
                        </form>
                        <?php
                            $editID = NULL;
    						if (isset($events)) {
    							foreach ($events as $event) {
    								$eventMonth = date('F', strtotime($event->eventDateTime));
    								$eventDay = date('d', strtotime($event->eventDateTime));
    								echo "
                                    <tr>
                                        <td>$event->eventTitle</td>
                                        <td>$event->eventDateTime</td>
                                        <td>$event->eventLocation</td>
                                        <form action='edit' method='post'>
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
