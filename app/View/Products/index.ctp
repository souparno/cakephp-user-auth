<div class="products index">
    <h2><?php echo __('Products'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('subcategory_id'); ?></th>
                <th><?php echo $this->Paginator->sort('code'); ?></th>
                <th><?php echo $this->Paginator->sort('inrprice'); ?></th>
                <th><?php echo $this->Paginator->sort('usdprice'); ?></th>
                <th><?php echo $this->Paginator->sort('features'); ?></th>
                <th><?php echo $this->Paginator->sort('description'); ?></th>
                <th><?php echo $this->Paginator->sort('image1'); ?></th>
                <th><?php echo $this->Paginator->sort('image1_small'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
                <td>
			<?php echo $this->Html->link($product['Subcategory']['title'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
                </td>
                <td><?php echo h($product['Product']['code']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['inrprice']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['usdprice']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['features']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
                <td><?php echo $this->Html->image("images/".h($product['Product']['image1']), array('height'=>'auto','width'=>'200px')); ?>  &nbsp;</td>
                <td><?php echo h($product['Product']['image1_small']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
                <td><?php echo h($product['Product']['modified']); ?>&nbsp;</td>
                <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
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
<?php echo $this->element("sidenav"); ?>
</div>
