<!DOCTYPE html>
<html>
    <head>


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

           
		echo $this->Html->css('admin/bootstrap');
                echo $this->Html->css('admin/font-awesome/css/font-awesome');
                echo $this->Html->css('admin/style');
                echo $this->Html->css('admin/style-responsive');

               
	?>
    </head>
    <body>

        <section id="container" >



        <?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>


        </section>  

        <?php
            echo $this->Html->script('admin/jquery');
            echo $this->Html->script('admin/bootstrap.min');
            echo $this->Html->script('admin/jquery.dcjqaccordion.2.7');
            echo $this->Html->script('admin/jquery.scrollTo.min');
            echo $this->Html->script('admin/jquery.nicescroll');
            echo $this->Html->script('admin/common-scripts');
            echo $this->Html->script('admin/jquery-ui-1.9.2.custom.min');
            echo $this->Html->script('admin/bootstrap-switch');
            echo $this->Html->script('admin/jquery.tagsinput');
            echo $this->Html->script('admin/form-component');           
        ?>



    </body>
</html>

