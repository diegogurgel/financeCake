<div class="budgetRecords form">
<?php echo $this->Form->create('BudgetRecord'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Budget Record'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('budget_id');
		echo $this->Form->input('ammount');
		echo $this->Form->input('sub_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BudgetRecord.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BudgetRecord.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Budget Records'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
