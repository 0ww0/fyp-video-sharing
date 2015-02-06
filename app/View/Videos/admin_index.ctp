
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Video index">
		
			<h2><?php echo __('Video'); ?></h2>
					<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
					<li class="active"> <?php echo "List of Video";?></li>
             			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' Add new  Video ', array('controller' => 'videos', 'action' => 'add')).'</li>';
					echo '<li>' . $this->Html->link(' Public Video ', array('controller' => 'videos', 'action' => 'index_public')).'</li>';
					echo '<li>' . $this->Html->link(' Private Video ', array('controller' => 'videos', 'action' => 'index_private')).'</li>';
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>
              
            		</ol>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('visibility'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('program_id'); ?></th>
			<th><?php echo $this->Paginator->sort('faculty_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($videos as $video): ?>
	<tr>
	
		<td><?php echo h($video['Video']['name']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['description']); ?>&nbsp;</td>
		<td><?php echo h($video['Video']['date']); ?>&nbsp;</td>
	
		<td><?php echo h($video['Video']['visibility']); ?>&nbsp;</td>
		<td>
			<?php echo h($video['User']['fullName']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($video['Program']['name'], array('controller' => 'programs', 'action' => 'related', $video['Program']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($video['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $video['Faculty']['id'])); ?>
		</td>
		<td><?php echo h($video['Video']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $video['Video']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $video['Video']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $video['Video']['id']), null, __('Are you sure you want to delete # %s?', $video['Video']['id'])); ?>
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
