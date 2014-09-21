<div class="login">
    <div class="wrap">
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
      
        