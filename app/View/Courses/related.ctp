

<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Course index">
		
			<h2><?php echo __('Course: '); ?> <?php echo h($course['Course']['name']); ?></h2>
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

             		 <li class ="active"> <?php echo "Related";?></li>
			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Course ', array('controller' => 'courses', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Course ', array('controller' => 'courses', 'action' => 'admin_add')).'</li>';
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "";
			}?>


            		</ol>
			

		
			
			
				<hr/>
				<h3><b><?php echo "Video"; ?></b><br/></h3>
				<?php echo $this->element('related1'); ?>
			



			<hr/>
				<h3><b><?php echo "Forum"; ?></b><br/></h3>
			<div class="table-responsive">
			<?php if (!empty($course['Topic'])): ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo __('Subject'); ?></th>
						
						
						
					    <th class="actions"><?php echo __(''); ?></th>
						</tr>
					</thead>
					<tbody>
	<?php foreach ($course['Topic'] as $topic): ?>
	<tr>
			<td><?php echo $topic['subject']; ?></td>
		
			
			
		<td class="actions">
			<?php echo $this->Html->link(__('View Topic'), array('controller' => 'topics', 'action' => 'view', $topic['id'])); ?>
		
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


