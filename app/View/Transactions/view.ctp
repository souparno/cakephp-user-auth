<div class="transactions">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transactioin Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($transaction['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($transaction['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Companyname'); ?></dt>
		<dd>
			<?php echo h($transaction['User']['companyname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($transaction['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phonenumber'); ?></dt>
		<dd>
			<?php echo h($transaction['User']['phonenumber']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<br/>
<br/>
<br/>
<div class="related">
	<h3><?php echo __('Transaction Details'); ?></h3>
	<?php if (!empty($transaction['Transactiondetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
            <th></th>
		<th><?php echo __('Product'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Price'); ?></th>
	</tr>
	<?php foreach ($results as $result): ?>
		<tr>
                    <td><img src="/img/images/<?php echo $result['products']['image1_small'] ?>" style="width:50px;height: auto;"/></td>
			<td><?php echo $result['subcategories']['title']; ?></td>
			<td><?php echo $result['transactiondetails']['quantity']; ?></td>
			<td><?php echo $result['transactiondetails']['price']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
