<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Home image sliders</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'imagesliders', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'imagesliders', 'action' => 'add')); ?> </li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Roles</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>Users</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Menus</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-th"></i>
                    <span>SUB-CATEGORIES</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List sub-category'), array('controller' => 'subcategories', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New sub-category'), array('controller' => 'subcategories', 'action' => 'add')); ?> </li>li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
                </ul>
            </li>

           <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Transactions</span>
                </a>
                <ul class="sub">
                    <li><?php echo $this->Html->link(__('Show Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
                </ul>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->