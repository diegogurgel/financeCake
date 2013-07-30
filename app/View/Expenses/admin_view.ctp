<div class="expenses view">
<h2><?php  echo __('Expense'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $expense['SubCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expense['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $expense['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ammount'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['ammount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($expense['Expense']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense'), array('action' => 'edit', $expense['Expense']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense'), array('action' => 'delete', $expense['Expense']['id']), null, __('Are you sure you want to delete # %s?', $expense['Expense']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expenses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
