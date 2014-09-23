<div class="products form">
<?php echo $this->Form->create('Product',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('code');
		echo $this->Form->input('inrprice');
		echo $this->Form->input('usdprice');
		echo $this->Form->input('features');
		echo $this->Form->input('description');
		echo $this->Form->input('image1',array('type'=>'file'));
		echo $this->Form->input('image1_small',array('type'=>'file'));
	        echo $this->Form->input('newattraction',array('type'=>'checkbox'));
		echo $this->Form->input('featured',array('type'=>'checkbox'));
		echo $this->Form->input('stock');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
