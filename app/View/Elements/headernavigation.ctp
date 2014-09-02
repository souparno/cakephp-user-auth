<!--Top Header Started-->
<div class="header-top">
    <div class="wrap"> 
        <ul class="f-list1">
            <li><img src="images/2.png"/><span class="f-text1">Free &nbsp;Shipping&nbsp; Nationwide</span>
                <div class="clear"></div>			
            </li>
        </ul>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="login.html">Account</a></li> |
                <li><a href="checkout.html">Wishlist</a></li> |
                <li><a href="checkout.html">Checkout</a></li> |
                <li><a href="login.html">Log In</a></li> |
                <li><a href="register.html">Sign Up</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--Top Header End-->

<!--Bottom Header Started-->
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt=""/></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="index.html">Home</a></li>
                     <?php 
                      foreach ($menus as $menu){ ?>
                    <li>
                        <?php echo $this->Html->link($menu['menu']['title'],array('controller' => 'products','action' => 'index', 'menu-'.$menu['menu']['id']), array('class' => 'color4')); ?>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <?php 
                                     foreach ($categories as $category): 
                                     if($category['category']['menu_id'] == $menu["menu"]["id"]):
                                    ?> 
                                    <div class="h_nav">
                                        <h4>
                                            <?php echo $this->Html->link($category['category']['title'],array('controller' => 'products','action' => 'index', 'category-'.$category['category']['id']), array('class' => 'color4')); ?>
                                        </h4>
                                        <ul>
                                            <?php foreach($subcategories as $subcategory) {
                                                if($subcategory['subcategory']['category_id'] == $category["category"]["id"]){
                                                ?>
                                            <li><?php echo $this->Html->link($subcategory['subcategory']['title'],array('controller' => 'products','action' => 'index', 'subcategory-'.$subcategory['subcategory']['id']), array('class' => 'color4')); ?></li>
                                            <?php
                                                }
                                            }?>
                                        </ul>
                                    </div>
                                    <?php
                                     endif;   
                                     endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </li>
                      <?php } ?>
                    <li><a class="color7" href="about.html">About</a></li>
                </ul>
            </div>
        </div>
        <!--Search Box-->
        <div class="header-bottom-right">
            <div class="search">	  
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Search';
                        }">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <!--Cart Section-->
            <div class="tag-list">
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                        <ul class="sub-icon1 list">
                            <li><h3>No Products</h3><a href=""></a></li>
                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                        </ul>
                    </li>
                </ul>
                <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--Bottom Header End-->
