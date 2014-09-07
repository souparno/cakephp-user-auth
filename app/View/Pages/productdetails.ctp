<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="mens">    
    <div class="main">
        <div class="wrap">
            <div class="cont span_2_of_3">
                <div class="grid images_3_of_2">
                    <div class="zoom-section">    	  
                        <div class="zoom-small-image">
                            <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                                <a style="position: relative; display: block;" href="/img/images/<?php echo $menu[0]['menus']['title']; ?>/pic/<?php echo $product[0]['Product']['image1'] ?>" class="cloud-zoom" id="zoom1" rel="adjustX:10, adjustY:-4">
                                    <img style="display: block;height:500px;width:auto;" src="/img/images/<?php echo $menu[0]['menus']['title']; ?>/pic/<?php echo $product[0]['Product']['image1'] ?>" alt="">
                                </a>
                                <div class="mousetrap" style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 400px; height: 500px; left: 0px; top: 0px; cursor: move;">

                                </div>
                                <div class="cloud-zoom-loading" style="width: 133.333px; position: absolute; top: 75%; left: 133.333px; text-align: center; opacity: 0.5;">Loading...</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc1 span_3_of_2">
                    <h3 class="m_3"><?php echo $product[0]['Subcategory']['title'] ?></h3>
                    <p class="m_5">Rs.<?php echo $product[0]['Product']['inrprice']  ?> / $ <?php echo $product[0]['Product']['usdprice'] ?></p>
                    <div class="btn_form">
                        <form method="POST">
                            <input name="Buy" type="submit" value="Buy" title="">
                        </form>
                    </div>
                    <span class="m_link"><a href="#">save to wishlist</a> </span>
                    <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
                </div>
                <div class="clear"></div>

                <div class="toogle">
                    <h3 class="m_3">Product Details</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>
                <div class="toogle">
                    <h3 class="m_3">More Information</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>
            </div>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?> 