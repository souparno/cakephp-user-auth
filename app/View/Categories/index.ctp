<?php

echo $this->element('admin/header'); ?>
<?php echo $this->element("admin/leftnav"); ?> 

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h2><?php echo __('Categories'); ?></h2>
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id']),array('class'=>'btn btn-success btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id']),array('class'=>'btn btn-primary btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
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
