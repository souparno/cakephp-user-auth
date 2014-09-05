<div class="imagesliders index">
	<h2><?php echo __('Imagesliders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_title'); ?></th>
			<th><?php echo $this->Paginator->sort('imageurl'); ?></th>
			<th><?php echo $this->Paginator->sort('image_link'); ?></th>
			<th><?php echo $this->Paginator->sort('orderId'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imagesliders as $imageslider): ?>
	<tr>
		<td><?php echo h($imageslider['Imageslider']['id']); ?>&nbsp;</td>
		<td><?php echo h($imageslider['Imageslider']['image_title']); ?>&nbsp;</td>
		<td><?php echo h($imageslider['Imageslider']['imageurl']); ?>&nbsp;</td>
		<td><?php echo h($imageslider['Imageslider']['image_link']); ?>&nbsp;</td>
		<td><?php echo h($imageslider['Imageslider']['orderId']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imageslider['Imageslider']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imageslider['Imageslider']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imageslider['Imageslider']['id']), array(), __('Are you sure you want to delete # %s?', $imageslider['Imageslider']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Imageslider'), array('action' => 'add')); ?></li>
	</ul>
</div>
