<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Circular Details</h1>

            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="active">Circular</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="contact-page" class="container">
    <div class="row">
        <div class="center">



            <h2><?php echo $circular_info->circular_title?></h2>
            <div class="status alert alert-success" style="display: none"></div>



                <div class="row">
                    <div class="center">
                        <div class="form-group">



                          <p><?php echo $circular_info->application_deadline?></p>
                          <p><?php echo $circular_info->circular_description?></p>


                        </div>


                    </div>

                </div>

            </form>
        </div><!--/.col-sm-8-->

    </div>
</section><!--/#contact-page-->
