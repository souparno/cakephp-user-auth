<div class="imagesliders form">
<?php echo $this->Form->create('Imageslider'); ?>
	<fieldset>
		<legend><?php echo __('Add Imageslider'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('imageurl');
		echo $this->Form->input('link');
		echo $this->Form->input('orderId');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Imagesliders'), array('action' => 'index')); ?></li>
	</ul>
</div>
