      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>


            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout'),array('class'=>'logout')); ?> </li>
            	</ul>
            </div>
        </header>
      <!--header end-->