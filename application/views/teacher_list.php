<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h1><?php echo $Department->department_name;?></h1>


                <!-- <h1><?php //echo $department_info->department_name; ?></h1> -->

                <?php //echo ?>
                <!--  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>     -->




            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                  <!--  <li><?=$Faculty?></li> -->
                    <li class="active"><?php echo $Department->department_name;?></li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap">
                    <h2>Teachers</h2>
                   <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>  -->
                </div>
            </div>
        </div>

        <div class="row" style="margin-left:150px;">

            <?php
                           foreach($all_published_teacher as $v_teacher)
                            {
                        ?>
              <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-windows icon-md"></i>
                    </div>
                    <div class="media-body">

                      <li><a href="<?php echo base_url();?>welcome/view_teacher_profile/<?php echo $v_teacher->teacher_id?>"><h3 class="media-heading"><?php echo $v_teacher->first_name;?></h3></a></li>


                      <!-- <li><a href="<?php //echo base_url();?>welcome/department.cfm"><h3 class="media-heading"><?php //echo $v_department->department_name;?></h3></a></li>  -->



                    <?php //echo $maincontent;?>

                        <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>  -->
                    </div>
                </div>
            </div><!--/.col-md-4-->

            <?php } ?>


    </div>
</section><!--/#services-->
