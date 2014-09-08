<?php

echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<form method="POST">
    <div class="register_account">
        <div class="wrap">
            <div class="acc-container">
                <h1 class="selected">Checkout Process</h1>
                <div class="clearout"></div>


                <div class="acc-btn"><h1 class="">STEP 1: ACCOUNT &amp; SHIPPING DETAILS</h1></div>
                <div class="acc-content open">
                    <div class="acc-content-inner">

                        <label> Name:</label>
                        <input type="text" name="data[User][username]" value="" class="large-field"><br>

                        <label>Email:</label>
                        <input type="text" name="data[User][email]" value="" class="large-field"><br>

                        <label> Phone:</label>
                        <input type="text" name="data[User][phonenumber]"value="" class="large-field"><br>

                        <label> Address :</label>
                        <input type="text" name="data[User][address]" value="" class="large-field"><br>


                        <label> City:</label>
                        <input type="text" name="data[User][city]" value="" class="large-field"><br>


                        <label> Country:</label>
                        <select required="required" id="UserCountryId" name="data[User][country_id]">
                      <?php foreach ($countries as $key => $value) {?>
                            <option value='<?php echo $key ?>'><?php echo $value; ?></option>
                      <?php } ?>
                        </select>

                        <br>
                        <input type="hidden" value="<?php echo $roles[0]['Role']['id'] ?>"name="data[User][role_id]"/>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="acc-btn"><h1 class="">STEP 2: CONFIRM ORDER</h1></div>
                <div class="acc-content open" >
                    <div class="acc-content-inner">
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
                        <div class="clear"></div>
                    </div>
                </div><!--end-->
                <div class="acc-btn"><h1 class="selected">STEP 3: PAYMENT METHOD</h1></div>
                <div class="acc-content open">
                    <div class="acc-content-inner">

                        <!--<label class="radio">
                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                            Credit Card
                        </label>
                        <label class="radio">
                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                            Debit Card
                        </label>
                        <label class="radio">
                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                            Net Banking
                        </label> -->
                        <label class="radio">
                            <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"checked="TRUE">
                            Cash on Delivery
                        </label>
                        <button type="submit" style="float:right;">Continue</button>

                        <div class="clearout"></div>
                        <img width="200" src="/img/images/Credit-Card.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>    
<?php echo $this->element("attirezone/footer"); ?>