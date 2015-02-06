<?php 
/* First step: get the latest posts, the URL should be like your_controller_name/method_name/params */
$videos = $this->requestAction('videos/related1/10');
?>




			<div class="table-responsive">
			<?php foreach ($videos as $video): ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
						<th><?php echo __('Name'); ?></th>
						<th><?php echo __('Description'); ?></th>
						
						
					    <th class="actions"><?php echo __(''); ?></th>
						</tr>
					</thead>
					<tbody>

	<tr>
			<td><?php echo h($video['Video']['name']); ?></td>
			<td><?php echo h($video['Video']['description']); ?></td>
			
			
		<td class="actions">
			<?php echo $this->Html->link(__('View Video'), array('controller' => 'videos', 'action' => 'view', $video['Video']['id'])); ?>
		
		</td>
	</tr>

					</tbody>
					
				</table>
				<?php endforeach; ?>
			</div><!-- /.table-responsive -->