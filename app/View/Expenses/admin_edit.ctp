<div class="expenses form">
<?php echo $this->Form->create('Expense'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Expense'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sub_category_id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('date');
		echo $this->Form->input('ammount');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Expense.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Expense.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
