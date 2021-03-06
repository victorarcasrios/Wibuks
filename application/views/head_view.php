
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title><?=$this->lang->line("title"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>images/server/favicon.ico" type="image/ico">
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet"> 
    <link href="//fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>css/bootshape.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootshape.js"></script>
    <style type="text/css">
  
    .navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 20;
  margin-top: 20px;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper .container {
  padding-left: 0;
  padding-right: 0;
}
.navbar-wrapper .navbar {
  padding-left: 15px;
  padding-right: 15px;
}

.navbar-content
{
   font-size: 35px;
    width:320px;
    padding: 15px;
    padding-bottom:0px;
}
.navbar-content:before, .navbar-content:after
{
    display: table;
    content: "";
    line-height: 0;
}
.navbar-nav.navbar-right:last-child {
margin-right: 15px !important;
}
.navbar-footer 
{
    background-color:#DDD;
}
.navbar-footer-content { padding:15px 15px 15px 15px; }
.dropdown-menu {
padding: 0px;
overflow: hidden;
}
</style>
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <!--<span class="sr-only">Toggle navigation</span>-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>index.php/home" style:"color:#FF850B;">Wibu<span id="wibuk-logo-span">ks</span></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li ><a href="<?=base_url()?>index.php/home"><?=$this->lang->line("home"); ?></a></li>
             <!--<li class="dropdown">
             <a data-toggle="dropdown" href="#" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Item 1</a></li>
                <li class="active"><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li class="divider"></li>
                <li><a href="#">All Items</a></li>
              </ul>
            </li>-->
            <li><a href="<?=base_url()?>index.php/article/create"><?=$this->lang->line("create_ad"); ?></a></li>
            <li><a href="<?=base_url()?>index.php/search"><?=$this->lang->line("search"); ?></a></li>
            <li><a href="<?=base_url()?>index.php/contact"><?=$this->lang->line("contact"); ?></a></li>
            <?php if(!isset($this->session->userdata["username"])){ ?>
            <li><a href="<?=base_url()?>index.php/login"><?=$this->lang->line("sign_in"); ?></a></li>
             <li><a href="<?=base_url()?>index.php/sign_up"><?=$this->lang->line("sign_up"); ?></a></li>
            <?php }else {?>
            <!--<li><a href="<?=base_url()?>index.php/profile"><?=$this->session->userdata['username']?></a></li>
            <li><a href="<?=base_url()?>index.php/login/logout"><?=$this->lang->line("logout"); ?></a></li>-->
             <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->lang->line("profile"); ?>
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-content">
                                <div class="row">
                                    <div class="col-md-5">
                                    <?php if(isset($this->session->userdata['fb_id'])){?>
                                        <img  src="http://graph.facebook.com/<?=$this->session->userdata['fb_id']?>/picture?type=normal"
                                            alt="Alternate Text" class="img-responsive" />
                                       <?php }else{?>
                                            <img style="margin-top:-8px;"  src="<?=base_url()?>images/server/user_default.png"
                                            alt="Alternate Text" class="img-responsive" />
                                       <?php } ?>
                                    </div>
                                    <div class="col-md-7">
                                        <span><?=$this->session->userdata['username']?></span>
                                        <div class="divider">
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <a href="<?=base_url()?>index.php/profile" class="btn btn-primary btn-sm " style="font-size: 20px;"><?=$this->lang->line("view_profile"); ?></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?=base_url()?>index.php/login/logout" class="btn btn-default btn-sm pull-right" style="font-size: 20px; color:#FF850B;"><?=$this->lang->line("logout"); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
             <?php }?>
           </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->
