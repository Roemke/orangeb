<div class="lessons view">
<h2><?php echo __('Lesson'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lesson['Lesson']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($lesson['Lesson']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nummer'); ?></dt>
		<dd>
			<?php echo h($lesson['Lesson']['nummer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Startzeit'); ?></dt>
		<dd>
			<?php echo h($lesson['Lesson']['startzeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dauer'); ?></dt>
		<dd>
			<?php echo h($lesson['Lesson']['dauer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lesson['Course']['bezeichnung'], array('controller' => 'courses', 'action' => 'view', $lesson['Course']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lesson'), array('action' => 'edit', $lesson['Lesson']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lesson'), array('action' => 'delete', $lesson['Lesson']['id']), null, __('Are you sure you want to delete # %s?', $lesson['Lesson']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sclasses'), array('controller' => 'sclasses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sclass'), array('controller' => 'sclasses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($lesson['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Vname'); ?></th>
		<th><?php echo __('Gebdat'); ?></th>
		<th><?php echo __('Bildname'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lesson['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['name']; ?></td>
			<td><?php echo $student['vname']; ?></td>
			<td><?php echo $student['gebdat']; ?></td>
			<td><?php echo $student['bildname']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Teachers'); ?></h3>
	<?php if (!empty($lesson['Teacher'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Vname'); ?></th>
		<th><?php echo __('Bildname'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lesson['Teacher'] as $teacher): ?>
		<tr>
			<td><?php echo $teacher['id']; ?></td>
			<td><?php echo $teacher['name']; ?></td>
			<td><?php echo $teacher['vname']; ?></td>
			<td><?php echo $teacher['bildname']; ?></td>
			<td><?php echo $teacher['password']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'teachers', 'action' => 'view', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'teachers', 'action' => 'edit', $teacher['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'teachers', 'action' => 'delete', $teacher['id']), null, __('Are you sure you want to delete # %s?', $teacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher'), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sclasses'); ?></h3>
	<?php if (!empty($lesson['Sclass'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bezeichnung'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lesson['Sclass'] as $sclass): ?>
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
