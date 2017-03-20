<html>
	<head>

	<!-- Bootstrap CSS -->
    <link href="<?php //echo base_url()?>admin_asset/form/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php //echo base_url()?>admin_asset/form/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php //echo base_url()?>admin_asset/form/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php //echo base_url()?>admin_asset/form/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>admin_asstet/form/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>admin_asstet/form/css/style-responsive.css" rel="stylesheet" />

	</head>

	<body>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Event Content</h3>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" method="post" action="<?php echo base_url();?>super_admin/save_event" class="form-horizontal form-groups-bordered">

                    <div class="form-group">

                        <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                        ?>
                            <div class="alert alert-success">
                        <?php echo $message; ?>
                            </div>
                        <?php
                            $this->session->unset_userdata('message');
                        }
                        ?>

                        <label for="field-1" class="col-sm-3 control-label">Event Title</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="event_title" placeholder="Event Title" size="100">
                        </div>
                    </div>

										<div class="form-group">
												<label for="field-ta" class="col-sm-3 control-label">Place</label>

												<div class="col-sm-5">
														<input type="text" class="form-control" id="field-1" name="event_place" placeholder="Place" size="100">
												</div>
										</div>

										<div class="form-group">
										<label class="control-label col-lg-3" for="inputSuccess">Event Date</label><span class="required"></span>

		                                        <div class="col-sm-5">

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

		                                        </div>
																					</div>
																			</br>



										<div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Time</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="event_time" placeholder="10 am" size="100">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Event Description</label>

                        <div class="col-sm-8">
                            <textarea  name="event_description" id="ck_editor"></textarea><?php echo display_ckeditor($editor['ckeditor']) ?>
                        </div>
                    </div>

              <!--      <div class="form-group">
                        <label class="col-sm-3 control-label">Select Image</label>

                        <div class="col-sm-5">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new">Select file</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="...">
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Publish Date</label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">

                                <div class="input-group-addon">
                                    <a href="#"><i class="entypo-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>   -->



                    <div class="form-group">
                        <label class="col-sm-3 control-label">Event Publication Status</label>

                        <div class="col-sm-5">
                            <div class="radio ">
                                <input type="radio" id="rd-1" name="publication_status" value="1" checked>
                                <label>Published</label>
                            </div>

                            <div class="radio ">
                                <input type="radio" id="rd-2" name="publication_status" value="0">
                                <label>Unpublished</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Publish Event</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





			      <!-- javascripts -->
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.js"></script>
    <script src="<?php echo base_url()?>admin_asstet/form/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url()?>admin_asstet/form/js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url()?>admin_asstet/form/js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url()?>admin_asstet/form/js/scripts.js"></script>


	</body>
</html>
<!--   Customized Form   -->
