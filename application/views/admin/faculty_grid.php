<h2>Edit Faculty</h2>

                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Faculty Id</th>
			<th>Faculty Name</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php
                foreach($all_faculty as $v_faculty)
                {
            ?>
            <tr class="odd gradeX">
			<td><?php echo $v_faculty->faculty_id;?></td>
			<td><?php echo $v_faculty->faculty_name;?></td>
			<td>
                            <?php
                            if($v_faculty->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="#" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>

				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>

                            <?php
                                if($v_faculty->publication_status=='1')
                                {
                                ?>

                            <a href="<?php echo base_url();?>super_admin/unpublished_faculty/<?php echo $v_faculty->faculty_id; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="glyphicon glyphicon-ok"></i>
					Unpublished
				</a>
                             <?php  }
                                else{
                                   ?>

				<a href="<?php echo base_url();?>super_admin/published_faculty/<?php echo $v_faculty->faculty_id; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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
