<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Programs index">
		
			<h2><?php echo __('List of Lecturer'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php 
					if ( $this->Session->Read('Auth.User.role_id') == 1) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 2) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));
             		}
             		if ( $this->Session->Read('Auth.User.role_id') == 3) {
             		 echo $this->Html->link(' Dashboard', array('controller' => 'lecturers', 'action' => 'index'));
             		}
             		 ?></li>

             		 <li class ="active"> <?php echo "List of Lecturer";?></li>

             		
              
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
<?php foreach ($lecturers as $lecturer): ?>
	<tr>
		
		<td><?php echo h($lecturer['Lecturer']['fullName']); ?>&nbsp;</td>
		<td><?php foreach ($lecturer['Course'] as $course) {
			 echo $this->Html->link($course['name'], array('controller'=>'courses','action'=>'related',$course['id'])).'&nbsp;'; 
		}?>&nbsp;</td>
		<td><?php echo h($lecturer['Program']['name']); ?>&nbsp;</td>
		<td><?php echo h($lecturer['Faculty']['name']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $lecturer['Lecturer']['id'])); ?>
			
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
