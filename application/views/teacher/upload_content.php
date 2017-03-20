<!--<script src="<?php //echo base_url();?>js/customized/jquery.min.js"></script>
<script src="<?php //echo base_url();?>js/customized/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>css/custom.css">

-->



    <section id="registration" class="container">

        <div class="col-lg-6">
        <form class="center" method="post" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>teacher/save_teacher_content">
            <fieldset class="registration-form">


                <div class="form-group">
                    <label class="control-label col-lg-12" for="inputSuccess">Educational Content</label><span class="required"></span>
                    <div class="col-lg-13">
                        <input type="file" name="teacher_content" class="btn btn-info btn-file">
				            </div>
                </div>


                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="Upload">

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
