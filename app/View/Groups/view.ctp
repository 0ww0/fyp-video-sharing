<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Lecturers'); ?></h3>
	<?php if (!empty($group['Lecturer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FullName'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($group['Lecturer'] as $lecturer): ?>
		<tr>
			<td><?php echo $lecturer['id']; ?></td>
			<td><?php echo $lecturer['fullName']; ?></td>
			<td><?php echo $lecturer['email']; ?></td>
			<td><?php echo $lecturer['picture']; ?></td>
			<td><?php echo $lecturer['bio']; ?></td>
			<td><?php echo $lecturer['group_id']; ?></td>
			<td><?php echo $lecturer['faculty_id']; ?></td>
			<td><?php echo $lecturer['program_id']; ?></td>
			<td><?php echo $lecturer['user_id']; ?></td>
			<td><?php echo $lecturer['status']; ?></td>
			<td><?php echo $lecturer['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lecturers', 'action' => 'view', $lecturer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lecturers', 'action' => 'edit', $lecturer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lecturers', 'action' => 'delete', $lecturer['id']), null, __('Are you sure you want to delete # %s?', $lecturer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lecturer'), array('controller' => 'lecturers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($group['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FullName'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($group['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['fullName']; ?></td>
			<td><?php echo $profile['email']; ?></td>
			<td><?php echo $profile['picture']; ?></td>
			<td><?php echo $profile['bio']; ?></td>
			<td><?php echo $profile['group_id']; ?></td>
			<td><?php echo $profile['faculty_id']; ?></td>
			<td><?php echo $profile['program_id']; ?></td>
			<td><?php echo $profile['user_id']; ?></td>
			<td><?php echo $profile['status']; ?></td>
			<td><?php echo $profile['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, __('Are you sure you want to delete # %s?', $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
