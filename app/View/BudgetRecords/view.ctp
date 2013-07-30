<div class="budgetRecords view">
<h2><?php  echo __('Budget Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($budgetRecord['BudgetRecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget Id'); ?></dt>
		<dd>
			<?php echo h($budgetRecord['BudgetRecord']['budget_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ammount'); ?></dt>
		<dd>
			<?php echo h($budgetRecord['BudgetRecord']['ammount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($budgetRecord['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $budgetRecord['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($budgetRecord['BudgetRecord']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($budgetRecord['BudgetRecord']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Budget Record'), array('action' => 'edit', $budgetRecord['BudgetRecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Budget Record'), array('action' => 'delete', $budgetRecord['BudgetRecord']['id']), null, __('Are you sure you want to delete # %s?', $budgetRecord['BudgetRecord']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Budget Records'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Budget Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
