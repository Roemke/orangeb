<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('vname');
		echo $this->Form->input('gebdat');
		echo $this->Form->input('bildname');
		echo $this->Form->input('Lesson');
		echo $this->Form->input('Sclass');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lessons'), array('controller' => 'lessons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lesson'), array('controller' => 'lessons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sclasses'), array('controller' => 'sclasses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sclass'), array('controller' => 'sclasses', 'action' => 'add')); ?> </li>
	</ul>
</div>
