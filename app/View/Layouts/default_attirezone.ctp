<!DOCTYPE html>
<html>
<head>

	<title>

	</title>
	<?php

                echo $this->Html->css('cake.generic');
		echo $this->Html->css('attirezone/style');
                echo $this->Html->css('attirezone/form');
                echo $this->Html->css('attirezone/css/style');
                echo $this->Html->css('attirezone/megamenu');
                echo $this->Html->css('attirezone/fwslider');
                
                
                
                echo $this->Html->script('attirezone/jquery1.min');
                echo $this->Html->script('attirezone/megamenu');
                echo $this->Html->script('attirezone/jquery-ui.min');
                echo $this->Html->script('attirezone/css3-mediaqueries');
                echo $this->Html->script('attirezone/fwslider');
                echo $this->Html->script('attirezone/js/modernizr.custom.56621');
                echo $this->Html->script('attirezone/jquery.easydropdown');
                echo $this->Html->script('attirezone/js/jquery.catslider');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
	?>


<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>

<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
   
</head>
<body>


    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

    
    
    
    
    
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
                
                
                <?php echo $this->element('sql_dump'); ?>
                
</body>
