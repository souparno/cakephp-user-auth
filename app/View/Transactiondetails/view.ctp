<div class="transactiondetails view">
<h2><?php echo __('Transactiondetail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transactiondetail['Transactiondetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transactiondetail['Transaction']['id'], array('controller' => 'transactions', 'action' => 'view', $transactiondetail['Transaction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transactiondetail['Product']['id'], array('controller' => 'products', 'action' => 'view', $transactiondetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($transactiondetail['Transactiondetail']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($transactiondetail['Transactiondetail']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transactiondetail'), array('action' => 'edit', $transactiondetail['Transactiondetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transactiondetail'), array('action' => 'delete', $transactiondetail['Transactiondetail']['id']), array(), __('Are you sure you want to delete # %s?', $transactiondetail['Transactiondetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactiondetails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transactiondetail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
