<!-- Teacher Profile -->

<!-- jQuery (necessary JavaScript plugins) -->
<script src="<?php echo base_url();?>teacher_profile/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>teacher_profile/css/dashboard.css" rel="stylesheet">
<link href="<?php echo base_url();?>teacher_profile/css/style.css" rel='stylesheet' type='text/css' />

<link href="<?php echo base_url();?>teacher_profile/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url();?>teacher_profile/js/jquery.magnific-popup.js" type="text/javascript"></script>

<!-- Teacher Profile -->


<section id="contact-page" class="container">
    <div class="row">

      <link href="<?php echo base_url();?>teacher_profile/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
      <script src="<?php echo base_url();?>teacher_profile/js/jquery.magnific-popup.js" type="text/javascript"></script>
      	<!---//pop-up-box---->
  <!--    <div class="col-sm-12 col-sm-offset-3 col-md-12 col-md-offset-2 main">  -->

<div class="col-sm-12 main">

      	 <div class="content">

           <!-- <div class="col-sm-3 col-md-2 sidebar" style="position: static;">  -->
             <div class="col-sm-4 sidebar" style="position: static;">
             <div class="sidebar_top">
               <h1 class="center"><?php echo $student_info->first_name; ?> <?php echo $student_info->last_name; ?></h1>

          <!--      <img src="<?php //echo base_url();?>student_profile/images/avt.png" alt=""/>  -->
               <img src="<?php echo base_url().$student_info->student_photo;?>" alt=""/>

             </div>
            <div class="details">
               <h3 class="center">PHONE</h3>
               <p class="center"><?php echo $student_info->mobile_no; ?></p>
               <h3 class="center">EMAIL</h3>
               <p class="center"><a href="mailto@example.com"><?php echo $student_info->email_address; ?></a></p>

            </div>

           </div>

           <hr>

<div class="col-sm-8">
          <div class="details_header">
      			 <ul>

      				 <li><a href="<?php echo base_url();?>student/edit_student//<?php echo $student_info->student_id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Profile</a></li>


      			 </ul>
      		 </div>


      		 <div class="company">
      			 <h3 class="clr1">Profile Details</h3>
      			 <div class="company_details">




      			 </div>
      		 </div>


      		 </div>

      	 </div>
      </div>
    </div>

  </section>
