<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | News</title>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> News<small>Manage Blog News</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add New</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">News</li>
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
                if(!isset($newsEdit)){
                    echo "
                    <div id='add-event' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Add News</h3>
                      </div>
                      <div class='panel-body'>
                        <form action='submitnews' method='post'>
                          <div class='form-group'>
                            <label>News Title</label>
                            <input type='text' name='newsTitle' class='form-control' placeholder='Page Title' value=''>
                          </div>
                          <div class='form-group'>
                            <label>News Body</label>
                            <textarea name='newsBody' class='form-control' placeholder='Page Body'></textarea>
                          </div>
                          <!-- <div class='checkbox'>
                            <label>
                              <input type='checkbox' checked> Published
                            </label>
                          </div> -->
                          <div class='form-group'>
                              <label>news Date</label>
                              <input class='form-control' name='newsDate' id='date' type='date'>
                          </div>
                          <div class='form-group'>
                            <label>News Author</label>
                            <input type='text' name='newsAuthor' class='form-control' placeholder='News Author' value=''>
                          </div>
                          <input type='submit' class='btn btn-default' value='Submit'>
                        </form>
                      </div>
                      </div>
                    ";
                }else{
                    $date = date("Y-m-d", strtotime($newsEdit->newsDate));
                    echo "
                    <div id='edit-news' class='panel panel-default'>
                      <div class='panel-heading main-color-bg'>
                        <h3 class='panel-title'>Edit News</h3>
                      </div>
                      <div class='panel-body'>
                        <form action='editnews' method='post'>
                            <input hidden type='text' name='id' value='$newsEdit->id'></input>
                          <div class='form-group'>
                            <label>News Title</label>
                            <input type='text' name='newsTitle' class='form-control' placeholder='Page Title' value='$newsEdit->newsTitle'>
                          </div>
                          <div class='form-group'>
                            <label>News Body</label>
                            <textarea name='newsBody' class='form-control' placeholder='Page Body'>$newsEdit->newsBody</textarea>
                          </div>
                          <div class='form-group'>
                              <label>News Date</label>
                              <input class='form-control' name='newsDate' type='date' value='$date'>
                          </div>
                          <div class='form-group'>
                            <label>News Author</label>
                            <input type='text' name='newsAuthor' class='form-control' placeholder='News Author' value='$newsEdit->newsAuthor'>
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
                 <h3 class="panel-title">News</h3>
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
                         <th>Author</th>
                         <th></th>
                         <th></th>
                       </tr>
                       </form>
                       <?php
                           $editID = NULL;
                           if (isset($newsdata)) {
                               foreach ($newsdata as $news) {
                                   // $newsMonth = date('F', strtotime($news->newsDate));
                                   // $newsDay = date('d', strtotime($news->eventDateTime));
                                   echo "
                                   <tr>
                                       <td>$news->newsTitle</td>
                                       <td>$news->newsDate</td>
                                       <td>$news->newsAuthor</td>
                                       <form action='news' method='post'>
                                           <input hidden type='text' name='edit-id' value='$news->id'>
                                           <td><input type='submit' class='btn btn-primary' value='Edit'></td>
                                       </form>
                                       <form action='delete' method='post'>
                                           <input hidden type='text' name='edit-id' value='$news->id'>
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

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

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
