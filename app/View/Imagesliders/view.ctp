<div class="imagesliders view">
<h2><?php echo __('Imageslider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imageslider['Imageslider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Title'); ?></dt>
		<dd>
			<?php echo h($imageslider['Imageslider']['image_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imageurl'); ?></dt>
		<dd>
			<?php echo h($imageslider['Imageslider']['imageurl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Link'); ?></dt>
		<dd>
			<?php echo h($imageslider['Imageslider']['image_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OrderId'); ?></dt>
		<dd>
			<?php echo h($imageslider['Imageslider']['orderId']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imageslider'), array('action' => 'edit', $imageslider['Imageslider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imageslider'), array('action' => 'delete', $imageslider['Imageslider']['id']), array(), __('Are you sure you want to delete # %s?', $imageslider['Imageslider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagesliders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imageslider'), array('action' => 'add')); ?> </li>
	</ul>
</div>
