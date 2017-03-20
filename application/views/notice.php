    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">


                    <h1>Notice</h1>

                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Notice</li>
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
                        <h2>Notice</h2>
                       <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>  -->
                    </div>
                </div>
            </div>

            <div class="row" style="margin-left:150px;">

                <?php
                               foreach($all_published_notice as $v_notice)
                                {
                            ?>
                  <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-windows icon-md"></i>
                        </div>
                        <div class="media-body">

                          <li><a href="<?php echo base_url();?>welcome/notice_details/<?php echo $v_notice->notice_id;?>"><h3 class="media-heading"><?php echo $v_notice->notice_title;?></h3></a></li>


                          <!-- <li><a href="<?php //echo base_url();?>welcome/department.cfm"><h3 class="media-heading"><?php //echo $v_department->department_name;?></h3></a></li>  -->



                        <?php //echo $maincontent;?>

                            <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>  -->
                        </div>
                    </div>
                </div><!--/.col-md-4-->

                <?php } ?>


        </div>
    </section><!--/#services-->
