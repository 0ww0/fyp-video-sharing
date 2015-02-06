
<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">
		
		<div class="topics view">
	<h1><?php  echo __('Forum'); ?></h1>
			<h2><?php  echo __('Topic'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Forum";?></li>
					<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Forum ', array('controller' => 'topics', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Forum Topic ', array('controller' => 'topics', 'action' => 'add')).'</li>';
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
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($topic['User']['fullName'], array('controller' => 'users', 'action' => 'view', $topic['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Subject'); ?></strong></td>
		<td>
			<?php echo h($topic['Topic']['subject']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($topic['Topic']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($topic['Topic']['created']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Posts'); ?></h3>
				
				<?php if (!empty($topic['Post'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											
	
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Reply'); ?></th>
		<th><?php echo __('Created'); ?></th>
									
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($topic['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['name']; ?></td>
			<td><?php echo $post['email']; ?></td>
			<td><?php echo $post['reply']; ?></td>
			<td><?php echo $post['created']; ?></td>
			
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
				
			</div><!-- /.related -->
<?php echo $this->Posts->display_for($topic); ?>
					
			

</div><!-- /#page-container .row-fluid -->
