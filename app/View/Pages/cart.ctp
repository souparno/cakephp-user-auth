<?php

echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="register_account">
    <div class="wrap">
        <!--This should be displayed when there is no product in cart.-->
        <!--<h4 class="title">Shopping cart is empty</h4>
        <p class="cart">You have no items in your shopping cart.</p>-->
        <div class="clearout"></div>
        <h1>Shopping Cart</h1>
        <div class="clearout"></div>

        <div class="shopping-cart">
            <table class="cart-table">
                <tbody><tr>
                        <td>Image</td>
                        <td>Product Id</td>
                        <td>Product Name</td>
                        <td>Quantity</td>
                        <td>Delivery</td>
                        <td>Price</td>
                        <td>Remove</td>
                    </tr>
                    
                        <?php $payable_inr=0;$payable_usd=0; foreach($products as $product){ ?>
                    <tr>
                        <td class="pro-img"><img width="50%" src="/img/images/<?php echo $product['Product']['image1_small'] ?>"></td>
                        <td class="pro-details"><?php echo $product['Product']['code']; ?></td>
                        <td class="pro-details"><?php echo $product['Subcategory']['title'] ?></td>
                        <td class="pro-details">1</td>
                        <td class="pro-delivery">FREE</td>
                        <td class="pro-details">Rs.<?php echo $product['Product']['inrprice']  ?> / $ <?php echo $product['Product']['usdprice'] ?></td>
                        <td class="pro-details"><a href=""><img src="/img/images/Trash-can-icon.png"></a></td>
                        </tr>
                        <?php $payable_inr+=$product['Product']['inrprice']; $payable_usd+=$product['Product']['usdprice']; } ?>
                    

                    <tr>
                        <td align="right" class="pro-delivery" colspan="5">Payable Amount:</td>
                        <td class="pro-delivery" colspan="2">Rs. <?php echo $payable_inr; ?> / $ <?php echo $payable_usd; ?></td>
                    </tr>
                </tbody></table>                        
            <div class="clearout"></div>
        </div>
        <div class="checkout-button">
            <div style="margin-left:2%;" class="button1">
                <a href="/pages/checkout"><input type="submit" value="Proceed to Checkout" name="Submit"></a>
            </div>
            <div class="button1">
                <a href="/"><input type="submit" value="Continue Shopping" name="Submit"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?> 