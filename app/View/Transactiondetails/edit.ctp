<div class="transactiondetails form">
<?php echo $this->Form->create('Transactiondetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transactiondetail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('transaction_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transactiondetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Transactiondetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transactiondetails'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
