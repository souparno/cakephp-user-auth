<?php

echo $this->element('admin/header'); ?>
<?php echo $this->element("admin/leftnav"); ?> 

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h2><?php echo __('Subcategories'); ?></h2>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('title'); ?></th>
                                <th><?php echo $this->Paginator->sort('rank'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
	<?php foreach ($subcategories as $subcategory): ?>
                            <tr>
                                <td><?php echo h($subcategory['Subcategory']['id']); ?>&nbsp;</td>
                                <td>
			<?php echo $this->Html->link($subcategory['Category']['title'], array('controller' => 'categories', 'action' => 'view', $subcategory['Category']['id'])); ?>
                                </td>
                                <td><?php echo h($subcategory['Subcategory']['title']); ?>&nbsp;</td>
                                <td><?php echo h($subcategory['Subcategory']['rank']); ?>&nbsp;</td>
                                <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subcategory['Subcategory']['id']),array('class'=>'btn btn-success btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subcategory['Subcategory']['id']),array('class'=>'btn btn-primary btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subcategory['Subcategory']['id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $subcategory['Subcategory']['id'])); ?>
                                </td>
                            </tr>
<?php endforeach; ?>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
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
    </section>
</section>
