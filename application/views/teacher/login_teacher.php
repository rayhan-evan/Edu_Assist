<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Login as Teacher</h1>
                <!--    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p> -->
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Login</li>
                        <li class="active">Login as Teacher</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="registration" class="container">

     <?php
         $exception=$this->session->userdata('exception');
          if($exception)
          {
          ?>
           <div class="alert alert-danger">
              <?php echo $exception; ?>
           </div>
           <?php
              $this->session->unset_userdata('exception');
          }

      ?>

      <?php
         $message=$this->session->userdata('message');
          if($message)
          {
          ?>
           <div class="alert alert-success">
              <?php echo $message; ?>
           </div>
              <?php
              $this->session->unset_userdata('message');
          }

      ?>

        <form class="center" method="post" role="form" action="<?php echo base_url()?>teacher/check_login_teacher">
            <fieldset class="registration-form">

                <div class="form-group">
                    <input type="text" id="email_address" name="email_address" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Login</button>
                </div>

                <div class="form-group">
                    <p>Not registered yet?</p>
                    <p>Then <a href="<?php echo base_url();?>welcome/registration.cfm" style="color: green;">Register</a> here</p>
                
                </div>

            </fieldset>
        </form>
    </section><!--/#registration-->
