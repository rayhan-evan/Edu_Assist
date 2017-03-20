<!--<script src="<?php //echo base_url();?>js/customized/jquery.min.js"></script>
<script src="<?php //echo base_url();?>js/customized/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>css/custom.css">

-->


<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Register as Teacher</h1>

                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li>Registration</li>
                        <li class="active">Register as Teacher</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="registration" class="container">

        <div class="col-lg-6">
        <form class="center" method="post" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>teacher/save_teacher">
            <fieldset class="registration-form">
                <div class="form-group">
                   <input type="text" name="first_name" placeholder="First Name" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                   <input type="text" name="last_name" placeholder="Last Name" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="text" name="email_address" placeholder="E-mail" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirm" placeholder="Confirm Password" class="form-control"><span class="required"></span>
                </div>
                <div class="form-group">
                    <input type="text" name="mobile_no" placeholder="Mobile No." class="form-control"><span class="required"></span>
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

                                        </div> </br>

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
        </div>

                <!-- More Info -->



                <section id="registration" class="container">

        <div class="col-lg-3">

<!--   Customized Azax   -->


          <div class="form-group">
               <label class="control-label col-lg-12" for="inputSuccess">Faculty</label><span class="required"></span>
               <div class="col-lg-13">
                   <select class="form-control faculty" name="faculty_id">
                           <option value="" >---Select---</option>
                   </select>
               </div>
           </div>



             <div class="form-group">
          		 <label class="control-label col-lg-12" for="inputSuccess">Department</label><span class="required"></span>
          		 <div class="col-lg-13">
          			 <select class="form-control department" name="department_id">
          							 <option value="" >---Select---</option>
          			 </select>
          		 </div>
           </div>


          <!--   Customized Azax   -->


                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Designation</label><span class="required"></span>
                    <div class="col-lg-13">
                        <select class="form-control m-bot15" name="designation">
                            <option></option>
                            <option>Professor</option>
                            <option>Associate Professor</option>
                            <option>Assistant Professor</option>
                            <option>Lecturer</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Additional Duty</label><span class="required"></span>
                    <div class="col-lg-13">
                        <select class="form-control m-bot15" name="additional_duty">
                            <option></option>
                            <option>Dean</option>
                            <option>Chairman</option>
                        </select>
                    </div>
                </div>


            <label class="control-label col-lg-12" for="inputSuccess">Joining Date</label><span class="required"></span>

                                        <div class="col-sm-0">

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
                                                <?php for($i=2016;$i>1900;$i--){ ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                <?php } ?>
                                            </select>

                                        </div> </br >


                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Profile Photo</label><span class="required"></span>
                    <div class="col-lg-13">
                        <input type="file" name="teacher_photo" class="btn btn-info btn-file">
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

    <script src="<?php echo base_url();?>js/customized/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/customized/bootstrap.min.js"></script>



    <!-- Customized Script -->

    <script type="text/javascript">

      $(document).ready(function(){

        /*Get the country list */

          $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>teacher/get_faculty",
            data:{id:$(this).val()},
            beforeSend :function(){
          $('.faculty').find("option:eq(0)").html("Please wait..");
            },
            success: function (data) {
              /*get response as json */
               $('.faculty').find("option:eq(0)").html("Select Faculty");
              var obj=jQuery.parseJSON(data);
              $(obj).each(function()
              {
               var option = $('<option />');
               option.attr('value', this.value).text(this.label);
               $('.faculty').append(option);
             });

              /*ends */

            }
          });



        /*Get the state list */


        $('.faculty').change(function(){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>teacher/get_department",
            data:{department_id:$(this).val()},
            beforeSend :function(){
          $(".department option:gt(0)").remove();
          $('.department').find("option:eq(0)").html("Please wait..");

            },
            success: function (data) {
              /*get response as json */
               $('.department').find("option:eq(0)").html("Select Department");
              var obj=jQuery.parseJSON(data);
              $(obj).each(function()
              {
               var option = $('<option />');
               option.attr('value', this.value).text(this.label);
               $('.department').append(option);
             });

              /*ends */

            }
          });
        });


        /*Get the state list */

      });

    </script>


    <!-- Customized Script -->
