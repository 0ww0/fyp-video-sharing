<div class="lecturers view">
<h2><?php echo __('Lecturer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FullName'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['fullName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lecturer['Group']['name'], array('controller' => 'groups', 'action' => 'view', $lecturer['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculty'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lecturer['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $lecturer['Faculty']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Program'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lecturer['Program']['name'], array('controller' => 'programs', 'action' => 'view', $lecturer['Program']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lecturer['User']['fullName'], array('controller' => 'users', 'action' => 'view', $lecturer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lecturer['Lecturer']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lecturer'), array('action' => 'edit', $lecturer['Lecturer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lecturer'), array('action' => 'delete', $lecturer['Lecturer']['id']), null, __('Are you sure you want to delete # %s?', $lecturer['Lecturer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecturers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecturer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculties'), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty'), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programs'), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Program'), array('controller' => 'programs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Videos'); ?></h3>
	<?php if (!empty($lecturer['Video'])): ?>
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
		<th><?php echo __('Courseware'); ?></th>
		<th><?php echo __('Comware'); ?></th>
		<th><?php echo __('Visibility'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Lecturer Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Program Id'); ?></th>
		<th><?php echo __('Faculty Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lecturer['Video'] as $video): ?>
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
			<td><?php echo $video['courseware']; ?></td>
			<td><?php echo $video['comware']; ?></td>
			<td><?php echo $video['visibility']; ?></td>
			<td><?php echo $video['group_id']; ?></td>
			<td><?php echo $video['lecturer_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($lecturer['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Lecturer Id'); ?></th>
		<th><?php echo __('Header'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lecturer['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['user_id']; ?></td>
			<td><?php echo $message['profile_id']; ?></td>
			<td><?php echo $message['lecturer_id']; ?></td>
			<td><?php echo $message['header']; ?></td>
			<td><?php echo $message['body']; ?></td>
			<td><?php echo $message['priority']; ?></td>
			<td><?php echo $message['date']; ?></td>
			<td><?php echo $message['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), null, __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($lecturer['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lecturer['Course'] as $course): ?>
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
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($lecturer['Profile'])): ?>
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
	<?php foreach ($lecturer['Profile'] as $profile): ?>
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
