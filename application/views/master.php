<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title;?></title>
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/main.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>images/ico/apple-touch-icon-57-precomposed.png">




</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.jpg" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">


                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="<?php echo base_url();?>">Home</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculties <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">

                            <?php
                                foreach($all_published_faculty as $v_faculty)
                                {
                            ?>



                            <li><a href="<?php echo base_url();?>welcome/facultyNew?FacultyName=<?php echo $v_faculty->faculty_name;?>"><?php echo $v_faculty->faculty_name;?></a></li>

                            <?php } ?>

                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>welcome/communities.cfm">Communities</a></li>
                    <li><a href="<?php echo base_url();?>welcome/about.cfm">About</a></li>
                    <li><a href="<?php echo base_url();?>welcome/contact.cfm">Contact</a></li>

    <?php

          $user_id=$this->session->userdata('teacher_id');
          if($user_id == NULL)
          {
          ?>

          <?php

          $user_id=$this->session->userdata('student_id');
          if($user_id == NULL)
          {
          ?>

                    <li><a href="<?php echo base_url();?>welcome/registration.cfm">Register</a></li>

                    <li><a href="<?php echo base_url();?>welcome/login.cfm">Login</a></li>


          <?php }

          else{

          ?>
          <li><a href="<?php echo base_url();?>student/student_profile"><span>Profile</span></a></li>
          <li><a href="<?php echo base_url();?>student/student_logout"><span>Logout</span></a></li>
          <?php }?>


            <?php }
          else{
          ?>
         <li><a href="<?php echo base_url();?>teacher/teacher_profile"><span>Profile</span></a></li>
          <li><a href="<?php echo base_url();?>teacher/teacher_logout"><span>Logout</span></a></li>
          <?php }?>

                </ul>
            </div>
        </div>
    </header><!--/header-->

    <?php echo $maincontent; ?>



    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">


                <div class="col-md-6 col-sm-6">
                    <h4>Latest Post</h4>
                    <div>

                      <?php
                      foreach ($all_published_news as $v_news){
                      ?>
                        <div class="media">
                            <div class="pull-left">

                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_news->news_id?>"><?php echo $v_news->news_short_description?></a></span>
                                <!-- <small class="muted">Posted 17 Aug 2013</small> -->
                                <small class="muted"><?php echo $v_news->created_date_time; ?></small>
                            </div>
                        </div>


                        <?php }?>

                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-6 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>IT Wing</strong><br>
                        Patuakhali Science & Technology University<br>
                        Dumki, Patuakhali<br>
                        <abbr title="Phone">P:</abbr> (+880) 1770-160-168
                    </address>
                </div> <!--/.col-md-3-->
            </div>


        </div>
    </section><!--/#bottom-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="" title="">IT Wing</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">

                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>js/main.js"></script>


</body>
</html>
