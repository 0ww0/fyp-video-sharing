

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="users index">
		
			<h2><?php echo __('All Users'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
             		 	<li class="active"> <?php echo "List of All User";?></li>
             		  <li class="active"> <?php echo $this->Html->link(' Add new User', array('controller' => 'users', 'action' => 'admin_add'));?></li>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('fullName','Full Name'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('role_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
  <?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['fullName']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $user['User']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']),  array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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

