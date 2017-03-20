    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">


                    <h1>Events</h1>

                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="services">
        <div class="container">


            <div class="row" style="margin-left:150px;">

                <?php
                               foreach($all_published_event as $v_event)
                                {
                            ?>
                  <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-windows icon-md"></i>
                        </div>
                        <div class="media-body">

                          <li><a href="<?php echo base_url();?>welcome/event_details.cfm?event_id=<?php echo $v_event->event_id;?>"><h3 class="media-heading"><?php echo $v_event->event_title;?></h3></a></li>


                        
                        </div>
                    </div>
                </div><!--/.col-md-4-->

                <?php } ?>


        </div>
    </section><!--/#services-->
