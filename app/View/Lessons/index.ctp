<div class="lessons index">
	<h2><?php echo __('Lessons'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('nummer'); ?></th>
			<th><?php echo $this->Paginator->sort('startzeit'); ?></th>
			<th><?php echo $this->Paginator->sort('dauer'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lessons as $lesson): ?>
	<tr>
		<td><?php echo h($lesson['Lesson']['id']); ?>&nbsp;</td>
		<td><?php echo h($lesson['Lesson']['date']); ?>&nbsp;</td>
		<td><?php echo h($lesson['Lesson']['nummer']); ?>&nbsp;</td>
		<td><?php echo h($lesson['Lesson']['startzeit']); ?>&nbsp;</td>
		<td><?php echo h($lesson['Lesson']['dauer']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lesson['Course']['bezeichnung'], array('controller' => 'courses', 'action' => 'view', $lesson['Course']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lesson['Lesson']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lesson['Lesson']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lesson['Lesson']['id']), null, __('Are you sure you want to delete # %s?', $lesson['Lesson']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lesson'), array('action' => 'add')); ?></li>
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
