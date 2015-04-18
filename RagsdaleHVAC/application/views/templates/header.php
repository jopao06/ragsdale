<!DOCTYPE HTML>
<html>
  <head>
    <title> Ragsdale | <?php echo("$title"); ?> </title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/home.css">
    <script type="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  </head>
  <body>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".navbar-nav").on('click', 'li', function(e) {
            $(this).parent().find('li.active').removeClass('active');
            $(this).addClass('active');
        });
      });
    </script>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>        Home        <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url('index.php/services');?>"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>   Services    </a></li>
            <li><a href="<?php echo site_url('index.php/products');?>"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>   Products    </a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('index.php/blog');?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>        Blog        </a></li>
            <li><a href="<?php echo site_url('index.php/aboutUs');?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>     About Us    </a></li>
            <li><a href="<?php echo site_url('index.php/contactUs');?>"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>   Contact Us  </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>