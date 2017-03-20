<h2>Edit News List</h2>

                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>News Id</th>
			<th>News Title</th>
      <th>News Short Description</th>
      <th>News Long Description</th>
      <th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php
                foreach($all_news as $v_news)
                {
            ?>
            <tr class="odd gradeX">
			<td><?php echo $v_news->news_id ?></td>
			<td><?php echo $v_news->news_title ?></td>
      <td><?php echo $v_news->news_short_description ?></td>
      <td><?php echo $v_news->news_long_description ?></td>

			<td>
                            <?php
                            if($v_news->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="<?php echo base_url();?>super_admin/edit_news/<?php echo $v_news->news_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>

				<a href="<?php echo base_url();?>super_admin/delete_news/<?php echo $v_news->news_id; ?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>

                            <?php
                                if($v_news->publication_status=='1')
                                {
                                ?>

                            <a href="<?php echo base_url();?>super_admin/unpublished_news/<?php echo $v_news->news_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="glyphicon glyphicon-ok"></i>
					Unpublished
				</a>
                             <?php  }
                                else{
                                   ?>

				<a href="<?php echo base_url();?>super_admin/published_news/<?php echo $v_news->news_id; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="glyphicon glyphicon-remove"></i>
					Published
				</a>

                               <?php

                                }
                            ?>

                        </td>
		</tr>
                <?php } ?>
	</tbody>
	<tfoot>
		<tr>
      <th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
      <th></th>
		</tr>
	</tfoot>
</table>
