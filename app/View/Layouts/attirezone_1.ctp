<!DOCTYPE html>
<html>
    <head>

        <title>

        </title>

        <style type="text/css">
            /** Paging **/
            .paging {                
                color: #ccc;
                margin-top: 1em;
                clear:both;
            }
            .paging .current,
            .paging .disabled,
            .paging a {
                text-decoration: none;
                padding: 5px 8px;
                display: inline-block
            }
            .paging > span {
                display: inline-block;
                border: 1px solid #ccc;
                border-left: 0;
            }
            .paging > span:hover {
                background: #efefef;
            }
            .paging .prev {
                border-left: 1px solid #ccc;
                -moz-border-radius: 4px 0 0 4px;
                -webkit-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }
            .paging .next {
                -moz-border-radius: 0 4px 4px 0;
                -webkit-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }
            .paging .disabled {
                color: #ddd;
            }
            .paging .disabled:hover {
                background: transparent;
            }
            .paging .current {
                background: #efefef;
                color: #c73e14;
            }
        </style>


	<?php

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



    </head>
    <body>


    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('sql_dump'); ?>

    </body>
