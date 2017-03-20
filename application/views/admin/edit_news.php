<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Edit News
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" action="<?php echo base_url() ?>super_admin/update_news" method="post" class="form-horizontal form-groups-bordered">


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

                        <label for="field-1" class="col-sm-3 control-label">News Title</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="news_title" value="<?php echo $news_info->news_title; ?>">
                            <input type="hidden" name="news_id" value="<?php echo $news_info->news_id; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">News Short Description</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow" id="field-ta" name="news_short_description"> <?php echo $news_info->news_short_description; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">News Long Description</label>

                        <div class="col-sm-8">
                            <textarea  name="event_description" id="ck_editor"><?php echo $news_info->news_long_description; ?></textarea><?php echo display_ckeditor($editor['ckeditor']) ?>


                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">News Status</label>

                        <div class="col-sm-5">
                            <div class="radio">
                                <?php
                                    if($news_info->publication_status==1)
                                    {
                                ?>
                                <input type="radio" id="rd-1" name="publication_status" value="1" checked>
                                <?php
                                    }
                                    else{
                                ?>
                                <input type="radio" id="rd-1" name="publication_status" value="1">
                                    <?php } ?>
                                <label>Published</label>
                            </div>

                            <div class="radio">
                                <?php
                                    if($news_info->publication_status==0)
                                    {
                                ?>
                                <input type="radio" id="rd-2" name="publication_status" value="0" checked>
                                <?php
                                    }
                                    else{
                                ?>
                                <input type="radio" id="rd-2" name="publication_status" value="0">
                                    <?php } ?>
                                <label>Unpublished</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Update news</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
