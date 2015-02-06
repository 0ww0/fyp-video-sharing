
<br />

<div id="page-container" class="row">

	
	
	<div id="page-content" class="col-sm-9">

		<div class="Course index">
		
			<h2><?php echo __('Course'); ?></h2>
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
<?php foreach ($courses as $course): ?>
	<tr>
		<td><?php echo h($course['Course']['id']); ?>&nbsp;</td>
		<td><?php echo h($course['Course']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Related'), array('action' => 'related', $course['Course']['id'])); ?>
			
			
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
