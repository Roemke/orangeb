<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['vname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gebdat'); ?></dt>
		<dd>
			<?php echo h($student['Student']['gebdat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bildname'); ?></dt>
		<dd>
			<?php echo h($student['Student']['bildname']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('controller' => 'lessons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sclasses'), array('controller' => 'sclasses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sclass'), array('controller' => 'sclasses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lessons'); ?></h3>
	<?php if (!empty($student['Lesson'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Nummer'); ?></th>
		<th><?php echo __('Startzeit'); ?></th>
		<th><?php echo __('Dauer'); ?></th>
		<th><?php echo __('Course Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Lesson'] as $lesson): ?>
		<tr>
			<td><?php echo $lesson['id']; ?></td>
			<td><?php echo $lesson['date']; ?></td>
			<td><?php echo $lesson['nummer']; ?></td>
			<td><?php echo $lesson['startzeit']; ?></td>
			<td><?php echo $lesson['dauer']; ?></td>
			<td><?php echo $lesson['course_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lessons', 'action' => 'view', $lesson['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lessons', 'action' => 'edit', $lesson['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lessons', 'action' => 'delete', $lesson['id']), null, __('Are you sure you want to delete # %s?', $lesson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sclasses'); ?></h3>
	<?php if (!empty($student['Sclass'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bezeichnung'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Sclass'] as $sclass): ?>
		<tr>
			<td><?php echo $sclass['id']; ?></td>
			<td><?php echo $sclass['bezeichnung']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sclasses', 'action' => 'view', $sclass['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sclasses', 'action' => 'edit', $sclass['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sclasses', 'action' => 'delete', $sclass['id']), null, __('Are you sure you want to delete # %s?', $sclass['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sclass'), array('controller' => 'sclasses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
