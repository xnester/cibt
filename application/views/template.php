<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Le styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" type="text/css" />
	<style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap-responsive.css" type="text/css" />
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url();?>">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <p class="navbar-text pull-right">
            
            <?php
            	if($this->session->userdata('validated'))
				{
              		echo 'Logged in as <a class="navbar-link" href="'.base_url().'home">'.$name.'</a>';
				}
            ?>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container">
			<h1><?php echo $headline;?></h1>
			<?php echo $this->load->view($include);?>
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
			
	</div>
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/global.js"></script>
</body>
</html>
