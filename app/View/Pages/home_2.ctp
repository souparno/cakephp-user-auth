<?php

echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?> 
<?php echo $this->element("attirezone/slider"); ?> 
<div class="main">
    <div class="wrap">
        <div class="section group">
            <div class="cont span_2_of_3">
                <h2 class="head">New Attractions</h2>
            </div>
        </div>
    </div>
    <div class="container">	
        <div class="main1">
            <div class="clearfix"> </div>
            <div id="mi-slider" class="mi-slider">

                
                
                
                <?php foreach($newproducts as $newproduct){    ?>

                <ul>
                    
                    
                    
                
                
                <!--<ul>-->
                    
                    <?php foreach($newproduct as $product){ ?>
                
                <li>
                        <div class="col_1_of_5 span_1_of_5">
                            <a href="productdetails.html">
                                <div class="inner_content_new clearfix">
                                    <div class="product_image">
                                        <img src="/img/images/BNR - 000002.jpg" alt=""/>
                                    </div>
                                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Benaras silk</p>
                                            <p class="title" style="float:right; margin-right:5px;">BNR-000002</p>
                                            <div class="price2">
                                                <span class="actual">Rs.8500 / $138.17</span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>				
                                </div>
                            </a>
                        </div>
                    </li>
                
                
                    <!--<li>
                        <div class="col_1_of_5 span_1_of_5">
                            <a href="/pages/productdetails/<?php echo $product['Product']['id'] ?>">
                                <div class="inner_content_new clearfix">
                                    <div class="product_image">
                                        <img src="/img/images/<?php echo $product['Product']['image1_small'] ?>" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title"><?php echo $product['Subcategory']['title'] ?></p>
                                            <p class="title" style="float:right; margin-right:5px;"><?php echo $product['Product']['code']; ?></p>
                                            <div class="price2">
                                                <span class="actual">Rs.<?php echo $product['Product']['inrprice']  ?> / $ <?php echo $product['Product']['usdprice'] ?></span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>				
                                </div>
                            </a>
                        </div>
                    </li> -->
                    
                    <?php } ?>
                    
                </ul>               

                <?php }  ?>

                <nav>
                    <?php foreach($newproducts as $menuname=>$newproduct){    ?>
                     <a href="#"><?php echo $menuname ?></a>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="wrap">

        <div class="section group">

            <div class="cont span_2_of_3">
                <h2 class="head">Featured Products</h2>
                <!--Boxes Start-->
                <?php $start=0;   while(TRUE){ ?>
                <div class="top-box">
                     <?php  for($i=$start;$i<=($start+2);$i++){   if($i>=count($featuredproducts)) break; ?>
                    <div class="col_1_of_3 span_1_of_3"> 
                        <a href="/pages/productdetails/<?php echo $featuredproducts[$i]['Product']['id']  ?>">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="<?php echo '/img/images/'.$featuredproducts[$i]['Product']['image1_small']  ?>">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title"><?php echo $featuredproducts[$i]['Subcategory']['title']; ?></p>
                                        <p style="float:right; margin-right:5px;" class="title"><?php echo $featuredproducts[$i]['Product']['code'] ?></p>
                                    </div>
                                    <div class="price1">
                                        <span class="actual">Rs.<?php echo $featuredproducts[$i]['Product']['inrprice']  ?> / $ <?php echo $featuredproducts[$i]['Product']['usdprice'] ?></span>
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
                <?php $start=$start+3;   if($start>=count($featuredproducts))    break; } ?>
                <!--Boxes End-->	 			    
            </div>
            <!--right side bar-->
            <div class="rsidebar span_1_of_left">
                <div class="top-border"> </div>
                <div class="border">
                    <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
                    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="js/jquery.nivo.slider.js"></script>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $('#slider').nivoSlider();
                        });
                    </script>
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="/img/images/BNR - 000001.jpg"  alt="" />
                            <img src="/img/images/BNR - 000002.jpg"  alt="" />
                            <img src="/img/images/BNR - 000003.JPG"  alt="" />
                        </div>
                    </div>
                    <div class="btn"><a href="productdetails.html">Check it Out</a></div>
                </div>
                <div class="top-border"> </div>
                <div class="sidebar-bottom">
                    <h2 class="m_1">Newsletters<br> Signup</h2>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
                    <div class="subscribe">
                        <form>
                            <input name="userName" type="text" class="textbox">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<script>
    $(function() {

        $('#mi-slider').catslider();

    });
</script> 
<?php echo $this->element("attirezone/footer"); ?>
