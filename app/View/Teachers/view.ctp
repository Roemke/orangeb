<div class="teachers view">
<h2><?php echo __('Teacher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vname'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['vname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bildname'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['bildname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($teacher['Teacher']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Teacher'), array('action' => 'edit', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Teacher'), array('action' => 'delete', $teacher['Teacher']['id']), null, __('Are you sure you want to delete # %s?', $teacher['Teacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessons Students'), array('controller' => 'lessons_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lessons Student'), array('controller' => 'lessons_students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('controller' => 'lessons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lessons Students'); ?></h3>
	<?php if (!empty($teacher['LessonsStudent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Lesson Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Verspaetung'); ?></th>
		<th><?php echo __('Bemerkung'); ?></th>
		<th><?php echo __('Teacher Id'); ?></th>
		<th><?php echo __('Datumzeit'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($teacher['LessonsStudent'] as $lessonsStudent): ?>
		<tr>
			<td><?php echo $lessonsStudent['id']; ?></td>
			<td><?php echo $lessonsStudent['student_id']; ?></td>
			<td><?php echo $lessonsStudent['lesson_id']; ?></td>
			<td><?php echo $lessonsStudent['note']; ?></td>
			<td><?php echo $lessonsStudent['verspaetung']; ?></td>
			<td><?php echo $lessonsStudent['bemerkung']; ?></td>
			<td><?php echo $lessonsStudent['teacher_id']; ?></td>
			<td><?php echo $lessonsStudent['datumzeit']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lessons_students', 'action' => 'view', $lessonsStudent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lessons_students', 'action' => 'edit', $lessonsStudent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lessons_students', 'action' => 'delete', $lessonsStudent['id']), null, __('Are you sure you want to delete # %s?', $lessonsStudent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lessons Student'), array('controller' => 'lessons_students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lessons'); ?></h3>
	<?php if (!empty($teacher['Lesson'])): ?>
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
	<?php foreach ($teacher['Lesson'] as $lesson): ?>
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
