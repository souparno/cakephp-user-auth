<div class="categories index">
	<h2><?php echo __('Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['title']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['rank']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($category['Menu']['title'], array('controller' => 'menus', 'action' => 'view', $category['Menu']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
