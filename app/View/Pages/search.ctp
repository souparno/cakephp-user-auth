<?php

echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?> 
<div class="mens">    
    <div class="main">
        <div class="wrap">
            <div class="cont span_2_of_3">
                <h2 class="head">Silk Sarees</h2>
                <div class="mens-toolbar">
                    <p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
                    </p>
                    <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--Breadcrumb Ends-->


                <?php                 
                $start=0;                
                  while(TRUE){ ?>
                <div class="top-box">
                  <?php  for($i=$start;$i<=($start+2);$i++){
                      
                      if($i>=count($products)) break;
                      
                      ?>

                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="<?php echo '/img/images/'.$products[$i]['Product']['image1']  ?>">
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Benaras silk</p>
                                        <p style="float:right; margin-right:5px;" class="title">BNR-000001</p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.12500 / $204.11</span>
                                        <div class="cart-right"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>				
                            </div>
                        </a>
                    </div>

                          <?php
                        
                    }                    
                   $start=$start+3;
                   if($start>=count($products)){
                       break;
                   } ?>
                    <div class="clear"></div>
                </div>
               <?php } ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php echo $this->element("attirezone/footer"); ?> 

