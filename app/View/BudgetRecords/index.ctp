<div class="budgetRecords index">
	<h2><?php echo __('Budget Records'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ammount'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budgetRecords as $budgetRecord): ?>
	<tr>
		<td><?php echo h($budgetRecord['BudgetRecord']['id']); ?>&nbsp;</td>
		<td><?php echo h($budgetRecord['BudgetRecord']['budget_id']); ?>&nbsp;</td>
		<td><?php echo h($budgetRecord['BudgetRecord']['ammount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($budgetRecord['SubCategory']['name'], array('controller' => 'sub_categories', 'action' => 'view', $budgetRecord['SubCategory']['id'])); ?>
		</td>
		<td><?php echo h($budgetRecord['BudgetRecord']['created']); ?>&nbsp;</td>
		<td><?php echo h($budgetRecord['BudgetRecord']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $budgetRecord['BudgetRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $budgetRecord['BudgetRecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $budgetRecord['BudgetRecord']['id']), null, __('Are you sure you want to delete # %s?', $budgetRecord['BudgetRecord']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Budget Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Categories'), array('controller' => 'sub_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Category'), array('controller' => 'sub_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
