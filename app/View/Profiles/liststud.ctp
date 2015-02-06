<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Programs index">
		
			<h2><?php echo __('List of Student'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "List of Student";?></li>

             		
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
					
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('Course'); ?></th>
						<th><?php echo $this->Paginator->sort('program_id'); ?></th>
						<th><?php echo $this->Paginator->sort('faculty_id'); ?></th>
					    <th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($profiles as $profile): ?>
	<tr>
	
		<td><?php echo h($profile['Profile']['fullName']); ?>&nbsp;</td>
		 <td><?php foreach($profile['Course'] as $course){ 
        echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
    	} ?></td>
		<td><?php echo h($profile['Program']['name']); ?>&nbsp;</td>
		<td><?php echo h($profile['Faculty']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $profile['Profile']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<?php echo $this->element('paginate');?>
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
