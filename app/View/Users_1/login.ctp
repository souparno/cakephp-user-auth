<?php echo $this->element('attirezone/headertop'); ?>
<?php echo $this->element("attirezone/headerbottom"); ?>
<div class="login">
    <div class="wrap">
        <div class="col_1_of_login span_1_of_login">
            <h4 class="title">New Customers</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
            <div class="button1">
                <a href="register.html"><input type="submit" value="Create an Account" name="Submit"></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col_1_of_login span_1_of_login">
            <div class="login-title">
                <h4 class="title">Registered Customers</h4>
                <div class="loginbox" id="loginbox">
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->Form->create('User'); ?>
                        <fieldset class="input">
                            <p id="login-form-username">
                                <?php echo $this->Form->input('username',array('class'=>'inputbox','size'=>18 , 'style'=>'height:25px; padding:0px;')); ?>
                            </p>
                            <p id="login-form-password">
                                <?php echo $this->Form->input('password',array('class'=>'inputbox','size'=>18)); ?>
                            </p>
                        </fieldset>
                    <br/><br/>
                    <?php echo $this->Form->end(__('Login')); ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php echo $this->element("attirezone/footer"); ?>        
        