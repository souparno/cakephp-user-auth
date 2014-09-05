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
                
                
                <!--Breadcrumb End-->
                <div class="top-box">
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="productdetails.html">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="images/BNR - 000009.jpg">
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Bangladesh sada kalo</p>
                                        <p style="float:right; margin-right:5px;" class="title">BNR-000009</p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.9950 / $162.48</span>
                                        <div class="cart-right"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>				
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="productdetails.html">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="images/BNR - 000010.jpg">
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Bangladesh sada kalo</p>
                                        <p style="float:right; margin-right:5px;" class="title">BNR-000010</p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.2350 / $38.37</span>
                                        <div class="cart-right"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>				
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="productdetails.html">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="images/BNR - 000012.jpg">
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Bangladesh sada kalo</p>
                                        <p style="float:right; margin-right:5px;" class="title">BNR-000012</p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.4550 / $74.3</span>
                                        <div class="cart-right"> </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>				
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <h4>Price</h4>
                    <div class="row row1 scroll-pane jspScrollable" style="overflow: hidden; padding: 0px; width: 278px;" tabindex="0">


                        <div class="jspContainer" style="width: 278px; height: 200px;"><div class="jspPane" style="padding: 20px; width: 231px; top: 0px;"><div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" checked="" name="checkbox"><i></i>Rs 1000 - Rs 2000</label>
                                </div><div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 2000 - Rs 3000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 3000 - Rs 4000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4000 - Rs 5000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5000 - Rs 10000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 10000 - Rs 15000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 15000 - Rs 20000</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 20000 - Rs 30000</label>
                                </div></div><div class="jspVerticalBar"><div class="jspCap jspCapTop"></div><div class="jspTrack" style="height: 200px;"><div class="jspDrag" style="height: 143px;"><div class="jspDragTop"></div><div class="jspDragBottom"></div></div></div><div class="jspCap jspCapBottom"></div></div></div></div>
                </section>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?> 