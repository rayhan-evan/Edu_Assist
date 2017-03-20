<h2>Edit Circular</h2>

                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Circular Id</th>
			<th>Circular Title</th>
      <th>Circular Description</th>
      <th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php
                foreach($all_circular as $v_circular)
                {
            ?>
            <tr class="odd gradeX">
			<td><?php echo $v_circular->circular_id ?></td>
			<td><?php echo $v_circular->circular_title ?></td>
      <td><?php echo $v_circular->circular_description ?></td>

			<td>
                            <?php
                            if($v_circular->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="<?php echo base_url();?>super_admin/edit_circular/<?php echo $v_circular->circular_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>

				<a href="<?php echo base_url();?>super_admin/delete_circular/<?php echo $v_circular->circular_id; ?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>

                            <?php
                                if($v_circular->publication_status=='1')
                                {
                                ?>

                            <a href="<?php echo base_url();?>super_admin/unpublished_circular/<?php echo $v_circular->circular_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="glyphicon glyphicon-ok"></i>
					Unpublished
				</a>
                             <?php  }
                                else{
                                   ?>

				<a href="<?php echo base_url();?>super_admin/published_circular/<?php echo $v_circular->circular_id; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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
