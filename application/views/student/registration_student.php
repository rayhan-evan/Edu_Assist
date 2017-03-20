<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Register as Student</h1>

                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Registration</li>
                        <li class="active">Register as Student</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->



        <section id="registration" class="container">

        <div class="col-lg-6">
        <form class="center" method="post" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>student/save_student">
    <fieldset class="registration-form">
                <div class="form-group">
                   <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                   <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email_address" placeholder="E-mail" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm Password" class="form-control"><span class="required"></span>
                </div>

				<div class="form-group">
                    <input type="text" name="mobile_no" placeholder="Mobile No." class="form-control"><span class="required"></span>
                </div>

                <div class="form-group">
                    <input type="int" id="id_no" name="id_no" placeholder="ID No." class="form-control"><span class="required"></span>
                </div>

                <div class="form-group">
                    <input type="int" id="reg_no" name="reg_no" placeholder="Registration No." class="form-control"><span class="required"></span>
                </div>
    </fieldset>
        </div>

                <!-- More Info -->

            <section id="registration" class="container">

        <div class="col-lg-3">

<fieldset class="registration-form">


                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Faculty</label><span class="required"></span>
                    <div class="col-lg-13">
                        <select class="form-control m-bot15" name="faculty_id">
                            <option></option>
                            <?php
                            foreach ($all_published_faculty as $v_faculty) {
                                ?>
                                <option value="<?php echo $v_faculty->faculty_id; ?>" ><?php echo $v_faculty->faculty_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <input type="int" id="session" name="session" placeholder="Session (ex: 2012-13)" class="form-control"><span class="required"></span>
                </div>

                <label class="control-label col-lg-12" for="inputSuccess">Birth Date</label><span class="required"></span>

                                        <div class="col-sm-11">

                                            <select name="day">
                                                <option value="">Day
                                                <?php for($i=1;$i<32;$i++){ ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>

                                            <select name="month">
                                                <option value="">Month
                                                <?php for($i=1;$i<13;$i++){ ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>

                                            <select name="year">
                                                <option value="">Year
                                                <?php for($i=2017;$i>1900;$i--){ ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>

                                        </div>  </br>

                <div class="form-group">
                  <label class="control-label col-lg-12" for="inputSuccess">Gender</label><span class="required"></span>
                     <div class="col-lg-12">
                       <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox1" name="gender" value="option1"> Male
                        </label>

                        <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" name="gender" value="option2"> Female
                        </label>

                    </div>
                 </div>

                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Blood Group</label><span class="required"></span>
                    <div class="col-lg-13">
                        <select class="form-control m-bot15" name="blood_group">
                            <option></option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Profile Photo</label><span class="required"></span>
                    <div class="col-lg-13">
                        <input type="file" name="student_photo" class="btn btn-info btn-file">
				            </div>
                </div>


                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="Register">
                    <input type="reset" name="reset" class="btn btn-danger btn-md" value="Reset">
                </div>
            </div>
               </section>
            </fieldset>




                <!-- More Info -->



         <!--       <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">
                    <input type="reset" name="reset" class="btn btn-danger btn-md" value="Reset">
                </div>
            </fieldset>  -->
        </form>
    </section><!--/#registration-->


    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url();?>js/form-validation-script.js"></script>
