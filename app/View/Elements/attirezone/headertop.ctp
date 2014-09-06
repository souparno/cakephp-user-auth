<!--Top Header Started-->
<div class="header-top">
    <div class="wrap"> 
        <ul class="f-list1">
            <li>
               <?php echo $this->Html->image('images/2.png'); ?>
                <span class="f-text1">Free &nbsp;Shipping&nbsp; Nationwide</span>
                <div class="clear"></div>			
            </li>
        </ul>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="">Account</a></li> |
                <li><a href="checkout.html">Wishlist</a></li> |
                <li><a href="checkout.html">Checkout</a></li> |
                <?php 
                 if($this->Session->check('Auth.User')):
                     ?>
                <li><a href="/users/logout">Log Out</a></li> |
                <?php
                 else:
                     ?>
                <li><a href="/users/login">Log in</a></li> |
                <?php
                 endif;                     
                ?>
                
                <li><a href="/users/add">Sign Up</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--Top Header End-->

