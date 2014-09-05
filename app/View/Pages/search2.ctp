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
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title"><?php echo $products[$i]['Subcategory']['title']; ?></p>
                                        <p style="float:right; margin-right:5px;" class="title"><?php echo $products[$i]['Product']['code']  ?></p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual"><?php echo $products[$i]['Product']['inrprice'] ?></span>
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
            </div>

            <div class="rsidebar span_1_of_left">
                <h5 class="m_1">Categories</h5>
                <div class="metro">
                    <span class="old">
                        <select data-settings="{&quot;wrapperClass&quot;:&quot;metro&quot;}" tabindex="8" class="" id="EasyDropDownF4C437">
                            <option value="1">Silk</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                    </span>
                    <span class="selected">Sub Category1</span>
                    <span class="carat">
                        
                    </span>
                    <div style="height: 0px;">
                        <ul>
                            <li class="">Silk</li>
                            <li class="active">Sub Category1</li>
                            <li class="">Sub Category2</li>
                            <li class="">Sub Category3</li>
                        </ul>
                    </div>
                </div>
                <div class="metro">
                    <span class="old">
                        <select data-settings="{&quot;wrapperClass&quot;:&quot;metro&quot;}" tabindex="8" class="" id="EasyDropDownDB377C">
                            <option value="1">Cotton</option>
                            <option value="2">Sub Category1</option>
                            <option value="3">Sub Category2</option>
                            <option value="4">Sub Category3</option>
                        </select>
                    </span>
                    <span class="selected">Cotton</span>
                    <span class="carat"></span>
                    <div style="height: 0px;">
                        <ul>
                            <li class="active">Cotton</li>
                            <li>Sub Category1</li>
                            <li>Sub Category2</li>
                            <li>Sub Category3</li>
                        </ul>
                    </div>
                </div>
                <ul class="kids">
                    <li><a href="#">Accessoris</a></li>                    
                </ul>
                <section class="sky-form">
                    <h4>Price</h4>
                    <div class="row row1 scroll-pane jspScrollable" style="overflow: hidden; padding: 0px; width: 278px;" tabindex="0">
                        <div class="jspContainer" style="width: 278px; height: 200px;">
                            <div class="jspPane" style="padding: 20px; width: 231px; top: 0px;">
                                <div class="col col-4">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="" name="checkbox"><i></i>Rs 1000 - Rs 2000
                                    </label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 2000 - Rs 3000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 3000 - Rs 4000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 4000 - Rs 5000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 5000 - Rs 10000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 10000 - Rs 15000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 15000 - Rs 20000
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i></i>Rs 20000 - Rs 30000
                                    </label>
                                </div>
                            </div>
                            <div class="jspVerticalBar">
                                <div class="jspCap jspCapTop"></div>
                                <div class="jspTrack" style="height: 200px;">
                                    <div class="jspDrag" style="height: 143px;">
                                        <div class="jspDragTop"></div>
                                        <div class="jspDragBottom"></div>                                            
                                    </div>                                        
                                </div>
                                <div class="jspCap jspCapBottom">                                    
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
<div class="clear"></div>
<?php echo $this->element("attirezone/footer"); ?> 

