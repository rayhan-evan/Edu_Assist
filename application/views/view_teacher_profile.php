<!-- Teacher Profile -->
<link href="<?php //echo base_url();?>teacher_profile/css/bootstrap.css" rel='stylesheet' type='text/css' />
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
      			<!--	 <p class="cmpny1">Nulla volutpat at est sed ultricies. In ac sem consequat, posuere nulla varius, molestie lorem. Duis quis nibh leo.
      				 Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet.
      				 Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.</p>  -->
      			 </div>
    <!--  			 <div class="company_details">
      				 <h4>Company Name <span>NOVEMBER 2007 - MAY 2009</span></h4>
      				 <h6>WEB DESIGNER</h6>
      				 <p>Nulla volutpat at est sed ultricies. In ac sem consequat, posuere nulla varius, molestie lorem. Duis quis nibh leo.
      				 Curabitur a quam eu mi convallis auctor nec id mauris. Nullam mattis turpis eu turpis tincidunt, et pellentesque leo imperdiet.
      				 Vivamus malesuada, sem laoreet dictum pulvinar, orci lectus rhoncus sapien, ut consectetur augue nibh in neque. In tincidunt sed enim et tincidunt.</p>
      			 </div>  -->
      		 </div>

      		 </div>

      	 </div>
      </div>
    </div>
</section><!--/#contact-page-->
