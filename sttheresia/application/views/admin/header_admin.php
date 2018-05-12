<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Page</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>admin/home">Dashboard</a></li>
        <li><a href="<?php echo base_url(); ?>admin/news">News</a></li>
        <li><a href="<?php echo base_url(); ?>admin/edit">Events</a></li>
        <li><a href="<?php echo base_url(); ?>admin/teachers">Teachers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome, ADMIN</a></li>
        <li><a href="<?php echo base_url(); ?>login">Logout</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
