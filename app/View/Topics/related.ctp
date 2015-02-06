
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($topic['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($topic['Course'] as $course): ?>
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
	<h3><?php echo __('Related Fcategories'); ?></h3>
	<?php if (!empty($topic['Fcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($topic['Fcategory'] as $fcategory): ?>
		<tr>
			<td><?php echo $fcategory['id']; ?></td>
			<td><?php echo $fcategory['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fcategories', 'action' => 'view', $fcategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fcategories', 'action' => 'edit', $fcategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fcategories', 'action' => 'delete', $fcategory['id']), null, __('Are you sure you want to delete # %s?', $fcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fcategory'), array('controller' => 'fcategories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
