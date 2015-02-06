<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Programs index">
		
			<h2><?php echo __('Program'); ?></h2>
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
<?php foreach ($programs as $program): ?>
	<tr>
		<td><?php echo h($program['Program']['id']); ?>&nbsp;</td>
		<td><?php echo h($program['Program']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $program['Program']['id'])); ?>
		
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
