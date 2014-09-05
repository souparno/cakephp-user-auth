<div class="imagesliders form">
<?php echo $this->Form->create('Imageslider'); ?>
	<fieldset>
		<legend><?php echo __('Edit Imageslider'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('image_title');
		echo $this->Form->input('imageurl');
		echo $this->Form->input('image_link');
		echo $this->Form->input('orderId');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Imageslider.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Imageslider.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Imagesliders'), array('action' => 'index')); ?></li>
	</ul>
</div>
