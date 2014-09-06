<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="mens">    
    <div class="main">
        <div class="wrap">
            <!--Breadcrumb Start-->
            <ul class="breadcrumb breadcrumb__t"><a href="#" class="home">Cotton</a> / <a href="#">Tant</a> / Lorem ipsum dolor sit amet</ul>
            <div class="cont span_2_of_3">
                <h2 class="head">cotton sarees</h2>
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


                <!--Boxes Start-->
                <?php $start=0;   while(TRUE){ ?>
                <div class="top-box">
                     <?php  for($i=$start;$i<=($start+2);$i++){   if($i>=count($products)) break; ?>
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="productdetails.html">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="<?php echo '/img/images/'.$products[$i]['Product']['image1']  ?>">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title"><?php echo $products[$i]['Subcategory']['title']; ?></p>
                                        <p style="float:right; margin-right:5px;" class="title"><?php echo $products[$i]['Product']['code'] ?></p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.<?php echo $products[$i]['Product']['inrprice']  ?> / $ <?php echo $products[$i]['Product']['usdprice'] ?></span>
                                        <div class="cart-right"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>				
                            </div>
                        </a>
                    </div>
                    <?php }   ?>
                    <div class="clear"></div>
                </div>
                <?php $start=$start+3;   if($start>=count($products))    break; } ?>
                <!--Boxes End-->











            </div>
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <h4>Price</h4>
                    <div class="row" style="padding: 0px; width: 278px;" tabindex="0">


                        <div class="jspContainer" style="width: 278px; height: 400px;">
                            <div class="jspPane" style="padding: 20px; width: 231px; top: 0px;">
                                <div class="col col-4">
                                    <?php echo $this->Form->create('SearchByPrice',array('url' => array('controller' => 'pages', 'action' => 'search',$param))); ?>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="1000-2000"><i></i>Rs 1000 - Rs 2000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="2000-3000"><i></i>Rs 2000 - Rs 3000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="3000-4000"><i></i>Rs 3000 - Rs 4000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="4000-5000"><i></i>Rs 4000 - Rs 5000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="5000-10000"><i></i>Rs 5000 - Rs 10000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="10000-15000"><i></i>Rs 10000 - Rs 15000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="15000-20000"><i></i>Rs 15000 - Rs 20000</label>
                                    <label class="checkbox"><input type="checkbox" name="price[]" value="20000-30000"><i></i>Rs 20000 - Rs 30000</label>
                                    <?php echo $this->Form->end(__('Submit')); ?>
                                </div>
                            </div>                            
                        </div>                            
                    </div>
                </section>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?> 