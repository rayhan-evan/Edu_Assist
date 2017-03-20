<!--
<!DOCTYPE html>
<html>
    <head>
        <title>IT 2 Share</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS LINK -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>basis_blog/css/myCustomStyleSheet.css">

        <link href="<?php echo base_url(); ?>basis_blog/css/sb-admin.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url(); ?>basis_blog/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>basis_blog/css/datepicker.css">


        <!--CSS LINK END -->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

        <script type="text/javascript">

            var _rys = jQuery.noConflict();
            _rys("document").ready(function(){

                _rys(window).scroll(function () {
                    if (_rys(this).scrollTop() > 360) {
                        _rys('.navbar').addClass("f-nav");
                    } else {
                        _rys('.navbar').removeClass("f-nav");
                    }
                });

            });
        </script>





        <!-- Top Menu Start-->
        <div id="postion">
            <div class="container" >
                <div class="row margin_botom1">
                    <div class="col-md-9 ">

                    </div>

                    <div class="col-md-3 col-xs-8 ">

                        <?php
                        $bloger_name = $this->session->userdata('last_name');
                        if ($bloger_name) {
                            echo '<a class="link1" href="#"><strong>';
                            echo "Welcome " . $bloger_name;
                            echo '</strong></a>';


                            echo ' | ';
                            ?>

                            <a class="link1" href="<?php echo base_url() ?>blogger/logout"><strong>
                                    <?php
                                    echo "Logout";
                                    echo '</strong></a>';
                                } else {
                                    echo '<a class="link1" href="#"><strong>';
                                    echo "Welcome Guest ";
                                    echo '</strong></a>';
                                }
                                ?>

                                </div>
                                </div>
                                </div></div>
                                <!-- Top Menu End-->




                                <!-- Carousel Start
                                ================================================== -->
                                <div id="myCarousel" class="carousel slide " data-ride="carousel ">
                                    <div class="corsal_container">



                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="<?php echo base_url(); ?>basis_blog/img/slide-1.jpg" alt="First slide">
                                                <div class="container">
                                                    <div class="carousel-caption">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>basis_blog/img/slide-2.jpg" alt="Second slide">
                                                <div class="container">
                                                    <div class="carousel-caption">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>basis_blog/img/slide-3.jpg" alt="Third slide">
                                                <div class="container">
                                                    <div class="carousel-caption">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>basis_blog/img/slide-4.jpg" alt="Third slide">
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <!--   <h1>IT 2 Share</h1>  -->
                                <!--                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Make a Reservation</a></p>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

                                    </div>
                                </div><!-- /.carousel End-->


                                <div class="container">

                                    <div class="row pading_top2"><!-- /.First Row Start -->

                                        <div class="col-md-8 "><!-- /.Main Blog Part Start -->

                                            <?php //echo $maincontent; ?>

                                            <!-- /.Blog Articale Start -->
  <div id="articale" class="col-md-12">

      <div class="panel_wrapper">

        <div class="panel_wrapper">

            <div class="panel"><!-- /.Articale Start -->
                <div class="panel-heading">

                    <h2><?php echo $news_info->news_title ?></h2>
                </div>
                <div class="panel-body">


                    <img class="media-object img-responsive articale_img" style="width: 200px; height: 150px" src="<?php //echo base_url() . $news_info->news_image ?>" alt="Generic placeholder image">

                    <?php echo $news_info->news_long_description ?>

                    <div class="well well-sm"></div>





                    <div class="media">
                        <a class="pull-left" href="#">
                      <!--      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">  -->
                        </a>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-4"><h5 class="media-heading font_color_red">Dan Philibin says: </h5></div>
                                <div class="col-md-4 font_color_red"><small>September 13, 2011 at 3:48 pm</small></div>
                                 <div class="col-md-4"><h5 class="media-heading font_color_red"><a id="displayText" href="javascript:toggle();">Reply</a></h5></div>
                            </div>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.


                            <div id="toggleText" style="display: none" class="row">


                       <div class="col-md-10" >

                        <div class="well text-left">


                            <form action="sign_up.php" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" maxlength="10">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email_address" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile No</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Comments</label>
                                    <div class="col-sm-7">
                                        <textarea name="address" class="form-control"  rows="4" cols="30"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="btn" value="Submit Comment" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                            </div>





                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-6"><h5 class="media-heading font_color_red">Adams says: </h5></div>
                                        <div class="col-md-6 font_color_red"><small>September 13, 2011 at 3:48 pm</small></div></div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>




                     <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-md-4"><h5 class="media-heading font_color_red">Dan Philibin says: </h5></div>
                                <div class="col-md-4 font_color_red"><small>September 13, 2011 at 3:48 pm</small></div>
                                 <div class="col-md-4"><h5 class="media-heading font_color_red"><a id="displayText" href="javascript:toggle();">Reply</a></h5></div>
                            </div>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.


                            <div id="toggleText" style="display: none" class="row">


                       <div class="col-md-10" >

                        <div class="well text-left">


                            <form action="sign_up.php" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" maxlength="10">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email_address" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile No</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Comments</label>
                                    <div class="col-sm-7">
                                        <textarea name="address" class="form-control"  rows="4" cols="30"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="btn" value="Submit Comment" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                            </div>





                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-6"><h5 class="media-heading font_color_red">Adams says: </h5></div>
                                        <div class="col-md-6 font_color_red"><small>September 13, 2011 at 3:48 pm</small></div></div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="border-botom"></div>

                    <h4 class="font_color_sky">Leave a Replay</h4>
                    <div class="col-md-12">

                        <div class="well text-left">


                            <form action="sign_up.php" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" maxlength="10">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email_address" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile No</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Comments</label>
                                    <div class="col-sm-7">
                                        <textarea name="address" class="form-control"  rows="4" cols="30"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="btn" value="Submit Comment" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.Articale End -->
        </div>

      </div>

    </div>







                                            <!-- /.Blog Articale End -->
                                        </div><!-- /.First Row End -->

                      <div id="Left-Bar" class="col-md-4 "><!-- /.Left Bar Start -->
                          <div class="panel_wrapper">
                              <!-- ====================== Recent POST SIDE BAR  Start =================== -->
                              <div class="well well-sm">

                                  <div class="panel panel-primary">
                                      <div class="panel-heading pheading">Latest Posts</div>
                                      <div class="panel-body">
                        <!-- /.Recent post Start -->
                        <?php
                        foreach ($all_published_news as $v_news){
                        ?>

                          <?php //echo $v_news->news_title?>
                          <?php //echo $v_news->news_short_description?>

                            <div class="media">

                                <div class="media-body">
                                    <h5 class="media-heading"><a class="link2" href="<?php echo base_url() ?>welcome/news_details/<?php echo $v_news->news_id ?>"><?php echo $v_news->news_title ?></a></h5>
                                    <p> <?php echo $v_news->news_short_description ?> </p>
                                </div>
                            </div><!-- /.Recent post End -->
                        <?php } ?>

                                      </div>
                                  </div>
                              </div>

                                        </div>



                                    </div>
                                    <!-- /.First Row End -->

                                </div>



                                <!-- Second Row Start From Here
                                ========================================= -->
                                </div><!-- /.container -->





                                <!-- /END THE BODY -->


                                <!-- Java Script Start-->

                                <!-- Java Script Datepicker Start-->
                                <script src="<?php echo base_url(); ?>js/jquery.js"></script>
                                <script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
                                <script src="<?php echo base_url(); ?>js/holder.js"></script>
                                <!-- Java Script Datepicker End-->
                                <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>



                                <script>
                                    if (top.location != location) {
                                        top.location.href = document.location.href ;
                                    }
                                    $(function(){
                                        window.prettyPrint && prettyPrint();
                                        $('#dp1').datepicker({
                                            format: 'mm-dd-yyyy'
                                        });
                                        $('#dp2').datepicker();
                                        $('#dp3').datepicker();
                                        $('#dp3').datepicker();
                                        $('#dpYears').datepicker();
                                        $('#dpMonths').datepicker();


                                        var startDate = new Date(2012,1,20);
                                        var endDate = new Date(2012,1,25);
                                        $('#dp4').datepicker()
                                        .on('changeDate', function(ev){
                                            if (ev.date.valueOf() > endDate.valueOf()){
                                                $('#alert').show().find('strong').text('The start date can not be greater then the end date');
                                            } else {
                                                $('#alert').hide();
                                                startDate = new Date(ev.date);
                                                $('#startDate').text($('#dp4').data('date'));
                                            }
                                            $('#dp4').datepicker('hide');
                                        });
                                        $('#dp5').datepicker()
                                        .on('changeDate', function(ev){
                                            if (ev.date.valueOf() < startDate.valueOf()){
                                                $('#alert').show().find('strong').text('The end date can not be less then the start date');
                                            } else {
                                                $('#alert').hide();
                                                endDate = new Date(ev.date);
                                                $('#endDate').text($('#dp5').data('date'));
                                            }
                                            $('#dp5').datepicker('hide');
                                        });

                                        // disabling dates
                                        var nowTemp = new Date();
                                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                                        var checkin = $('#dpd1').datepicker({
                                            onRender: function(date) {
                                                return date.valueOf() < now.valueOf() ? 'disabled' : '';
                                            }
                                        }).on('changeDate', function(ev) {
                                            if (ev.date.valueOf() > checkout.date.valueOf()) {
                                                var newDate = new Date(ev.date)
                                                newDate.setDate(newDate.getDate() + 1);
                                                checkout.setValue(newDate);
                                            }
                                            checkin.hide();
                                            $('#dpd2')[0].focus();
                                        }).data('datepicker');
                                        var checkout = $('#dpd2').datepicker({
                                            onRender: function(date) {
                                                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                                            }
                                        }).on('changeDate', function(ev) {
                                            checkout.hide();
                                        }).data('datepicker');
                                    });
                                </script>



        <!-- <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
            </script>-->
                                <script type="text/javascript">
                                    _uacct = "UA-106117-1";
                                    urchinTracker();
                                </script>

<!--

                                </body>
                                </html>




-->



                    <script language="javascript">
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Reply";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
}
</script>
