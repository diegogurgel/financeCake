<div class="budgets form">
<?php echo $this->Form->create('Budget'); ?>
	<fieldset>
		<legend><?php echo __('Add Budget'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Budgets'), array('action' => 'index')); ?></li>
	</ul>
</div>
