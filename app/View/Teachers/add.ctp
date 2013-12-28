<div class="teachers form">
<?php echo $this->Form->create('Teacher'); ?>
	<fieldset>
		<legend><?php echo __('Add Teacher'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('vname');
		echo $this->Form->input('bildname');
		echo $this->Form->input('password');
		echo $this->Form->input('Lesson');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teachers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lessons Students'), array('controller' => 'lessons_students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lessons Student'), array('controller' => 'lessons_students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('controller' => 'lessons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
	</ul>
</div>
