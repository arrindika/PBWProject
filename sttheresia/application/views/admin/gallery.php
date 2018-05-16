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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Gallery Page <small>Manage Gallery Photos</small></h1>
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
            <li class="active">Page : Gallery Page</li>
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
            <div id='add-event' class='panel panel-default'>
                <div class='panel-heading main-color-bg'>
                  <h3 class='panel-title'>Upload Foto Page Gallery</h3>
                </div>
                <div class='panel-body'>
                	<!-- <?php echo $error;?>

                	<?php echo form_open_multipart('admin/uploadPicture');?>
                    <p>Nama Foto</p><input type="text" name="fotogaleri" value="">
                	<p>Foto : <input type="file" name="berkas" /></p>

                	<br /><br />

                	<input type="submit" value="upload" />

                    </form> -->

                    <?php echo validation_errors(); ?>

                    <?php echo form_open_multipart('admin/uploadPicture');?>

                    <div class="form-group">
                        <label for="nama">Nama foto</label><br>
                        <input type="input" name="namaFoto" class="form-control" /><br />
                    </div>
                    <div class="form-group">
                        <label for="text">Upload File</label><br>
                        <input type="file" name="picture"  class="btn btn-default btn-file" />
                    </div>
                    <input type="submit" class="btn btn-success" name="submit"
                        value="Upload" style="width:100%;margin-bottom:1%" />
                    </form>
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
