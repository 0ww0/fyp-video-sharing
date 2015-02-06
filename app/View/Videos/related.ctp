
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($video['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($video['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vcategories'); ?></h3>
	<?php if (!empty($video['Vcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($video['Vcategory'] as $vcategory): ?>
		<tr>
			<td><?php echo $vcategory['id']; ?></td>
			<td><?php echo $vcategory['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vcategories', 'action' => 'view', $vcategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vcategories', 'action' => 'edit', $vcategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vcategories', 'action' => 'delete', $vcategory['id']), null, __('Are you sure you want to delete # %s?', $vcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vcategory'), array('controller' => 'vcategories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
