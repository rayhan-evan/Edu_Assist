
<!--CSS LINK -->
<link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>basis_blog/css/bootstrap.css">
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
                              <img src="<?php echo base_url(); ?>images/slider/16.jpg" alt="First slide">
                              <div class="container">
                                  <div class="carousel-caption">

                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <img src="<?php echo base_url(); ?>images/slider/13.jpg" alt="Second slide">
                              <div class="container">
                                  <div class="carousel-caption">

                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <img src="<?php echo base_url(); ?>images/slider/17.jpg" alt="Third slide">
                              <div class="container">
                                  <div class="carousel-caption">

                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <img src="<?php echo base_url(); ?>images/slider/14.jpg" alt="Third slide">
                              <div class="container">
                                  <div class="carousel-caption">

                                  </div>
                              </div>
                          </div>
                      </div>

                      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

                  </div>
              </div><!-- /.carousel End-->



              <!-- Main Body Start From Here
              ================================================== -->
              <!-- Main Container Start -->



              <div class="container">

                  <div class="row pading_top2"><!-- /.First Row Start -->

                      <div class="col-md-8 "><!-- /.Main Blog Part Start -->

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

                          <?php
                          $exception = $this->session->userdata('exception');
                          if ($exception) {
                              ?>
                              <div class="alert alert-danger">
                                  <?php echo $exception; ?>
                              </div>

                              <?php
                              $this->session->unset_userdata('exception');
                          }
                          ?>

                          <?php //echo $maincontent; ?>

                          <!-- /.Blog Articale Start -->
                          <div id="articale" class="col-md-12">

                              <div class="panel_wrapper">

                                  <?php
                                  foreach ($all_published_news as $v_news){
                                  ?>
                                  <div class="panel"><!-- /.Articale Start -->
                                      <div class="panel-heading">
                                          <p class="date_text">  <i class="fa fa-calendar"></i> <?php echo $v_news->created_date_time?>
                                          <h2> <?php echo $v_news->news_title?> </h2>
                                      </div>
                                      <div class="panel-body">
                                          <img class="media-object img-responsive" src="<?php //echo base_url().$v_news->news_image?>" alt="">
                                         <?php echo $v_news->news_short_description?>
                                          <button type="button" onClick="window.location.href='<?php echo base_url(); ?>welcome/news_details/<?php echo $v_news->news_id?>'" class="btn btn-primary btn-sm">বিস্তারিত পড়ুন</button>
                                      </div>
                                  </div><!-- /.Articale End -->
                                  <div class="border-botom"></div>
                                  <?php }?>

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
