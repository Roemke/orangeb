<div class="sclasses form">
<?php echo $this->Form->create('Sclass'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sclass'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('bezeichnung');
		echo $this->Form->input('Lesson');
		echo $this->Form->input('Student');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sclass.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sclass.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sclasses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('controller' => 'lessons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
