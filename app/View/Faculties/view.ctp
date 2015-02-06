

<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($faculty['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FullName'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faculty['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['fullName']; ?></td>
			<td><?php echo $profile['email']; ?></td>
			<td><?php echo $profile['picture']; ?></td>
			<td><?php echo $profile['bio']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Topics'); ?></h3>
	<?php if (!empty($faculty['Topic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Attachment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faculty['Topic'] as $topic): ?>
		<tr>
			<td><?php echo $topic['id']; ?></td>
			<td><?php echo $topic['subject']; ?></td>
			<td><?php echo $topic['description']; ?></td>
			<td><?php echo $topic['date']; ?></td>
			<td><?php echo $topic['program_id']; ?></td>
			<td><?php echo $topic['faculty_id']; ?></td>
			<td><?php echo $topic['user_id']; ?></td>
			<td><?php echo $topic['attachment']; ?></td>
			<td><?php echo $topic['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'topics', 'action' => 'view', $topic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'topics', 'action' => 'edit', $topic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'topics', 'action' => 'delete', $topic['id']), null, __('Are you sure you want to delete # %s?', $topic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Videos'); ?></h3>
	<?php if (!empty($faculty['Video'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Thumb'); ?></th>
		<th><?php echo __('Extension'); ?></th>
		<th><?php echo __('MimeType'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Visibility'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faculty['Video'] as $video): ?>
		<tr>
			<td><?php echo $video['id']; ?></td>
			<td><?php echo $video['name']; ?></td>
			<td><?php echo $video['description']; ?></td>
			<td><?php echo $video['date']; ?></td>
			<td><?php echo $video['filename']; ?></td>
			<td><?php echo $video['thumb']; ?></td>
			<td><?php echo $video['extension']; ?></td>
			<td><?php echo $video['mimeType']; ?></td>
			<td><?php echo $video['filesize']; ?></td>
			<td><?php echo $video['status']; ?></td>
			<td><?php echo $video['visibility']; ?></td>
			<td><?php echo $video['user_id']; ?></td>
			<td><?php echo $video['program_id']; ?></td>
			<td><?php echo $video['faculty_id']; ?></td>
			<td><?php echo $video['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videos', 'action' => 'view', $video['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videos', 'action' => 'edit', $video['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videos', 'action' => 'delete', $video['id']), null, __('Are you sure you want to delete # %s?', $video['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>