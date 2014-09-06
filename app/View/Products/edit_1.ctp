<?php echo $this->element('admin/header'); ?>
<?php echo $this->element("admin/leftnav"); ?> 

<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subcategory_id');
		echo $this->Form->input('code');
		echo $this->Form->input('inrprice');
		echo $this->Form->input('usdprice');
		echo $this->Form->input('features');
		echo $this->Form->input('description');
		echo $this->Form->input('image1');
		echo $this->Form->input('image1_small');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<?php echo $this->element("sidenav"); ?>
</div>
