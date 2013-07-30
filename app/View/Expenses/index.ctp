<div class="expenses index">
	<h2><?php echo __('Expenses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('ammount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($expenses as $expense): ?>
	<tr>
		<td><?php echo h($expense['Expense']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($expense['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $expense['SubCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($expense['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $expense['Account']['id'])); ?>
		</td>
		<td><?php echo h($expense['Expense']['date']); ?>&nbsp;</td>
		<td><?php echo h($expense['Expense']['ammount']); ?>&nbsp;</td>
		<td><?php echo h($expense['Expense']['created']); ?>&nbsp;</td>
		<td><?php echo h($expense['Expense']['modified']); ?>&nbsp;</td>
		<td><?php echo h($expense['Expense']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $expense['Expense']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $expense['Expense']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $expense['Expense']['id']), null, __('Are you sure you want to delete # %s?', $expense['Expense']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Expense'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Sum Ammount'), array('controller' => 'expenses', 'action' => 'sum')); ?> </li>
		<li><?php echo $this->Html->link(__('Sum Ammount by Month'), array('controller' => 'expenses', 'action' => 'gastos_mes/2012-03')); ?> </li>
	</ul>
</div>
