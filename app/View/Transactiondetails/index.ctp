<div class="transactiondetails index">
	<h2><?php echo __('Transactiondetails'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('transaction_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($transactiondetails as $transactiondetail): ?>
	<tr>
		<td><?php echo h($transactiondetail['Transactiondetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transactiondetail['Transaction']['id'], array('controller' => 'transactions', 'action' => 'view', $transactiondetail['Transaction']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transactiondetail['Product']['id'], array('controller' => 'products', 'action' => 'view', $transactiondetail['Product']['id'])); ?>
		</td>
		<td><?php echo h($transactiondetail['Transactiondetail']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($transactiondetail['Transactiondetail']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transactiondetail['Transactiondetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transactiondetail['Transactiondetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transactiondetail['Transactiondetail']['id']), array(), __('Are you sure you want to delete # %s?', $transactiondetail['Transactiondetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Transactiondetail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
