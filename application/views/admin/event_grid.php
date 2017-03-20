<h2>Edit Event List</h2>

                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Event Id</th>
			<th>Event Title</th>
      <th>Event Place</th>
      <th>Event Time</th>
      <th>Event Description</th>
      <th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php
                foreach($all_event as $v_event)
                {
            ?>
            <tr class="odd gradeX">
			<td><?php echo $v_event->event_id ?></td>
			<td><?php echo $v_event->event_title ?></td>
      <td><?php echo $v_event->event_place ?></td>
      <td><?php echo $v_event->event_time ?></td>
      <td><?php echo $v_event->event_description ?></td>

			<td>
                            <?php
                            if($v_event->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="<?php echo base_url();?>super_admin/edit_event/<?php echo $v_event->event_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>

				<a href="<?php echo base_url();?>super_admin/delete_event/<?php echo $v_event->event_id; ?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>

                            <?php
                                if($v_event->publication_status=='1')
                                {
                                ?>

                            <a href="<?php echo base_url();?>super_admin/unpublished_event/<?php echo $v_event->event_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="glyphicon glyphicon-ok"></i>
					Unpublished
				</a>
                             <?php  }
                                else{
                                   ?>

				<a href="<?php echo base_url();?>super_admin/published_event/<?php echo $v_event->event_id; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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
