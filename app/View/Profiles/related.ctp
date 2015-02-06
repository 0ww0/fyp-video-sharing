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
             		  <li class="active"> <?php echo"Related List"; ?></li>
              
            		</ol>
<div class="related">
	<h3><?php echo __('Related Lecturers'); ?></h3>
	<?php if (!empty($profile['Lecturer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('FullName'); ?></th>
		
		<th><?php echo __('Picture'); ?></th>
		
	
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profile['Lecturer'] as $lecturer): ?>
		<tr>
			
			<td><?php echo $lecturer['fullName']; ?></td>
			<td><?php echo $lecturer['email']; ?></td>
			<td><?php echo $lecturer['picture']; ?></td>
			
		
		
		
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lecturers', 'action' => 'view', $lecturer['id'])); ?>
			
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>





