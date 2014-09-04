<!DOCTYPE html>
<html>
    <head>
        <?php

		echo $this->Html->css('admin/bootstrap');
                echo $this->Html->css('admin/main');
                echo $this->Html->css('admin/Font-Awesome/css/font-awesome');

               
	?>
    </head>
    <body class="padTop53 ">

        
        
        
        <?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
        
        

        <?php
            echo $this->Html->script('admin/jquery-2.0.3.min');
            echo $this->Html->script('admin/attirezone/bootstrap.min');
            echo $this->Html->script('admin/modernizr-2.6.2-respond-1.1.0.min');
        ?>


    </body>
</html>

