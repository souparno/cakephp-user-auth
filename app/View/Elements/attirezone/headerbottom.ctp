<!--Bottom Header Started-->
<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="index.html">
                 <?php echo $this->Html->image('images/logo.png'); ?>
                </a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="index.html">Home</a></li>
                     <?php 
                      foreach ($menus as $menu){ ?>
                    <li>
                        <?php 
                        echo $this->Html->link($menu['Menu']['title'],array('controller' => 'products','action' => 'index', 'menu-'.$menu['Menu']['id']), array('class' => 'color4'));
                        
                         $flag=0;
                         
                         foreach ($categories as $category){
                                     if($category['Category']['menu_id'] == $menu["Menu"]["id"]){
                                          $flag=1;
                                          break;
                                     }
                         }
        
                          if($flag){

                        ?>
                        
                        
                        
                        <div class="megapanel">
                            <div class="row">
                                
                                <div class="col1">
                                    <?php 
                                     foreach ($categories as $category): 
                                     if($category['Category']['menu_id'] == $menu["Menu"]["id"]):
                                    ?> 
                                    <div class="h_nav">
                                        <h4>
                                            <?php echo $this->Html->link($category['Category']['title'],array('controller' => 'products','action' => 'index', 'category-'.$category['Category']['id']), array('class' => 'color4')); ?>
                                        </h4>
                                        <ul>
                                            <?php foreach($subcategories as $subcategory) {
                                                if($subcategory['Subcategory']['category_id'] == $category["Category"]["id"]){
                                                ?>
                                            <li><?php echo $this->Html->link($subcategory['Subcategory']['title'],array('controller' => 'products','action' => 'index', 'Subcategory-'.$subcategory['Subcategory']['id']), array('class' => 'color4')); ?></li>
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
                      <?php } ?>
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
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>