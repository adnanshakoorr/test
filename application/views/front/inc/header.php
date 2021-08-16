<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <title>Heroic</title>
  <link rel="shortcut icon" href="images/favi.png');?>" />
  <link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/front/css/style.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/front/css/responsive.css');?>">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
  <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <a href="index.html"><img src="<?= base_url('assets/front/images/logo.png');?>" class="img-responsive" /></a>
                    </div>
                    <div class="hidden visible-xs col-xs-3">
                        <div class="toggle"><img src="<?= base_url('assets/front/images/menu.png');?>" class="img-responsive pull-right" /></div>
                    </div>
                    <div class="col-xs-3 hidden visible-xs">
                        <div class="icon">
                            <ul>
                                <li>
                                    <a href="#"><img src="<?= base_url('assets/front/images/nav-card.png');?>" class="img-responsive" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="cuntom-nav">
                            <ul>
                                <li><a class="active" href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="podcast.html">Podcast</a></li>
                                <li><a href="recommendations.html">Recommendations</a></li>
                                <li><a href="<?= base_url();?>">Shop</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
                        <div class="col-md-12 col-lg-12">
                        <div class="icon_box">
                         <div class="icon">
                            <ul>
                                <!--<li><a href="add-to-cart.html"><img src="<?= base_url('assets/front/images/nav-card.png');?>" class="img-responsive" /></a></li>-->
                                <li>
                                    <a href="https://www.facebook.com/myheroiclife"><img src="<?= base_url('assets/front/images/icon01.png');?>" class="img-responsive" /></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/myheroiclife"><img src="<?= base_url('assets/front/images/icon02.png');?>" class="img-responsive" /></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/myheroiclife/"><img src="<?= base_url('assets/front/images/icon03.png');?>" class="img-responsive" /></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/myheroiclife/"><img src="<?= base_url('assets/front/images/icon04.png');?>" class="img-responsive" /></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?= base_url('assets/front/images/icon05.png');?>" class="img-responsive" /></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
                       <div class="user_wrap">
                           <ul class="parent_list">
                            <li>
                                <div class="dropdown">
                                    <button class="dropdown" type="button" data-toggle="dropdown">
                                        <div class="dp_wrap">
                                           <img src="<?= base_url('assets/front/images/logo.png');?>" class="img-responsive usr_dp"><span class="caret"></span>
                                       </div> 
                                   </button>
                                   <ul class="dropdown-menu">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="login.html">Login</a></li>
                            <li>
                                <li>
                                    <a href="signup.html">signup</a></li>
                                    <li>
                                         <a href="add-to-cart.html"><i class="fa fa-cart-plus clr cart_icon" aria-hidden="true"></i>
                                        <span class="badge1">1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>