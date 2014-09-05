<?php

echo $this->element('admin/header'); ?>
<?php echo $this->element("admin/leftnav"); ?> 

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h2><?php echo __('Menus'); ?></h2>



        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('title'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
	<?php foreach ($menus as $menu): ?>
                            <tr>
                                <td><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
                                <td><?php echo h($menu['Menu']['title']); ?>&nbsp;</td>
                                <td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $menu['Menu']['id']),array('class'=>'btn btn-success btn-xs')); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $menu['Menu']['id']),array('class'=>'btn btn-primary btn-xs')); ?>
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $menu['Menu']['id']), array('class'=>'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?>
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
	?>	
                    </p>
                    <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
                    </div>

    </section>
</section>




