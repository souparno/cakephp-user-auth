<h3><?php echo __('Actions'); ?></h3>
<ul>
    <li>ROLES</li>
    <li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
    <li>USERS</li>
    <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users','action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users','action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
    <li>MENUS</li>
    <li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
    <li>CATEGORIES</li>
    <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
    <li>SUB-CATEGORIES</li>
    <li><?php echo $this->Html->link(__('List sub-category'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New sub-category'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>
    <li>PRODUCTS</li>
    <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
</ul>
