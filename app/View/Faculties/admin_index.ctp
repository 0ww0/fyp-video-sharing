
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Faculties index">
		
			<h2><?php echo __('Faculties'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li ><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index')) ;?></li>
             		 <li class="active"> <?php echo 'List of Faculty';?></li>
             		 <li > <?php echo $this->Html->link(' Add new Faculty', array('controller' => 'faculties', 'action' => 'admin_add'));?></li>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
					    <th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($faculties as $faculty): ?>
	<tr>
		<td><?php echo h($faculty['Faculty']['id']); ?>&nbsp;</td>
		<td><?php echo h($faculty['Faculty']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $faculty['Faculty']['id'])); ?>
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $faculty['Faculty']['id']), null, __('Are you sure you want to delete # %s?', $faculty['Faculty']['id'])); ?>
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
