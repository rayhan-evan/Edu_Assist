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

    <hr>

     <section id="services" class="emerald">
        <div class="container">
            <div class="row">
          <!--      <div class="col-md-6 col-sm-6">  -->
                  <div class="col-md-4 col-sm-6">

                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-user icon-md"></i>
                        </div>
                        <div class="media-body">
                            <a href="<?php echo base_url();?>welcome/teacher_list/<?php echo $Department->department_id;?>"><h3 class="media-heading">Teacher</h3></a>
                            <?php
                              //  foreach($all_published_department as $v_department)
                                //{
                            ?>
                    <h1 value="<?php //echo $v_department->department_id; ?>"><?php //echo $v_department->department_name; ?></h1>

                            <?php //} ?>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
    <!--            <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-reorder icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Course Ware</h3>
                            <p>Different types of Course Details.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
      <!--          <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-info-sign icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Current Semester</h3>
                            <p>Semesters of the institutions will be listed here</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section>
