



<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Forum Category index">
		
			<h2><?php echo __('Forum Category: '); ?> <?php echo $fcategory['Fcategory']['name']; ?></h2>
			<ol class="breadcrumb">
              
             		 <li><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>

             		 <li class ="active"> <?php echo "Related";?></li>
			<?php 	if ( $this->Session->Read('Auth.User.role_id') == 1) {
			
					echo '<li>' . $this->Html->link(' List of Forum Category ', array('controller' => 'fcategories', 'action' => 'admin_index')).'</li>';
					echo '<li>' . $this->Html->link(' Add new Category ', array('controller' => 'fcategories', 'action' => 'admin_add')).'</li>';
					}
					if ( $this->Session->Read('Auth.User.role_id') == 2) {
			
					echo "students";
					
					}
					if ( $this->Session->Read('Auth.User.role_id') == 3) {
			
					echo "Lecturer";
			}?>


            		</ol>
		



			<hr/>
			





<h3><b><?php echo "Forum"; ?></b><br/></h3>
			<div class="table-responsive">
			<?php if (!empty($fcategory['Topic'])): ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo __('Subject'); ?></th>
						<th><?php echo __('Date'); ?></th>
						
						
					    <th class="actions"><?php echo __(''); ?></th>
						</tr>
					</thead>
					<tbody>
	<?php foreach ($course['Topic'] as $topic): ?>
	<tr>
			<td><?php echo $topic['subject']; ?></td>
		<td><?php echo $topic['date']; ?></td>
			
			
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








