
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Rating index">
		
			<h2><?php echo __('Rating : <b>Delete</b>'); ?></h2>
			<ol class="breadcrumb">
              
             		 <li class="active"><i class="glyphicon glyphicon-user">&nbsp;</i> <?php echo $this->Html->link(' Dashboard', array('controller' => 'profiles', 'action' => 'index'));?></li>
              
            		</ol>
			<hr/>
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
					<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($ratings as $rating): ?>
	<tr>
	<td><?php echo h($rating['Rating']['rating']); ?>&nbsp;</td>
		<td><?php echo h($rating['Rating']['created']); ?>&nbsp;</td>
		<td class="actions">
			
			
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rating['Rating']['id']), null, __('Are you sure you want to delete # %s?', $rating['Rating']['id'])); ?>
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
