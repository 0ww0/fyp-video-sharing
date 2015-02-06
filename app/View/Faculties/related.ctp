

<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Faculty index">
		
			<h2><?php echo __('Faculty: '); ?> <?php echo h($faculty['Faculty']['name']); ?></h2>
			<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Related";?></li>
			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Faculty ', array('controller' => 'faculties', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Faculty ', array('controller' => 'faculties', 'action' => 'admin_add')).'</li>';
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>


					
              
            		</ol>
			<hr/>
			<div class="table-responsive">
			<?php if (!empty($faculty['Profile'])): ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo __('FullName'); ?></th>
						<th><?php echo __('Email'); ?></th>
						<th><?php echo __('Bio'); ?></th>
						
					    <th class="actions"><?php echo __(''); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($faculty['Profile'] as $profile): ?>
	<tr>
			<td><?php echo $profile['fullName']; ?></td>
			<td><?php echo $profile['email']; ?></td>
			<td><?php echo $profile['bio']; ?></td>
			
		<td class="actions">
			<?php echo $this->Html->link(__('View Profile'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
		
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
					
				</table>
				<?php endif; ?>
			</div><!-- /.table-responsive -->
			
			
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
