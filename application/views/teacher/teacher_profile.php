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


<div class="col-sm-12 main">

      	 <div class="content">


             <div class="col-sm-4 sidebar" style="position: static;">
             <div class="sidebar_top">
               <h1 class="center"><?php echo $teacher_info->first_name; ?> <?php echo $teacher_info->last_name; ?></h1>

               <img src="<?php echo base_url().$teacher_info->teacher_photo;?>" alt=""/>


             </div>
            <div class="details">
               <h3 class="center">PHONE</h3>
               <p class="center"><?php echo $teacher_info->mobile_no; ?></p>
               <h3 class="center">EMAIL</h3>
               <p class="center"><a href="mailto@example.com"><?php echo $teacher_info->email_address; ?></a></p>


            </div>

           </div>

           <hr>

<div class="col-sm-8">
          <div class="details_header">
      			 <ul>
      				 <li><a href="<?php echo base_url();?>teacher/upload_content/<?php echo $teacher_info->teacher_id; ?>"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>Upload Content</a></li>
      				 <li><a href="<?php echo base_url();?>teacher/edit_teacher/<?php echo $teacher_info->teacher_id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit Profile</a></li>
      				 <li><a href="mailto@<?php echo $teacher_info->email_address; ?>"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email me</a></li>

      			 </ul>

           </div>

      		 <div class="company">
      			 <h3 class="clr1">Course Contents</h3>
      			 <div class="company_details">

               <?php
               foreach ($published_teacher_content_info as $teacher_content_info){
               ?>

      				 <h4><?php echo $teacher_content_info->teacher_content; ?></h4>
      				 <h6><?php echo $teacher_content_info->created_date_time; ?></h6>

               <a href="<?php echo base_url()?>/<?php echo $teacher_content_info->teacher_content; ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>Download Content</a>
             </br>
             </br>

               <?php } ?>

      			 </div>
      		 </div>


      		 </div>

      	 </div>
      </div>
    </div>
</section>
