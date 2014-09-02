<?php echo $this->element("headernavigation"); ?> 
<table>
<?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo h($product['product']['id']); ?>&nbsp;</td>

                <td><?php echo $this->Html->image("images/".h($product['product']['image1']), array('height'=>'auto','width'=>'200px')); ?>  &nbsp;</td>

            </tr>
<?php endforeach; ?>
</table>