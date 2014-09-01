<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcategory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Subcategory']['title'], array('controller' => 'subcategories', 'action' => 'view', $product['Subcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($product['Product']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inrprice'); ?></dt>
		<dd>
			<?php echo h($product['Product']['inrprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usdprice'); ?></dt>
		<dd>
			<?php echo h($product['Product']['usdprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features'); ?></dt>
		<dd>
			<?php echo h($product['Product']['features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1 Small'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image1_small']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
<?php echo $this->element("sidenav"); ?>l>
</div>
